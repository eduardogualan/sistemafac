<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Canton extends Eloquent {

    protected $Ci;
    protected $table = 'canton';
    protected $primaryKey = 'id_canton';
    public $timestamps = false;
    protected $fillable = ['nombre_canton', 'id_provincia'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    public function Provincia() {
        $this->Ci->load->model('Provincia');
        return $this->belongsTo('Provincia', 'id_provincia');
    }

    public function Parroquias() {
        $this->Ci->load->model('Parroquias');
        return $this->hasMany('Parroquias', 'id_canton');
    }

}
