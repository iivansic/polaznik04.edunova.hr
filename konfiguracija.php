<?php
session_start();

//$server = 'localhost';
//$baza = 'bazaa';
//$korisnik='edunova'; 
//$lozinka='edunova'; 

$server = 'polaznik04.edunova.hr';
$baza = 'maksimus_pp21';
$korisnik='maksimus_edunova'; 
$lozinka='edunova'; 

$dsn='mysql:host=' . $server . ';dbname=' . $baza . ';charset=utf8';

$opcije=[
    PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
];

$veza = new PDO($dsn,$korisnik,$lozinka,$opcije);

function elog($sto)
{
    echo '<pre>';
    print_r($sto);
    echo '<pre>';
}



