<form method="post" name="formAdd" v-on:submit.prevent="storeCourse">
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Crear curso</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
              @csrf
            <input type="hidden" v-model="form.id" class="form-control" >
            <div class="form-group">
              <label class="col-form-label">Nombre:</label>
              <input type="text" v-model="form.nombre" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="col-form-label">Descripcion:</label>
              <textarea class="form-control" v-model="form.descripcion" required>@{{form.descripcion}}</textarea>
            </div>
            <div class="form-group">
                <label class="col-form-label">Duración:</label>
                <input type="text" v-model="form.duracion" class="form-control" required>
            </div>
            <div class="form-group">
                <label class="col-form-label">Costo:</label>
                <input type="text" v-model="form.costo" class="form-control" required>
            </div>
            <div class="form-group">
                <label >Curso dependiente</label>
                <select class="form-control" v-model="form.course_id" >
                    <option>No aplica</option>
                    <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>
              <div class="modal-footer">
                {{-- <button  class="btn btn-secondary" data-dismiss="modal">Cerrar</button> --}}
                <input type="submit" class="btn btn-primary" value="Crear">
              </div>
            </div>


        </div>
    </div>
  </div>

</form>
