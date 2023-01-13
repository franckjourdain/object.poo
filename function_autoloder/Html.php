<?php

namespace Html;

class Table {
    public $title = "";
    public $numRows = 0;


    public function Message() {
        echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";

    }
}

class Row {
    public $numCells = 0;
    public function Message() {
        echo"<p>nbre de colonnes : { $this->numCells }</p>";

    }
}





?>