<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');

class Country
{


    private $Country;

    public function __construct($from, $to, $value, $Country)
    {
        $this->from = $from;
        $this->to = $to;
        $this->Country = $Country;

    }

    public function convert()
    {
        return $this->GetCountryInfo();

    }

    private function GetCountryInfo()
    {

        $dsn = 'mysql:host=localhost;dbname=WS;charset=utf8';
        $user = 'root';
        $password = '';

        $pdo = new PDO($dsn, $user, $password);
        $sql = "SELECT * FROM countries WHERE countryName = '" . $this->Country . "' ";
        $stmt = $pdo->query($sql);
        $row = $stmt->fetchObject();
        return $row->capital;
    }
}
