<?php
return array("#tableName"=>"inscription","#primaryKeys"=>array("id"),"#manyToOne"=>array("rassemblement"),"#fieldNames"=>array("id"=>"id","nom"=>"nom","email"=>"email","dateHeure"=>"dateHeure","rassemblement"=>"idRassemblement"),"#memberNames"=>array("id"=>"id","nom"=>"nom","email"=>"email","dateHeure"=>"dateHeure","idRassemblement"=>"rassemblement"),"#fieldTypes"=>array("id"=>"int(11)","nom"=>"varchar(50)","email"=>"varchar(100)","dateHeure"=>"timestamp","rassemblement"=>false),"#nullable"=>array(),"#notSerializable"=>array("rassemblement"),"#transformers"=>array(),"#accessors"=>array("id"=>"setId","nom"=>"setNom","email"=>"setEmail","dateHeure"=>"setDateHeure","idRassemblement"=>"setRassemblement"),"#joinColumn"=>array("rassemblement"=>array("className"=>"models\\Rassemblement","name"=>"idRassemblement","nullable"=>false)),"#invertedJoinColumn"=>array("idRassemblement"=>array("member"=>"rassemblement","className"=>"models\\Rassemblement")));
