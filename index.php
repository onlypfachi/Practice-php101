<?php

require('functions.php');
require('routes.php');
include('Database.php');


$db = new Database();

$posts = $db->query("select  * from Posts")->fetchAll(PDO::FETCH_ASSOC);


dd($posts);
