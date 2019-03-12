<div class="panel panel-primary">
    <div class="panel-body">
        <div class="col-md-6">
            <form role="form">
                <div class="form-group">
                    <label>Nombre</label>
                    <input type="hidden" name="_method" id="_method" value="PUT">
                    <input type="hidden" name="_id" id="_id" value="{{$cat->id}}">
                    <input class="form-control" id="txt_nombre" value="{{$cat->name}}">
                </div>
                <div class="form-group">
                    <label>Codigo</label>
                    <input type="hidden" class="token" value="{{csrf_token()}}">
                    <input type="text" class="form-control" id="txt_codigo" value="{{$cat->code}}">
                </div>
                <button type="button" class="btn btn-primary btn-update btn-xs" id="categoria">Actualizar</button>
                <button type="reset" class="btn btn-default btn-xs">Cancelar</button>
                <button type="button" class="btn btn-default btn-volver btn-xs" id="categoria">Volver</button>
            </form>
        </div>
    </div>
</div>
</div>
</div><!-- /.panel-->
<script src="{{asset('js/nomenclador.js')}}"></script>