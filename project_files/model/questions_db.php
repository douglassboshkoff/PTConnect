<?php
//Shouldn't this be getComments()/getAnswers()?
function get_question($userID, $collegeID, $questionID) {
    global $db;
    $query = "SELECT response FROM questions
	      WHERE accounts_id_ac == '$userID' AND question_id == '$questionID' AND university_id_un == '$collegeID'";
    $response = $db->query($query);
    return $response;
}

function add_question($question_id, $response, $university_id, $accounts_id) {
    global $db;
    $query = "INSERT INTO questions (question_id, response, university_id, accounts_id) VALUES ('$question_id','$response','$university_id','$accounts_id')";
    $db->exec($query);
}

function delete_question($id) {
    global $db;
    $query = "DELETE FROM questions WHERE id = '$id'";
    $db->exec($query);
}

function update_question($id, $new_response) {
    global $db;
    $query = "UPDATE questions SET response = '$new_response' WHERE id = '$id'";
    $db->exec($query);
}

?>
