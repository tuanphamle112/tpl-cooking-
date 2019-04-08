
@extends('admin.layouts.master')

@section('title', 'Manage Users')

@section('custom_css')
  <link rel="stylesheet" href="{{ asset('css/admin/recipes/create-recipe.css') }}">
  <link rel="stylesheet" href="{{ asset('css/admin/recipes/update-recipe.css') }}">
@endsection
@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Page Header
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>1500</h3>

              <p>Người truy cập</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px"></sup></h3>

              <p>lượt like</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>44</h3>

              <p>Người đăng ký</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>65</h3>

              <p>Bác sĩ</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>

      <div class="row">
          <!-- content -->
          <div class="col-xs-12 col-sm-12">
            <div class="box">
              <div class="box-header">
                <h3 class="box-title">Edit a recipe</h3>
                <div class="box-tools">
                  <div class="input-group input-group-sm">
                    <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
  
                    <div class="input-group-btn">
                      <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.box-header -->
                <div class="box-body">
                    <form action="{{ route('recipes.update', $recipe->id) }}" enctype="multipart/form-data" class="wrap-create-form" method="post">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}
                        <div class="form-group wrap-main-image">
                        <div class="input-group">
                            <label class="mainFileContainer">
                                <i class="fa fa-camera"></i>
                                <span>Click to add a main picture</span>
                                <img id="img-upload" alt="" src="{{ asset('uploads/recipes/'.$recipe->image) }}">
                                <input type="file" id="imgInp" class="pro-image" name="main_image" class="form-control" >
                                <input type="hidden" name="main_image_old" value="{{ $recipe->image }}">
                            </label>
                        </div>
                        <div class="form-group recipe-name">
                            <label for="name">Recipe's name:</label>
                            <input type="text" class="form-control input-error" placeholder="Recipe's name" name="name" value="{{ $recipe->name }}">
                            <div class="filling-error"></div>
                        </div>
                        <input type="hidden"  class="recipe-number" name="recipe_number" value="{{ $recipe->recipe_number }}">
                        <div class="form-group recipe-description">
                            <label for="description">Short description:</label>
                            <textarea type="text" class="form-control input-error" name="description" placeholder="Your short description here..." rows="6">{{ $recipe->description }}</textarea>
                            <div class="filling-error"></div>
                        </div>
                        <div class="form-group" style="width: 30%">
                            <label for="video">Video(Youtube code/link):</label>
                            <input type="text" class="form-control"  placeholder="Youtube link here" name="video" value="{{ $recipe->video_link }}">
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label><br>
                            <select class="form-control" name="status">
                              @foreach(config("manual.recipe_status") as $key => $value)
                                <option value="{{ $value }}" @if($recipe->status == $value) selected @endif>{{ $key }}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group recipe-estimate-number">
                            <label for="gender">Level, estimate time and number of people:</label><br>
                            <select class="form-control" name="level" style="width:30%; display:inline">
                            @foreach($levels as $level)
                                <option value='{{ $level->id }}'
                                @if($level->id == $levelRecipe->id)
                                  selected
                                @endif
                                >{{ $level->name }}</option>
                            @endforeach
                            </select>

                            <input type="text" class="form-control" name="estimate_time" style="display:inline;width:10%" value="{{ $recipe->estimate_time }}">
                            <span>hour(h)</span>
                            <input type="text" class="form-control" name="people_number" style="display:inline;width:10%" value="{{  $recipe->people_number }}">
                            <span>people</span>
                        </div>
                        <div class="ingredient-area form-group">
                            <label for="phone">Ingredients:</label>
                            <div class="all-ingredient">
                              @foreach($ingredients as $ingredient)
                                <div class='ingredient-item'>
                                  <i class='fa fa-check-circle'></i>
                                  <b>{{ $ingredient }}</b>
                                  <i class='fa fa-times-circle close-ingredient' onclick='removeIngredientDiv(this)'></i>
                                </div>
                              @endforeach
                            </div>
                            <div class="ingredient-input">
                                <input type="text" class="form-control ingredient-field" placeholder="For example: 300gr xxx, 2 peace of shit">
                                <div class="filling-error">
                                  
                                  <!-- adding errors message -->
                                </div>
                                <span class="small-tips how-to-fill active">
                                    <i class="fa fa-question-circle"></i>
                                    How to fill?
                                </span>
                                <span class="small-tips understood">
                                    <i class="fa fa-check-circle"></i>
                                    I understood
                                </span>
                                <div class="filling-instruction">
                                    <div style="padding: 10px 0;" class="">
                                        <div>Gợi ý:</div>
                                        <div>
                                            <ul style="padding-left: 24px;">
                                                <li>Quy cách nhập: <span class="note-gray-highlight">định_lượng (khoảng trống)</span> <span class="note-gray-highlight">đơn_vị_tính(khoảng trống)</span> <span class="note-gray-highlight">tên_nguyên_liệu</span> <span class="note-gray-highlight">( ghi_chú )</span></li>
                                                <li>định_lượng: số lượng; đơn_vị_tính: gram, lít, cái...; tên_nguyên_liệu: tên nguyên liệu; ghi_chú: diễn giải nếu có </li>
                                                <li>
                                                    <span>Nhập 1 nguyên liệu trên cùng dòng</span>
                                                    <ul>
                                                        <li>Nhập nguyên liệu và bấm <b>enter</b></li>
                                                        <li>ví dụ: <span class="note-gray-highlight">100gr thịt gà (ghi chú)</span> hoặc <span class="note-gray-highlight">thịt gà 100gr (ghi chú)</span></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <span>Nhập nhiều nguyên liệu trên cùng dòng</span>
                                                    <ul>
                                                        <li>Nhập nguyên liệu ngăn cách nhau bằng dấu phẩy (,) hoặc chấm phẩy (;) và bấm <b>enter</b></li>
                                                        <li>ví dụ: <span class="note-gray-highlight">1/4 con gà; 3 trái ớt (đỏ); 1 lít nước</span></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            <input type="hidden" class="all-ingredients" name="ingredients" value="{{ $ingredientsSet }}">
                        </div>
                        <!-- Step -->
                        <div class="wrap-step-box">
                          <div class="step-box">
                            <a href="javascript:void(0)" data-no="stepCount" class="btn btn-danger btn-close btn-delete-step"><span class="fa fa-trash"></span></a>
                            <div class="step-count">stepCount</div>
                            <input type="hidden" name="step_number" value="stepCount">
                            <div class="step-direction">
                              <textarea rows="4" cols="40" name="stepContent" class="form-control  step-content-stepCount" placeholder="Nhập hướng dẫn cách làm cho bước 1"></textarea>
                              <div class="filling-error">
                                <span>Please fill recipe's step instruction</span><br>
                              </div>
                            </div>
                            <div class="step-acts">
                              <a href="javascript:void(0)" class="btn-show-opts">
                                  <span class="fa fa-plus"></span> <strong>Thông tin thêm</strong> <em>(thời gian bước thực hiện, tên bước, mẹo nhỏ,...)</em>
                              </a>
                              <div class="step-opts">
                                  <div class="step-opt">
                                      <span class="step-tip-ico fa fa-info-circle"></span> 
                                      <input type="text" name="stepName" placeholder="Tên bước thực hiện (nếu có)">
                                  </div>
                                  <div class="step-opt">
                                      <span class="step-tip-ico fa fa-clock-o"></span>
                                      <input style="width:100px; text-align:center" name="stepTime" type="text" placeholder="Thời gian"> phút
                                  </div>
                                  <div class="step-opt" style="clear:both; margin-top:6px;">
                                      <span class="step-tip" title="Mẹo thực hiện món ăn ngon hơn">
                                          <span class="step-tip-ico fa fa-lightbulb-o"></span>
                                      </span>
                                      <input type="text" placeholder="Mẹo nhỏ cho bước này" name="stepNote">
                                  </div>
                              </div>
                            </div>
                            <div class="wrap-upload-image">
                                <fieldset class="form-group">
                                    <label class="fileContainer">
                                        Add pictures
                                        <input type="file" data-type="new" onchange="readImageUpdate(this)" class="pro-image" name="stepFile" class="form-control" multiple>
                                        <input type="hidden" class="step-hidden-files" name="stepFileHidden" value="">
                                    </label>
                                    <div class="picture-overlay"></div>

                                    <div class="text-gray text-italic text-small" style="text-align:center">(Giới hạn <span class="text-highlight ng-binding">6</span> hình ảnh)</div>
                                    <div class="text-gray text-italic text-small" style="text-align:center">Giữ phím <span class="text-highlight ng-binding">Ctrl</span> để chọn nhiều ảnh</div>
                                </fieldset>
                                <div class="wrap-preview">
                                  <a href="javascript:void(0)" class="button-clear">
                                    <i class="fa fa-times"></i> Clear
                                  </a> 
                                  <input type="hidden" class="input-clear" name="{{ 'stepstepCount[clear]' }}" value="">
                                  <div class="preview-images-zone" data-type="new">
                                    <input type="hidden" class="image-num" name="image_numstepCount" value="0">
                                  </div>
                                </div>

                            </div>
                          </div>
                          @foreach($cookingSteps as $cookingStep)
                            <div class="step-box">
                              <a href="javascript:void(0)" data-no="{{ $cookingStep->step_number}}" class="btn btn-danger btn-close btn-delete-step"><span class="fa fa-trash"></span></a>
                              <div class="step-count">{{ $cookingStep->step_number}}</div>
                              <input type="hidden" name="step_number" value="{{ $cookingStep->step_number }}">
                              <div class="step-direction">
                                <textarea rows="4" cols="40" name="{{ 'step'.$cookingStep->step_number .'[content]' }}" class="form-control step-content-{{ $cookingStep->step_number }}" placeholder="Nhập hướng dẫn cách làm cho bước 1">{{ $cookingStep->content }}</textarea>
                                <div class="filling-error">
                                  <span>Please fill recipe's step instruction</span><br>
                                </div>
                              </div>
                              <div class="step-acts">
                                <a href="javascript:void(0)" class="btn-show-opts">
                                    <span class="fa fa-plus"></span><strong>Thông tin thêm</strong><em>(thời gian bước thực hiện, tên bước, mẹo nhỏ,...)</em>
                                </a>
                                <div class="step-opts">
                                    <div class="step-opt">
                                        <span class="step-tip-ico fa fa-info-circle"></span> 
                                        <input type="text" name="{{ 'step'.$cookingStep->step_number.'[name]' }}" placeholder="Tên bước thực hiện (nếu có)" value="{{ $cookingStep->name }}">
                                    </div>
                                    <div class="step-opt">
                                        <span class="step-tip-ico fa fa-clock-o"></span>
                                        <input style="width:100px; text-align:center" name="{{ 'step'.$cookingStep->step_number.'[time]'}}" type="text" placeholder="Thời gian" value=" {{ $cookingStep->time }} "> phút
                                    </div>
                                    <div class="step-opt" style="clear:both; margin-top:6px;">
                                        <span class="step-tip" title="Mẹo thực hiện món ăn ngon hơn">
                                            <span class="step-tip-ico fa fa-lightbulb-o"></span>
                                        </span>
                                        <input type="text" placeholder="Mẹo nhỏ cho bước này" name="{{ 'step'.$cookingStep->step_number.'[note]' }}" value="{{ $cookingStep->note }}">
                                    </div>
                                </div>
                              </div>
                              <div class="wrap-upload-image">
                                  <fieldset class="form-group">
                                      <label class="fileContainer">
                                          Add pictures
                                          <input type="file" onchange="readImageUpdate(this)" class="pro-image" name="{{ 'step_files'.$cookingStep->step_number.'[]' }}" class="form-control" multiple>
                                          <input type="hidden" class="step-hidden-files" name="{{ 'step_files_hidden'.$cookingStep->step_number }}" value="{{ $cookingStep->image }}">
                                      </label>
                                      <div class="picture-overlay"></div>
                                      <div class="text-gray text-italic text-small" style="text-align:center">(Giới hạn <span class="text-highlight">6</span> hình ảnh)</div>
                                      <div class="text-gray text-italic text-small" style="text-align:center">Giữ phím <span class="text-highlight">Ctrl</span> để chọn nhiều ảnh</div>
                                  </fieldset>
                                  
                                  <div class="wrap-preview">
                                    <a href="javascript:void(0)" class="button-clear">
                                      <i class="fa fa-times"></i> Clear
                                    </a>     
                                    <input type="hidden" class="input-clear" name="{{ 'step'.$cookingStep->step_number.'[clear]' }}" value="">                 
                                    <div class="preview-images-zone">
                                      <?php 
                                        if(!is_null($cookingStep->image))
                                        {
                                          $stepImages = explode(",", ltrim($cookingStep->image, ','));
                                        }
                                      ?>
                                      @if(!is_null($cookingStep->image))
                                        @foreach($stepImages as $stepImage)
                                          <div class="preview-image">
                                            <div class="image-zone"><img src="{{ asset('uploads/recipes/'.$stepImage) }}"></div>
                                          </div>
                                        @endforeach
                                      @endif
                                      <input type="hidden" class="image-num" name="{{ 'image_num'.$cookingStep->step_number }}" value="@if(!is_null($cookingStep->image)) {{ count($stepImages) }} @endif">

                                    </div>
                                  </div>

                              </div>
                            </div>
                          @endforeach
                        </div>
                        <input type="hidden" class="step-num" name="step_num" value="{{ $cookingStep->step_number}}">
                        <input type="hidden" class="step_num_not_decrease" name="step_num_not_decrease" value="{{ $numberOfStep }}">
                        <!-- Add step button -->
                        <a class="addmore-ingredients add-more-btn" href="javascript:void(0)">+ Add a step</a>
                        <div class="filling-error no-step">Please fill at least one step</div>
                        <!-- End add step button -->
                        <!-- End Step -->
                        <div class="form-group submit-button">
                          <input type="submit" class="btn btn-success form-control" value="Update Recipe">
                        </div>
                    </form>
                    

                </div>
              <!-- /.box-body -->
            </div>
            <!-- /.box -->
          </div>
          <!-- end content -->
      </div>

    </section>
    <!-- /.content -->
  </div>
  
@endsection
 

@section('script')

@parent
<script src="{{ asset('js/admin/recipes/create-edit-recipe.js') }}"></script>

@endsection