<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Direccion extends Eloquent {

    protected $Ci;
    protected $table = 'direccion';
    protected $primaryKey = 'id_direccion';
    public $timestamps = false;
    protected $fillable = ['numero_casa', 'calles', 'referencia', 'id_parroquia'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    //mapear con Datos_tecnicos
    public function Parroquias() {
        $this->Ci->load->model('Parroquias');
        return $this->belongsTo('Parroquias', 'id_parroquia');
    }

    public function Contrato() {
        $this->Ci->load->model('Contrato');
        return $this->hasOne('Contrato', 'id_direccion');
    }

}
