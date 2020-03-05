<?php

$regCostumer = $_GET['regCostumer'];

$config = getConfig($configPath);

$pdo = getConection( $config["database"] );

$car = getCar( $pdo, $regCostumer );
