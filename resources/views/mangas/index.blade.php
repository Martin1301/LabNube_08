<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Productos - MANGA</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto|Varela+Round'>
<link rel='stylesheet' href='https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'><link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <div class="table-wrapper">
    <div class="table-title">
      <div class="row">
        <div class="col-sm-6">
          <h2>Lista <b>Mangas</b></h2>
        </div>
        <div class="col-sm-6">
          <a href="{{url('/mangas/create')}}" data-target="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Add New Manga</span></a>
        </div>

      </div>
    </div>
    <table class="table table-striped table-hover row id="tablemanga" >
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Editorial</th>
          <th>Cantidad</th>
          <th>Género</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody>
        <tr>
        @foreach($mangas as $manga)
          <td>{{ $manga->idmanga}}</td>
          <td>{{ $manga->nombre}}</td>
          <td>{{ $manga->editorial}}</td>
          <td>{{ $manga->cantidad}}</td>
          <td>{{ $manga->genero}}</td>
          <td style="display: flex;">

            <a href="{{route('mangas.edit',$manga->idmanga)}}" data-target="#editEmployeeModal"  class="edit" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i></a>
            <form action="{{route('mangas.destroy',$manga->idmanga)}}" method="post" >
                @csrf
                @method('DELETE')
                <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                <!-- ELIMINAR MANGA -->
                <div id="deleteEmployeeModal" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <form>
                        <div class="modal-header">
                        <h4 class="modal-title">Delete Manga</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                        <p>¿Está seguro de borrar el manga {{ $manga->nombre}}?</p>
                        <p class="text-warning"><small>Esta acción no se puede deshacer.</small></p>
                        </div>
                        <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            <!-- ELIMINAR MANGA -->
            </form>
            </td>

        </tr>
        @endforeach
      </tbody>
    </table>

<!-- CREATE MANGA -->
<div id="addEmployeeModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">

    </div>
  </div>
</div>
<!-- CREATE MANGA -->

    <!--EDITAR MANGA-->
    <div id="editEmployeeModal" class="modal fade">
    <div class="modal-dialog">
    <div class="modal-content">
        <!--Edit.blade.php-->
    </div>
  </div>
</div>
    <!--hasta aca-->
<!-- EDITAR MANGA -->
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script><script  src="./script.js"></script>

</body>
</html>
