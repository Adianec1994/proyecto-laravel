<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventosDiario extends Model
{
    protected $table = 'eventosDiarios';

    protected $fillable = [
        'potencia','estado','fEvento','fVisita','fPosSolucion','fReporte','fDiagnostico',
        'fConfirmado','fVisita2','fSolucion','horas','sistema','subSistema','parte',
        'fallo','diagnosticoPreliminar','diagnostico','responsable','insertadoPor',
        'piezas','reportadoA','numReporte','equipoAuxiliar','garantia','idProvincias',
        'idGrupos',
    ];

    protected $primaryKey = 'idEventosDiarios';

    public function provincia()
    {
        return $this->hasMany('App\Provincia', 'idProvincias');
    }

    public function grupo()
    {
        return $this->hasMany('App\Grupo', 'idGrupos');
    }
}
