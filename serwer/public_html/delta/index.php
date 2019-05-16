<?php
//Włączamy pełne reportowanie błędow.
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

//funkcja isset sprawdza, czy coś istnieje.
if(isset($_GET['a']) AND isset($_GET['b']) AND isset($_GET['c']))
{
   //funkcja is_numeric sprawdza, czy wartość jest liczbą.
   if(is_numeric($_GET['a']) AND is_numeric($_GET['b']) AND is_numeric($_GET['c']))
   {
      //Pobieram dane z tablicy $_GET.
      $a = $_GET['a'];
      $b = $_GET['b'];
      $c = $_GET['c'];
      $delta = $b * $b - 4 * $a * $c;

      if($delta>0)
      {
         $x1 = (-$b - sqrt($delta))/2 * $a;
         $x2 = (-$b + sqrt($delta))/2 * $a;
         include('views/delta-1.php');
      }

      elseif($delta==0)
      {
         $x = -$b / (2 * $a);
         include('views/delta-2.php');
      }

      else
      {
         $komunikat = 'Równanie nie posiada miejsc zerowych.';
         include('views/delta-3.php');
      }
   }

   else
   {
      include('views/error.php');
   }
}

else
{
   include('views/form.php');
}