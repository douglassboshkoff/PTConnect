<?php
//Shouldn't this be getComments()/getAnswers()?
function getQuestion($userID, $collegeID, $questionID) {
    global $db;
    $query = "SELECT response FROM questions
	      WHERE accounts_id_ac == '$userID' AND question_id == '$questionID' AND university_id_un == '$collegeID'";
    $response = $db->query($query);
    return $response;
    //Adam, questions have not been finalized yet but for now they are stored seperatly and cororospond to the question ID
    //in the questions table
}

?>
