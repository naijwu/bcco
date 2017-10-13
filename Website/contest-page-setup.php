<?php
// Number that will be displayed instead of an array index.
$question_display_number = $question_to_display + 1;

// Question buttons squares use this to determine what questions are already answered.
$committed_answers = isset($_POST["committed_answers"]) ? $_POST["committed_answers"] : array();
?>
