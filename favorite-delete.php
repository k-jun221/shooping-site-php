<!--お気に入りの商品を消去する処理-->
<?php session_start();?>
<?php require 'header.php';?>
<?php require 'menu.php';?>
<?php
if (isset($_SESSION['customer'])) {
    $pdo=new PDO('mysql:hosr=localhost;dbname=shopping;charset=utf8',
                 'staff', 'password');
    $sql=$pdo->prepare(
        'delete from favorite where customer_id=? and product_id=?');
    $sql->execute([$_SESSION['customer']['id'], $_REQUEST['id']]);
    echo 'お気に入りから商品を消去しました。';
    echo '<hr>';
} else {
    echo 'お気に入りから商品を消去するには、ログインしてください。';
}
require 'favorite.php';
?>
<?php require 'footer.php';?>