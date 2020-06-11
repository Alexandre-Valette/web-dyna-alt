<?php
return array("id"=>array(array("type"=>"id","constraints"=>array("autoinc"=>true))),"nom"=>array(array("type"=>"length","constraints"=>array("max"=>250,"notNull"=>true))),"lieu"=>array(array("type"=>"notNull","constraints"=>array())),"dateHeure"=>array(array("type"=>"notNull","constraints"=>array())),"actif"=>array(array("type"=>"isBool","constraints"=>array("notNull"=>true))));
