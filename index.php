<?php header('Content-type: text/html; charset=UTF-8');?>
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
<div class = "header">
<span class="header">
Калькулятор расчёта стоимости
</span>
</div>
<form name="calc" action="send.php" method="post">
<!--1-->
<div class="calc" id="page1">
<div class = "select">
<select id="selectmark" class="databeton" name = "mark">

<option>Марка бетона</option>

<option value="М100 В7,5">М100 В7,5</option>

<option value="М150 В12,5">М150 В12,5</option>

<option value="М200 В15">М200 В15</option>

<option value="М250 В20">М250 В20</option>

<option value="М300 В22,5">М300 В22,5</option>

<option value="М350 В25">М350 В25</option>

<option value="М400 В30">М400 В30</option>

<option value="М450 В35">М450 В35</option>

<option value="М500 В40">М500 В40</option>

</select>
</div>
<div class="button">
  <input type="button" value="Далее" class="button_dalee" onclick="clickbutton('page2', 'selectmark')">
</div>
</div>
<!--2-->

<div class="calc" id="page2" style='display:none;'>
<div class = "select">
<select id="selectfiller" class="databeton" name="filler">

<option>Наполнитель</option>

<option name = "fill" value="Гравий">Гравий</option>

<option name="fill" value="Гранит">Гранит</option>


</select>
</div>
<div class="button">
  <input type="button" value="Далее" class="button_dalee" onclick="clickbutton('page3', 'selectfiller')">
</div>
</div>

<!--3-->

<div class="calc" id="page3" style='display:none;'>
<div class = "select">
<input name = "volume" maxlength="25" size="40" value="Объем" id="addvolume" class="databeton" onfocus="if(this.value=='Объем') this.value=''">
</div>
<div class="button">
  <input type="button" value="Подсчитать" class="button_dalee" onclick="view_cost()">
</div>
</div>
<!--4-->
<div class="calc" id="page4" style='display:none;'>
<div class = "select">
<div class = "list">
<div class = "list_point"><span class="info">Марка</span></div>
<div class = "list_point"><span class="info">Наполнитель</span></div>
<div class = "list_point"><span class="info">Объем</span></div>
</div>
<div class="list">
<div class = "list_point"><span class="select_data" id="mark"></span></div>
<div class = "list_point"><span class="select_data" id="filler"></span></div>
<div class = "list_point"><span class="select_data" id="volume"></span></div>
</div>
</div>
<div class="cost">
  <span class="cost" id="cost">Цена</span>
</div>
<input name = "mail" id="addmail" type="hidden" value="example@mail.ru">
<div class="button_order">
  <input type="submit" value="Заказать" class="button_dalee">
</div>
</div>
<!--end-->
</form>
<div class="navigation">

<div id="dots-nav">
    <a href="#" onclick="view('page1')" id="page1" class="current"></a>
    <a href="#" onclick="view('page2')" id="page2"></a>
    <a href="#" onclick="view('page3')" id="page3"></a>
    <a href="#" onclick="view_cost()" id="page4"></a>
  </div>

</div>
<div class="error_div">
<span id="error" class="error"></span>
</div>
</div>
</body>
</head>
</html>