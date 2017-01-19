<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Cuenta extends Eloquent {

    protected $Ci;
    protected $table = 'cuenta';
    protected $primaryKey = 'id_cuenta';
    public $timestamps = false;
    protected $fillable = ['usuario', 'contrasenia', ' ultimo_acceso', 'estado', 'id_persona'];
    protected $guarded = ["id_cuenta"];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    //recibir el i
    public function Persona() {
        $this->Ci->load->model("Persona");
        return $this->belongsTo('Persona', 'id_persona');
    }

}
