<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Contrato extends Eloquent {

    protected $Ci;
    protected $table = 'contrato';
    protected $primaryKey = 'id_contrato';
    public $timestamps = false;
    protected $fillable = ['estado_contrato','nroContrato','valorInstalacion','fecha_instalacion', 'id_cliente', 'id_plan', 'id_datosTecnicos', 'id_direccion'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    function Persona() {
        $this->Ci->load->model("Persona");
        return $this->belongsTo('Persona', 'id_cliente');
    }

    function Plan() {
        $this->Ci->load->model("Plan");
        return $this->belongsTo('Plan', 'id_plan');
    }
    
    function Datos_tecnicos() {
        $this->Ci->load->model("Datos_tecnicos");
        return $this->belongsTo('Datos_tecnicos', 'id_datosTecnicos');
    }
    function Direccion() {
        $this->Ci->load->model("Direccion");
        return $this->belongsTo('Direccion', 'id_direccion');
    }

    function venta_plan() {
        $this->Ci->load->model("Venta_plan");
        return $this->hasMany('Venta_plan', 'id_contrato');
    }

}
