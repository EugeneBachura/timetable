<?php if ( ($_POST['date1']==null) || ($_POST['date2']==null) || ($_POST['teacher']==null) ) {
	echo "Страница устарела, либо нет данных. Пожалуйста вернитесь и заполните необходимые поля";
	echo "<p><a href=\"teachers.php\"><<< Назад</a></p>";
	return;
}; ?>
<?php include 'nav.php'; createMainNav(2) ?>
<?php include 'db.php'; ?>
<?php include 'api.php'; ?>
<?php include 'functions.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/nav.css">
<?php $teacherTimetable = getTeacherTimetable($db, $_POST['date1'], $_POST['date2'], $_POST['teacher'] ); ?>
<div class="container">
<p><?php $arr_f = array_shift($teacherTimetable);
$startDate = date("d.m.Y", strtotime($_POST['date1']));
$finishDate = date('d.m.Y', strtotime($_POST['date2']));
echo "<center><b>Расписание занятий преподавателя {$arr_f['first_name']} {$arr_f['patronymic']} {$arr_f['second_name']} с {$startDate} по {$finishDate}</b></center>";?></p>
<table class="table table-bordered">
	<tr>
					<th>Дата</th>
					<th>Время</th>
					<th>Предмет</th>
					<th>Группа(-ы)</th>
					<th>Аудитория</th>
					<th>Доп. информация</th>
	</tr>
<?php if (!is_null($teacherTimetable)) foreach ($teacherTimetable as $teacher) {?>
	<tr>
					<td><?php echo dateruDay($teacher['date']);
					echo "<br/>";
					echo date("d.m.Y", strtotime($teacher['date'])); ?></td>
					<td><?php echo date('H:i', strtotime($teacher['time_start']));
					echo " - ";
					echo date('H:i', strtotime($teacher['time_finish'])); ?></td>
					<td><?php echo $teacher['subject_name']; ?></td>
					<td><?php echo "{$teacher['course']} курс <br/> Специальность(-и) {$teacher['group_name']} "; ?></td>
					<td><?php echo $teacher['room']; ?></td>
					<td><?php echo $teacher['info']; ?></td>
	</tr>
<?php } ?>
<?php if (!is_null($teacherName)) foreach ($teacherTimetable as $teacher) {?> 
	
<?php } ?>
</table>
</div>
