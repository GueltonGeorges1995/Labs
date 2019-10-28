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
<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Modification des images du carousel</h3>
  </div>
  
  <div class="row">
      <div class="col-xs-12">
        <div class="box">
       
          <!-- /.box-header -->
          <div class="box-body table-responsive no-padding">
            <table class="table table-hover">
              <tbody><tr>
                <th>ID</th>
                <th>chemin de l'image</th>
                <th>Supprimer</th>
              
              </tr>
              @foreach ($carouselitems as $carouselitem)
                  <tr>
                  <td>{{$carouselitem->id}}</td>
                  
                  <td><img src="/{{$carouselitem->imgPath}}" alt="" style='width:100px;' ></td>
                  <td><a href="/admin/carousel/{{$carouselitem->id}}/delete" class="btn btn-danger">Delete</a></td>
                  </tr>
              @endforeach
              
         
              
            </tbody></table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
    </div>


  

  <!-- /.box-header -->
  <!-- form start -->
  <form role="form" method="POST" action="/admin/carousel" enctype="multipart/form-data">
    @csrf
    @METHOD('PATCH')
    <div class="box-body">

     

      <div class="form-group">
        <label for="exampleInputEmail1">Ajouter une image: </label>
        <input type="file" class="form-control" value="{{$carouselitem->imgPath}}" name="imgPath" required>
      </div>
      
      
    </div>
    <!-- /.box-body -->

    <div class="box-footer">
      <button type="submit" class="btn btn-primary">Modifier le contenu</button>
    </div>
  </form>
</div>
    
@stop
