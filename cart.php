<?php
session_start();
$cart = null;
if (isset($_SESSION["cart"])) {
    $cart = $_SESSION["cart"];
} else {
    $cart = [];
}
$id = -1;
if (isset($_REQUEST["id"])) {
    $id = $_REQUEST["id"];
}
$mode = "";
if (isset($_REQUEST["mode"])){
    $mode = $_REQUEST["mode"];
}


$_SESSION["cart"] = $cart;

if ($mode == "clear") {
    unset($_SESSION);
    session_destroy();
    $cart = [];
}

?>
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>課題・商品検索アプリケーション</title>
	<link rel="stylesheet" href="./css/style.css" />
	<link rel="stylesheet" href="./css/shoppingcart.css" />	
</head>

<body id="products" class="list">
	<header>
		<h1>商品検索アプリケーション</h1>
	</header>

	<main>
		<article id="result">
			<h2>カート</h2>
			<section>
				<h3>選択された商品一覧</h3>
	<table>
	    <caption><a href="entry.php?id=<?= $i ?>">検索画面に戻る</a> <a href="cart.php?id=<?= $i ?>">カートの中身を見る</a></caption>
	    
		<tr>
			<th>書籍名</th>
			<th>価格</th>
			<th>著者</th>
			<th>ISBN</th>
			<th></th>
		<?php  { ?>	 
		</tr>
		<tr>
						<td>Head First PHP & MySQL</td>
						<td>4,650</td>
						<td>Lynn Beighley</td>
						<td>978-4873114446</td>
					</tr>
					<tr>
						<td>リーダブルコード</td>
						<td>2,600</td>
						<td>Dustin Boswell</td>
						<td>978-4873115658</td>
						
					</tr>
					<tr>
						<td>Head First デザインパターン</td>
						<td>5,060</td>
						<td>Eric Freeman</td>
						<td>978-4873112497</td>
						
					</tr>
					<tr>
						<td>PHPによるデザインパターン入門</td>
						<td>2,400</td>
						<td>下岡 秀幸</td>
						<td>978-4798015163</td>
						
					</tr>
		<?php } ?>
			</table>
			
</body>

</html>
