<?php

if (!defined('BASEPATH'))
    exit('no se puede acceder al script');

use Illuminate\Database\Eloquent\Model as Eloquent;

class Tipo_plan extends Eloquent {

    protected $Ci;
    protected $table = 'tipo_plan';
    protected $primaryKey = 'id_tipoPlan';
    public $timestamps = false;
    protected $fillable = ['nombre'];

    public function __construct() {
        $this->Ci = & get_instance();
    }
    //mapear con planes
    function Planes() {
        $this->Ci->load->model('Plan');
        return $this->hasMany('Plan', 'id_tipoPlan');
    }


}
