<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'critical';
    $criticalClass  = new Product();
    $criticals = $criticalClass->query("select * from tblproduct where status = 1 order by view desc");
require view_path('stocks/critical');