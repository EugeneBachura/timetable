<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Аудитории</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/nav.css">
	<script src="script.js"></script>
</head>
<body>
<?php include 'nav.php'; createMainNav(3) ?>
<?php include 'db.php'; ?>
<?php include 'api.php'; ?>
	<div id="content">
		<div class="container-fluid">
			<p><form name="inputForm" action="classroom.php" method="post" onsubmit="return SendForm();">
 			<p>Выбор дня: C <input type="date" id="date1" name="date1" onclick="dataRange()"/> по <input type="date" id="date2" name="date2" onclick="dataRange()"/> </p>
 			<p>Аудитория <input type="number" name="classroom" max="1350" min="100" value="" />
 			<p><input type="submit" class="btn btn-primary" value="Отправить запрос"/></p>
			</form>
			</p>
		</div>
	</div>
</body>
<script language="JavaScript"> 
function SendForm()
{
	if (document.inputForm.date1.value == "")
    {
    	alert('Пожалуйста, выберете дату начала');
    	document.inputForm.date1.focus();
    	return false;
    };
    if (document.inputForm.date2.value == "")
    {
    	alert('Пожалуйста, выберете дату окончания');
    	document.inputForm.date2.focus();
    	return false;
    };
    if (document.inputForm.classroom.value == "")
    {
    	alert('Пожалуйста, введите номер аудитории');
    	document.inputForm.classroom.focus();
    	return false;
    };
};
 </script> 
</html>