<?php
return array("#tableName"=>"rassemblement","#primaryKeys"=>array("id"),"#manyToOne"=>array(),"#fieldNames"=>array("id"=>"id","nom"=>"nom","lieu"=>"lieu","dateHeure"=>"dateHeure","actif"=>"actif","inscriptions"=>"inscriptions"),"#memberNames"=>array("id"=>"id","nom"=>"nom","lieu"=>"lieu","dateHeure"=>"dateHeure","actif"=>"actif","inscriptions"=>"inscriptions"),"#fieldTypes"=>array("id"=>"int(11)","nom"=>"varchar(250)","lieu"=>"text","dateHeure"=>"timestamp","actif"=>"tinyint(1)","inscriptions"=>"mixed"),"#nullable"=>array(),"#notSerializable"=>array("inscriptions"),"#transformers"=>array(),"#accessors"=>array("id"=>"setId","nom"=>"setNom","lieu"=>"setLieu","dateHeure"=>"setDateHeure","actif"=>"setActif","inscriptions"=>"setInscriptions"),"#oneToMany"=>array("inscriptions"=>array("mappedBy"=>"rassemblement","className"=>"models\\Inscription")));
