<!-- 
type="text"はフォームに入力した内容と習得する
type="password"は入力したものが黒丸になる パスワードなど見られたくないものはこれを使う
type="submit"は送信ボタンが出る ボタンの文字を変えたいのであればvalue属性の文字を変える必要があるこのボタンを押すことでactionの"result.php"に内容を送信することができる 
type="radio"は一つだけ選択できるボタンを作成する よくあるのが性別の選択など
type="hidden"特殊なタイプ 隠しフォームと呼ばれる、画面に表紙させませんが。フォームで送信できます。name属性の他にあらかじめvalueで値を設定しておく
disabledはinputタグに属性として書き込むことができる、表示はされるが選択ができないフォームを作成することができる、ただし値を送信することができないため、hidden属性をもったフォームをもう一つ作成し、disabled入りのフォームと同じ値を持たせて次のページへ送る
また、disabledと似たものにreadonlyというのがある
selectタグ=inputタグではないが似たようなタグでselectがある、年齢のプルダウンタイプのようなもの
selectタグの中にoptionを用意するそれぞれにvalueを設定します。-->

<!-- <form action="result.php" method="post">
        お名前:<input type="text" name="my_name" />
        <br>
        パスワード:<input type ="password" name="password" /> 
        <br>
        性別：
        <input type="radio" name="sex" value="男性">男性
        <input type="radio" name="sex" value="女性">女性
        <br>
        <input type="hidden" name="hidden_param" value="隠しパラメータから" />
        年齢：
        <select name="number">
         <*?php for ($i=1;$i<=10;$i++){ ?>
            <option value="<*?php echo $i; ?>">
                <*?php echo $i; ?>
            </option>
            <*?php } ?>
        </select>
        <br>
        <input type="submit" value="送信するよ！" />
    </form> -->

    <!-- 課題内容 -->
<form action="result.php" method="post">
    名前：<input type="text" name="name" />
    <br>
    ご希望商品：<input type="radio" name="abc" value="A賞">A賞 
              <input type="radio" name="abc" value="B賞">B賞
              <input type="radio" name="abc" value="C賞">C賞
              <br>
    個数:
    <select name="kazu">
            <?php for ($i=1;$i<=10;$i++){ ?>
                <option value="<?php echo $i; ?>">
                    <?php echo $i; ?>
                </option>
            <?php } ?>
    </select>
    <br>
    <input type="submit" value="申込"/>
</from>
            