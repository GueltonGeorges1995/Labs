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

  @if ($errors->any())
  <div class="alert alert-danger alert-dismissible">
    @foreach ($errors->all() as $error)
      <li>
        {{$error}}
      </li>
    @endforeach
  </div>
  @endif

  <form role="form" method="POST" action="/admin/navbar" enctype="multipart/form-data">
    @csrf
    @METHOD('PATCH')
    <div class="box-body">

      <div class="form-group">
        <label for="exampleInputEmail1">Page d'accueil : </label>
        <input type="text" class="form-control" value="{{$navbaritems->homePage}}" name="homePage" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Page de services : </label>
        <input type="text" class="form-control" value="{{$navbaritems->servicesPage}}" name="servicesPage" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Page de blog : </label>
        <input type="text" class="form-control" value="{{$navbaritems->blogPage}}" name="blogPage" required>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Page de contact : </label>
        <input type="text" class="form-control" value="{{$navbaritems->contactPage}}" name="contactPage" required>
      </div>

      <div class="form-group">
          <label for="exampleInputEmail1">Logo : </label>
          <input type="file" class="form-control" value="{{$navbaritems->logoPath}}" name="logoPath">
        </div>

     
      
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier les liens</button>
    </div>
  </form>
</div>
    
@stop
