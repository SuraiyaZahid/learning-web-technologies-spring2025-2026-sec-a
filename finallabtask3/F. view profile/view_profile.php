<?php
session_start();

if(!isset($_SESSION['status']) || $_SESSION['status'] != true){
    header('location: login.php');
    exit();
}

if(!isset($_SESSION['user']['picture'])){
    $_SESSION['user']['picture'] = 'default.png';
}

include 'header.php';
?>

<div class="body">
<?php include 'sidebar.php'; ?>

<div class="right">
<fieldset>
<legend>PROFILE</legend>

<table>
<tr>
<td>
Name: <?php echo $_SESSION['user']['name']; ?><hr>
Email: <?php echo $_SESSION['user']['email']; ?><hr>
Gender: <?php echo $_SESSION['user']['gender']; ?><hr>
Date of Birth: <?php echo $_SESSION['user']['dob']; ?><hr>
<a href="editProfile.php">Edit Profile</a>
</td>

<td>
<img src="<?php echo $_SESSION['user']['picture']; ?>" width="120" height="120"><br>
<a href="changePicture.php">Change</a>
</td>
</tr>
</table>

</fieldset>
</div>
</div>

<?php include 'footer.php'; ?>