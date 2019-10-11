@extends('adminlte::page')

@section('title', 'AdminLTE')

@section('content_header')
 
@stop

@section('content')
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Modification des liens de la barre de navigation</h3>
  </div>
  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="/admin/header">
    @csrf
    @METHOD('PATCH')
    <div class="box-body">

      <div class="form-group">
        <label for="exampleInputEmail1">Page d'accueil : </label>
        <input type="text" class="form-control" value="{{$navbaritems->homePage}}" name="homePage">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Page de services : </label>
        <input type="text" class="form-control" value="{{$navbaritems->servicesPage}}" name="servicesPage">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Page de blog : </label>
        <input type="text" class="form-control" value="{{$navbaritems->blogPage}}" name="blogPage">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Page de contact : </label>
        <input type="text" class="form-control" value="{{$navbaritems->contactPage}}" name="contactPage">
      </div>

      {{-- <div class="form-group">
        <label for="exampleInputEmail1">Page des posts : </label>
        <input type="text" class="form-control" value="{{$navbaritems->homePage}}">
      </div> --}}
     
      
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier les liens</button>
    </div>
  </form>
</div>
    
@stop
