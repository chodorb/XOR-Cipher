<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    function Conv1($string, $separator = NULL) {


            for($i=0; $i<=strlen($string)-1;$i++)
            {
            $result= str_pad(decbin(ord($string{$i})),8,'0',STR_PAD_LEFT).$separator;
            }
    return rtrim($result, $separator);
    }


if(!empty($_POST['key'])&&!empty($_POST['string']))
{
  $string=$_POST['string'];
  $key=str_pad(decbin($_POST['key']),8,'0',STR_PAD_LEFT);
  $length=strlen($string);
  $i=0;
  $a=0;
  while ($i <= $length-1)
  {
    //text to ASCII Conversion
    $precoded = Conv1($string[$i], $separator = NULL);
    while ($a <=7)
    {
      //XOR Gate
        if( $key[$a]=="1" && $precoded[$a]=="1")
        {echo "1";}
        if( $key[$a]=="0" && $precoded[$a]=="0")
        {echo "1";}
        if( $key[$a]=="0" && $precoded[$a]=="1")
        {echo "0";}
        if( $key[$a]=="1" && $precoded[$a]=="0")
        {echo "0";}
        $a++;
    }
  echo " ";
  $i++;
  $a=0;
    }
  }
  else {


     ?>
<form method="post">
  Key to cipher (0-255) <input type="number" name="key"><br>
  Text to encrypt <input type="text" name="string"><br>
<input type="submit" value="Send!">
</form>
<?php } ?>
  </body>
</html>
Produced by Bazyli Chodor
