<div class="col-sm-5">
    <div class="widget-box">
        <div class="widget-header widget-header-flat widget-header-small">
            <h5 class="widget-title">
                <i class="ace-icon fa fa-signal"></i>
                Grafico
            </h5>
            <div class="widget-toolbar no-border">
                <div class="inline dropdown-hover">
                    <button class="btn btn-minier btn-primary">
                        Esta Semana
                        <i class="ace-icon fa fa-angle-down icon-on-right bigger-110"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right dropdown-125 dropdown-lighter dropdown-close dropdown-caret">
                        <li><a href="#" class="blue"><i class="ace-icon fa fa-caret-right bigger-110"></i> Esta Semana</a></li>
                        <li><a href="#" class="blue"><i class="ace-icon fa fa-caret-right bigger-110"></i> Semana Pasada</a></li>
                        <li><a href="#" class="blue"><i class="ace-icon fa fa-caret-right bigger-110"></i> Este Mes</a></li>
                        <li><a href="#" class="blue"><i class="ace-icon fa fa-caret-right bigger-110"></i> Mes Pasado</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main">
                <div id="piechart-placeholder">
                    <h3>Comportamiento de las Ventas (Graficos)</h3>
                </div>
                <div class="hr hr8 hr-double"></div>
                <div class="clearfix">
                    <div class="grid3">
                        <span class="grey"><i class="ace-icon fa fa-facebook-square fa-2x blue"></i>&nbsp; likes</span>
                        <h4 class="bigger pull-right">1,255</h4>
                    </div>
                    <div class="grid3">
                        <span class="grey"><i class="ace-icon fa fa-twitter-square fa-2x purple"></i>&nbsp; tweets</span>
                        <h4 class="bigger pull-right">941</h4>
                    </div>
                    <div class="grid3">
                        <span class="grey"><i class="ace-icon fa fa-pinterest-square fa-2x red"></i>&nbsp; pins</span>
                        <h4 class="bigger pull-right">1,050</h4>
                    </div>
                </div>
            </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->
    </div><!-- /.widget-box -->
</div><!-- /.col -->

<div class="col-sm-5">
    <div class="widget-box transparent">
        <div class="widget-header widget-header-flat">
            <h4 class="widget-title lighter">
                <i class="ace-icon fa fa-star orange"></i>
                Pruductos mas Vendidos
            </h4>
            <div class="widget-toolbar">
                <a href="#" data-action="collapse"><i class="ace-icon fa fa-chevron-up"></i></a>
            </div>
        </div>

        <div class="widget-body">
            <div class="widget-main no-padding">
                <table class="table table-bordered table-striped">
                    <thead class="thin-border-bottom">
                    <tr>
                        <th>
                            <i class="ace-icon fa fa-caret-right blue"></i>Nombre
                        </th>
                        <th>
                            <i class="ace-icon fa fa-caret-right blue"></i>Precio
                        </th>
                        <th class="hidden-480">
                            <i class="ace-icon fa fa-caret-right blue"></i>Estado
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($productos as $clave=>$valor)
                        <tr>
                            <td>{{$clave}}</td>
                            <td><b class="blue">{{$valor}}</b></td>
                            <td class="hidden-480"><span class="label label-info arrowed-right arrowed-in">En Venta</span></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div><!-- /.widget-main -->
        </div><!-- /.widget-body -->
    </div><!-- /.widget-box -->
</div><!-- /.col -->
<div class="col-sm-5">
    <h3>Contenido Columna 3</h3>
</div><!-- /.col -->
