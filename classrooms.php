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
			<form name="inputForm" action="classroom.php" method="post" onsubmit="return SendForm();" class="container mt-4">
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
                    <label for="classroom" class="col-form-label col-sm-3 mb-1">Аудитория : </label>
                    <div class="col-sm-9 row">
                        <div class="col-sm-6 mb-2">
                            <input type="number" class="form-control" name="classroom" max="1350" min="100" value="" />
                        </div>
                    </div>
                </div>
 			<div class="col text-center">
                <button type="submit" class="btn btn-primary text-center">Отправить запрос</button>
            </div>
			</form>
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