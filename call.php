<?php
if(!isset($_REQUEST['phone'])){
    exit();
}
$msg = $_REQUEST['phone'];
?>
Спасибо за заявку. Мы свяжемся по номеру: <?php
echo $msg;
mail('mahanbetov777@gmail.com',"zakaz balkon","tel:".$msg);
mail('zhassulan_96@mail.ru',"zakaz balkon","tel:".$msg);