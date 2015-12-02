<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<head><title>Actividad 6 php</title>
</head>
<body>
<h2>Factorial</h2>
<?php
 function factorial($n){
$fact = $n;
 for($i=1;$i<$n;$i++){
  echo "$i x ";
  $fact=$fact*$i;
 }
 echo "$i = $fact <br>";

 }
factorial(5);

?>


</body>
</html>



