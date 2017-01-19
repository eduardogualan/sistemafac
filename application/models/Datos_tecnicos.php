<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Datos_tecnicos extends Eloquent {

    protected $Ci;
    protected $table = 'datos_tecnicos';
    protected $primaryKey = 'id_datosTecnicos';
    public $timestamps = false;
    protected $fillable = ['direccion_ipWan', 'gateway', 'dns', 'subred', 'nivel_senial', 'id_nodoEnlazado', 'id_router', 'id_antena'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    //mapear con nodo enlazado id_nodoEnlazado
    public function Nodo_enlazado() {
        $this->Ci->load->model("Nodo_enlazado");
        return $this->belongsTo('Nodo_enlazado', 'id_nodoEnlazado');
    }

    //mapear con router id_router
    public function Router() {
        $this->Ci->load->model("Router");
        return $this->belongsTo('Router', 'id_router');
    }

    //mapear con antena id_antena
    public function Antena() {
        $this->Ci->load->model("Antena");
        return $this->belongsTo('Antena', 'id_antena');
    }

    function Contrato() {
        $this->Ci->load->model("Contrato");
        return $this->hasOne('Contrato', 'id_datosTecnicos');
    }

}
