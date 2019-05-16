<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Document</title>
</head>
<body>
<h1>Delta</h1>
<p>Parametry</p>
<ul>
<li>x1 = <?php echo $a ?></li>
<li>x2 = <?php echo $b ?></li>
<li>x3 = <?php echo $c ?></li>
<li>delta = <?php echo $delta ?></li>
</ul>
   
   <?php
      if($delta>0)
      {
         include('views/delta-1.php');
      }

      elseif($delta==0)
      {
         include('views/delta-2.php');
      }

      else
      {
         include('views/delta-3.php');
      }
   ?>

</body>
</html>