<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Nodo_enlazado extends Eloquent {

    protected $Ci;
    protected $table = 'nodo_enlazado';
    protected $primaryKey = 'id_nodoEnlazado';
    public $timestamps = false;
    protected $fillable = ['nombre_nodoEnlazado'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    //mapear con datos tecnicos
    public function Datos_tecnicos() {
        $this->Ci->load->model('Datos_tecnicos');
        return $this->hasMany('Datos_tecnicos', 'id_nodoEnlazado');
    }

}
