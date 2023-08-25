@extends('layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> الكتب المستعاره </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية</a>
                                </li>
                                <li class="breadcrumb-item active">الكتب المستعاره  
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"> جميع الكتب المستعاره</h4>
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
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th> الاسم</th>
                                                <th>النوع</th>
                                                <th>اللغه</th>
                                                <th>قراءه الكتاب</th>
                                                <th>استعاره الكتاب</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @if(isset($books) && $books->count()>0 )
                                            @foreach($books as $key=>$book)
                                            <tr>
                                                @if(isset($i))
                                                <td>{{++$i}}</td>
                                                @endif
                                                <td>{{$book->name}}</td>
                                                <td>{{$book->type}}</td>
                                                <td>{{$book->language}}</td>
                                               
                                                <td>
                                                @if($book->borrow =='تم استعارته')  
                                                <span style="color:green">{{$book->borrow}}</span>   
                                                @endif                                              
                                                @if($book->borrow =='لم يتم استعارته')                                                  
                                                <span style="color:red">{{$book->borrow}}</span>                                               
                                                @endif
                                                </td>
                                               
                                                

                                                <td> 
                                                @if($book->read =='تم قرائته') 
                                                <span style="color:green">{{$book->read}}</span>
                                                @endif
                                                @if($book->read =='لم يتم قرائته')   
                                                <span style="color:red">{{$book->read}}</span>
                                                @endif
                                                </td>
                                                
                                                   <td>
                                                <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('borrowed-books.edit',$book->id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">استعاده الكتاب</a>
                                                               

                                                            </div>

                                                </td>
                                            </tr>
                                            @endforeach
                                            @endif
                                            </tbody>
                                        </table>
                                        <div style="clear:both;float: right">
                                            {{ $books->links() }}
                                        </div>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    

    <!--   Live Demo     -->



    <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><span style="color:red;font-size:20px"> هل انت متاكد من حذف هذا الكتاب </span></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form  action="{{route('books.destroy','$language->id')}}" method="POST">
        @csrf
        @method('DELETE')
  <div class="form-group">
    <input type="hidden" class="form-control" id="delete_book_id" name="delete_id">
    <input type="text" class="form-control" id="delete_book_name" name="delete_name">
  </div>
 
  <button type="submit" class="btn btn-danger">حذف</button>
</form>
      </div>
      
    </div>
  </div>
</div>

@endsection


@section('script')
    <script>
        $(document).ready(function(){
            $(".delete_book").on('click',function(){
                let id=$(this).data('id');
                let name=$(this).data('name');
                $("#delete_book_id").val(id);
                $("#delete_book_name").val(name);
                
            });
        });
    </script>
@stop