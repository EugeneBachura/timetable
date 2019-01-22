<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Расписание занятий</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/nav.css">
	<script src="script.js"></script>
</head>
<body>
	<div id="content">

	
		<?php include 'nav.php'; createMainNav(1) ?>
	

		<div class="container-fluid">
			<?php include 'db.php'; ?>
			<?php include 'api.php'; ?>
			<?php //$lesons = getAllLesson($db); ?>
			<?php //if (is_array($lesons) || is_object($lesons)) echo "true"; ?>

            <p><form name="inputForm" action="action.php" method="post" onsubmit="return SendForm();">
            <div class="form-group">
 			Выбор дня: C <input type="date" id="date1" name="date1" onclick="dataRange()" min="01-01-2018"/> по <input type="date" id="date2" name="date2" onclick="dataRange()"/>
 			</div>
 			<div class="form-group">
 			Курс: <select name="course">
					<option value="1">Первый курс</option>
  					<option value="2">Второй курс</option>
 					</select>
 			</div>
 			<div class="form-group">
 			Специальность <select name="group">
					<option value="таможенное дело">таможенное дело</option>
  					<option value="международные отношения">международные отношения</option>
 				</select>
 			</div>
 			<input class="btn btn-primary" type="submit" value="Отправить запрос"/>
			</form>
			</p>

		</div>
	</div>

<script>
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
};
</script>

<form name="inputForm" action="action.php" method="post" onsubmit="return SendForm();" class="container">
  <div class="form-group row">
    <label for="date1" class="col-form-label col-sm-3 mb-1">Дата вывода расписания : </label>
    <div class="col-sm-9 row">
    <div class="col-sm-6 mb-3">
    	<input type="date" class="form-control" id="date1" name="date1">
    	<small class="form-text text-muted">Начальная дата</small>
	</div>
	<div class="col-sm-6 mb-3">
    	<input type="date" class="form-control" id="date2" name="date2">
    	<small class="form-text text-muted">Конечная дата</small>
    </div>
	</div>
  </div>
  <div class="form-group row">
    <label for="course" class="col-form-label col-sm-3 mb-1">Курс : </label>
    <div class="col-sm-9 row">
    <div class="col mb-3">
    <select class="form-control" id="course" name="course">
    	<option value="1">Первый курс</option>
  		<option value="2">Второй курс</option>
 	</select>
 	</div>
 	</div>
  </div>
  <div class="form-group row">
    <label for="group" class="col-form-label col-sm-3 mb-1">Специальность : </label>
    <div class="col-sm-9 row">
    <div class="col mb-3">
    <select class="form-control" id="group" name="group">
    	<option value="таможенное дело">таможенное дело</option>
  		<option value="международные отношения">международные отношения</option>
 	</select>
 	</div>
 	</div>
  </div>
  <button type="submit" class="btn btn-primary">Отправить запрос</button>
</form>

</body>
</html>