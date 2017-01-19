<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Persona extends Eloquent {

    protected $Ci;
    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
    public $timestamps = false;
    protected $fillable = ['cedula_ruc', 'apellidos', 'nombres', 'telefono', 'celular', 'email', 'id_rol'];

    public function __construct() {
        $this->Ci = & get_instance();
    }
    //mapear rol con persona mapeo de 1 a 1 id de rol
    function Rol() {
        $this->Ci->load->model("Rol");
        return $this->belongsTo('Rol', 'id_rol');  
    }
    //mapear cuenta con persona
    public function Cuenta() {
        $this->Ci->load->model('Cuenta');
        return $this->hasOne('Cuenta', 'id_persona');
    
    }
    
    function Contrato() {
        $this->Ci->load->model('Contrato');
        return $this->hasMany('Contrato', 'id_persona');
    }
    

}
