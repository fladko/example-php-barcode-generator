<?php

require_once __DIR__ . '/vendor/autoload.php';

$generator = new \Picqer\Barcode\BarcodeGeneratorPNG();

if (!empty($_POST)){
//    if ($_POST['fname'] != '' && $_POST['lname'] != ''){
        $data = $_POST['string'];
        echo '<div style="margin: 100px"><img src="data:image/png;base64,' . base64_encode($generator->getBarcode($data, $generator::TYPE_CODE_128)) . '"></div>';
//    }
}
