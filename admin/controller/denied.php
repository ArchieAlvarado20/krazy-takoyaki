<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'dinied';

require view_path('auth/denied-cashier');