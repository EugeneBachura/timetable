<?php 
function getAllLesson($db)
{
	$sql = "SELECT * FROM lesson
			LEFT JOIN teacher ON lesson.teacher_id = teacher.teacher_id";
	$result = array();
	$stmt = $db -> prepare($sql);
	//echo "<pre>";
	//print_r($stmt);
	//echo "</pre>";

	$stmt->execute();
	/*$res = $stmt->execute();
	echo "<pre>";
	print_r($res);
	echo "</pre>";*/

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { // рассмотреть fetchAll (режим FETCH_BOTH)
        $result[$row['lesson_id']] = $row;
        /*echo "<pre>";
        print_r($result[$row['lesson_id']]);
        echo "</pre>";*/
    }
    return $result;
};

function getLessonDG($db, $date1, $date2, $course, $group)
{	
	if (is_null($course) or is_null($group) or is_null($date1) or is_null($date2)) {
		return;
	}
	$sql = "SELECT * FROM lessons
			LEFT JOIN subjects ON lessons.subject_id = subjects.subject_id
			LEFT JOIN teachers ON lessons.teacher_id = teachers.teacher_id
			LEFT JOIN groups ON lessons.group_id = groups.group_id
			WHERE date >= '".$date1."' AND date <= '".$date2."' AND course = ".$course." AND group_name LIKE '%".$group."%' 
			ORDER BY date DESC;";
	//		echo $sql;
	$result = array();
	$stmt = $db -> prepare($sql);

	//$sql = "SELECT * FROM lesson
//			LEFT JOIN teacher ON lesson.teacher_id = teacher.teacher_id";
//	$stmt = $db -> prepare($sql);

//	$sql = "SELECT * FROM lesson
//			LEFT JOIN group ON lesson.group_id = group.group_id";
//	$stmt = $db -> prepare($sql);

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $result[$row['lesson_id']] = $row;
    }

    return $result;
};

function getTeachers($db)
{	
	$sql = "SELECT * FROM teachers
			ORDER BY first_name;";
	//		echo $sql;
	$result = array();
	$stmt = $db -> prepare($sql);

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $result[$row['teacher_id']] = $row;
    }

    return $result;
};

function getTeacherTimetable($db, $date1, $date2, $teacher_id)
{	
	$sql = "SELECT * FROM lessons
			LEFT JOIN subjects ON lessons.subject_id = subjects.subject_id
			LEFT JOIN teachers ON lessons.teacher_id = teachers.teacher_id
			LEFT JOIN groups ON lessons.group_id = groups.group_id
			WHERE date >= '".$date1."' AND date <= '".$date2."' AND teachers.teacher_id = ".$teacher_id." 
			ORDER BY date DESC;";
	//		echo $sql;
	$result = array();
	$stmt = $db -> prepare($sql);

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $result[$row['lesson_id']] = $row;
    }

    return $result;
};

function getClassroomTimetable($db, $date1, $date2, $num_class)
{	
	$sql = "SELECT * FROM lessons
			LEFT JOIN subjects ON lessons.subject_id = subjects.subject_id
			LEFT JOIN teachers ON lessons.teacher_id = teachers.teacher_id
			LEFT JOIN groups ON lessons.group_id = groups.group_id
			WHERE date >= '".$date1."' AND date <= '".$date2."' AND room = ".$num_class." 
			ORDER BY date DESC;";
	//		echo $sql;
	$result = array();
	$stmt = $db -> prepare($sql);

	$stmt->execute();

	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) { 
        $result[$row['lesson_id']] = $row;
    }

    return $result;
};

 ?>