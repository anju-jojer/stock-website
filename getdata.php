<?php
require("database/dataaccess.class.php");
$dao=new DataAccess();
 echo $searchTerm = $_GET['ele'];



  $fieldArray=array("stock_main_id","name","current_maket_price","market_cap","stockpe","dividend","roce","roe","debitequity","eps","reservers","debit");



  $query_string="name"." LIKE "."'"."%". $searchTerm."%"."'";
              
                $this1= $dao->get($fieldArray,"stock_main",$query_string);
                $sia=sizeof($this1);
                if($sia>1)
                {
                for($i=0;$i < $sia-1;$i++ )
                {

               $name =$this1[$i]['name'];
               $current_maket_price =$this1[$i]['current_maket_price'];
                $market_cap =$this1[$i]['market_cap'];
                   $stockpe =$this1[$i]['stockpe'];
                 $dividend =$this1[$i]['dividend'];
                   $roce =$this1[$i]['roce'];
                       $roe =$this1[$i]['roe'];
                    $debitequity =$this1[$i]['debitequity'];
                     $eps =$this1[$i]['eps'];
                   $reservers =$this1[$i]['reservers'];
                   $debit =$this1[$i]['debit'];



             $myObj->name =  $name;
            $myObj->current_maket_price = $current_maket_price;
            $myObj->market_cap = $market_cap;
            $myObj->stockpe = $stockpe;
             $myObj->dividend = $dividend;
            $myObj->roce = $roce;
            $myObj->roe =  $roe;
            $myObj->debitequity =  $debitequity;

            $myObj->eps = $eps;
            $myObj->reservers =  $reservers;
            $myObj->debit =  $debit;
            $myJSON = json_encode($myObj);
            echo $myJSON;









                }



               }
              


?>