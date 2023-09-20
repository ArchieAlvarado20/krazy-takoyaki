<?php
defined("ABSPATH") ? "" : die();
$tab = $_GET['pg'] ?? 'user';

    $userClass = new User();
    $users = $userClass->query("select * from tblusers order by id desc");

require view_path('user/user');