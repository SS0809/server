<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SERVER</title>
      <!--BOOTSTRAP-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!--BOOTSTRAP-->
</head>
<body>
  <!------------------------------------------------ads-------------------------------------------------->
 <?php include "ads2.html"?>

<!--------------------------------------------------ads-------------------------------------------------->
<script>
const urlParams = new URLSearchParams(location.search);
    let url ;
 for (const [key,value] of urlParams) {
             url = value ;
        }
       function myurl()
       { 
       window.location.href = url;
       }
</script>   
<div id="container-1890edf1c9a79e2d5c416f8ea6a00f7f"></div> 
<button id="element"  type="button" class="btn btn-success" onclick="timer()">GET LINK</button>
<h1>You will be redirected in <time><strong id="seconds">2</strong> seconds</time>.</h1>
<script>
    function timer()
    {
var el = document.getElementById('seconds'),
    total = el.innerHTML,
    timeinterval = setInterval(function () {
        total = --total;
        el.textContent = total;
        if (total <= 0) {
            clearInterval(timeinterval);
               myurl();
        }
    }, 1000);
}
</script>

<style>
#element{
  position:absolute;
  top:-400px;
  right:130px;
  animation: drop 1.4s ease forwards;
  animation-iteration-count:1;
}
@keyframes drop{
  0%{opacity: 0}
  70%{transform: translateY(750px)}
  100%{transform: translateY(700px)}
}
</style>
  
<script type='text/javascript' src='//pl17725900.profitablegatetocontent.com/4e/00/4a/4e004a6e0844349ca44f1dd2fbcd03d2.js'></script>
 <?php include "ads2.html"?>
</body>
</html>
