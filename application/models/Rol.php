<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Rol extends Eloquent {

    protected $Ci;
    protected $table = 'rol';
    protected $primaryKey = 'id_rol';
    public $timestamps = false;
    protected $fillable = ['nombre'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    //mapear persona con rol 1 a 1
    public function Persona() {
        $this->Ci->load->model('Persona');
        return $this->hasOne('Persona', 'id_rol');
    }

}
