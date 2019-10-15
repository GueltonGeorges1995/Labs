




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
                  <th>image</th>
                  <th>Nom</th>
                  <th>fonction</th>
                  <th>Responsable</th>
                  <th>Delete</th>
                  <th>Update</th>
                </tr>
                @foreach ($teams as $team)
                    <tr>
                        <td>{{$team->id}}</td>
                        <td>{{$team->imgPath}}</td>
                        <td>{{$team->name}}</td>
                        <td>{{$team->function}}</td>
                        <td>{{$team->boss}}</td>
                        <td><a href="/admin/team/{{$team->id}}/delete" class="btn btn-danger">Delete</a></td>
                        <td><a href="/admin/team/{{$team->id}}/update" class="btn btn-success">Update</a></td>
                    </tr>
                @endforeach
                
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>


      <form role="form" method="POST" action="/admin/leader">
        @csrf
        @METHOD('PATCH')
      <div class="box-body">
            <div class="">
                    <h4>Selectionner un nouveau chef</h4>
                      <select name="boss">
                          @foreach ($teams as $team)
                              <option value="{{$team->id}}">{{$team->name}}</option>
                          @endforeach
                      </select>
                </div>
        </div>
      <div class="">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
     


      <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Ajouter un nouveau membre de la team</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="POST" action="/admin/team" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">
                <div class="form-group">
                        <label for="exampleInputEmail1">Image : </label>
                        <input type="file" class="form-control"  name="imgPath">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom : </label>
                    <input type="text" class="form-control"  name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Function : </label>
                    <input type="text" class="form-control"  name="function">
                </div>
            

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
            
        </div>




 
    
@stop
