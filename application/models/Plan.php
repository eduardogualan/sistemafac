<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Plan extends Eloquent {

    protected $Ci;
    protected $table = 'plan';
    protected $primaryKey = 'id_plan';
    public $timestamps = false;
    protected $fillable = ['valor_mensual', 'velocidad', 'descripcion', 'id_tipoPlan'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    //mapear con tipo d eplan id_tipoPlan
    function Tipo_Plan() {
        $this->Ci->load->model('Tipo_plan');
        return $this->belongsTo('Tipo_plan', 'id_tipoPlan');
    }

    //mapear con datos de facturacion
    function Contrato() {
        $this->Ci->load->model('Contrato');
        return $this->hasMany('Contrato', 'id_plan');
    }

}
