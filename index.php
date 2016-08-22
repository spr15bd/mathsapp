<!DOCTYPE html>
<html lang="en">
  	<head>
    		<meta charset="utf-8">
    		<meta http-equiv="X-UA-Compatible" content="IE=edge">
    		<meta name="viewport" content="width=device-width, initial-scale=1">
    		<title>Maths Utilities</title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
		<script src="js/parser.js" type="text/javascript"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    		
		<!-- Bootstrap -->
   		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    		<!--[if lt IE 9]>
      		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>


		<![endif]-->
		
   
  	</head>
  	<body data-spy="scroll" data-target=".navbar-collapse">
		<div class="navbar navbar-default navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand">Maths Utilities</a>
				</div>
				<div class="collapse navbar-collapse">

					<ul class="nav navbar-nav">
						<li class="graphs"><a href="#dividerOne">Graph</a></li>
						<li><a href="#dividerTwo">Calculator</a></li>
						<li><a href="#dividerThree">Normal Distribution Table Values</a></li>
					</ul>
					
				</div>
			</div>
  		</div>

  		<div class="container contentContainer" id="dividerOne">
			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="topRow">
				</div>
			</div>
  		</div>
  		
		<div class="container contentContainer" id="graphs">
			<div class="row" class="center">
				<h1 class="center title">Draw Graphs Here!</h1>
				<div id="graphArea" class="center">
					<canvas id="graph" width="600" height="400">   
        					</canvas> 

				</div>
				<div id="graphForm">
					<form class="navbar-form navbar-right">
						<div class="form-group">
							<span class="form-group-addon">&nbsp&nbsp&nbsp&nbspy =&nbsp</span>
							<input type="text" placeholder="Enter equation" id="equation" value="1/x" class="form-control" />
						</div>
						<br/>
						<div class="form-group">
							<span class="form-group-addon">Min x&nbsp</span>
							<input type="text" placeholder="Enter lowest x value" id="minX" value= "-10" class="form-control" />
						</div>
						<br/>
						<div class="form-group">
							<span class="form-group-addon">Max x </span>
							<input type="text" placeholder="Enter highest x value" id="maxX"  value="10" class="form-control" />
						</div>
						<br/>
						<button type="submit" class="btn btn-success">Draw graph</button>
					</form>
				</div>
				
			</div>

		</div>	

		<div class="container contentContainer" id="dividerTwo">
			<div class="row">
				<div class="col-md-6 col-md-offset-3" id="topRow">
				</div>
			</div>
  		</div>
  		<div class="container contentContainer" id="calc">
			<div class="row">
				<h1 class="center title">Calculator</h1>
			</div>
			<div id="calculator"> 
				<input type="text" id="display-calculation" value="_" /> 
  				<input type="text" id="display" /> 
          
    				<a class="num-button seven">7</a> 
    				<a class="num-button eight">8</a> 
    				<a class="num-button nine">9</a> 
      
    				<a class="num-button four">4</a> 
    				<a class="num-button five">5</a> 
    				<a class="num-button six">6</a> 
      
    				<a class="num-button one">1</a> 
    				<a class="num-button two">2</a> 
    				<a class="num-button three">3</a> 
      
    				<a class="num-button zero">0</a> 
    				<a class="num-button dot">.</a> 
    				<a class="clear-button clear">C</a> 
      
    				<a class="function-button add">+</a> 
    				<a class="function-button subtract">-</a> 
    				<a class="function-button multiply">x</a> 
    				<a class="function-button divide">/</a> 

				<a class="spec-function-button memory-plus">M+</a>
				<a class="spec-function-button memory-recall">MR</a>
				<a class="spec-function-button pi">π</a>
				<a class="spec-function-button left-bracket">(</a>
				<a class="spec-function-button right-bracket">)</a>
				<a class="spec-function-button invert">INV</a>
				<a class="spec-function-button delete">DEL</a>
				<a class="spec-function-button mode">rad</a>
				<a class="spec-function-button power">x^y</a> 
				<a class="spec-function-button square">x²</a>
				<a class="spec-function-button sin">sin </a>
				<a class="spec-function-button cos">cos </a>
				<a class="spec-function-button tan">tan </a>
				<a class="spec-function-button ln">ln </a>
				<a class="spec-function-button exp">e</a>
    				<a class="equals-button">=</a> 
			</div>
		<script>
			$(function(){ 
				//Set initial display value to zero
				resetCalculator("0"); 
				// if a number key is pressed........
				$(".num-button").click(function(){ 
					
    					// Clicking on a number  
    					var curValue = $("#display-calculation").val(); 
        					if (curValue == "0") { 
            						curValue = ""; 
        					} 
					var toAdd="";
					var buttonText = $(this).text(); 
					if (buttonText==".") {	//allow only one decimal point in the number
						var containsDecimalPoint = false;
						var z=curValue.length-1;
						while (z>-1 &&    (curValue.charAt(z)=="." || !isNaN(parseInt(curValue.charAt(z))))) {
							if (curValue.charAt(z)==".") {
								containsDecimalPoint=true;
							}
							z--;
						}
						if (!containsDecimalPoint) {
							toAdd = buttonText;
						}
					} else {
        						toAdd = buttonText; 
					}
  
        					var newValue = curValue  + toAdd; 
  					$("#display-calculation").val(newValue); 
  				}); 
      
    				$(".clear-button").click(function(){ 
        					$(".clear-button").click(function(){ 
    						resetCalculator("0"); 
					});
				}); 
      


				
    				$(".function-button").click(function(){ 
					var curValue = $("#display-calculation").val(); 
        					if (curValue == "0") { 
            						curValue = ""; 
        					} 
  					var buttonText=$(this).text();
					var toAdd = buttonText; 
					
					
  					var newValue = curValue  + toAdd; 
  					$("#display-calculation").val(newValue); 
    				}); 

				$(".spec-function-button").click(function(){ 
					var toAdd="";
					var curValue = $("#display-calculation").val(); 
        					if (curValue == "0") { 
            						curValue = ""; 
        					} 
					var buttonText = $(this).text();
					if (buttonText=="x²") {
						toAdd = "²";	
					} else if (buttonText=="√") {
						toAdd = "√";
					} else if (buttonText=="y√x") {
						toAdd = "y√";
					} else if (buttonText=="M+") {
						$("#display").data("memory", $("#display-calculation").val());
						toAdd="";
					} else if (buttonText=="INV") {
						if ( $(".sin").text() =="sin " ) {
							$(".sin").text("asin ");
							$(".cos").text("acos ");
							$(".tan").text("atan ");
							$(".ln").text("e^x");
							$(".square").text("√");
							$(".power").text("y√x");
						} else {
							$(".sin").text("sin ");
							$(".cos").text("cos ");
							$(".tan").text("tan ");
							$(".ln").text("ln ");
							$(".square").text("x²");
							$(".power").text("x^y");
						}
						
						
						toAdd="";
					} else if (buttonText=="x^y") {
						toAdd = "^";
					} else if (buttonText=="e^x") {
						
						toAdd="e^";
					} else if (buttonText=="deg") {
						$(".mode").text("rad");
						toAdd="";
					} else if (buttonText=="rad") {
						$(".mode").text("deg");
						toAdd="";
					} else if (buttonText=="MR") {
						toAdd = $("#display").data("memory"); 
					} else if (buttonText=="DEL") {
						curValue=curValue.substring(0, curValue.length-1);
						toAdd = ""; 
					} else {
        						toAdd = buttonText;
					}
  					var newValue = curValue  + toAdd; 
  					$("#display-calculation").val(newValue); 
    				}); 

				
				
      
    				$(".equals-button").click(function(){ 
					var finalValue=0;
					var result = $("#display-calculation").val();


					
					result=result.replace(/x/gi, "*");
					
					result=prepareInput(result);
					result = Parser.evaluate(result);
					
					result = parseFloat(result.toFixed(14));
					
        					$("#display").val(result); 
    				}); 
      
    				$("#calculator").draggable();
      
				$("#opener, #closer").click(function(){ 
        					$("#opener").toggle(); 
        					$("#calculator").toggle(); 
    				}); 

      				function resetCalculator(curValue) { 
    					$("#display").val(curValue); 
					$("#display-calculation").val(curValue); 
    					$(".function-button").removeClass("pendingFunction"); 
    					$("#display").data("isPendingFunction", false); 
    					$("#display").data("thePendingFunction", ""); 
    					$("#display").data("valueOneLocked", false); 
    					$("#display").data("valueTwoLocked", false); 
    					$("#display").data("valueOne", curValue); 
    					$("#display").data("valueTwo", 0); 
    					$("#display").data("fromPrevious", false); 
				}
			});
			
		</script>
		
		
		</div>

	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="http://www.google.com/jsapi" type="text/javascript"></script> 
	<script type="text/javascript"> google.load("jquery", "1.3.1"); </script> 
	<script type="text/javascript" src="js/jquery-ui-personalized-1.6rc6.min.js"></script> 
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="js/bootstrap.min.js"></script>
    	<script>
		var graph;
		var xPadding = 30;
		var yPadding = 0;
 		
		
		var data = [];
		var xOffset = 0;
		
		

		function getEquation() {
    			var eqn = "";
     
    			eqn= $('#equation').val();
    			return eqn;
		}

		

		function getMaxX() {
    			var max = 0;
     
    			max= $('#maxX').val();
    			return max;
		}

		function getMinX() {
    			var min = 0;
     
    			min= $('#minX').val();
			
    			return min;
		}
		function getMaxY() {
			
			
    			var max = data[0][1];
			
			
    			for(var i = 1; i < data.length; i++) {
				if (data[i][1] > max) {
            				max = data[i][1];
        			}
			}
     			
    			var maxY =  Math.ceil(max)+1;
			/*if (maxY>50) {	//prevent infinite values of y
				maxY=10;
			}*/
			return maxY;
		}

		function getMinY() {
    			var min = data[0][1];
    			for(var i = 1; i < data.length; i++) {
				
        				if (data[i][1]< min) {
            					min = data[i][1];
					
        				}
    			}
     			
    			
			var minY= Math.floor(min)-1;
			if (minY<-50) {	//prevent -infinite values of y
				minY=-10;
			}
			return minY;
		}
		

		function getXPixel(val) {
    			return ((graph.width()-xPadding) / data.length) * val  + (xPadding * 0.5);
		}
 
		function getYPixel(val) {
			return graph.height()/2 - (((graph.height()/2 - yPadding) / 21) * 2 * val) - yPadding;
		}

		function parseInput() {
			var eqn=getEquation();
			eqn = prepareInput(eqn);
			xOffset = 0 - getMinX();
			data = [];
			var result;
			for (var i=0; i<=getMaxX()-getMinX(); i+=0.015625) {
				result = Parser.parse(eqn);
				result = result.evaluate({x: i-xOffset});
				if (isFinite(result)) {						
					data.push([i-xOffset,result]);
					
				} else {
					data.push([i-xOffset,""]);
					
				}
			}
			drawGraph(data);
		} 
		function drawGraph(data) {
			graph = $('#graph');
    			var c = graph[0].getContext('2d');
			c.clearRect(0, 0, graph[0].width, graph[0].height); 
			c.lineWidth = 2;
			c.strokeStyle = '#333';
			c.font = '8pt serif';
			c.textAlign = "center";
			c.beginPath();
			c.moveTo(getXPixel(xOffset*64), 0);		//xOffset is amount (in x units) by which zero index of the array is displaced from the origin
			//multiply xOffset by 64 since we've incremented the array of x,y values by units of x of (1/64) in parseInput
			c.lineTo(getXPixel(xOffset*64), graph.height());
			c.moveTo(xPadding+285-(graph.width()/2), (graph.height()/2)-yPadding);	
			c.lineTo(graph.width()-15, (graph.height()/2) - yPadding);		
			c.stroke();
			
			for (var i = 0; i < data.length; i++) {	//Write the x axis values
				
				// if the x value is a whole number.............
				if (data[i][0] % 1 == 0) {
					c.fillText(data[i][0], getXPixel(i), graph.height()/2 - yPadding + 20);
				}
			}
			
			c.textAlign = "right";
			c.textBaseline = "middle";
			var minY=getMinY();
			var maxY=getMaxY();
			if (minY > -10) {
				minY=-10;
			}
			if (maxY < 10) {
				maxY=10;
			}
			var ySpan = maxY-minY;
			
			yIncrement = 1;
			
			for(var i = minY; i <= maxY; i+=yIncrement) {	//Write the y-axis values
				c.fillText(i, getXPixel(xOffset*64) - xPadding/3, getYPixel(i));
			}
			
			var i=0;
			c.strokeStyle = '#8a1261';
			c.beginPath();
			c.moveTo(getXPixel(0), getYPixel(data[i][1]));
			
			i++;
			setInterval(function(){ 			//Draw (x,y) points on graph
				var x;
				var y;
				x=getXPixel(i);
				y=getYPixel(data[i][1]);
					
				if (data[i-1][1] > maxY || data[i-1][1] < minY || data[i-1][1] == "") {
					c.moveTo(x,y);
				} else if (data[i][1] != "") {
					c.lineTo(x, y);
					c.stroke();
				}
				i++;
			}, 5, c);
		}
		
		function prepareInput(result) {
			var y =0;
			var x=result.indexOf("e");
			var innerBracketAdded=false;
			result=result.replace(/²/gi, "^2");
			result=result.replace(/³/gi, "^3");
			result=result.replace(/arccos/gi, "arcc");
			result=result.replace(/arcsin/gi, "arcs");
			result=result.replace(/arctan/gi, "arct");
			result=result.replace(/acos/gi, "arcc");
			result=result.replace(/asin/gi, "arcs");
			result=result.replace(/atan/gi, "arct");
			result=result.replace(/cos/gi, "cosi");
			result=result.replace(/sin/gi, "sinq");
			result=result.replace(/tan/gi, "tang");
					
			while (x>-1) {
				if (!isNaN(parseInt(result.charAt(x-1)))) {
					// check whether the char immediately before the function is an integer, in which case insert a *
					result=result.substring(0,x)+ "*"+Math.E + result.substring(x+1, result.length);
				} else {
					result=result.substring(0,x)+ Math.E + result.substring(x+1, result.length);
				}
						
				x=result.indexOf("e");
			}
					
			x=result.indexOf("π");
			while (x>-1) {
				if (!isNaN(parseInt(result.charAt(x-1)))) {
					// check whether the char immediately before the function is an integer, in which case insert a *
					result=result.substring(0,x)+ "*"+ Math.PI + result.substring(x+1, result.length);
				} else {
					result=result.substring(0,x)+ Math.PI + result.substring(x+1, result.length);
				}
						
				x=result.indexOf("π");
			}
		
			x = result.indexOf("^-");
			if (x > -1) {
				while (!isNaN(parseInt(result.charAt(x-1))) || result.charAt(x-1) =="." || result.charAt(x-1)=="-") {
					x--;
				}
				var a = result.substring(x, result.indexOf("^-"));
				y = result.indexOf("^-")+2;
				while (!isNaN(parseInt(result.charAt(y))) || result.charAt(y) =="." || result.charAt(y)=="-" || result.charAt(y)=="+" || result.charAt(y)=="/" || result.charAt(y)=="x" || result.charAt(y)=="^" || result.charAt(y)=="*" || result.charAt(y)=="π") {
					y++;
				}
				var b = result.substring(result.indexOf("^-")+2, y);
				result = result.substring(0, x) + (1 / Math.pow(a, b)) + result.substring(y, result.length);
			}
			x = result.indexOf("y√");
			if (x > -1) {
				while (!isNaN(parseInt(result.charAt(x-1))) || result.charAt(x-1) ==".") {
					x--;
				}
				var a = result.substring(result.indexOf(x+1), result.indexOf("y√"));
				y = result.indexOf("y√")+2;
				while (!isNaN(parseInt(result.charAt(y))) || result.charAt(y) =="." || result.charAt(y)=="-" || result.charAt(y)=="+" || result.charAt(y)=="/" || result.charAt(y)=="x" || result.charAt(y)=="^" || result.charAt(y)=="*" || result.charAt(y)=="π") {
					y++;
				}
				var b = result.substring(result.indexOf("y√")+2, y+1);
				result = result.substring(0, x) +  Math.pow(b, 1/a) + result.substring(y+1, result.length);
			}
					
			x = result.indexOf("√");
			if (x > -1) {
				if (!isNaN(parseInt(result.charAt(x-1)))) {
					// check whether the char immediately before the function is an integer, in which case insert a *
					result=result.substring(0,x)+ "*"+result.substring(x, result.length);
					x++;
				}
				x++;
				while (!isNaN(parseInt(result.charAt(x))) || result.charAt(x) =="." || result.charAt(x)=="-" || result.charAt(x)=="+" || result.charAt(x)=="/" || result.charAt(x)=="x" || result.charAt(x)=="^" || result.charAt(x)=="*" || result.charAt(x)=="π") {
					x++;
				}
				var a = result.substring(result.indexOf("√")+1, x+1);
				result = result.substring(0, result.indexOf("√")) +  Math.pow(a, 0.5) + result.substring(x+1, result.length);
			}
					
			x=result.indexOf("arcs");
			while (x>-1) {	
				if (result.charAt(x+5)!="(") {
					result=result.replace("arcs ", "arcs (");
					innerBracketAdded=true;
				}
				y = x-1;
				while (result.charAt(y) == "(") {
					y--;
				}
				if (!isNaN(parseInt(result.charAt(y)))) {
					result=result.substring(0,y+1)+ "*"+result.substring(y+1, result.length);
					x++;
				}
				x+=6;
				while (result.charAt(x)!="" && result.charAt(x)!=")") {
					x++;
				} 
				if (result.charAt(x)!=")" || innerBracketAdded) {
					result = result.substring(0, x) + ")"+ result.substring(x,result.length);
				} else {
					result = result.substring(0, result.length);
				}
				if ($(".mode").text()=="deg") {	
					var start=result.indexOf("arcs ");
					var end =start;
					while (result.charAt(end)!=")") {
						end++;
					}
					end++;
					result=result.replace("arcs", "asin");
					var subExpression=result.substring(start, end);
							
					result=result.substring(0, start)+Parser.evaluate(subExpression)*(180/Math.PI)+result.substring(end, result.length);
				} else {
					result=result.replace("arcs", "asin");
				}
						
				x=result.indexOf("arcs");
			}
					
			x=result.indexOf("arcc");
			while (x>-1) {	
				if (result.charAt(x+5)!="(") {
					result=result.replace("arcc ", "arcc (");
					innerBracketAdded=true;
				}
				y = x-1;
				while (result.charAt(y) == "(") {
					y--;
				}
				if (!isNaN(parseInt(result.charAt(y)))) {
					result=result.substring(0,y+1)+ "*"+result.substring(y+1, result.length);
					x++;
				}
				x+=6;
				while (result.charAt(x)!="" && result.charAt(x)!=")") {
					x++;
				} 
				if (result.charAt(x)!=")" || innerBracketAdded) {
					result = result.substring(0, x) + ")"+ result.substring(x,result.length);
				} else {
					result = result.substring(0, result.length);
				}
				if ($(".mode").text()=="deg") {	
					var start=result.indexOf("arcc ");
					var end =start;
					while (result.charAt(end)!=")") {
						end++;
					}
					end++;
					result=result.replace("arcc", "acos");
					var subExpression=result.substring(start, end);
					result=result.substring(0, start)+Parser.evaluate(subExpression)*(180/Math.PI)+result.substring(end, result.length);
				} else {
					result=result.replace("arcc", "acos");
				}
						
				x=result.indexOf("arcc");
			}
			x=result.indexOf("arct");
			while (x>-1) {	
				if (result.charAt(x+5)!="(") {
					result=result.replace("arct ", "arct (");
					innerBracketAdded=true;
				}
				y = x-1;
				while (result.charAt(y) == "(") {
					y--;
				}
				if (!isNaN(parseInt(result.charAt(y)))) {
					result=result.substring(0,y+1)+ "*"+result.substring(y+1, result.length);
					x++;
				}
				x+=6;
				while (result.charAt(x)!="" && result.charAt(x)!=")") {
					x++;
				} 
				if (result.charAt(x)!=")" || innerBracketAdded) {
					result = result.substring(0, x) + ")"+ result.substring(x,result.length);
				} else {
					result = result.substring(0, result.length);
				}
				if ($(".mode").text()=="deg") {	
					var start=result.indexOf("arct ");
					var end =start;
					while (result.charAt(end)!=")") {
						end++;
					}
					end++;
					result=result.replace("arct", "atan");
					var subExpression=result.substring(start, end);
					result=result.substring(0, start)+Parser.evaluate(subExpression)*(180/Math.PI)+result.substring(end, result.length);
				} else {
					result=result.replace("arct", "atan");
				}
						
				x=result.indexOf("arct");
			}
					
			x = result.indexOf("cosi");
					
			while (x>-1) {	
				if (result.charAt(x+5)!="(") {
					result=result.replace("cosi ", "cosi (");	//add opening inner bracket so that the Parser object can read the cos expression
					innerBracketAdded=true;
				}
						
				y = x-1;
				while (result.charAt(y) == "(") {
					y--;
				}
				if (!isNaN(parseInt(result.charAt(y)))) {
					result=result.substring(0,y+1)+ "*"+result.substring(y+1, result.length);
					x++;
				}
				x+=6;
						
				if ($(".mode").text()=="deg") {
					result=result.substring(0,x) + Math.PI/180+"*"+result.substring(x,result.length);
				}
						
				while (result.charAt(x)!="" && result.charAt(x)!=")") {
					x++;
				} 
				if (result.charAt(x)!=")" || innerBracketAdded) {
					result = result.substring(0, x) + ")"+ result.substring(x,result.length);	//add closing inner bracket
				} else {
					result = result.substring(0, result.length);				//don't add closing inner bracket
				}
				result=result.replace("cosi", "cos");
				x = result.indexOf("cosi");
			}
					
			x = result.indexOf("sinq");
			while (x>-1) {	
				if (result.charAt(x+5)!="(") {
					result=result.replace("sinq ", "sinq (");
					innerBracketAdded=true;
				}
						
				y = x-1;
				while (result.charAt(y) == "(") {
					y--;
				}
				if (!isNaN(parseInt(result.charAt(y)))) {
					result=result.substring(0,y+1)+ "*"+result.substring(y+1, result.length);
					x++;
				}
				x+=6;
				if ($(".mode").text()=="deg") {
					result=result.substring(0,x) + Math.PI/180+"*"+result.substring(x,result.length);
				}
						
				while (result.charAt(x)!="" && result.charAt(x)!=")") {
					x++;
				} 
				if (result.charAt(x)!=")" || innerBracketAdded) {
					result = result.substring(0, x) + ")"+ result.substring(x,result.length);
				} else {
					result = result.substring(0, result.length);
				}
				result=result.replace("sinq", "sin");
				x = result.indexOf("sinq");
			}

			x = result.indexOf("tang");
			while (x>-1) {	
				if (result.charAt(x+5)!="(") {
					result=result.replace("tang ", "tang (");
					innerBracketAdded=true;
				}
				y = x-1;
				while (result.charAt(y) == "(") {
					y--;
				}
				if (!isNaN(parseInt(result.charAt(y)))) {
					result=result.substring(0,y+1)+ "*"+result.substring(y+1, result.length);
					x++;
				}
				x+=6;
				if ($(".mode").text()=="deg") {
					result=result.substring(0,x) + Math.PI/180+"*"+result.substring(x,result.length);
				}
						
				while (result.charAt(x)!="" && result.charAt(x)!=")") {
					x++;
				} 
				if (result.charAt(x)!=")" || innerBracketAdded) {
					result = result.substring(0, x) + ")"+ result.substring(x,result.length);
				} else {
					result = result.substring(0, result.length);
				}
				result=result.replace("tang", "tan");
				x = result.indexOf("tang");
			}
			result=result.replace(/ln /gi, "log ");
			x = result.indexOf("log ");
					
			if (x>-1) {
				if (result.charAt(x+4)!="(") {
					result=result.replace(/log /gi, "log (");
					var outerBracketAdded=true;
				}
				y = x-1;
				while (result.charAt(y) == "(") {
					y--;
				}
				if (!isNaN(parseInt(result.charAt(y)))) {
					result=result.substring(0,y+1)+ "*"+result.substring(y+1, result.length);
					x++;
				}
				x+=5;
				while (result.charAt(x)!="" && result.charAt(x)!=")") {
					x++;
				} 
				if (result.charAt(x)!=")" || outerBracketAdded) {
					result = result.substring(0, x) + ")"+ result.substring(x,result.length);
				} else {
					result = result.substring(0, result.length);
				}
			}

			x = result.indexOf("x");
					
			if (x>-1) {
				y = x-1;
				while (result.charAt(y) == "(") {
					y--;
				}
				if (!isNaN(parseInt(result.charAt(y)))) {
					result=result.substring(0,y+1)+ "*"+result.substring(y+1, result.length);
				}
			}
			while (result.indexOf(")(") >-1) {
				result=result.replace(")(", ")*(");
			}
			for (x=0; x<result.length; x++) {
				if (!isNaN(parseInt(result.charAt(x))) && result.charAt(x+1) == "(") {
					result = result.substring(0,x+1) + "*" + result.substring(x+1, result.length);
					x++;
				}
			}
			for (x=0; x<result.length; x++) {
				if (!isNaN(parseInt(result.charAt(x))) && result.charAt(x-1) == ")") {
					result = result.substring(0,x) + "*" + result.substring(x, result.length);
					x++;
				}
			}
			for (x=0; x<result.length; x++) {
				if ((result.charAt(x) == "s" || result.charAt(x) == "c" || result.charAt(x) == "t" || result.charAt(x) == "a") && result.charAt(x-1) == ")") {
					result = result.substring(0,x) + "*" + result.substring(x, result.length);
					x++;
				}
			}
			return result;
		}
		$(document).ready(function(){
			parseInput();
			$(".btn-success").click(function(){ 
				parseInput();
				return false;	// prevent the page reloading
			});
			$(".btn-findProbability").click(function(){ 
				var observation = parseFloat($('#observed').val());
				var mean = parseFloat($('#mean').val());
				var sd = parseFloat($('#sd').val());
				var probability;
				var standardisedValue = (observation - mean)/sd;
				standardisedValue=parseFloat(standardisedValue.toFixed(2));
				for (var i=0; i< standardNormalTable.length; i++) {
					if (standardNormalTable[i][0] == standardisedValue) {
						probability= standardNormalTable[i][1];
					} else if (standardNormalTable[i][0] == -standardisedValue) {
						probability = (1 - standardNormalTable[i][1]).toFixed(4);
					}
				}
				if (standardisedValue < -4) {
					probability=0.00;
				} else if (standardisedValue > 4) {
					probability=1.00;
				}
				$("label").text(probability); 
				return false;	// prevent the page reloading
			});
		});
	</script>

	<div class="container contentContainer" id="dividerThree">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
			</div>
		</div>
  	</div>
    	
	<div class="container contentContainer" id="tables">
		<div class="row" class="center">
			<h1 class="center title">Normal Distribution Table Values</h1>
			<br/><br/>
			<div id="tableForm" class="center">
				<form class="navbar-form">
					<div class="form-group">
						<span class="form-group-addon">Observed value (x)&nbsp&nbsp&nbsp&nbsp&nbsp</span>
						<input type="text" placeholder="Enter the observed value (x)" id="observed" class="form-control" />
					</div>
					<br/><br/><br/>
					<div class="form-group">
						<span class="form-group-addon">Mean&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</span>
						<input type="text" placeholder="Enter mean" id="mean"  value="0" class="form-control" />
					</div>
					<br/><br/><br/>
					<div class="form-group">
						<span class="form-group-addon">Standard Deviation &nbsp&nbsp&nbsp&nbsp</span>
						<input type="text" placeholder="Enter standard deviation" id="sd"  value="1" class="form-control" />
					</div>
					<br/><br/><br/>
					<button type="submit" class="btn-findProbability">Find probability</button>
					<br/><br/><br/><br/>
					<div class="form-group">
						<span class="form-group-addon"><h1>P(X < x) = &nbsp
						<label>&nbsp&nbsp0.0</label></h1></span>
						<!--<input type="text" placeholder="" id="probability" class="form-control" />-->
					</div>
					
				</form>
			</div>

			
			<script>
				var standardNormalTable = [];
				standardNormalTable.push([0.00, 0.5]);
				standardNormalTable.push([0.01, 0.5040]);
				standardNormalTable.push([0.02, 0.5080]);
				standardNormalTable.push([0.03, 0.5120]);
				standardNormalTable.push([0.04, 0.5160]);
				standardNormalTable.push([0.05, 0.5199]);
				standardNormalTable.push([0.06, 0.5239]);
				standardNormalTable.push([0.07, 0.5279]);
				standardNormalTable.push([0.08, 0.5319]);
				standardNormalTable.push([0.09, 0.5359]);
				standardNormalTable.push([0.10, 0.5398]);
				standardNormalTable.push([0.11, 0.5438]);
				standardNormalTable.push([0.12, 0.5478]);
				standardNormalTable.push([0.13, 0.5517]);
				standardNormalTable.push([0.14, 0.5557]);
				standardNormalTable.push([0.15, 0.5596]);
				standardNormalTable.push([0.16, 0.5636]);
				standardNormalTable.push([0.17, 0.5675]);
				standardNormalTable.push([0.18, 0.5714]);
				standardNormalTable.push([0.19, 0.5753]);
				standardNormalTable.push([0.20, 0.5793]);
				standardNormalTable.push([0.21, 0.5832]);
				standardNormalTable.push([0.22, 0.5871]);
				standardNormalTable.push([0.23, 0.5910]);
				standardNormalTable.push([0.24, 0.5948]);
				standardNormalTable.push([0.25, 0.5987]);
				standardNormalTable.push([0.26, 0.6026]);
				standardNormalTable.push([0.27, 0.6064]);
				standardNormalTable.push([0.28, 0.6103]);
				standardNormalTable.push([0.29, 0.6141]);
				standardNormalTable.push([0.30, 0.6179]);
				standardNormalTable.push([0.31, 0.6217]);
				standardNormalTable.push([0.32, 0.6255]);
				standardNormalTable.push([0.33, 0.6293]);
				standardNormalTable.push([0.34, 0.6331]);
				standardNormalTable.push([0.35, 0.6368]);
				standardNormalTable.push([0.36, 0.6406]);
				standardNormalTable.push([0.37, 0.6443]);
				standardNormalTable.push([0.38, 0.6480]);
				standardNormalTable.push([0.39, 0.6517]);
				standardNormalTable.push([0.40, 0.6554]);
				standardNormalTable.push([0.41, 0.6591]);
				standardNormalTable.push([0.42, 0.6628]);
				standardNormalTable.push([0.43, 0.6664]);
				standardNormalTable.push([0.44, 0.6700]);
				standardNormalTable.push([0.45, 0.6736]);
				standardNormalTable.push([0.46, 0.6772]);
				standardNormalTable.push([0.47, 0.6808]);
				standardNormalTable.push([0.48, 0.6844]);
				standardNormalTable.push([0.49, 0.6879]);
				standardNormalTable.push([0.50, 0.6915]);
				standardNormalTable.push([0.51, 0.6950]);
				standardNormalTable.push([0.52, 0.6985]);
				standardNormalTable.push([0.53, 0.7019]);
				standardNormalTable.push([0.54, 0.7054]);
				standardNormalTable.push([0.55, 0.7088]);
				standardNormalTable.push([0.56, 0.7123]);
				standardNormalTable.push([0.57, 0.7157]);
				standardNormalTable.push([0.58, 0.7190]);
				standardNormalTable.push([0.59, 0.7224]);
				standardNormalTable.push([0.60, 0.7257]);
				standardNormalTable.push([0.61, 0.7291]);
				standardNormalTable.push([0.62, 0.7324]);
				standardNormalTable.push([0.63, 0.7357]);
				standardNormalTable.push([0.64, 0.7389]);
				standardNormalTable.push([0.65, 0.7422]);
				standardNormalTable.push([0.66, 0.7454]);
				standardNormalTable.push([0.67, 0.7486]);
				standardNormalTable.push([0.68, 0.7517]);
				standardNormalTable.push([0.69, 0.7549]);
				standardNormalTable.push([0.70, 0.7580]);
				standardNormalTable.push([0.71, 0.7611]);
				standardNormalTable.push([0.72, 0.7642]);
				standardNormalTable.push([0.73, 0.7673]);
				standardNormalTable.push([0.74, 0.7704]);
				standardNormalTable.push([0.75, 0.7734]);
				standardNormalTable.push([0.76, 0.7764]);
				standardNormalTable.push([0.77, 0.7794]);
				standardNormalTable.push([0.78, 0.7823]);
				standardNormalTable.push([0.79, 0.7852]);
				standardNormalTable.push([0.80, 0.7881]);
				standardNormalTable.push([0.81, 0.7910]);
				standardNormalTable.push([0.82, 0.7939]);
				standardNormalTable.push([0.83, 0.7967]);
				standardNormalTable.push([0.84, 0.7995]);
				standardNormalTable.push([0.85, 0.8023]);
				standardNormalTable.push([0.86, 0.8051]);
				standardNormalTable.push([0.87, 0.8078]);
				standardNormalTable.push([0.88, 0.8106]);
				standardNormalTable.push([0.89, 0.8133]);
				standardNormalTable.push([0.90, 0.8159]);
				standardNormalTable.push([0.91, 0.8186]);
				standardNormalTable.push([0.92, 0.8212]);
				standardNormalTable.push([0.93, 0.8238]);
				standardNormalTable.push([0.94, 0.8264]);
				standardNormalTable.push([0.95, 0.8289]);
				standardNormalTable.push([0.96, 0.8315]);
				standardNormalTable.push([0.97, 0.8340]);
				standardNormalTable.push([0.98, 0.8365]);
				standardNormalTable.push([0.99, 0.8389]);
				standardNormalTable.push([1.00, 0.8413]);
				standardNormalTable.push([1.01, 0.8438]);
				standardNormalTable.push([1.02, 0.8461]);	
				standardNormalTable.push([1.03, 0.8485]);
				standardNormalTable.push([1.04, 0.8508]);
				standardNormalTable.push([1.05, 0.8531]);
				standardNormalTable.push([1.06, 0.8554]);
				standardNormalTable.push([1.07, 0.8577]);
				standardNormalTable.push([1.08, 0.8599]);
				standardNormalTable.push([1.09, 0.8621]);
				standardNormalTable.push([1.10, 0.8643]);
				standardNormalTable.push([1.11, 0.8665]);
				standardNormalTable.push([1.12, 0.8686]);
				standardNormalTable.push([1.13, 0.8708]);
				standardNormalTable.push([1.14, 0.8729]);
				standardNormalTable.push([1.15, 0.8749]);
				standardNormalTable.push([1.16, 0.8770]);
				standardNormalTable.push([1.17, 0.8790]);
				standardNormalTable.push([1.18, 0.8810]);
				standardNormalTable.push([1.19, 0.8830]);
				standardNormalTable.push([1.20, 0.8849]);
				standardNormalTable.push([1.21, 0.8869]);
				standardNormalTable.push([1.22, 0.8888]);
				standardNormalTable.push([1.23, 0.8907]);
				standardNormalTable.push([1.24, 0.8925]);
				standardNormalTable.push([1.25, 0.8944]);
				standardNormalTable.push([1.26, 0.8962]);
				standardNormalTable.push([1.27, 0.8980]);
				standardNormalTable.push([1.28, 0.8997]);
				standardNormalTable.push([1.29, 0.9015]);
				standardNormalTable.push([1.30, 0.9032]);
				standardNormalTable.push([1.31, 0.9049]);
				standardNormalTable.push([1.32, 0.9066]);
				standardNormalTable.push([1.33, 0.9082]);
				standardNormalTable.push([1.34, 0.9099]);
				standardNormalTable.push([1.35, 0.9115]);
				standardNormalTable.push([1.36, 0.9131]);
				standardNormalTable.push([1.37, 0.9147]);
				standardNormalTable.push([1.38, 0.9162]);
				standardNormalTable.push([1.39, 0.9177]);
				standardNormalTable.push([1.40, 0.9192]);
				standardNormalTable.push([1.41, 0.9207]);
				standardNormalTable.push([1.42, 0.9222]);
				standardNormalTable.push([1.43, 0.9236]);
				standardNormalTable.push([1.44, 0.9251]);
				standardNormalTable.push([1.45, 0.9265]);
				standardNormalTable.push([1.46, 0.9279]);
				standardNormalTable.push([1.47, 0.9292]);
				standardNormalTable.push([1.48, 0.9306]);
				standardNormalTable.push([1.49, 0.9319]);
				standardNormalTable.push([1.50, 0.9332]);
				standardNormalTable.push([1.51, 0.9345]);
				standardNormalTable.push([1.52, 0.9357]);
				standardNormalTable.push([1.53, 0.9370]);
				standardNormalTable.push([1.54, 0.9382]);
				standardNormalTable.push([1.55, 0.9394]);
				standardNormalTable.push([1.56, 0.9406]);
				standardNormalTable.push([1.57, 0.9418]);
				standardNormalTable.push([1.58, 0.9429]);
				standardNormalTable.push([1.59, 0.9441]);
				standardNormalTable.push([1.60, 0.9452]);
				standardNormalTable.push([1.61, 0.9463]);
				standardNormalTable.push([1.62, 0.9474]);
				standardNormalTable.push([1.63, 0.9484]);
				standardNormalTable.push([1.64, 0.9495]);
				standardNormalTable.push([1.65, 0.9505]);
				standardNormalTable.push([1.66, 0.9515]);
				standardNormalTable.push([1.67, 0.9525]);
				standardNormalTable.push([1.68, 0.9535]);
				standardNormalTable.push([1.69, 0.9545]);
				standardNormalTable.push([1.70, 0.9554]);
				standardNormalTable.push([1.71, 0.9564]);
				standardNormalTable.push([1.72, 0.9573]);
				standardNormalTable.push([1.73, 0.9582]);
				standardNormalTable.push([1.74, 0.9591]);
				standardNormalTable.push([1.75, 0.9599]);
				standardNormalTable.push([1.76, 0.9608]);
				standardNormalTable.push([1.77, 0.9616]);
				standardNormalTable.push([1.78, 0.9625]);
				standardNormalTable.push([1.79, 0.9633]);
				standardNormalTable.push([1.80, 0.9641]);
				standardNormalTable.push([1.81, 0.9649]);
				standardNormalTable.push([1.82, 0.9656]);
				standardNormalTable.push([1.83, 0.9664]);
				standardNormalTable.push([1.84, 0.9671]);
				standardNormalTable.push([1.85, 0.9678]);
				standardNormalTable.push([1.86, 0.9686]);
				standardNormalTable.push([1.87, 0.9693]);
				standardNormalTable.push([1.88, 0.9699]);
				standardNormalTable.push([1.89, 0.9706]);
				standardNormalTable.push([1.90, 0.9713]);
				standardNormalTable.push([1.91, 0.9719]);
				standardNormalTable.push([1.92, 0.9726]);
				standardNormalTable.push([1.93, 0.9732]);
				standardNormalTable.push([1.94, 0.9738]);
				standardNormalTable.push([1.95, 0.9744]);
				standardNormalTable.push([1.96, 0.9750]);
				standardNormalTable.push([1.97, 0.9756]);
				standardNormalTable.push([1.98, 0.9761]);
				standardNormalTable.push([1.99, 0.9767]);
				standardNormalTable.push([2.00, 0.9772]);
				standardNormalTable.push([2.01, 0.9778]);
				standardNormalTable.push([2.02, 0.9783]);
				standardNormalTable.push([2.03, 0.9788]);
				standardNormalTable.push([2.04, 0.9793]);
				standardNormalTable.push([2.05, 0.9798]);
				standardNormalTable.push([2.06, 0.9803]);
				standardNormalTable.push([2.07, 0.9808]);
				standardNormalTable.push([2.08, 0.9812]);
				standardNormalTable.push([2.09, 0.9817]);
				standardNormalTable.push([2.10, 0.9821]);
				standardNormalTable.push([2.11, 0.9826]);
				standardNormalTable.push([2.12, 0.9830]);
				standardNormalTable.push([2.13, 0.9834]);
				standardNormalTable.push([2.14, 0.9838]);
				standardNormalTable.push([2.15, 0.9842]);
				standardNormalTable.push([2.16, 0.9846]);
				standardNormalTable.push([2.17, 0.9850]);
				standardNormalTable.push([2.18, 0.9854]);
				standardNormalTable.push([2.19, 0.9857]);
				standardNormalTable.push([2.20, 0.9861]);
				standardNormalTable.push([2.21, 0.9864]);
				standardNormalTable.push([2.22, 0.9868]);
				standardNormalTable.push([2.23, 0.9871]);
				standardNormalTable.push([2.24, 0.9875]);
				standardNormalTable.push([2.25, 0.9878]);
				standardNormalTable.push([2.26, 0.9881]);
				standardNormalTable.push([2.27, 0.9884]);
				standardNormalTable.push([2.28, 0.9887]);
				standardNormalTable.push([2.29, 0.9890]);
				standardNormalTable.push([2.30, 0.9893]);
				standardNormalTable.push([2.31, 0.9896]);
				standardNormalTable.push([2.32, 0.9898]);
				standardNormalTable.push([2.33, 0.9901]);
				standardNormalTable.push([2.34, 0.9904]);
				standardNormalTable.push([2.35, 0.9906]);
				standardNormalTable.push([2.36, 0.9909]);
				standardNormalTable.push([2.37, 0.9911]);
				standardNormalTable.push([2.38, 0.9913]);
				standardNormalTable.push([2.39, 0.9916]);
				standardNormalTable.push([2.40, 0.9918]);
				standardNormalTable.push([2.41, 0.9920]);
				standardNormalTable.push([2.42, 0.9922]);
				standardNormalTable.push([2.43, 0.9925]);
				standardNormalTable.push([2.44, 0.9927]);
				standardNormalTable.push([2.45, 0.9929]);
				standardNormalTable.push([2.46, 0.9931]);
				standardNormalTable.push([2.47, 0.9932]);
				standardNormalTable.push([2.48, 0.9934]);
				standardNormalTable.push([2.49, 0.9936]);
				standardNormalTable.push([2.50, 0.9938]);
				standardNormalTable.push([2.51, 0.9940]);
				standardNormalTable.push([2.52, 0.9941]);
				standardNormalTable.push([2.53, 0.9943]);
				standardNormalTable.push([2.54, 0.9945]);
				standardNormalTable.push([2.55, 0.9946]);
				standardNormalTable.push([2.56, 0.9948]);
				standardNormalTable.push([2.57, 0.9949]);
				standardNormalTable.push([2.58, 0.9951]);
				standardNormalTable.push([2.59, 0.9952]);
				standardNormalTable.push([2.60, 0.9953]);
				standardNormalTable.push([2.61, 0.9955]);
				standardNormalTable.push([2.62, 0.9956]);
				standardNormalTable.push([2.63, 0.9957]);
				standardNormalTable.push([2.64, 0.9959]);
				standardNormalTable.push([2.65, 0.9960]);
				standardNormalTable.push([2.66, 0.9961]);
				standardNormalTable.push([2.67, 0.9962]);
				standardNormalTable.push([2.68, 0.9963]);
				standardNormalTable.push([2.69, 0.9964]);
				standardNormalTable.push([2.60, 0.9965]);
				standardNormalTable.push([2.71, 0.9966]);
				standardNormalTable.push([2.72, 0.9967]);
				standardNormalTable.push([2.73, 0.9968]);
				standardNormalTable.push([2.74, 0.9969]);
				standardNormalTable.push([2.75, 0.9970]);
				standardNormalTable.push([2.76, 0.9971]);
				standardNormalTable.push([2.77, 0.9972]);
				standardNormalTable.push([2.78, 0.9973]);
				standardNormalTable.push([2.79, 0.9974]);
				standardNormalTable.push([2.80, 0.9974]);
				standardNormalTable.push([2.81, 0.9975]);
				standardNormalTable.push([2.82, 0.9976]);
				standardNormalTable.push([2.83, 0.9977]);
				standardNormalTable.push([2.84, 0.9977]);
				standardNormalTable.push([2.85, 0.9978]);
				standardNormalTable.push([2.86, 0.9979]);
				standardNormalTable.push([2.87, 0.9979]);
				standardNormalTable.push([2.88, 0.9980]);
				standardNormalTable.push([2.89, 0.9981]);
				standardNormalTable.push([2.90, 0.9981]);
				standardNormalTable.push([2.91, 0.9982]);
				standardNormalTable.push([2.92, 0.9982]);
				standardNormalTable.push([2.93, 0.9983]);
				standardNormalTable.push([2.94, 0.9984]);
				standardNormalTable.push([2.95, 0.9984]);
				standardNormalTable.push([2.96, 0.9985]);
				standardNormalTable.push([2.97, 0.9985]);
				standardNormalTable.push([2.98, 0.9986]);
				standardNormalTable.push([2.99, 0.9986]);
				standardNormalTable.push([3.00, 0.9987]);
				standardNormalTable.push([3.01, 0.9987]);
				standardNormalTable.push([3.02, 0.9987]);
				standardNormalTable.push([3.03, 0.9988]);
				standardNormalTable.push([3.04, 0.9988]);
				standardNormalTable.push([3.05, 0.9989]);
				standardNormalTable.push([3.06, 0.9989]);
				standardNormalTable.push([3.07, 0.9989]);
				standardNormalTable.push([3.08, 0.9990]);
				standardNormalTable.push([3.09, 0.9990]);
				standardNormalTable.push([3.10, 0.9990]);
				standardNormalTable.push([3.11, 0.9991]);
				standardNormalTable.push([3.12, 0.9991]);
				standardNormalTable.push([3.13, 0.9991]);
				standardNormalTable.push([3.14, 0.9992]);
				standardNormalTable.push([3.15, 0.9992]);
				standardNormalTable.push([3.16, 0.9992]);
				standardNormalTable.push([3.17, 0.9992]);
				standardNormalTable.push([3.18, 0.9993]);
				standardNormalTable.push([3.19, 0.9993]);
				standardNormalTable.push([3.20, 0.9993]);
				standardNormalTable.push([3.21, 0.9993]);
				standardNormalTable.push([3.22, 0.9994]);
				standardNormalTable.push([3.23, 0.9994]);
				standardNormalTable.push([3.24, 0.9994]);
				standardNormalTable.push([3.25, 0.9994]);
				standardNormalTable.push([3.26, 0.9994]);
				standardNormalTable.push([3.27, 0.9995]);
				standardNormalTable.push([3.28, 0.9995]);
				standardNormalTable.push([3.29, 0.9995]);
				standardNormalTable.push([3.30, 0.9995]);
				standardNormalTable.push([3.31, 0.9995]);
				standardNormalTable.push([3.32, 0.9995]);
				standardNormalTable.push([3.33, 0.9996]);
				standardNormalTable.push([3.34, 0.9996]);
				standardNormalTable.push([3.35, 0.9996]);
				standardNormalTable.push([3.36, 0.9996]);
				standardNormalTable.push([3.37, 0.9996]);
				standardNormalTable.push([3.38, 0.9996]);
				standardNormalTable.push([3.39, 0.9997]);
				standardNormalTable.push([3.40, 0.9997]);
				standardNormalTable.push([3.41, 0.9997]);
				standardNormalTable.push([3.42, 0.9997]);
				standardNormalTable.push([3.43, 0.9997]);
				standardNormalTable.push([3.44, 0.9997]);
				standardNormalTable.push([3.45, 0.9997]);
				standardNormalTable.push([3.46, 0.9997]);
				standardNormalTable.push([3.47, 0.9998]);
				standardNormalTable.push([3.48, 0.9998]);
				standardNormalTable.push([3.49, 0.9998]);
				standardNormalTable.push([3.50, 0.9998]);
				standardNormalTable.push([3.51, 0.9998]);
				standardNormalTable.push([3.52, 0.9998]);
				standardNormalTable.push([3.53, 0.9998]);
				standardNormalTable.push([3.54, 0.9998]);
				standardNormalTable.push([3.55, 0.9998]);
				standardNormalTable.push([3.56, 0.9998]);
				standardNormalTable.push([3.57, 0.9998]);
				standardNormalTable.push([3.58, 0.9998]);
				standardNormalTable.push([3.59, 0.9998]);
				standardNormalTable.push([3.60, 0.9998]);
				standardNormalTable.push([3.61, 0.9998]);
				standardNormalTable.push([3.62, 0.9999]);
				standardNormalTable.push([3.63, 0.9999]);
				standardNormalTable.push([3.64, 0.9999]);
				standardNormalTable.push([3.65, 0.9999]);
				standardNormalTable.push([3.66, 0.9999]);
				standardNormalTable.push([3.67, 0.9999]);
				standardNormalTable.push([3.68, 0.9999]);
				standardNormalTable.push([3.69, 0.9999]);
				standardNormalTable.push([3.60, 0.9999]);
				standardNormalTable.push([3.71, 0.9999]);
				standardNormalTable.push([3.72, 0.9999]);
				standardNormalTable.push([3.73, 0.9999]);
				standardNormalTable.push([3.74, 0.9999]);
				standardNormalTable.push([3.75, 0.9999]);
				standardNormalTable.push([3.76, 0.9999]);
				standardNormalTable.push([3.77, 0.9999]);
				standardNormalTable.push([3.78, 0.9999]);
				standardNormalTable.push([3.79, 0.9999]);
				standardNormalTable.push([3.80, 0.9999]);
				standardNormalTable.push([3.81, 0.9999]);
				standardNormalTable.push([3.82, 0.9999]);
				standardNormalTable.push([3.83, 0.9999]);
				standardNormalTable.push([3.84, 0.9999]);
				standardNormalTable.push([3.85, 0.9999]);
				standardNormalTable.push([3.86, 0.9999]);
				standardNormalTable.push([3.87, 0.9999]);
				standardNormalTable.push([3.88, 0.9999]);
				standardNormalTable.push([3.89, 0.9999]);
				standardNormalTable.push([3.90, 1.0000]);
				standardNormalTable.push([3.91, 1.0000]);
				standardNormalTable.push([3.92, 1.0000]);
				standardNormalTable.push([3.93, 1.0000]);
				standardNormalTable.push([3.94, 1.0000]);
				standardNormalTable.push([3.95, 1.0000]);
				standardNormalTable.push([3.96, 1.0000]);
				standardNormalTable.push([3.97, 1.0000]);
				standardNormalTable.push([3.98, 1.0000]);
				standardNormalTable.push([3.99, 1.0000]);
				standardNormalTable.push([4.00, 1.0000]);
			</script>
		</div>

	</div>	

		
	<div class="container contentContainer" id="dividerFour">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="topRow">
			</div>
		</div>
  	</div>			
	

  </body>
</html>
