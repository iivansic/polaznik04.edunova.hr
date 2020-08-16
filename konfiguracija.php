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
// provjera forme
function checkform()
{
	if (value of first field is or isn't something)
	{
		// something is wrong
		alert('There is a problem with the first field');
		return false;
	}
	else if (value of next field is or isn't something)
	{
		// something else is wrong
		alert('There is a problem with...');
		return false;
	}
	// If the script gets this far through all of your fields
    // without problems, it's ok and you can submit the form
    // <form action="script.cgi" onSubmit="return checkform()">



	return true;
}

