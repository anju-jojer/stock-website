<?php
error_reporting(0);
require("database/dataaccess.class.php");
$dao=new DataAccess();
 $searchTerm = $_GET['term'];



  $fieldArray=array("stock_main_id","name");
$data=array();


  $query_string="name"." LIKE "."'"."%". $searchTerm."%"."'";
                   $c=1;
                $this1= $dao->get($fieldArray,"stock_main",$query_string);
                $sia=sizeof($this1);
                if($sia>1)
                {
                for($i=0;$i < $sia-1;$i++ )
                {

               $data[] =$this1[$i]['name'];

                }



               }
               echo json_encode($data);


?>