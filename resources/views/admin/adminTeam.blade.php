




@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
@section('css')
    <link rel="stylesheet" href="/css/flaticon.css">
@endsection()
 
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
                        <td>
                          @if ($countBoss>3)
                            <a href="/admin/team/{{$team->id}}/delete" class="btn btn-danger">Delete</a>
                          @else
                            <a href="/admin/team/{{$team->id}}/delete" class="btn btn-danger disabled" disabled>Delete</a>
                          @endif
                          
                        </td>
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

<div class="box-primary box"> 
      <form role="form" method="POST" action="/admin/leader" style="margin-bottom:30px;">
        @csrf
        @METHOD('PATCH')
      <div class="">
            <div class="" style="padding:30px;">
                    <h4>Selectionner un nouveau chef</h4>
                      <select name="boss">
                          @foreach ($teams as $team)
                              <option value="{{$team->id}}">{{$team->name}}</option>
                          @endforeach
                      </select>
                </div>
        </div>
      <div class="" style="padding:10px 30px;">
        <button type="submit" class="btn btn-primary">Ajouter</button>
      </div>
    </form>
  </div>


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
                        <input type="file" class="form-control"  name="imgPath" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nom : </label>
                    <input type="text" class="form-control"  name="name" required>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Function : </label>
                    <input type="text" class="form-control"  name="function" required>
                </div>
            

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
            
        </div>




 
    
@stop
