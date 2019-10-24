




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
      <div class="box box-primary">
            <div class="box-header with-border">
            <h3 class="box-title">Modifier le témoiniage {{$testimonialitems->id}}</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form role="form" method="POST" action="/admin/testimonial/{{$testimonialitems->id}}/update" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Text : </label>
                            <textarea name="text" id="" class="form-control" required>{{$testimonialitems->text}}</textarea>
                    </div>

                    <div class="form-group">
                            <label for="exampleInputEmail1">Titre : </label>
                    <input type="text" class="form-control"  name="titre" value="{{$testimonialitems->titre}}" required>
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sous-titre : </label>
                        <input type="text" class="form-control"  name="sousTitre" value="{{$testimonialitems->sousTitre}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Images </label>
                        <input type="file" class="form-control"  name="imgPath" value="{{$testimonialitems->imgPath}}" required>
                    </div>
            
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>




 
    
@stop
