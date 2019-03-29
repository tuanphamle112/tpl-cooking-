@extends('admin.layouts.master')

@section('title', 'Manage Users')

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
                <h3 class="box-title">User list</h3>
                <div class="insert-button">
                  <button type="button" class="btn btn-success btn-insert" data-toggle="modal" data-target="#createUser">Create new user</button>
                </div>
                <!-- Modal insert user -->
                <div class="modal fade" id="createUser" role="dialog">
                  <div class="modal-dialog">
                  
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-body">
                      @if ($errors->any())
                          <div class="filling-error error-exist">
                              <ul>
                                  @foreach ($errors->all() as $error)
                                      <li>{{ $error }}</li>
                                  @endforeach
                              </ul>
                          </div>
                      @endif
                      <form action="{{ route('users.store') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                          <label for="name">Name <span style="color: red;">*</span></label>
                          <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                          <label for="email">Email address <span style="color: red;">*</span></label>
                          <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                          <label for="phone">Phone</label>
                          <input type="text" class="form-control" name="phone">
                        </div>
                        <div class="form-group">
                          <label for="gender">Gender</label>
                          <select class="form-control" name="gender">
                            <option value='male'>Male</option>
                            <option value='female'>Female</option>
                            <option value='other'>Other</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="address">Address:</label>
                          <input type="text" class="form-control" name="address">
                        </div>
                        <div class="form-group">
                          <label for="phone">Permission</label>
                          <select class="form-control" name="permission">
                            <option value='1'>Admin</option>
                            <option value='2'>User</option>
                          </select>
                        </div>
                        <div class="form-group">
                          <label for="pwd">Password <span style="color: red;">*</span></label>
                          <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                          <label for="repwd">Confirm password <span style="color: red;">*</span></label>
                          <input type="password" class="form-control" name="password_confirmation">
                        </div>
                        <button type="submit" class="btn btn-success">Create User</button>
                      </form>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- End modal insert user -->
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
              <div class="box-body table-responsive no-padding">
                <table class="table table-hover">
                  <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Permission</th>
                    <th>Gender</th>
                  </tr>
                  
                  @foreach ($users as $user)
                    <tr>
                      <td>{{ $user->id }}</td>
                      <td>{{ $user->name }}</td>
                      <td>{{ $user->email }}</td>
                      <td>{{ $user->phone }}</td>
                      <td>{{ $user->address }}</td>z
                      @if($user->permission == config('manual.permission.admin'))
                      <td>Admin</td>
                      @else
                      <td>User</td>
                      @endif
                      <td>{{ $user->gender }}</td>
                      <td><a href="{{ route('users.edit',['id'=> $user->id]) }}">Edit</a></td>
                      <td>
                          <!-- <a href="#" class="delete-user">Delete</a> -->
                          @if ($user->id != Auth::user()->id)
                              <a href="javascript:void(0)" data-text="{{ __('Do you want to delete this user?') }}" class="delete">
                                  <i class="fa fa-trash-o"></i>
                              </a>
                          @endif
                          <form action="{{ route('users.destroy', $user->id) }}" method="post" style="display:none">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <div class="form-group">
                              <input type="submit" class="btn btn-danger" value="Delete user">
                            </div>
                          </form>
                      </td>
                    </tr>
                  @endforeach

                </table>
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
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
<!-- ./wrapper -->
@endsection
 

@section('script')

@parent
  <script src="{{ asset('js/admin/users/index.js') }}"></script>
@endsection