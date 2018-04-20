# Canada Provinces List

[![Build Status](https://travis-ci.org/cdtweb/canada-provinces-list.svg?branch=master)](https://travis-ci.org/cdtweb/canada-provinces-list)

A library that provides a list of Canadian provinces and territories.

## Requirements

PHP 7

## Installation

    composer install cdtweb/canada-provinces-list
    
## Usage

```php
<?php
use Cdtweb\CanadaProvincesList;

// Get array of abbreviation => name for each province
$states = CanadaProvincesList::all();

// Get array of abbreviations
$abbreviations = CanadaProvincesList::abbreviations();

// Get array of names
$names = CanadaProvincesList::names();
 
```
