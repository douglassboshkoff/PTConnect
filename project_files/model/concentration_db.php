<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Danny
 * Date: 4/28/14
 * Time: 1:31 PM
 * To change this template use File | Settings | File Templates.
 */

function get_majors() {
    global $db;
    $query = 'SELECT DISTINCT name
   FROM concentration
   WHERE major_minor = 0
   ORDER BY name';
    $result = $db->query($query);
    return $result->fetchAll(PDO::FETCH_COLUMN,0);
}

function danny_get_majors(){
    global $db;
    $query = 'SELECT DISTINCT name
   FROM concentration
   WHERE major_minor = 0
   ORDER BY name';
    $result = $db->query($query);
    return $result;
}

function get_minors() {
    global $db;
    $query = 'SELECT DISTINCT name
   FROM concentration
   WHERE major_minor = 1
   ORDER BY name';
    $result = $db->query($query);
    $majors = $result->fetch();
    return $majors;
}

function add_concentration($name, $major_minor) {
    global $db;
    $query = "INSERT INTO concentration (name, major_minor) VALUES ('$name', '$major_minor')";
    $db->exec($query);
    //useable but not finished, needs editing to add in accounts_id and univiersities_id
}

function remove_concentration($id) {
    global $db;
    $query = "DELETE FROM concentrations WHERE id = '$id'";
    $db->exec($query);
}

function update_concentration($id, $name, $major_minor, $universities_id, $accounts_id) {
    global $db;
    $query = "UPDATE concentrations SET name = '$name', major_minor = '$major_minor', universities_id = '$universities_id', accounts_id = '$accounts_id'
               WHERE id = '$id'";
    $db->exec($query);
}



?>
