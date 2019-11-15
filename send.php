<?header('Content-type: text/html; charset=UTF-8');

$mark = $_POST['mark'];
$filler = $_POST['filler'];
$volume = $_POST['volume'];
$mail = $_POST['mail'];

?>
<html>
<head>
<meta http-equiv="Cache-Control" content="no-cache">
<LINK rel="stylesheet" type="text/css" href="style/common.css">
<LINK rel="stylesheet" type="text/css" href="style/divs.css">
<script src="functions.js"></script>
<title>Калькулятор</title>
</head>
<body>
<div class="container">
<div class=message>
<div class=text>
<span class=header>
<?
if (mail($mail, "Заказ с сайта", "Марка бетона:".$mark.".  Наполнитель: ".$filler." Объем: ".$volume," \r\n"))
 {
    echo "Сообщение успешно отправлено";
} else {
    echo "При отправке сообщения возникли ошибки";
  }
?>
</span>
</div>
<div class='back'>
  <a href="index.php">Назад</a>
</div>
</div>
</div>
</body>
</head>
</html>