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
 <?php include "ads2.html"?>
    <script>
        const urlParams = new URLSearchParams(location.search);
        let url2 ;
        for (const [key,value] of urlParams) {
             url2 = value ;
        }
       function myurl()
       { 
       window.location.href = url2;
       }
        </script>   
          <div id="container-1890edf1c9a79e2d5c416f8ea6a00f7f"></div> 
         <button  type="button" class="btn btn-success"  onclick="timer()">GET LINK</button>
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
<script type='text/javascript' src='//pl17725899.profitablegatetocontent.com/66/7f/9e/667f9e1b97b56e95f65d9a972baeb0f1.js'></script>
 <?php include "ads2.html"?>
</body>
</html>
<!--http://localhost/refer.php?url=/refer2.php?url2=/refer.php?url=/refer2.php?url2=/refer.php?url=/refer2.php?url2=/refer.php?url=/refer2.php?url2=/refer.php?url=/refer2.php--->