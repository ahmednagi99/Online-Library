@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12"  >
                            <ol class="breadcrumb" style="text-align:left">
                               
                                <li class="breadcrumb-item"><a href=""> Profile </a>
                                </li>
                                <li class="breadcrumb-item active"> edit Profile
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> edit profile </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('layouts.includes.alerts.success')
                                @include('layouts.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form" action="/admin/profile" method="post" >
                                              
                                            @csrf
                                            @method('patch')
                                           
                                            
                                            <div class="form-body">
                                                <h4 class=""><i class="fa-solid fa-user"></i> Profile Information</h4>
                                                    <br>
                                                <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            <input type="hidden" name="id" value="{{Auth::guard('admin')->id()}}">
                                                            <label for="projectinput1">Name</label>
                                                            <input type="text" value="{{Auth::guard('admin')->user()->name}}" id="name"
                                                                   class="form-control"
                                                                   
                                                                   name="name">
                                                                   @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                         
                                                        
                                                    </div>
                                                    </div>
                                                    <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> Email</label>
                                                            <input type="email" value="{{Auth::guard('admin')->user()->email}}" id="email"
                                                                   class="form-control"
                                                                   
                                                                   name="email">
                                                                   @error('email')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                           
                                                    </div>
                                                </div>
                                                                                       
                                            </div>
                                            <div class="row">
                                                    <div class="col-md-6 ">
                                                        <div class="form-group">
                                                            
                                                            <label for="projectinput1">Password</label>
                                                            <input type="password"  id="password"
                                                                   class="form-control"
                                                                   
                                                                   name="password">
                                                                   @error('password')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                         
                                                        
                                                    </div>
                                                    </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back()">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit"  class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>

            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                               
                                
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    <h4 class=""><i class="fa-solid fa-user"></i> Delete Account</h4>
                                                    <br>
                                      <a class="btn btn-danger"  data-toggle="modal" data-target="#exampleModal"  href="#" role="button">Delete Account</a>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>

            
        </div>
    </div>


   <!--    modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span style="color:red;font-size:20px">هل انت متاكد من حذف الحساب</span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       
        <form action="{{route('admin.profile.destroy')}}" method="post">
            @csrf
            @method('delete')
            

            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="hidden" name="id" value="{{Auth::guard('admin')->id()}}">
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                @error('password','deletion')
                    <span class="text-danger">{{$message}}</span> 
                  <script>
                    $(document).ready(function () {
                        $("#delete_account").on('click',function(){
                        
                       // $("#exampleModal").modal('show');
                        alert('jjjj');
                        });
                        
                    })
                    </script>
                @enderror
            </div>
            
            <button type="submit" id="delete_account" class="btn btn-danger">Delete</button>
        </form>
      </div>
      
    </div>
  </div>
</div>





@endsection

@section('script')
<!-- @error('password','deletion')
<script>
    $(document).ready(function () {
        $("#delete_account").on('click',function(){
           
           //$("#exampleModal").modal('show');
           alert('jjjj');
        });
        
    })
</script>
@enderror -->
@stop