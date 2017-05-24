
<!DOCTYPE HTML>

<html>
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


<meta name="author" name="SwethaSree Thummishetty"/>


<title>HTML5 Bouncing Ball_CS557(B)_HW2_16936ts</title>
<!--CSS Style Start-->


<style type="text/css">

<!--
h1
 {     display:block; 
	
        width:500px; 
	
        margin:20px auto; 

	padding-bottom:20px; 
	 
      color: #fff
;	
 }

#container-swetha 
{ 
	
width:500px; 
	
margin:0 auto;
 }

#CS557Canvas 
{ 
	
background:#fff; 
	
border:1px solid #000; 
}


</style>


<!--CSS Style End-->

</head>

<body>
	

<div style="position: fixed; z-index: -100; width: 100%; height: 100%">

<iframe width="1366" height="768" src="https://www.youtube.com/embed/QQHuhcBznK0" frameborder="0" allowfullscreen></iframe>


</div>


<h1>Bouncing a Ball Around with HTML5 and JavaScript</h1>

<div id="container-swetha">
	
<canvas id="CS557Canvas" width="300" height="300"></canvas>

</div>


</body>

<script type="text/javascript">

var context;

var dx= -5;

var dy=-5;

var y=130;

var x=10;

function draw()
{
	
context= CS557Canvas.getContext('2d');
	
context.clearRect(0,0,300,300);

	context.beginPath();
	
context.fillStyle="red";
	
context.arc(x,y,20,0,Math.PI*2,true);
	
context.closePath();
	
context.fill();

	if( x<0 || x>300)
	

dx=-dx;
	if( y<0 || y>300)
		
dy=-dy;
		
x+=dx;
		
y+=dy;

	}

setInterval(draw,10); 

</script>
again creaing branch 
</html>

