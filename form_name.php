<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

</head>
<body>
<?
//Вывод содержимого массива $_REQUEST с помощью функции var_dump(), которая позволяет просмотреть структуру и значения переданного значения.
//Тег <pre> используется для форматирования выводимых данных с сохранением пробелов и переносов строк.
echo "<pre>";
var_dump($_REQUEST);
echo "</pre>";

$arUserInfo = array(
    "name"=>$_REQUEST['user_name'], 
    "second_name"=>$_REQUEST['user_second_name'],
    "last_name"=>$_REQUEST['user_last_name'], 
    "address_city"=>$_REQUEST['user_address_city'],
    "address_street"=>$_REQUEST['user_address_street'],
    "address_house"=>$_REQUEST['user_address_house'],
    "address_flat"=>$_REQUEST['user_address_flat']
);
//Этот код преобразует массив PHP $arUserInfo в формат JSON и сохраняет его в переменной $strUserInfo. Флаг JSON_UNESCAPED_UNICODE обеспечивает сохранение юникод-символов без экранирования, а флаг JSON_PRETTY_PRINT форматирует JSON-вывод, чтобы он был более читабельным для человека.
$strUserInfo = json_encode($arUserInfo, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
?>

	<form action="" method="POST">
		<strong>Ваше имя<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_name" id="user_name" value=""><br>

		<strong>Ваше отчество<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_second_name" id="user_second_name" value=""><br>

		<strong>Ваша фамилия<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_last_name" id="user_last_name" value=""><br>

		<strong>Ваш город<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address_city" id="user_address_city" value=""><br>

        <strong>Ваша улица<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address_street" id="user_address_street" value=""><br>

        <strong>Ваш дом<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address_house" id="user_address_house" value=""><br>

        <strong>Ваша квартира<span class="mf-req">*</span></strong><br>
		<input type="text" name="user_address_flat" id="user_address_flat" value=""><br>

		<input type="submit" name="submit" id="submit" value="Отправить">
	</form>

<!-- Вывод json строки из переменной $strUserInfo внутри HTML-элемента <div> -->
<div id="result">
	<?=$strUserInfo?>
</div>

</body>
</html>