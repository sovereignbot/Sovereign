<?php

// Require the vendor packages
if(file_exists(__DIR__ . "/vendor/autoload.php"))
    require_once(__DIR__ . "/vendor/autoload.php");
else
    throw new \Exception("Error, composer auto loader not present, please fix");

// Simply launches the Sovereign bot in an easy way..
require_once(__DIR__ . "/vendor/bin/sovereign");