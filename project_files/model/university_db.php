<?php
/**
 * Created by PhpStorm.
 * User: rubenschuckit
 * Date: 4/24/14
 * Time: 1:44 PM
 */

function add_college($name, $location, $image_link, $graduated) {
    global $db;
    $query = "INSERT INTO universities (name, location, image_link, graduated) VALUES ('$name','$location', '$image_link', '$graduated')";
    $db->exec($query);
}

function get_college_image($collegeID){
    global $db;
    $query = "SELECT image_link FROM universities WHERE id = '$collegeID'";
    $result = $db->query($query);
    return $result->fetch()['image_link'];
}
function get_students($collegeID) {
    global $db;
    $query = "SELECT accounts_id FROM questions WHERE university_id = '$collegeID'";
    $result = $db->query($query);
    return $result->fetchAll();

}
function remove_college($id) {
    global $db;
    $query = "DELETE FROM universities WHERE id = '$id'";
    $db->exec($query);
}

function get_college($userID) {
    global $db;
    $query = "SELECT distinct university_id FROM questions WHERE accounts_id = '$userID'";
    $college = $db->query($query);
    return $college;
}
function get_college_info($userID) {
    global $db;
    $query = "SELECT * FROM universities WHERE accounts_id = '$userID'";
    $college = $db->query($query);
    return $college;
}

function get_specific_college($collegeid) {
    global $db;
    $query = "SELECT * FROM universities WHERE id = '$collegeid'";
    $result = $db->query($query);
    return $result;
}

function get_college_name($collegeID){
    global$db;
    $query = "Select * from universities where id = '$collegeID'";
    $name = $db->query($query);
    return $name;
}

function get_colleges() {
    global $db;
    $query = "SELECT *
        FROM universities
        ORDER BY name";
    $request = $db->query($query);
    return $request;
}

function get_college_locations(){
    global $db;
    $query = "Select Distinct location from universities order by location";
    $request = $db->query($query);
    return $request;
}

function get_students_attending($collegeID){
    global $db;
    $query = "Select Distinct id from concentration where universities_id = '$collegeID'";
    $request = $db->query($query);
    return $request;
}
function update_colleges($name, $location, $image_link) {
    global $db;
    $query = "UPDATE universities SET name = '$name', location = '$location', image_link = '$image_link'";
    $db->exec($query);
}

function get_graduated($collegeID) {
    global $db;
    $grad = 0;
    $query = $db->prepare("SELECT graduated FROM universities WHERE id = '$collegeID'");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_COLUMN, 0);


    for($i = 0; $i < count($result); $i++) {
        if($result[$i] == 1) {
            $grad++;
        }
    }

    return $grad;
}

function get_attended($collegeID) {
    global $db;
    $attend = 0;
    $query = $db->prepare("SELECT graduated FROM universities where id = '$collegeID'");
    $query->execute();

    $result = $query->fetchAll(PDO::FETCH_COLUMN, 0);

    for($i = 0; $i < count($result); $i++) {
        if($result[$i] == 1) {
            $attend++;
        }
    }

    return $attend;
}

function increment_graduated($collegeID) {
    global $db;
    $graduated = get_graduated($collegeID);
    $graduated = $graduated + 1;
    $query = "UPDATE universites SET graduated = '$graduated' WHERE id = '$collegeID'";
    $db->exec($query);
}

function increment_attended($collegeID) {
    global $db;
    $attended = get_attended($collegeID);
    $attended = $attended + 1;
    $query = "UPDATE universites SET attended = '$attended' WHERE id = '$collegeID'";
    $db->exec($query);
}

function graduate($collegeID) {
    global $db;
    $attended = get_attended($collegeID);
    $graduated = get_graduated($collegeID);
    $attended = $attended - 1;
    $graduated = $graduated + 1;
    $query = "UPDATE universities SET attended = '$attended', graduated = '$graduated' WHERE id = '$collegeID'";
    $db->exec($query);
}
function get_college_from_email($email) {
    global $db;

    $query = "SELECT id FROM accounts WHERE email = '$email'";
    $result = $db->query($query);
    $id = $result->fetch();
    $names = array();

    while($id = mysql_fetch_assoc($id)) {
        $query = "SELECT university_id FROM questions WHERE accounts_id = '$id'";
        $result = $db->query($query);
        $id = $result->fetch();

        $query = "SELECT name FROM universities WHERE id = '$id'";
        $result = $db->query($query);
        $names[] = $result->fetch()[0];
    }
    return $names;

}

function university_filter($name, $location, $type){
    global $db;
    $query = "SELECT * FROM universities";

    //Refined Filtration
    $paramBuilder = "";
    if($name != "") {
        $paramBuilder .= " WHERE name = '$name' ";
    }

    if($location != "") {
        if($paramBuilder == ""){
            $paramBuilder .= " WHERE location = '$location'";
        }
        else{
            $paramBuilder .= " AND location = '$location'";
        }
    }

    if($type != ""){
        if($paramBuilder == ""){
            $paramBuilder .= " WHERE `public/private` = '$type'";

        }else{
            $paramBuilder .= " AND `public/private` = '$type'";
        }
    }

    //echo $query.$paramBuilder;
    $result = $db->query($query.$paramBuilder);
    //$result = $result->fetchAll();

    return $result;
}

?>
