<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
use Smarty as Smarty;

class Ci_smarty extends Smarty {

    var $template_dir="";
    var $compile_dir = "";
    public function __construct() {
        parent::__construct();
        $this->compile_dir = APPPATH . "views/templates_c/";
        $this->template_dir = APPPATH . "views/templates/";
        $this->assign('APPPATH', APPPATH);
        $this->assign('BASEPATH', BASEPATH);
        if (method_exists($this, 'assignByRef')) {
            $ci = & get_instance();
            $this->assignByRef("ci", $ci);
        }
    }
    
    function vista($template, $data = array(), $return = FALSE) {


        if (strpos($template, '.') === false) {
            $template .= '.tpl';
        }
        foreach ($data as $key => $val) {
            $this->assign($key, $val);
        }

        if (!is_file($this->template_dir . $template)) {
            show_error($this->template_dir." -- ".
                "template: [$template] cannot be found.");
        }
        return parent::display
        ($this->template_dir.$template);
    }

}