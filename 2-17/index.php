<?php
$masume = 0;
$kaisu = 0;
    
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

function zikan($aisatu){
    if($aisatu>=0 and $aisatu<=7){
        echo "現在".$aisatu."時台です";
        echo "<br>";
        echo "おはようございます";
    }elseif($aisatu>=8 and $aisatu<=15){
        echo "現在".$aisatu."時台です";
        echo "<br>";
        echo "こんにちは";
    }elseif($aisatu>=16 and $aisatu<=23){
        echo "現在".$aisatu."時台です";
        echo "<br>";
        echo "こんばんは";
    }
}
// ７時の場合
zikan(7);
echo "<br>";
// １２時の場合
zikan(12);
echo "<br>";
// １９時の場合
zikan(19);

?>