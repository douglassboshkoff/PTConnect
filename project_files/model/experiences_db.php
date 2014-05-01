<?php

function get_experiences($id) {
    global $db;
    $query = "SELECT * FROM experiences WHERE accounts_id_ac = '$id'";
    $result = $db->query($query);
    return $result->fetch();
}