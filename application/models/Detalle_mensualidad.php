<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Detalle_mensualidad extends Eloquent {

    protected $Ci;
    protected $table = 'detalle_mensualidad';
    protected $primaryKey = 'id_detalleMensualidad';
    public $timestamps = false;
    protected $fillable = ['fecha_vencimiento', 'fecha_pagado', 'valor_unitario', 'valor_total', 'estado', 'id_ventaPlan'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    function Venta_plan() {
        $this->Ci->load->model("Venta_plan");
        return $this->belongsTo('Venta_plan', 'id_ventaPlan');
    }

}
