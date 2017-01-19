<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of conexion
 *
 * @author jose
 */
class Conexion {

    //put your code here
    protected $ci;

    public function __construct() {
        $this->ci = & get_instance();
    }

    public function conectar() {
        //$CI = & get_instance();

        $config = $this->ci->db; // Get the DB object

        $pdo = new PDO('mysql:host=' . $config->hostname . ';dbname=' . $config->database, $config->username, $config->password);


        $drivers = array(
            'mysql' => '\Illuminate\Database\MySqlConnection',
            'pgsql' => '\Illuminate\Database\PostgresConnection',
            'sqlite' => '\Illuminate\Database\SQLiteConnection',
        );

        $conn = new $drivers['mysql']($pdo, $config->database, $config->dbprefix);


        $resolver = new Illuminate\Database\ConnectionResolver;
        $resolver->addConnection('default', $conn);
        $resolver->setDefaultConnection('default');


        \Illuminate\Database\Eloquent\Model::setConnectionResolver($resolver);
    }

}

?>