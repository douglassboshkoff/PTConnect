<?php

function get_experiences($id) {
    global $db;
    $query = "SELECT * FROM experiences WHERE accounts_id = '$id'";
    $result = $db->query($query);
    return $result;
}
//Made by Douglass
function get_specific_experience($id) {
    global $db;
    $query = "SELECT * FROM experiences WHERE id = '$id'";
    $result = $db->query($query);
    return $result;
}
//made by Douglass
function delete_experience($id) {
    global $db;
    $query = "Delete FROM experiences WHERE id = '$id'";
    $result = $db->exec($query);
    return $result;
}
function get_content($id) {
    global $db;
    $query = "SELECT content FROM experiences WHERE accounts_id = '$id'";
    $result = $db->query($query);
    return $result->fetch();
}

function get_all_titles() {
    global $db;
    $query = "SELECT distinct title FROM experiences";
    $result = $db->query($query);
    return $result->fetchAll(PDO::FETCH_COLUMN,0);

}

function danny_get_all_titles(){
    global $db;
    $query = "SELECT title FROM experiences";
    $result = $db->query($query);
    return $result;
}

function get_types() {
    global $db;
    $query = 'SELECT DISTINCT type
    FROM experiences
    ORDER BY type';
    $result = $db->query($query);
    return $result->fetchAll(PDO::FETCH_COLUMN,0);
}

function danny_get_types(){
    global $db;
    $query = 'SELECT DISTINCT type
    FROM experiences
    ORDER BY type';
    $result = $db->query($query);
    return $result;
}

function add_experience( $type, $title, $content, $accounts_id){
    global $db;
    $query = "INSERT INTO experiences (`type`, `title`, `content`, `accounts_id`)
    VALUES ('$type', '$title', '$content', '$accounts_id')";
    $result = $db->query($query);
    return $result;
}

function update_experience($id, $type, $title, $content, $accounts_id){
    global $db;
    $query = "UPDATE experiences
    SET type='$type', title='$title', content='$content', accounts_id ='$accounts_id'
    WHERE id='$id'";
    $result = $db->query($query);
    return $result;
}
function get_title_by_type($type){
    global $db;
    $query = "SELECT title from experiences WHERE type = '$type'";
    $result = $db->query($query);
    return $result;
}
?>

