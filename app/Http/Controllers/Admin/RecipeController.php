<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Constracts\Eloquent\RecipeRepository;
use App\Constracts\Eloquent\LevelRepository;

use Auth;
use Storage;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $recipe;
    protected $level;

    public function __construct(
        RecipeRepository $recipe,
        LevelRepository $level
    )

    {
        $this->recipe = $recipe;
        $this->level = $level;
    }

    public function index()
    {
        $recipes = $this->recipe->paginate(config('manual.pagination.recipe'), ['level']);

        return view('admin.recipes.index', ['recipes'=> $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $levels = $this->level->all();
        
        return view('admin.recipes.create', [
            'levels' => $levels
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // upload file
        $mainImageName = "";
        $ImageStorageFolder = "recipe".$request->recipe_number;    
        if(!is_null($request->main_image))
        {

            $mainImageName = $ImageStorageFolder."/".time().$request->main_image->getClientOriginalName();

            Storage::disk('public_uploads')->put($mainImageName,file_get_contents($request->main_image -> getRealPath()));
        };
        $stepInsert = [];

        for($i = 1; $i <= $request->step_num; $i++)
        {
            $stepFileName = "step_files".$i;
            $stepName = "step".$i;
            $stepArrayImageName = "";
            $stepArray = $request->$stepName; // include content, time, note, name of each step
            $fileCount = 0;
            if (!empty($request->$stepFileName)){
                foreach ($request->$stepFileName as $file)
                {
                    $fileCount++;
    
                    if($fileCount <= 6)
                    {
                        $stepImageName = $ImageStorageFolder."/".$stepFileName."/".time().$file->getClientOriginalName();
                        Storage::disk('public_uploads')->put($stepImageName,file_get_contents($file -> getRealPath()));
                        
                        $stepArrayImageName = $stepArrayImageName.",".$stepImageName;
                    }
                    else
                    {
                        break;
                    }
                    
                }
                $stepArray['image'] = ltrim($stepArrayImageName, ',');
            }
            $stepArray['step_number'] = $i;
            array_push($stepInsert, $stepArray);
 
        }

        // end upload file

        $recipes = [
            "name"              => $request->name,
            "recipe_number"     => $request->recipe_number,
            'user_id'           => Auth::id(),
            "estimate_time"     => $request->estimate_time,
            "description"       => $request->description,
            'video_link'        => $request->video,
            'level_id'          => $request->level,
            'image'             => $mainImageName,
            "people_number"     => $request->people_number
        ];

        $ingredient = [
            'name'  => $request->ingredients
        ];

        $recipe = $this->recipe->create($recipes);
        $recipe->ingredient()->create($ingredient);
        $recipe->cooking_step()->createMany($stepInsert);

        $notification = array(
            'message' => 'Create recipe successfully!', 
            'alert-type' => 'success'
        );

        return redirect()->route('recipes.index')->with($notification);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd("xxx");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $recipe = $this->recipe->find($id);
        $levels = $this->level->all();

        $cookingSteps = $recipe->cooking_step;
        $levelRecipe = $recipe->level;
        $ingredients = explode(",", $recipe->ingredient->name);
        $numberOfStep = count($cookingSteps);

        return view("admin.recipes.update", [
            'recipe' => $recipe,
            'cookingSteps' => $cookingSteps,
            'levels' => $levels,
            'levelRecipe' => $levelRecipe,
            'ingredients' => $ingredients,
            'ingredientsSet' => $recipe->ingredient->name,
            'numberOfStep' => $numberOfStep
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ImageStorageFolder = "recipe".$request->recipe_number; 
        $mainImageName = $request->main_image_old;
            
        $recipeUpdateData = [];
        if(!is_null($request->main_image))
        {
            $mainImageName = $ImageStorageFolder."/".time().$request->main_image->getClientOriginalName();
            Storage::disk('public_uploads')->put($mainImageName,file_get_contents($request->main_image -> getRealPath()));
            Storage::disk('public_uploads')->delete($request->main_image_old);
        };
        $stepInsert = [];

        for($i = 1; $i <= $request->step_num; $i++)
        {
            $stepFileName = "step_files".$i;
            $allStepFileName = "step_files_hidden".$i;
            $stepName = "step".$i;
            $imageNum = "image_num".$i;
            $stepArray = $request->$stepName; // include content, time, note, name of each step

            if(!is_null($request->$imageNum))
            {
                $fileCount = $request->$imageNum;
            }
            else
            {
                $fileCount = 0;
            }
            $stepArrayImageName = $request->$allStepFileName;
            if (!empty($request->$stepFileName)){
                foreach ($request->$stepFileName as $file)
                {
                    $fileCount++;
    
                    if($fileCount <= 6 && !is_null($file))
                    {
                        $stepImageName = $ImageStorageFolder."/".$stepFileName."/".time().$file->getClientOriginalName();
                        Storage::disk('public_uploads')->put($stepImageName,file_get_contents($file -> getRealPath()));
                        $stepArrayImageName = $stepArrayImageName.",".$stepImageName;
                    }
                    else
                    {
                        break;
                    }
                }
            }
            $stepArray['image'] = $stepArrayImageName;

            if($stepArray["clear"] == "cleared")
            {
                Storage::disk('public_uploads')->deleteDirectory($ImageStorageFolder."/".$stepFileName);
                $this->recipe->find($id)->cooking_step()->where('step_number', $i)->update(["image" => ""]);
            }
            $stepArray['step_number'] = $i;
            array_push($stepInsert, $stepArray);
        }
        $recipes = [
            "name"              => $request->name,
            "recipe_number"     => $request->recipe_number,
            'user_id'           => Auth::id(),
            "estimate_time"     => $request->estimate_time,
            "description"       => $request->description,
            'video_link'        => $request->video,
            'level_id'          => $request->level,
            'image'             => $mainImageName,
            'status'            => $request->status,
            "people_number"     => $request->people_number
        ];

        $ingredient = [
            'name'  => $request->ingredients
        ];

        $this->recipe
             ->find($id)
             ->update($recipes);
        $this->recipe->find($id)->ingredient()->update($ingredient);
        $this->recipe->find($id)->cooking_step()->delete();   
        $this->recipe->find($id)->cooking_step()->createMany($stepInsert);    
        
        $notification = array(
            'message' => 'Update recipe successfully!', 
            'alert-type' => 'success'
        );

        return redirect()->route('recipes.index')->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $recipe = $this->recipe->find($id);

        Storage::disk('public_uploads')->deleteDirectory("recipe".$recipe->recipe_number);

        $this->recipe->destroy($id);

        $notification = array(
            'message' => 'Delete recipe successfully!', 
            'alert-type' => 'warning'
        );

        return redirect()->route("recipes.index")->with($notification);
    }
}

