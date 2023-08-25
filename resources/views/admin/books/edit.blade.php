@extends('layouts.admin')

@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/admin">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="/admin/books"> الكتب </a>
                                </li>
                                <li class="breadcrumb-item active">تعديل الكتب
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
                                    <h4 class="card-title" id="basic-layout-form">  تعديل الكتب </h4>
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
                                        <form class="form" action="{{route('books.update',$book->id)}}" method="POST" enctype="multipart/form-data">
                                              @method('PUT')
                                            @csrf
                                                    <input type="hidden" name="id" value="{{$book->id}}">
                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات  الكتاب </h4>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم الكتاب </label>
                                                            <input type="text" value="{{$book->name}}" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم الكتاب"
                                                                   name="name">
                                                                   @error('name')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                            
                                                        
                                                    </div>

                                                   
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> نوع الكتاب </label>
                                                            <select name="type" class="select2 form-control">
                                                                    <optgroup label="من فضلك أختر نوع الكتاب ">
             <option value="ديني" @if($book->type=='ديني')selected @endif> ديني</option>
             <option value="علمي" @if($book->type=='علمي')selected @endif>علمي </option>
            <option value="رياضي" @if($book->type=='رياضي')selected @endif> رياضي</option>
             <option value="خيالي" @if($book->type=='خيالي')selected @endif> خيالي</option>
                                                                </optgroup>
                                                            </select>
                                                            @error('type')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">

                                                <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput2"> لغه الكتاب </label>
                                                            <select name="language" class="select2 form-control">
                                                                    <optgroup  label="من فضلك أختر لغه الكتاب ">
        <option value="عربي" @if($book->language=='عربي') selected @endif> عربي</option>
        <option value="انجلزي" @if($book->language=='انجلزي') selected @endif>انجلزي </option>
        <option value="ايطالي" @if($book->language=='ايطالي') selected @endif> ايطالي</option>
        <option value="فرنسي" @if($book->language=='فرنسي') selected @endif> فرنسي</option>
                                                                </optgroup>
                                                            </select>
                                                            @error('language')
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                </div>


                                                <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Upload Photo</span>
                                                                    </div>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"  accept=".png, .jpg , .jpeg" id="photo" name="photo">
                                                                        <label class="custom-file-label" for="photo">تعديل صوره الكتاب</label>  
                                                                    </div>
                                                                    @error('photo')
                                                                        <span class="text-danger">{{$message}}   </span>
                                                                    @enderror
                                                                    
                                                                </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="input-group mb-3">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">Upload Book</span>
                                                                    </div>
                                                                    <div class="custom-file">
                                                                        <input type="file" class="custom-file-input"   accept=".pdf ,.docx" id="file" name="file">
                                                                        <label class="custom-file-label" for="photo">تعديل الكتاب</label>  
                                                                    </div>
                                                                    @error('file')
                                                                        <span class="text-danger">{{$message}}   </span>
                                                                    @enderror
                                                                    
                                                                </div>
                                                        </div>
                                                      
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back()">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
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
        </div>
    </div>


        
    
    
  

@endsection