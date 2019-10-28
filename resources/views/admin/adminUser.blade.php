




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
                  <th>email</th>
                  <th>Delete</th>
                  <th>UPDATE</th>
                </tr>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->id}}</td>
                        <td><img src="/{{$user->imgPath}}" alt="" width="100px"></td>
                        <td>{{$user->role}}</td>
                        <td>{{$user->email}}</td>
                        <td>
                            @if ($currentUser->id === $user->id)
                                <a href="/admin/user/{{$user->id}}/delete" class="btn btn-danger" disabled>Delete</a>
                            @else
                                <a href="/admin/user/{{$user->id}}/delete" class="btn btn-danger">Delete</a>
                            @endif
                        </td>
                            
                        
                        <td><a href="/admin/user/{{$user->id}}/update" class="btn btn-success">Update</a></td>
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
              <h3 class="box-title">Ajouter un nouvel utilisateur</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          <form role="form" method="POST" action="/admin/user" enctype="multipart/form-data">
                @csrf
                @METHOD('PATCH')
              <div class="box-body">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Image : </label>
                        <input type="file" name="imgPath" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom : </label>
                        <input type="text" name="name" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Password : </label>
                        <input type="text" name="password" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email : </label>
                        <input type="text" name="email" id="" class="form-control" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Description : </label>
                        <textarea name="text" class="form-control" required></textarea>
                    </div>

                    <div class="fomr-group" style="margin-bottom:30px;"> 
                        <label >Choisir un rôle</label>
                        <select name="role" id="pet-select">
                            <option value="guest">Guest</option>
                            <option value="editeur">Editeur</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Ajouter</button>
              </div>
            </form>
          </div>




 
    
@stop
