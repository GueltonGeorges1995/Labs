




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@section('css')
    <link rel="stylesheet" href="/css/flaticon.css">
@endsection()
 
@stop

@section('content')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
        
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Nom</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td><a href="/admin/tag/{{$tag->id}}/delete" class="btn btn-danger">Delete</a></td>
                        <td><a href="/admin/tag/{{$tag->id}}/update" class="btn btn-success">Update</a></td>
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
              <h3 class="box-title">Ajouter un nouveau tag</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/admin/tag" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
                <div class="box-body">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Nom : </label>
                            <input type="text" class="form-control"  name="name">
                    </div>
               
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Ajouter</button>
                    </div>
            </form>
            
        </div>




 
    
@stop
