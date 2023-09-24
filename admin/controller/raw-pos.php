<?php
$tab = $_GET['pg'] ?? 'raw-pos';
$error = [];
if($_SERVER['REQUEST_METHOD'] == "POST"){   
}
require view_path('pos/raw-pos');
