![Screenshot](https://raw.githubusercontent.com/jaycee0610/PSGC-API/refs/heads/main/image.png)

## Overview

The PSGC-API provides access to the Philippine Standard Geographic Code (PSGC) data. This API allows users to retrieve information about regions, provinces, cities, municipalities, and barangays in the Philippines.

[https://psgc.rootscratch.com/](https://psgc.rootscratch.com/)

## Features

- Retrieve data for all regions, provinces, cities, municipalities, and barangays
- Filter data based on specific criteria
- Easy integration with other applications

## Installation

To install the PSGC-API via Composer, run the following command:
```sh
composer require rootscratch/psgc
```

## Usage

To use the PSGC-API in your PHP project, include the Composer autoloader:
```php
require 'vendor/autoload.php';

use Rootscratch\PSGC\PSGC;

$psgcApi = new PSGC();
$regions = $psgcApi->Regions();
print_r($regions);
```

- `$psgcApi->Regions($region_id = null)` - Retrieve all regions
- `$psgcApi->Provinces($province_id = null)` - Retrieve all provinces
- `$psgcApi->MunicipalAndCities($MunicipalAndCities_ID = null)` - Retrieve all cities & municipalities
- `$psgcApi->Municipal($municipal_id = null)` - Retrieve all Municipal
- `$psgcApi->City($city_id = null)` - Retrieve all City
- `$psgcApi->Barangays($barangay_id = null)` - Retrieve all barangays

## Map Locator

![Map](https://raw.githubusercontent.com/jaycee0610/PSGC-API/refs/heads/main/map.gif)

To view a sample of the map locator, visit [this link](https://psgc.rootscratch.com/map.html).


## Contributing

Contributions are welcome! Please fork the repository and submit a pull request.

## Contact

For any questions or inquiries, please contact Rootscratch at [jaycee@rootscratch.com](mailto:jaycee@rootscratch.com).

## Packagist

The PSGC-API is also available on Packagist: [rootscratch/psgc](https://packagist.org/packages/rootscratch/psgc)

