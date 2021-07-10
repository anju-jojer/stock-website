<html>
<head>
	<title>Stock Market</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

	
  <link rel="stylesheet" href="css/bootstrap.min.css">

  <link rel="stylesheet" href="css/style.css">

  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.11.3/themes/hot-sneaks/jquery-ui.css" />
	<script src="http://code.jquery.com/jquery-2.1.3.js"></script>
	<script src="http://code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class='col-md-12 col-sm-12 col-xs-12 majorsec nopadding'>
	<div class='col-md-12 col-sm-12 col-xs-12 mainsec nopadding'>
		<div class='col-md-12 col-sm-12 col-xs-12 headersec nopadding'>
		
				<div class='col-md-2 col-sm-12 col-xs-12 nopadding'>
					<div class='col-md-12 col-sm-12 col-xs-12 pb10'>
						<div class='col-md-3 col-sm-12 col-xs-12 nopadding'>

						</div>
					<div class='col-md-6 col-sm-12 col-xs-12 nopadding'>
					   <h3><b>Stocks</b></h3>
					</div>
				</div>
				</div>


		</div>
		<div class='col-md-12 col-sm-12 col-xs-12 bodypart nopadding'>
             <div class='col-md-12 col-sm-12 col-xs-12  nopadding pt20'>
             	   <div class='col-md-12 col-sm-12 col-xs-12 pt30'>
             	   	<center><p class="headfont margin0">The easiest way to buy</p></center>
             	   	 	<center><p class="headfont margin0">Cell Stocks</p></center>

             	   </div>
             	    <div class='col-md-12 col-sm-12 col-xs-12 pt08 pb15'>
             	   	<center><p class=" margin0"><b>Stock Analysis and screening tool for</b></p></center>
             	   	 	<center><p class=" margin0"><b>investors in India</b></p></center>

             	   </div>

                          <div class='col-md-12 col-sm-12 col-xs-12 pt08 pb15'>

                          	<div class='col-md-12 col-sm-12 col-xs-12'>
                          		<div class='col-md-3 col-sm-12 col-xs-12'>
                          		</div>
                          			<div class='col-md-6 col-sm-12 col-xs-12'>
                                  <div class="ui-widget">
                                  	  <div class="input-container">

                                  	
                                       <i class="fa fa-search icon" aria-hidden="true"></i>
                               <input type="text" id="stcock_val" class="inputbox">
                                   </div>
                                   </div>
                                    </div>

                                   <div class='col-md-3 col-sm-12 col-xs-12'>
                          		</div>

                               </div>
                         </div>

                          <div class='col-md-12 col-sm-12 col-xs-12 pt08 pt20' >
                          		<div class='col-md-12 col-sm-12 col-xs-12 nopadding'>
                          		<div class='col-md-3 col-sm-12 col-xs-12 nopadding'>
                          		</div>
                          			<div class='col-md-6 col-sm-12 col-xs-12 nopadding bgwhite' id="aboutinfo" style="display:none">
                                	<div class='col-md-12 col-sm-12 col-xs-12 pt08'>
                                			<div class='col-md-12 col-sm-12 col-xs-12'>
                                				<div ><h4 id="companyname"></h4></div>

                                			</div>
                                			<div class='col-md-12 col-sm-12 col-xs-12 pt08 plr0'>
                                				<div class='col-md-12 col-sm-12 col-xs-12 pt08  greybg'>
                                					<div class='col-md-12 col-sm-12 col-xs-12 nopadding'>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                							<p class="pt8">Market Cap :<b id="marketcap" class="roseinput">464564</b></p>
                                						</div>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                								<p class="pt8">Divident Yield :<b id="divident" class="roseinput">464564</b></p>
                                						</div>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                							<p class="pt8">Debit Quality :<b id="debityq" class="roseinput">464564</b></p>

                                						</div>



                                					</div>
                                					<div class='col-md-12 col-sm-12 col-xs-12 nopadding'>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                							<p class="greenbg">Current Price:<b id="cprice" class="roseinput">464564</b></p>
                                						</div>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                								<p class="greenbg">ROCE :<b id="roce" class="roseinput">464564</b></p>
                                						</div>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                							<p class="greenbg">EPS :<b id="eps" class="roseinput">464564</b></p>

                                						</div>



                                					</div>
                                						<div class='col-md-12 col-sm-12 col-xs-12 nopadding'>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                							<p class="pt8">Stock P/E :<b id="stockpe" class="roseinput">464564</b></p>
                                						</div>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                								<p class="pt8">ROE :<b id="roe" class="roseinput">464564</b></p>
                                						</div>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                							<p class="pt8">Reservers :<b id="reserve" class="roseinput">464564</b></p>

                                						</div>



                                					</div>
                                					<div class='col-md-12 col-sm-12 col-xs-12 nopadding'>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                							<p class="greenbg">Debit:<b id="debit" class="roseinput">464564</b></p>
                                						</div>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                								
                                						</div>
                                						<div class='col-md-4 col-sm-12 col-xs-12'>
                                							

                                						</div>



                                					</div>

                                				</div>
                                				

                                			</div>
                                		


                                	</div>
                          					


                                    </div>

                                   <div class='col-md-3 col-sm-12 col-xs-12 nopadding'>
                          		</div>

                               </div>



                          </div>



             </div>


	    </div>



</div>
</div>



<script>

	$(function() 
{

	$("#aboutinfo").css("display", "none")

 $( "#stcock_val" ).autocomplete({
  source: 'autocomplete.php',
  select: showLabel,
   change: showLabel
 });
 function showLabel(event, ui) {


       var ele=ui.item.label;
url="getdata.php";
$.ajax({
        url: url,
        type: "POST",
        data: {ele:ele},
        success: function (msg) {             
         console.log(msg);


         var obj = JSON.parse(msg);
         var ss="<span>&#37; </span>";
         var res=ss.concat(obj.dividend);

         var res2=ss.concat(obj.debitequity);
          var res3=ss.concat(obj.roce);
             var res4=ss.concat(obj.stockpe);
                          var res5=ss.concat(obj.roe);

var ss1="<span>&#8377; </span>";
         var r1=ss1.concat(obj.market_cap);
          var r2=ss1.concat(obj.current_maket_price);
           var r3=ss1.concat(obj.eps);
           var r4=ss1.concat(obj.reservers);
            var r5=ss1.concat(obj.debit);


         $("#companyname").html(obj.name);
           $("#marketcap").html(r1);
            $("#divident").html(res);
            $("#debityq").html(res2);
              $("#cprice").html(r2);
               $("#roce").html(res3);

                $("#eps").html(r3);
                 $("#stockpe").html(res4);
                  $("#roe").html(res5);
             $("#reserve").html(r4);
          $("#debit").html(r5);
      
    

         	$("#aboutinfo").css("display", "block")

            },
            
        });

                

            }


});


    </script>
</body>

</html>

