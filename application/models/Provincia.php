<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Provincia extends Eloquent {

    protected $Ci;
    protected $table = 'provincia';
    protected $primaryKey = 'id_provincia';
    public $timestamps = false;
    protected $fillable = ['nombre_provincia'];

    public function __construct() {
        $this->Ci = & get_instance();
    }

    public function Cantones() {
        $this->Ci->load->model('Canton');
        return $this->hasMany('Canton', 'id_provincia');
    }

}
