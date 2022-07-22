<?php 
 
require 'vendor/autoload.php';
use Ramsey\Uuid\Uuid;

$uuid = Uuid::fromInteger(1234);

printf(
    "UUID: %s\nVersion: %d\n",
    $uuid->toString(),
    $uuid->getFields()->getVersion()
);