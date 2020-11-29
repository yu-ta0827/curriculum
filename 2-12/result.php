<!-- <*?php
    $my_name = $_POST['my_name'];
    $password = $_POST['password'];
    $sex = $_POST['sex'];
    $hidden_param = $_POST['hidden_param'];
    $age = $_POST['number'];
    ?>
    <p>私の名前は<*?php echo $my_name; ?>です。</P>
    <p>パスワードは<*?php echo $password; ?>です。</p>
    <p>私の性別は<*?php echo $sex; ?>です。</p>
    <p>性別は<*?php echo $hidden_param; ?>です。</p>
    <p>年齢は<*?php echo $age; ?>です。</p> -->

<!-- 課題内容 -->

<?php
    $name = $_POST['name'];
    $abc = $_POST['abc'];
    $kazu = $_POST['kazu'];
    ?>
    <p>お名前:<?php echo $name; ?></p>
    <p>ご希望景品<?php echo $abc; ?></p>
    <p>個数:<?php echo $kazu; ?></p>
    