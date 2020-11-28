<!--PHPで書かれていない HTMLだけの構成になっている
fromタグ１行目はこれでワンセット 
action＝データを渡す先のページ ページ自体が移り変わる 
method=通信するプロトコルをしているする 今回はgetで送る またはpost
input=入力を示している inputタグはそれ自体が入力フォームであるため、閉じタグが要らない わかりやすく今回は入っている
type=passwordの場合は黒丸になる
name=次のページに送る際に、入力した値を入れる箱をイメージ
get=URLに追記が記載されるが、パスワードも記載される
post=getは見られるし書き換えられるが、postの場合は見られないし、書き換えられない 大量のデーターを送信する場合もpostで送信

-->

<!-- <form action="result.php" method="post">
  名前：<input type="text" name="my_name" />
  <br>
  パスワード：<input type="password" name="password" />
  <br>
  パスワード :<input type="text" name="password" />
<br>
  <input type="submit" value="送信" />
</form> -->

<!-- 課題 -->

<form action="result.php" method="post">
 名前 :<input type="text" name="my_name" />
<br>
 メールアドレス :<input type="text" name="mail" />
<br>
 パスワード :<input type="text" name="password" />
<br>
<input type="submit" value="送信" />
</from>

