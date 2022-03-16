<?php 
    if (!isset($_COOKIE['count'])) 
    { 
      $count = 1;
      setcookie("count", $count);
      echo "You have viewed this page $count times";
    }
    else
    {
      $count = ++$_COOKIE['count'];
      setcookie("count", $count); 
      echo "You have viewed this page ".$_COOKIE['count']." times"; 
      }
?>