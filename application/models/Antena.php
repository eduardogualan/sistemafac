<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Antena extends Eloquent {
    protected $Ci;
    protected $table = 'antena';
    protected $primaryKey = 'id_antena';
    public $timestamps = false;
    protected $fillable = ['nombre_antena'];

    public function __construct() {
        $this->Ci = & get_instance();
    }
    //mapear con Datos_tecnicos
     public function Datos_tecnicos() {
        $this->Ci->load->model('Datos_tecnicos');
        return $this->hasMany('Datos_tecnicos', 'id_antena');
    
    }

}
