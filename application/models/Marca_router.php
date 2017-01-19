<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Marca_router extends Eloquent {

    protected $Ci;
    protected $table = 'marca_router';
    protected $primaryKey = 'id_marcaRouter';
    public $timestamps = false;
    protected $fillable = ['nombre_marcaRouter'];

    public function __construct() {
        $this->Ci = & get_instance();
    }
    //mapear router
    public function Router() {
        $this->Ci->load->model('Router');
        return $this->hasMany('Router', 'id_marcaRouter');
    }

}
