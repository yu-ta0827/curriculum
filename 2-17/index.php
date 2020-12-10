<?php
$masume = 0;
$kaisu = 0;
$time_now = date_default_timezone_set('Asia/Tokyo');

while($masume<40){
        $me = mt_rand(1,6);
    $masume = $masume+$me;
    $kaisu = $kaisu +1;
    echo $kaisu,"回目 =",$me ;
    echo "<br>";
    if($masume >= 40){
        echo "合計".$kaisu."回でゴールしました";
    }
}
?>
<br>
<br>
<br>
<br>
<?php
// ０から７時まではおはよう
// ８から１5まではこんにちは
// １6から23までこんばんわ

date_default_timezone_set('Asia/Tokyo');
$time_now= date("H");

    if($time_now>=0 and $time_now<=7){
        echo "現在".$time_now."時台です";
        echo "<br>";
        echo "おはようございます";
    }elseif($time_now>=8 and $time_now<=15){
        echo "現在".$time_now."時台です";
        echo "<br>";
        echo "こんにちは";
    }elseif($time_now>=16 and $time_now<=23){
        echo "現在".$time_now."時台です";
        echo "<br>";
        echo "こんばんは";
    }

?>