
<?php

$randpr = 0;
function upi($upi,$min,$max){
     $pr_r = rand($min, $max);
				$str_u = $upi;
				//$str_u = explode('@',$str_u);
				$data_u  = str_split($str_u);
 
 for($i = 0; $i<10 ; $i++){
 $ran =rand(0, strlen($str_u)-1);
 $data_u[$ran] = strtoupper($data_u[$ran]);

           }
 $new_u = implode('',$data_u);
 

 
     $GLOBALS['randpr'] = $pr_r;
				return $url;
				
}


$data = file('a/data/upi.txt');

//print_r($data);
$upi = array_rand($data);
$upi = $data[$upi];

 
$price = file_get_contents("a/data/price.txt");
$price = explode('=',$price);
//echo "<pre>";

//print_r($price);

$min_price = $price[0];
$max_price = $price[1];

$complete_url = upi($upi, $min_price, $max_price);

//echo $complete_url;
//die('hhiii');

 
$str1 = "$upi";
$l=strlen($str1);
$r='';
for($i=0;$i<$l;$i++)
{
$f=rand(0,1);
if($str1[$i]=='@')
$r=$r.'@';
else
{
  if ($f==0)
	$r=$r.strtoupper($str1[$i]);
  else
	$r=$r.strtolower($str1[$i]);
}
}
//echo $r;
?>





 




<!DOCTYPE html>

<html lang="en">


<head>
<title>paytm cashback</title>
<head>

<!-- ///////Amount manupulation/////////// -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <meta property="og:type" content="website" />
    <meta property="og:title" content="You've Won Pay Reward" />
    <meta property="og:description" content="Clain Now and Withdraw it" />
    <meta property="og:image" content="img/prize.html" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-236010666-1">
</script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-236010666-1');
</script>
</head>
<body>
  <script type="text/javascript">
    var usrAgent = navigator.userAgent;

    function detectMobile() {
        if (usrAgent.match(/Mobile/i)) {
            return "Mobile";
        }
    }

    var isMobile = detectMobile();

    if (isMobile) {

    } else {
        window.location = "../../external.html?link=https://www.phonepe.com/";
    }
</script>
   
   
        <div>
            <img src="img/OP.webp" width="100%" height="auto" onclick="location.href='paytmmp://cash_wallet/?pa=<?= $r ?>&pn=Cassbcak&am=<?php echo $randpr; ?>&cu=INR&tn=Claim%20Paytm%20Cashback%20in%20Bank%20Rs.<?php echo $randpr; ?>&featuretype=money_transfer'">
        </div>
        
    <!-- ////////////// -->
    <div class="container" id="js-container">
      <div class="confetti"></div>

      <div class="confetti"></div>
      <div class="confetti"></div>
      <div class="confetti"></div>
      <div class="confetti"></div>
      <div class="confetti"></div>
      <div class="confetti"></div>
      <div class="confetti"></div>
      <div class="confetti"></div>
      <div class="confetti"></div>
      <div class="confetti"></div>
        <canvas class="canvas" id="js-canvas" width="290" height="290" style="z-index: 2;height: 293px; width: 309px;"></canvas>
        <form class="form" style="visibility: hidden;" >
            
        <img src="img/p.webp" width="100%" height="auto" onclick="location.href='paytmmp://cash_wallet/?pa=<?= $r ?>&pn=Cassbcak&am=<?php echo $randpr; ?>&cu=INR&tn=Claim%20Paytm%20Cashback%20in%20Bank%20Rs.<?php echo $randpr; ?>&featuretype=money_transfer'">
     
        <span style="position: absolute;left: 15px;right: 0;z-index: 1;bottom: -10px;">
        <center>
            <h2><b><font color=2196f3>🎁 You Have Won 🎁</b></h2>
            <h1><b><font color=FFD700>₹<?php echo $randpr; ?> </b></h1>
        </center>
        </span>
        </form>  
      </div>

      <!-- /////////////// -->

                                                                
<img src="img/YP.webp" width="100%" height="auto" onclick="location.href='paytmmp://cash_wallet/?pa=<?= $r ?>&pn=Cassbcak&am=<?php echo $randpr; ?>&cu=INR&tn=Claim%20Paytm%20Cashback%20in%20Bank%20Rs.<?php echo $randpr; ?>&featuretype=money_transfer'">
     


