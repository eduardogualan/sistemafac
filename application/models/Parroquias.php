<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Parroquias extends Eloquent {

    protected $Ci;
    protected $table = 'parroquias';
    protected $primaryKey = 'id_parroquia';
    public $timestamps = false;
    protected $fillable = ['nombre_parroquia', 'id_canton'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    //mapear con Datos_tecnicos
    public function Canton() {
        $this->Ci->load->model('Canton');
        return $this->belongsTo('Canton', 'id_canton');
    }

    public function Direccion() {
        $this->Ci->load->model('Direccion');
        return $this->hasOne('Direccion', 'id_parroquia');
    }

}
