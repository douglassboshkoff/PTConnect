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
   $majors = $result->fetch();
   return $majors;
 }
 
?>
