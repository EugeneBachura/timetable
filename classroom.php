<?php if ( ($_POST['date1']==null) || ($_POST['date2']==null) || ($_POST['classroom']==null) ) {
	echo "Страница устарела, либо нет данных. Пожалуйста вернитесь и заполните необходимые поля";
	echo "<p><a href=\"classrooms.php\"><<< Назад</a></p>";
	return;
}; ?>
<?php include 'nav.php'; createMainNav(3) ?>
<?php include 'db.php'; ?>
<?php include 'api.php'; ?>
<?php include 'functions.php'; ?>
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/nav.css" crossorigin="anonymous">
<?php $сlassroomTimetable = getClassroomTimetable($db, $_POST['date1'], $_POST['date2'], $_POST['classroom'] ); ?>
<div class="container">
<p><?php $startDate = date("d.m.Y", strtotime($_POST['date1']));
$finishDate = date('d.m.Y', strtotime($_POST['date2']));
echo "<center><b>Расписание занятий в аудитории {$_POST['classroom']} с {$startDate} по {$finishDate}</b></center>";?></p>
<table class="table table-bordered">
	<tr>
					<th>Дата</th>
					<th>Время</th>
					<th>Преподаватель</th>
					<th>Предмет</th>
					<th>Группа(-ы)</th>
	</tr>
	<?php if (!is_null($сlassroomTimetable)) foreach ($сlassroomTimetable as $сlassroom) {?>
	<tr>
					<td><?php echo dateruDay($сlassroom['date']);
					echo "<br/>";
					echo date("d.m.Y", strtotime($сlassroom['date'])); ?></td>
					<td><?php echo date('H:i', strtotime($сlassroom['time_start']));
					echo " - ";
					echo date('H:i', strtotime($сlassroom['time_finish'])); ?></td>
					<td><?php echo "<a href=\"{$leson['link']}\" target=\"_blank\">{$сlassroom['rank']} {$сlassroom['first_name']} {$сlassroom['patronymic']} {$сlassroom['second_name']}</a>"; ?></td>
					<td><?php echo $сlassroom['subject_name']; ?></td>
					<td><?php echo "{$сlassroom['course']} курс <br/> Специальность(-и) {$сlassroom['group_name']} "; ?></td>
	</tr>
<?php } ?>
</table>
</div>