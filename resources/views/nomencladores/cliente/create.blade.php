<form id="f_add_cliente">
    {{ csrf_field() }}
    <input type="text" id="txt_name" placeholder="Nombre Cliente:">
    <input type="text" id="txt_codigo" placeholder="Codigo Cliente:">
    <input type="button"  class="btn-store" value="Agregar">
</form>
<script src="{{asset('js/nomenclador.js')}}"></script>