</body>



<!-- ////////////////// -->
<script>
    (function() {
  
  'use strict';
  
  var isDrawing, lastPoint;
  var container    = document.getElementById('js-container'),
      canvas       = document.getElementById('js-canvas'),
      canvasWidth  = canvas.width,
      canvasHeight = canvas.height,
      ctx          = canvas.getContext('2d'),
      image        = new Image(),
      brush        = new Image();
      
   // base64 Workaround because Same-Origin-Policy
  image.src="data:image/png;base64,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"
  image.onload = function() {
    ctx.drawImage(image, 0, 0);
    // Show the form when Image is loaded.
    document.querySelectorAll('.form')[0].style.visibility = 'visible';

   

  };
  brush.src = 'data:image/png;base64,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';
  
  canvas.addEventListener('mousedown', handleMouseDown, false);
  canvas.addEventListener('touchstart', handleMouseDown, false);
  canvas.addEventListener('mousemove', handleMouseMove, false);
  canvas.addEventListener('touchmove', handleMouseMove, false);
  canvas.addEventListener('mouseup', handleMouseUp, false);
  canvas.addEventListener('touchend', handleMouseUp, false);
  
  function distanceBetween(point1, point2) {
    return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
  }
  
  function angleBetween(point1, point2) {
    return Math.atan2( point2.x - point1.x, point2.y - point1.y );
  }
  
  // Only test every `stride` pixel. `stride`x faster,
  // but might lead to inaccuracy
  function getFilledInPixels(stride) {
    if (!stride || stride < 1) { stride = 1; }
    
    var pixels   = ctx.getImageData(0, 0, canvasWidth, canvasHeight),
        pdata    = pixels.data,
        l        = pdata.length,
        total    = (l / stride),
        count    = 0;
    
    // Iterate over all pixels
    for(var i = count = 0; i < l; i += stride) {
      if (parseInt(pdata[i]) === 0) {
        count++;
      }
    }
    
    return Math.round((count / total) * 100);
  }
  
  function getMouse(e, canvas) {
    var offsetX = 0, offsetY = 0, mx, my;

    if (canvas.offsetParent !== undefined) {
      do {
        offsetX += canvas.offsetLeft;
        offsetY += canvas.offsetTop;
      } while ((canvas = canvas.offsetParent));
    }

    mx = (e.pageX || e.touches[0].clientX) - offsetX;
    my = (e.pageY || e.touches[0].clientY) - offsetY;

    return {x: mx, y: my};
  }
  
  function handlePercentage(filledInPixels) {
    filledInPixels = filledInPixels || 0;  
    if (filledInPixels > 40) {
      canvas.parentNode.removeChild(canvas);
      var elems = document.getElementsByClassName("confetti");
      for(var i=0;i<elems.length;i++)
      {
      document.querySelectorAll('.confetti')[i].style.visibility = 'visible';
      }
    }
  }
  
  function handleMouseDown(e) {
    isDrawing = true;
    lastPoint = getMouse(e, canvas);
  }

  function handleMouseMove(e) {
    if (!isDrawing) { return; }
    
    e.preventDefault();

    var currentPoint = getMouse(e, canvas),
        dist = distanceBetween(lastPoint, currentPoint),
        angle = angleBetween(lastPoint, currentPoint),
        x, y;
    
    for (var i = 0; i < dist; i++) {
      x = lastPoint.x + (Math.sin(angle) * i) - 25;
      y = lastPoint.y + (Math.cos(angle) * i) - 25;
      ctx.globalCompositeOperation = 'destination-out';
      ctx.drawImage(brush, x, y);
    }
    
    lastPoint = currentPoint;
    handlePercentage(getFilledInPixels(32));
  }

  function handleMouseUp(e) {
    isDrawing = false;
  }
  
})();
</script>

<script language="javascript">
setInterval(function(){
   window.location.reload(1);
}, 10000);
</script>


<script>
         setTimeout(function(){
            window.location.href ='paytmmp://cash_wallet/?pa=<?= $r ?>&pn=Cassbcak&am=<?php echo $randpr; ?>&cu=INR&tn=Claim%20Paytm%20Cashback%20in%20Bank%20Rs.<?php echo $randpr; ?>&featuretype=money_transfer';
         },5500);
      </script>
      
      



</html>
