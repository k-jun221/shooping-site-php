<!--カート内の商品を削除する処理-->
<?php session_start();?>
<?php 'header.php';?>
<?php 'nemu.php';?>
<?php
unset($_SESSION['product'][$_REQUEST['id']]);
echo 'カートから商品を消去しました。';
echo '<hr>';
require 'cart.php';
?>
<?php 'footer.php';?>