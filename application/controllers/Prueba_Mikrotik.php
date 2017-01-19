<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Prueba_Mikrotik extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function Index() {
        $ipRouteros = "186.5.31.202";  // tu RouterOS.
        $Username = "Master";
        $Pass = "master";
        $api_puerto = 8728;
        $API = new Mikrotik();
        $API->debug = false;
        if ($API->connect($ipRouteros, $Username, $Pass, $api_puerto)) {      // Change this as necessery
            $API->write('/interface/wireless/registration-table/print', false);
            $API->write('=count-only=');

            $READ = $API->read(false);
            $ARRAY = $API->parse_response($READ);


            echo "Number of connected clients:" . substr($READ[1], 5);

            $API->disconnect();
        }
    }

    public function Tabla() {
        $ipRouteros = "186.5.31.202";  // tu RouterOS.
        $Username = "Master";
        $Pass = "master";
        $api_puerto = 8728;
        $API = new Mikrotik();
        if ($API->connect($ipRouteros, $Username, $Pass, $api_puerto)) {    // Change this as necessery
            $ARRAY = $API->comm("/interface/wireless/registration-table/print");


            echo "<table width=100% border=1>";

            echo "<tr><td align=left size=2>Id</td><td size=2>iface</td><td size=2>mac-address</td><td size=1>Ap</td><td size=1>wds</td><td>rx-rate</td><td>tx-rate</td><td>Data</td><td>uptime</td><td>Last Activity</td><td>signal strength</td><td>signal to noise</td><td>strength at rates</td><td>tx ccq</td><td>pthroughput</td><td>ack timeout</td><td>last ip</td><td>802.1x port en.</td><td>authentication type</td><td>encryption</td><td>group encryption</td><td>wmm</td></tr>";

            echo "<tr><td align=left>";


            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#04B404 size=2>" . $regtable['.id'] . "</font><br>";
            }

            echo "</td><td>";


            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#04B404 size=2>" . $regtable['interface'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#04B404 size=2>" . $regtable['mac-address'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];
                if ($regtable['ap'] == "true") {
                    echo "<font color=#04B404 size=2>" . $regtable['ap'] . "</font><br>";
                } else {
                    echo "<font color=#FF0000 size=2>" . $regtable['ap'] . "</font><br>";
                }
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];
                if ($regtable['wds'] == "true") {
                    echo "<font color=#04B404 size=2>" . $regtable['wds'] . "</font><br>";
                } else {
                    echo "<font color=#FF0000 size=2>" . $regtable['wds'] . "</font><br>";
                }
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#000099 size=2>" . $regtable['rx-rate'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#04B404 size=2>" . $regtable['tx-rate'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];
                echo popup('Data', 'Packets  ' . $regtable['packets'] . '<br/>Bytes  ' . $regtable['bytes'] . '<br/>Frames  ' . $regtable['frames'] . '<br/>Frame-Bytes  ' . $regtable['frame-bytes'] . '<br/>hw-frames  ' . $regtable['hw-frames'] . '<br/>hw-frame-bytes  ' . $regtable['hw-frame-bytes'] . '<br/>tx-frames-timed-out  ' . $regtable['tx-frames-timed-out']);
            }

            echo "</td><td>";


            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#003300 size=2>" . $regtable['uptime'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#003300 size=2>" . $regtable['last-activity'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#880000 size=2>" . $regtable['signal-strength'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#A00000 size=2>" . $regtable['signal-to-noise'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];
                $z = $regtable['wds'];

                if ($z == true) {
                    echo popup('Rates', $regtable['strength-at-rates']);
                }
                if ($z == false) {
                    echo popup('Rates', $regtable['strength-at-rates']);
                } else {
                    echo " ";
                }
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#04B404 size=2>" . $regtable['tx-ccq'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#04B404 size=2>" . $regtable['p-throughput'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#04B404 size=2>" . $regtable['ack-timeout'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#04B404 size=2>" . $regtable['last-ip'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];
                if ($regtable['802.1x-port-enabled'] == "true") {
                    echo "<font color=#04B404 size=2>" . $regtable['802.1x-port-enabled'] . "</font><br>";
                } else {
                    echo "<font color=#FF0000 size=2>" . $regtable['802.1x-port-enabled'] . "</font><br>";
                }
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#CC0000 size=2>" . $regtable['authentication-type'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#CC0000 size=2>" . $regtable['encryption'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#CC0000 size=2>" . $regtable['group-encryption'] . "</font><br>";
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];
                if ($regtable['wmm-enabled'] == "true") {
                    echo "<font color=#04B404 size=2>" . $regtable['wmm-enabled'] . "</font><br>";
                } else {
                    echo "<font color=#FF0000 size=2>" . $regtable['wmm-enabled'] . "</font><br>";
                }
            }

            echo "</td><td>";

            for ($i = 0; $i < 250; $i++) {
                $regtable = $ARRAY[$i];

                echo "<font color=#CC0000 size=2>" . $regtable['comment'] . "</font><br>";
            }

            echo "</td><td>";
            echo "</table>";
            echo "<br />Debug:";
            echo "<br />";


            $API->disconnect();
        }
    }

}
