<?php
//http://www.htmlgoodies.com/beyond/php/article.php/3877766 Website Taken From
// make a note of the current working directory relative to root.
$directory_self = str_replace(basename($_SERVER['PHP_SELF']), '', $_SERVER['PHP_SELF']);

// make a note of the location of the upload handler script
$uploadHandler = 'http://' . $_SERVER['HTTP_HOST'] . $directory_self . 'uploadprocessor.php';

// set a max file size for the html upload form
$max_file_size = 30000;
// size in bytes

// now echo the html page


/**
 * Created by JetBrains PhpStorm.
 * User: Adam
 * Date: 6/8/14
 * Time: 4:40 PM
 * To change this template use File | Settings | File Templates.
 */
?>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1">

    <link rel="stylesheet" type="text/css" href="stylesheetupload.css">

    <title>Upload form</title>

</head>

<body>

<form id="Upload" action="<?php echo $uploadHandler ?>" enctype="multipart/form-data" method="post">

    <h1>
        Upload form
    </h1>

    <p>
        <input type="hidden" name="MAX_FILE_SIZE" value="<?php echo $max_file_size ?>">
    </p>

    <p>
        <label for="file">File to upload:</label>
        <input id="file" type="file" name="file">
    </p>

    <p>
        <label for="submit">Upload:</label>
        <input id="submit" type="submit" name="submit" value="Upload">
    </p>

</form>


</body>

</html>