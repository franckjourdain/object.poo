<?php

require_once "Html.php";
// use Html;
use Html as H;
$table = new H\Table();
$table->title ="coucou";
$table->numRows =5;
$table->message();

$row = new Html\Row();
$row->numCells = 2;
$row->message();





?>