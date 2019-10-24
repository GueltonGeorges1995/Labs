




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')

@if ($errors->any())
<div  class="alert alert-danger alert-dismissible">
@foreach ($errors->all() as $error)
<li>
{{$error}}
</li>
@endforeach
</div>
@endif

<div class="row">
        <div class="col-xs-12">
          <div class="box">
        
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Delete</th>
                  <th>UPDATE</th>
                </tr>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->name}}</td>
                        <td><a href="/admin/category/{{$category->id}}/delete" class="btn btn-danger">Delete</a></td>
                        <td><a href="/admin/category/{{$category->id}}/update" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>



      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter une nouvelle categorie</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="POST" action="/admin/category" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Name : </label>
                        <input type="text" name="name" id="" class="form-control" required>
                    </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>




 
    
@stop
