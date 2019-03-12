<form class="form-horizontal" role="form" id="formulario">
    <input type="hidden" id="_token-cat" value="{{ csrf_token() }}">
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Correo</label>
        <div class="col-sm-10">
            <input type="email" class="form-control" id="txt_email1" placeholder="Correo">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Usuario</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="txt_usuario1" placeholder="Usuario">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="button" class="btn btn-default" id="add_cat">Aceptar</button>
        </div>
    </div>
</form>
<script type="text/javascript" src="{{asset('js/funciones.js')}}"></script>