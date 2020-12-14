<!-- <*?php
    class Taiyaki {
        public $content;
    
        public function __construct($nakami) {
            $this->content = $nakami;
        } 
    
        public function whatIsContent() {
            echo '中身は'.$this->content.'だよ。';
        }
    }
    // あんこのたい焼き 
    $taiyaki_anko = new Taiyaki("あんこ"); 
    $taiyaki_anko->whatIsContent(); 
    // クリームのたい焼き
    $taiyaki_cream = new Taiyaki("クリーム");
    $taiyaki_cream->whatIsContent();
    echo "<br>";
    ?>-->
    <br>
    <!-- モンスター -->
    <!-- <*?php 
        class Enemy {
            public $name;
            public $stamina;
            public $attack;
    
            public function __construct($name,$stamina = 100,$attack = 10) {
                $this->name = $name;
                $this->stamina = $stamina;
                $this->attack = $attack;
            }
            public function powerUp() {
                $this->attack += 10;
                echo '攻撃力が'.$this->attack.'になった。</br>';
            }
    
            public function sayMyName() {
                echo $this->name.'があらわれた！';
            } 
        }
        // ボスステータス
        class Boss extends Enemy {
            public function specialAttack() {
                echo 'すごい強い一撃！';
            }
            public function sayMyName() {
                echo 'ボスの'.$this->name.'があらわれた！';
            }
        }
        

        // Enemyクラスからスライムを作る
        $slime = new Enemy('スライム',100,10);
        $slime->sayMyName();
        echo $slime->stamina;
        echo $slime->attack;
        echo "<br>";
        $kuribo = new Enemy('クリボー',200,10);
        $kuribo->sayMyName();
        echo $kuribo->stamina;
        echo $kuribo->attack;
        echo "<br>";
        // レベル上げ
        $slime = new Enemy('スライム');
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        $slime->powerUp();
        echo "<br>";
        // ボス
        $boss = new Boss('竜王');
        $boss->sayMyName();
        $boss->specialAttack();

        $slime = new Enemy('スライム');
        $boss = new Boss('竜王');
        $slime->sayMyName();
        $boss->sayMyName();
?> --> 
<br>
<!-- <*?php
class Enemy {
        public $name;
        public $stamina;
        public $attack;
        public static $count = 0;
    
        public function __construct($name, $stamina = 100, $attack = 10) {
            $this->name = $name;
            $this->stamina = $stamina;
            $this->attack = $attack;
            Self::$count += 1;
        }
    
        public static function getEnemyCount() {
            echo Self::$count.'体の敵を作りました！';
        }
}
Enemy::getEnemyCount();
    $slime_A = new Enemy('スライム');
    $slime_B = new Enemy('スライム');
    $slime_C = new Enemy('スライム');
    $slime_D = new Enemy('スライム');
    Enemy::getEnemyCount();
?> -->
<!-- <*?php 
        class Enemy {
            public $name;
            public $stamina;
            public $attack;
            public $deffend;
    
            public function __construct($name,$stamina,$attack,$deffend) {
                $this->name = $name;
                $this->stamina = $stamina;
                $this->attack = $attack;
                $this->deffend = $deffend;
            }
    
            public function sayMyName() {
                echo $this->name.'があらわれた！';
            } 
        }
        // Enemyクラスからスライムを作る
        $slime = new Enemy('スライム',110,10,5);
        echo $slime->name;
        echo $slime->stamina;
        echo $slime->attack;
        echo $slime->deffend;
?> -->
<?php
function devide($int1,$int2) {
    try {
        if($int2 == 0) {
            throw new Exception('0で割ることはできません。');
        }
        return $int1 / $int2;
    } catch(Exception $e) {
        echo "例外処理が発生しました";
        echo "<br>";
        echo $e->getMessage();
    }
}

echo devide(5, 0);