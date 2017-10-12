<?php

// session_start() must be called before _SESSION variables can be used.
if( session_id() == '' ) { // Session has not started
  session_start();
}

// Connect to the database
include("./global/database-info.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Get the school's students from the database.
$result = mysqli_query($conn, 'SELECT first_name, last_name, grade, student_id, end_time, score FROM Students WHERE school_id = \'' . $_SESSION["school_id"] . '\'');

// Put the result into arrays.
$first_names = array();
$last_names = array();
$grades = array();
$student_ids = array();
$scores = array();
$student_did_not_write_test = 1337;
while ($row = mysqli_fetch_assoc($result)) {
  array_push($first_names, $row["first_name"]);
  array_push($last_names, $row["last_name"]);
  array_push($grades, $row["grade"]);
  array_push($student_ids, $row["student_id"]);
  if( $row["end_time"] == 0 ) {
    array_push($scores, $student_did_not_write_test);
  } else {
    array_push($scores, $row["score"]);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

  <head>
      <?php echo file_get_contents("./global/head-tags.html") ?>
      <!-- Prevent this page from being indexed by search engines. -->
      <meta name="robots" content="noindex">
      <title>BCCO School Info</title>
  </head>

  <body class="container">

      <h1 class="title">BC Computing Olympiad 2017</h1>
      <p class="text-center"><?php echo $_SESSION["school_name"] ?></p>

      <!-- Registered Students -->
      <h2 class="text-center" style="margin-top: 40px;">Registered Students</h2>

      <p class="text-center">Please email <i>inovacomputerassociation@gmail.com</i> if you need to change a student's name or email.</p>

      <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Grade</th>
            <th>Student ID</th>
          </tr>
        </thead>
        <tbody>
          <?php

          // Any array can be used with count().
          // All we need is the number of students that go to this school.
          $i = 0;
          while( $i < count($first_names) ) {
            echo("<tr>");
            echo("<td>" . $first_names[$i] . "</td>");
            echo("<td>" . $last_names[$i] . "</td>");
            echo("<td>" . $grades[$i] . "</td>");
            echo("<td>" . $student_ids[$i]. "</td>");
            echo("</tr>");
            $i += 1;
          }

          ?>
        </tbody>
      </table>
      <!-- End Registered Students -->

      <!-- Add a Student -->
      <a href="http://www.inovaca.org/bcco/school-add-student.php" style="text-decoration: none;">
        <button class="btn btn-default" style="margin: 0 auto; display: block; cursor: pointer;">Register A Student</button>
      </a>
      <small class="text-center" style="display: block;">It's free.</small>
      <!-- End Add a Student -->

      <!-- Results -->
      <h2 class="text-center" style="margin-top: 40px;">Results</h2>

      <p class="text-center">Students will only be listed if they wrote the test.</p>

      <table class="table table-striped text-center">
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Score (/18)</th>
          </tr>
        </thead>
        <tbody>
          <?php

          // Any array can be used with count().
          // All we need is the number of students that go to this school.
          $i = 0;
          while( $i < count($first_names) ) {
            if( $scores[$i] != $student_did_not_write_test ) {
              echo("<tr>");
              echo("<td>" . $first_names[$i] . " " . $last_names[$i] . "</td>");
              echo("<td>" . $scores[$i] . "</td>");
              echo("</tr>");
            }
            $i += 1;
          }

          ?>
        </tbody>
      </table>
      <!-- End Results -->

  </body>

</html>
