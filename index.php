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

            <form name="inputForm" action="action.php" method="post" onsubmit="return SendForm();" class="container mt-4">
  				<div class="form-group row">
    				<label for="date1" class="col-form-label col-sm-3 mb-1">Дата вывода расписания : </label>
    				<div class="col-sm-9 row">
    					<div class="col-sm-6 mb-2">
    						<input type="date" class="form-control" id="date1" name="date1" onclick="dataRange()">
    						<small class="form-text text-muted">Начальная дата</small>
						</div>
						<div class="col-sm-6 mb-2">
    						<input type="date" class="form-control" id="date2" name="date2" onclick="dataRange()">
    						<small class="form-text text-muted">Конечная дата</small>
    					</div>
					</div>
  				</div>
  				<div class="form-group row">
    				<label for="course" class="col-form-label col-sm-3 mb-1">Курс : </label>
    				<div class="col-sm-9 row">
    					<div class="col mb-2">
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
    					<div class="col mb-2">
    						<select class="form-control" id="group" name="group">
    							<option value="таможенное дело">таможенное дело</option>
  								<option value="международные отношения">международные отношения</option>
 							</select>
 						</div>
 					</div>
  				</div>
  				<div class="col text-center">
  					<button type="submit" class="btn btn-primary text-center">Отправить запрос</button>
  				</div>
			</form>
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

</body>
</html>