<?php

$producer = @$_POST['Tentants'] ? $_POST['Tentants'] : null;

$config = getConfig($configPath);

$pdo = getConection( $config["database"] );

$producers = getTentants( $pdo );

$cars = getCars( $pdo, $producer );
