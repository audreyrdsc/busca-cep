<?php

require_once 'vendor/autoload.php';
use Audreyrdsc\PhpCep\Search;

$busca = new Search();
$address = $busca->getAddressFromZipcode('68909842');

print_r($address);