<?php
for($num=1;$num<100;$num++)
switch($num){
    case (($num%3)==0)&&(($num%5)==0);
    print 'FizzBuzz!!';
    echo '<br>';
break;
    case (($num%3)==0);
    print 'Fizz!';
    echo '<br>';
break;
    case (($num%5)==0);
    print 'Buzz!';
    echo '<br>';
break;
default;
echo $num;
echo '<br>';
}
?>