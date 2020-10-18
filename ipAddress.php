<?php

include 'class.IPInfoDB.php';

// Load the class
$ApiKey = 'Another API';
//call to fn
$ipinfodb = new IPInfoDB(ApiKey);
$results = $ipinfodb->getCity('A new async API Key');

// Getting the result
echo "Results for city query:<br>";
if (!empty($results) && is_array($results)) {
	foreach ($results as $key => $value) {
		echo $key . ' : ' . $value . "<br>";
	}
}

/*
Results for city query:
statusCode : OK
statusMessage :
ipAddress : 59.91.105.215 (My IP)
countryCode : IN
countryName : India
regionName : Karnataka
cityName : Bengaluru
zipCode : 560018
latitude : 12.9762
longitude : 77.6033
timeZone : +05:30
*/

$results = $ipinfodb->getCountry('59.91.105.215');

// Getting the result
echo "Results for country query:<br>";
if (!empty($results) && is_array($results)) {
	foreach ($results as $key => $value) {
		echo $key . ' : ' . $value . "<br>";
	}
}

/*
Results for country query:
statusCode : OK
statusMessage :
ipAddress : 59.91.105.215
countryCode : IN
countryName : India
*/

?>
