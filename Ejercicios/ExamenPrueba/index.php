<?php
require_once "models/PaisModel.php";

$paisModel = new PaisModel();

$paises = $paisModel->getAll();

include "templates/body.php";
?>