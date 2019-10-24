




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
                  <th>Text</th>
                  <th>Titre</th>
                  <th>Sous-titre</th>
                  <th>images</th>
                  <th>Delete</th>
                  <th>UPDATE</th>
                </tr>
                @foreach ($testimonialitems as $testimonialitem)
                    <tr>
                        <td>{{$testimonialitem->id}}</td>
                        <td>{{$testimonialitem->text}}</td>
                        <td>{{$testimonialitem->titre}}</td>
                        <td>{{$testimonialitem->sousTitre}}</td>
                        <td>
                            <img src="/{{$testimonialitem->imgPath}}" alt="">
                        </td>
                        <td><a href="/admin/testimonial/{{$testimonialitem->id}}/delete" class="btn btn-danger">Delete</a></td>
                        <td><a href="/admin/testimonial/{{$testimonialitem->id}}/update" class="btn btn-success">Update</a></td>
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
              <h3 class="box-title">Ajouter un nouveau témoiniage</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="POST" action="/admin/testimonial" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">
                    <div class="form-group">
                            <label for="exampleInputEmail1">Text : </label>
                            <textarea name="text" id="" class="form-control" required>{{$testimonialitem->text}}</textarea>
                    </div>

                    <div class="form-group">
                            <label for="exampleInputEmail1">Titre : </label>
                    <input type="text" class="form-control"  name="titre" value="{{$testimonialitem->titre}}" required>
                    </div>
            
                    <div class="form-group">
                        <label for="exampleInputEmail1">Sous-titre : </label>
                        <input type="text" class="form-control"  name="sousTitre" value="{{$testimonialitem->sousTitre}}" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Images </label>
                        <input type="file" class="form-control"  name="imgPath" value="{{$testimonialitem->imgPath}}" required>
                    </div>
            
        

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>




 
    
@stop
