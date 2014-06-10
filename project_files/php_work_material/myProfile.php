<?php
include "../model/database.php";
include "../model/accounts_db.php";
session_start();
$userID = $_SESSION['id'];
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
            <form>
                <label style="padding-right: 79px;">Name</label>
                <input id="fname" type="text" value="<?php echo $account['first_name']?>"/>
                <input id="lname" type="text" value="<?php echo $account['last_name']?>"/>
                </br></br>
                <label style="padding-right: 84px;">Email</label>
                <input id="email" type="text" value="<?php echo $account['email'] ?>"/>
                </br></br>
                <label style="padding-right: 45px;">Password</label>
                <input id="password" type="password" value="<?php echo $account['password'] ?>"/>
                </br></br>
                <label>PT Grad Year</label>
                <select id="gradyear">
                    <option><?php echo $account['pt_grad_year'] ?></option>
                    <?php for($i = 2017; $i > 2000; $i--) : ?>
                        <?php if($i != $account['pt_grad_year']) : ?>
                            <option><?php echo $i ?></option>
                        <?php endif ; ?>
                    <?php endfor ; ?>
                </select>
                </br></br></br>
                <label style="padding-right: 102px;">Bio</label><textarea id="bioEdit" rows="6"><?php echo $account['bio']?></textarea></br>
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
