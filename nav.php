<?php 
function createMainNav($active) {
echo '<nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="index.php"> <h3 style="margin-bottom: -0.4em; margin-top: -0.3em;">Расписание занятий</h3> <small> ФАКУЛЬТЕТA МЕЖДУНАРОДНЫХ ОТНОШЕНИЙ БГУ </small> </a> 
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1" aria-controls="navbar1" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar1">
      <ul class="navbar-nav mr-auto">';
      switch ($active) {
        case 0: echo '<li class="nav-item">
            <a class="nav-link" href="index.php">Занятия<span class="sr-only">(current)</span></a>
          </li><li class="nav-item">
          <a class="nav-link" href="teachers.php">Преподаватели</a>
        </li><li class="nav-item">
          <a class="nav-link" href="classrooms.php">Аудиторный фонд</a>
        </li>';break;
         case 1: echo '<li class="nav-item active">
            <a class="nav-link" href="index.php">Занятия<span class="sr-only">(current)</span></a>
          </li><li class="nav-item">
          <a class="nav-link" href="teachers.php">Преподаватели</a>
        </li><li class="nav-item">
          <a class="nav-link" href="classrooms.php">Аудиторный фонд</a>
        </li>' ;break;
         case 2: echo '<li class="nav-item">
            <a class="nav-link" href="index.php">Занятия<span class="sr-only">(current)</span></a>
          </li><li class="nav-item active">
          <a class="nav-link" href="teachers.php">Преподаватели</a>
        </li><li class="nav-item">
          <a class="nav-link" href="classrooms.php">Аудиторный фонд</a>
        </li>';break;
         case 3: echo '<li class="nav-item">
            <a class="nav-link" href="index.php">Занятия<span class="sr-only">(current)</span></a>
          </li><li class="nav-item">
          <a class="nav-link" href="teachers.php">Преподаватели</a>
        </li><li class="nav-item active">
          <a class="nav-link" href="classrooms.php">Аудиторный фонд</a>
        </li>';break;
       }
       echo '</ul></div></nav>';
}

 ?>