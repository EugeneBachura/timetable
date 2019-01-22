<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Преподаватели</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="css/nav.css">
	<script src="script.js"></script>
</head>
<body>
	<?php include 'nav.php'; createMainNav(2) ?>
	<?php include 'db.php'; ?>
	<?php include 'api.php'; ?>
	<?php $teachers = getTeachers($db); ?>
	<div id="content">
		<div class="container-fluid">
			<form name="inputForm" action="teacher.php" method="post" onsubmit="return SendForm();" class="container mt-4">
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
					<label for="teacher" class="col-form-label col-sm-3 mb-1">Преподаватель : </label>
					<div class="col-sm-9 row">
    					<div class="col mb-2">
    						<select class="form-control" id="teacher" name="teacher">
    							<?php if (!is_null($teachers)) foreach ($teachers as $teacher) {?>
								<option value=
								<?php echo "'".$teacher['teacher_id']."'"; ?>
								><?php echo "{$teacher['first_name']} {$teacher['patronymic']} {$teacher['second_name']}"; ?>
								</option>
								<?php } ?>
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
};
 </script> 
</html>
