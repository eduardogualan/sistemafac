<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Router extends Eloquent {

    protected $Ci;
    protected $table = 'router';
    protected $primaryKey = 'id_router';
    public $timestamps = false;
    protected $fillable = ['ip_router', 'nombre_wifi', 'clave_wifi', 'usuario_router', 'clave_router', 'id_marcaRouter'];

    public function __construct() {
        $this->Ci = & get_instance();
    }
    //mapear marca de router con router
    public function Marca_router() {
        $this->Ci->load->model("Marca_router");
        return $this->belongsTo('Marca_router', 'id_marcaRouter');
    }
    //mapear con datos tecnicos
     public function Datos_tecnicos() {
        $this->Ci->load->model('Datos_tecnicos');
        return $this->hasOne('Datos_tecnicos', 'id_router');
    }

}
