<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Constracts\Eloquent\RecipeRepository;

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

    public function __construct(RecipeRepository $recipe)
    {
        return $this->recipe = $recipe;
    }
    public function index()
    {
        $recipes = $this->recipe->all();

        // $level = $recipes->level()->get();
        return view('admin.recipes.index', ['recipes'=> $recipes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.recipes.create');
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
            $mainImageName = time().$request->main_image->getClientOriginalName();
            Storage::disk('public_uploads')->put($ImageStorageFolder."/".$mainImageName,file_get_contents($request->main_image -> getRealPath()));
        };
        $stepInsert = [];

        for($i = 1; $i <= $request->step_num; $i++)
        {
            $stepFileName = "step_files".$i;
            $stepName = "step".$i;
            $stepArrayImageName = "";
            $stepArray = $request->$stepName; // include content, time, note, name of each step
           
            foreach($request->$stepFileName as $file)
            {
                $stepImageName = time().$file->getClientOriginalName();
                Storage::disk('public_uploads')->put($ImageStorageFolder."/".$stepFileName."/".$stepImageName,file_get_contents($file -> getRealPath()));
                
                $stepArrayImageName = $stepArrayImageName.",".$stepImageName;
            }
            $stepArray['image'] = $stepArrayImageName;
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

        dd("success");
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
        //
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
        //
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

        return redirect()->route("recipes.index");
    }
}

