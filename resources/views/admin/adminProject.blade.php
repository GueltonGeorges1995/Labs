




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
                  <th>image</th>
                  <th>Titre</th>
                  <th>text</th>
                  <th>Delete</th>
                  <th>UPDATE</th>
                </tr>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td><img src="/{{$project->imgPath}}" alt="" width="100px"></td>
                        <td>{{$project->titre}}</td>
                        <td>{{$project->text}}</td>
                        <td><a href="/admin/project/{{$project->id}}/delete" class="btn btn-danger">Delete</a></td>
                        <td><a href="/admin/project/{{$project->id}}/update" class="btn btn-success">Update</a></td>
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
              <h3 class="box-title">Ajouter un nouveau Projet</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="POST" action="/admin/project" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image : </label>
                        <input type="file" name="imgPath" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre : </label>
                        <input type="text" name="titre" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Text : </label>
                        <textarea name="text" id="" class="form-control" required></textarea>
                    </div>
                   
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>




 
    
@stop
