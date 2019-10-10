@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')
<div class="row">
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
          <h3 class="box-title">Noms des liens de la barre de navigation</h3>

         
        </div>
        <!-- /.box-header -->
        <div class="box-body table-responsive no-padding">
          <table class="table table-hover">
            <tbody><tr>
              <th>ID</th>
              <th>Home Page</th>
              <th>Services Page</th>
              <th>Blog Page</th>
              <th>Blog Post Page</th>
              <th>Contact Page</th>
            </tr>
            <tr>
            <td>{{$navbaritems->id}}</td>
              <td>{{$navbaritems->homePage}}</td>
              <td>{{$navbaritems->servicesPage}}</td>
              <td>{{$navbaritems->blogPage}}</td>
              <td><span class="label label-success">{{$navbaritems->blogPostPage}}</span></td>
              <td>{{$navbaritems->contactPage}}</td>
            </tr>
          </tbody></table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
  </div>
    
@stop
