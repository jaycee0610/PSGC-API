<?php
header("Content-Type: application/json");

// Import the Composer autoloader
require __DIR__ . '/vendor/autoload.php';

// Import the PSGC class
use Rootscratch\PSGC\PSGC;

// Instantiate the PSGC class
$psgc = new PSGC();

/**
 * Call the Regions method
 * https://psgc.rootscratch.com/region
 */

// Call the Regions method
$regions = $psgc->Regions('1300000000');

// Call the Regions method without parameters
$regions = $psgc->Regions();

// Output the result
echo json_encode($regions, JSON_PRETTY_PRINT);


/**
 * Call the Provinces method
 * https://psgc.rootscratch.com/province
 */

// Call the Provinces method
$provinces = $psgc->Provinces('1339000000');

// Call the Provinces method without parameters
$provinces = $psgc->Provinces();

// Output the result
echo json_encode($provinces, JSON_PRETTY_PRINT);

/**
 * Call the MunicipalAndCities method
 * https://psgc.rootscratch.com/municipal-city
 */

// Call the MunicipalAndCities method
$municipalAndCities = $psgc->MunicipalAndCities('1339010000');

// Call the MunicipalAndCities method without parameters
$municipalAndCities = $psgc->MunicipalAndCities();

// Output the result
echo json_encode($municipalAndCities, JSON_PRETTY_PRINT);


/**
 * Call the Barangays method
 * https://psgc.rootscratch.com/barangay
 */

// Call the Barangays method
$barangays = $psgc->Barangays('133901001');

// Call the Barangays method without parameters
$barangays = $psgc->Barangays();

// Output the result
echo json_encode($barangays, JSON_PRETTY_PRINT);