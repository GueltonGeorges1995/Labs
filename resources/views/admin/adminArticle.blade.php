




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
                  <th>imgPath</th>
                  <th>Titre</th>
               
                  <th>category name</th>
                  <th>tags</th>
                  <th>validate</th>
                  <th>Delete</th>
                  <th>UPDATE</th>
                </tr>
                @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->id}}</td>
                        <td><img src="/{{$article->imgPath}}" alt="" width="100px"> </td>
                        <td>{{$article->titre}}</td>
                        
                        <td>@foreach ($article->category()->get() as $category)
                              
                          {{$category->name}}
                          @endforeach</td>

                        <td>@foreach ($article->tags()->get() as $tag)
                              
                            {{$tag->name}}
                            @endforeach
                            </td>
                          <td><form action="/admin/article/{{$article->id}}/validate" method="POST">
                            @csrf
                            @METHOD('PATCH')
                            @if ($article->published === 0)
                              <button type="submit" class="btn btn-primary">Validation</button>
                            @else
                              <button type="submit" class="btn btn-primary" disabled>Validation</button>
                            @endif
                            
                          </form>
                            
                          </td>
                        <td><a href="/admin/article/{{$article->id}}/delete" class="btn btn-danger">Delete</a></td>
                        <td><a href="/admin/article/{{$article->id}}/update" class="btn btn-success">Update</a></td>
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
              <h3 class="box-title">Ajouter un nouvel article</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="POST" action="/admin/article" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image : </label>
                        <input type="file" name="imgPath" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Titre : </label>
                        <input type="titre" name="titre" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Text : </label>
                        <textarea name="text" id="" class="form-control" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Categorie : </label>
                        <select name="category" id="pet-select">
                            
                            @foreach ($categories as $category)
                              <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Ajouter un ou plusieurs tag(s) </label>

                        @foreach ($tags as $tag)
                            <div>
                            <input type="checkbox" id="scales" name="{{$tag->name}}">
                                <label for="scales">{{$tag->name}}</label>
                            </div>
                        @endforeach
                    </div>

                  
                    
                   
        

              <div class="box-footer">

                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>




 
    
@stop
