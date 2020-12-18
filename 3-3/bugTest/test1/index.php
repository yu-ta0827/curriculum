<?php
// クラスの名簿の配列
$list = array(
    '山田' => array(
        'ID' => '001',
        '出身' => '函館',
        'メールアドレス' => 'yamada@example.com',
        '性別' => '女性'
    ),
    '田中' => array(
        'ID' => '002',
        'メールアドレス' => 'tanaka@example.com',
        '性別' => '男性'
    ),
    '高橋' => array(
        'ID' => '003',
        '出身' => '札幌',
        'メールアドレス' => 'takahasi@example.com',
        '性別' => '女性',
    ),
    '井上' => array(
        'ID' => '004',
        '出身' => '東京',
        'メールアドレス' => 'inoue@example.com',
        '性別' => '男性',
    ),
    '小林' => array(
        'ID' => '005',
        '出身' => '大阪',
        'メールアドレス' => 'kobayasi@example.com',
        '性別' => '男性',
    ),
    '森' => array(
        'ID' => '006',
        '出身' => '沖縄',
        'メールアドレス' => 'mori@example.com',
        '性別' => '女性',
    )
);

// 取得したクラス名簿を表示するための処理
function getName($list) {
    $i = 0;
    echo "【Aクラスの名簿】" . '<br>';
//配列の中の名前を出す。
    foreach ($list as $key => $member) {
        if ($i < count($list)) {
            echo $key . '<br>';
        }
        $i++;
    }
}

// 大阪出身の方を抽出
function getPeople($list) {
    foreach ($list as $key => $member) {
        if (isset($member['出身']) && $member['出身'] === '大阪') {
            echo "☆クラスで大阪出身の子は" . $key . PHP_EOL . "さんです。";
        }
    }
}
// クラスの一覧を表示
getName($list);
echo '<br>';
// 大阪出身の方を表示
getPeople($list);

// 変えた場所 (1)最初のforeach文のecho出力の際[0]が入っているため、配列で言うとおそらく山田の部分しか出せなくなっていたので
//             取り外せば全部の配列を出し切るまでループするはずです。
//         （2）functionの出力の際に、getpeople()となっており引数がないため、中身の処理をしてくれなかったため引数の$list
//             を入れることによって処理してくれる
?>