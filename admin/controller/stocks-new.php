<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'stocks-new';

require view_path('stocks/stocks-new');