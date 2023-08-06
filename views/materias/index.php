
    <!-- CAMBIAR EL NOMBRE DE LA CARPETA PRODUCTOS A 'DATOS' -->

    <h1 class="text-center">Ingreso de materias</h1>
<div class="row justify-content-center mb-5">
    <form class="col-lg-8 border bg-light p-3" id="formularioMaterias">
        <div class="row mb-3">
            <div class="col">
                <label for="codigoMateria">Codigo de la materia</label>
                <input type="text" name="codigoMateria" id="codigoMateria" class="form-control" disabled>
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="nombreMateria">Nombre de la materia</label>
                <input type="text" name="nombreMateria" id="nombreMateria" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <label for="detalleMateria">Detalle</label>
                <input type="number" step="0.01" min="0" name="detalleMateria" id="detalleMateria" class="form-control">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <button type="submit" form="formularioMaterias" id="btnGuardar" data-saludo= "hola" data-saludo2="hola2" class="btn btn-primary w-100">Guardar</button>
            </div>
            <div class="col">
                <button type="button" id="btnModificar" class="btn btn-warning w-100">Modificar</button>
            </div>
            <div class="col">
                <button type="button" id="btnBuscar" class="btn btn-info w-100">Buscar</button>
            </div>
            <div class="col">
                <button type="button" id="btnCancelar" class="btn btn-danger w-100">Cancelar</button>
            </div>
        </div>
    </form>
</div>
<div class="row justify-content-center" id="divTabla">
    <div class="col-lg-8">
        <h2>LISTADO DE MATERIAS</h2>
        <table class="table table-bordered table-hover" id="tablaMaterias">
            <thead class="table-dark">
                <tr>
                    <th>NO. </th>
                    <th>NOMBRE</th>
                    <th>Detalle</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
</div>
<script src="<?= asset('./build/js/controller/Alumnos.js')  ?>"></script>

