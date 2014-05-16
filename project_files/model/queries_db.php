<?php
   function add_query($question) {
       global $db;
       $query = "INSERT INTO queries (question) VALUES ('$question')";
       $db->exec($query);
    }

    function remove_query($id) {
        global $db;
        $query = "DELETE FROM queries WHERE id = '$id'";
        $db->exec($query);
    }

    function update_query($id, $question) {
        global $db;
        $query = "UPDATE queries SET question = '$question' WHERE id = '$id'";
        $db->exec($query);
    }

    function get_queries() {
        global $db;
        $query = "SELECT DISTINCT * FROM queries ORDER BY id";
        $ret = $db->query($query);
        return $ret;
    }

    function get_query($id) {
        global $db;
        $query = "SELECT * FROM queries WHERE id = '$id'";
        $ret = $db->query($query);
        return $ret;
    }
?>
