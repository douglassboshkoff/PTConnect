<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
include "../model/database.php";
include "../model/accounts_db.php";

$userID = $_SESSION['id'];

if(isset($_POST['fname'])){
    $new_fname = $_POST['fname'];
}
if(isset($_POST['lname'])){
    $new_lname = $_POST['lname'];
}
if(isset($_POST['email'])){
    $new_email = $_POST['email'];
}
if(isset($_POST['password'])){
    $new_password = $_POST['password'];
}
if(isset($_POST['gradyear'])){
    $new_gradyear = $_POST['gradyear'];
}
if(isset($_POST['bio'])){
    $new_bio = $_POST['bio'];
}
if(isset($_POST['go'])){
    $go = $_POST['go'];
}
else{
    $go = 0;
}
if($go == 1){
    update_user($userID, $new_fname, $new_lname, $new_email, $new_password, $new_gradyear, $new_bio);
}

$account = get_user_by_id($userID)->fetch();
?>

<!DOCTYPE html>
<html>
<?php include "header.php" ?>
<head>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" />
</head>
<body>
<div id="wrapper1">
    <div id='wrapper2'>
        <div id="mainform">
            <form action="myProfile.php" method="post">
                <label style="padding-right: 79px;">Name</label>
                <input name="fname" id="fname" type="text" value="<?php echo $account['first_name']?>"/>
                <input name="lname" id="lname" type="text" value="<?php echo $account['last_name']?>"/>
                </br></br>
                <label style="padding-right: 84px;">Email</label>
                <input name="email" id="email" type="text" value="<?php echo $account['email'] ?>"/>
                </br></br>
                <label style="padding-right: 45px;">Password</label>
                <input name="password" id="password" type="password" value="<?php echo $account['password'] ?>"/>
                </br></br>
                <label>PT Grad Year</label>
                <select name="gradyear" id="gradyear">
                    <option><?php echo $account['pt_grad_year'] ?></option>
                    <?php for($i = 2017; $i > 2000; $i--) : ?>
                        <?php if($i != $account['pt_grad_year']) : ?>
                            <option><?php echo $i ?></option>
                        <?php endif ; ?>
                    <?php endfor ; ?>
                </select>
                </br></br></br>
                <label style="padding-right: 102px;">Bio</label><textarea name = "bio" id="bioEdit" rows="6"><?php echo $account['bio']?></textarea></br>
                <input name="go" type="hidden" value="1">
                <input id="saveButton" type="submit" value="Save" /></br></br>
            </form>
        </div>
        <div id="upload">
            <img src="profile.png"/><br>
            <button>Upload</button>
        </div>
    </div>
</div>
</body>
<?php include "footer.php" ?>
</html>
