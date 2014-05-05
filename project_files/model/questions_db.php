<?php
//Shouldn't this be getComments()/getAnswers()?
function getQuestion($userID, $collegeID, $questionID) {
    $query = "SELECT * FROM questions
	      WHERE accounts_id_ac == '$userID' AND question_id == '$questionID' AND university_id_un == '$collegeID'";
}

?>
