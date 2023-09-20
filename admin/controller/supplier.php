<?php
defined("ABSPATH") ? "" : die();

$tab = $_GET['pg'] ?? 'supplier';

    $supplierClass = new Supplier();
    $suppliers = $supplierClass->query("select * from tblsupplier order by id desc limit 15");

require view_path('supplier/supplier');