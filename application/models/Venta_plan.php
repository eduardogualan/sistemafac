<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Venta_plan extends Eloquent {

    protected $Ci;
    protected $table = 'venta_plan';
    protected $primaryKey = 'id_ventaPlan';
    public $timestamps = false;
    protected $fillable = ['fecha_venta', 'iva_venta', 'numeroFactura', 'total_venta', 'saldo_instalacion', 'id_descuento', 'id_contrato'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    function Descuento() {
        $this->Ci->load->model("Descuento");
        return $this->belongsTo('Descuento', 'id_descuento');
    }

    function Contrato() {
        $this->Ci->load->model("Contrato");
        return $this->belongsTo('Contrato', 'id_contrato');
    }

    function Detalle_mensualidad() {
        $this->Ci->load->model("Detalle_mensualidad");
        return $this->hasMany('Detalle_mensualidad', 'id_ventaPlan');
    }

}
