<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
header("Access-Control-Allow-Origin: * ");
$type = isset($_GET['type']) ? $_GET['type'] : '';
$from = isset($_GET['from']) ? $_GET['from'] : '';
$to = isset($_GET['to']) ? $_GET['to'] : '';
$value = isset($_GET['value']) ? (double)$_GET['value'] : 1;
$type = isset($_GET['type']) ? $_GET['type'] : '';
$Country = isset($_GET['Country']) ? $_GET['Country'] : '';
$value1 = isset($_GET['value1']) ? (double)$_GET['value1'] : 0;
$value2 = isset($_GET['value2']) ? (double)$_GET['value2'] : 0;
$operator = isset($_GET['operator']) ? $_GET['operator'] : '';


if (file_exists($type . ".php")) {
    require_once($type . ".php");
    if ($type == 'Calculator') {
        $converter = new $type($value1, $value2, $operator);

    } else {
        $converter = new $type($from, $to, $value, $Country);
    }
    return die(json_encode(['status' => 1, 'result' => $converter->convert()]));
} else {
    return die(json_encode(['status' => 0, 'result' => 'Converter doesn\'t exist']));
}


