<?php if ( ($_POST['date1']==null) || ($_POST['date2']==null) || ($_POST['course']==null) ) {
	echo "Страница устарела, либо нет данных. Пожалуйста вернитесь и заполните необходимые поля";
	echo "<p><a href=\"index.php\"><<< Назад</a></p>";
	return;
}; ?>
<?php include 'nav.php'; createMainNav(1) ?>
<?php echo "<div class='container'><p><center><b>Расписание занятий с " ?>
<?php echo htmlspecialchars(date('d.m.Y', strtotime($_POST['date1']))); ?>
<?php echo " по " ?>
<?php echo htmlspecialchars(date('d.m.Y', strtotime($_POST['date2']))); ?>
<?php echo ", специальности " ?>
<?php echo $_POST['group']; ?>, <?php echo (int)$_POST['course']; ?>
<?php echo " курса. </b></center></p>" ?>

<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
<link rel="stylesheet" href="css/nav.css">

			<?php include 'db.php'; ?>
			<?php include 'api.php'; ?>
			<?php include 'functions.php'; ?>
			<?php $lesonsDG = getLessonDG($db, $_POST['date1'], $_POST['date2'], $_POST['course'], $_POST['group'] ); ?>
<table class="table table-bordered">
				<tr>
					<th>Дата</th>
					<th>Время</th>
					<th>Преподаватель</th>
					<th>Предмет</th>
					<th>Аудитория</th>
					<th>Доп. информация</th>
				</tr>
				<?php if (!is_null($lesonsDG)) foreach ($lesonsDG as $leson) {?>
					<tr>
						<td><?php echo dateruDay($leson['date']);
						echo "<br/>";
						echo date("d.m.Y", strtotime($leson['date'])); ?></td>
						<td><?php echo date('H:i', strtotime($leson['time_start']));
						echo " - ";
						echo date('H:i', strtotime($leson['time_finish'])); ?></td>
						<td><?php echo "<a href=\"{$leson['link']}\" target=\"_blank\">{$leson['rank']} {$leson['first_name']} {$leson['patronymic']} {$leson['second_name']}</a>"; ?></td>
						<td><?php echo $leson['subject_name']; ?></td>
						<td><?php echo $leson['room']; ?></td>
						<td><?php echo $leson['info']; ?></td>
					</tr>
				<?php } ?>
			</table>
<?php echo "</div>"; ?>