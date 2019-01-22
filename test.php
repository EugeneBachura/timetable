<head>
	<meta charset="UTF-8">
	<title>Test PHP</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
			<?php include 'db.php'; ?>
			<?php include 'api.php'; ?>
<table class="table table-bordered">
				<tr>
					<th>Номер в БД</th>
					<th>Преподаватель</th>
					<th>Предмет</th>
					<th>Дата</th>
					<th>Время</th>
					<th>Кабинет</th>
					<th>Группа</th>
					<th>Доп. информация</th>
				</tr>
				<?php foreach ($lesons as $leson) {?>
					<tr>
						<td><?php echo $leson['lesson_id']; ?></td>
						<td><?php echo "{$leson['rank']} {$leson['first_name']} {$leson['patronymic']} {$leson['second_name']}"; ?></td>
						<td><?php echo $leson['subject_id']; ?></td>
						<td><?php echo date("d.m.Y", strtotime($leson['date'])); ?></td>
						<td><?php echo date('H:i', strtotime($leson['time_start']));
						echo " - ";
						echo date('H:i', strtotime($leson['time_finish'])); ?></td>
						<td><?php echo $leson['room']; ?></td>
						<td><?php echo $leson['group_id']; ?></td>
						<td><?php echo $leson['info']; ?></td>
					</tr>
				<?php } ?>
</table>