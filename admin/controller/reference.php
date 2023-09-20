<?php
defined("ABSPATH") ? "" : die();

$tab = $_GET['pg'] ?? 'reference';

    $referenceClass = new Reference();
    $references = $referenceClass->query("select * from tblreference order by id desc");

require view_path('reference/reference');