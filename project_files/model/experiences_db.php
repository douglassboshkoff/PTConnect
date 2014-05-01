<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Danny
 * Date: 4/28/14
 * Time: 1:32 PM
 * To change this template use File | Settings | File Templates.
 */
 
  function get_types() {
    global $db;
    $query = 'SELECT DISTINCT type
    FROM experiences
    ORDER BY type';
    $result = $db->query($query);
    $types = $result->fetch();
    return $types;
  }
?>
