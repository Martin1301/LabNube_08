<form action="{{route('mangas.store')}}" method="post">
@csrf
        <div class="modal-header">
          <h4 class="modal-title">Add Manga</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" placeholder="Naruto" name="nombre" required >
          </div>
          <div class="form-group">
            <label>Editorial</label>
            <input type="text" class="form-control" placeholder="Shūeisha" name="editorial" required >
          </div>
          <div class="form-group">
            <label>Cantidad</label>
            <input type="text" class="form-control" placeholder="3" name="cantidad" required >
          </div>
          <div class="form-group">
            <label>Género</label>
            <input type="text" class="form-control" placeholder="Acción" name="genero" required >
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
          <input type="submit" class="btn btn-success" value="Add">
        </div>
      </form>
