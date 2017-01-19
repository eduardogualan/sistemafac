<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Descuento extends Eloquent {

    protected $Ci;
    protected $table = 'descuento';
    protected $primaryKey = 'id_descuento';
    public $timestamps = false;
    protected $fillable = ['porcentaje', 'valor_descuento', 'concepto'];

    public function __construct() {
        $this->Ci = & get_instance();
    }
     
     public function Venta_plan() {
        $this->Ci->load->model('Venta_plan');
        return $this->hasOne('Venta_plan', 'id_descuento');
    }
}
