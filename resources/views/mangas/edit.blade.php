
    <form action="{{route('mangas.update',$manga->idmanga)}}" method="post">
    @csrf
    @method('PUT')
        <div class="modal-header">
          <h4 class="modal-title">Edit Manga</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="nombre" required value="{{$manga->nombre}}">
          </div>
          <div class="form-group">
            <label>Editorial</label>
            <input type="text" class="form-control" name="editorial" required value="{{$manga->editorial}}">
          </div>
          <div class="form-group">
            <label>Cantidad</label>
            <input type="text" class="form-control" name="cantidad" required value="{{$manga->cantidad}}">
          </div>
          <div class="form-group">
            <label>Genero</label>
            <input type="text" class="form-control" name="genero" required value="{{$manga->genero}}">
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-info" value="Save">
        </div>
      </form>
