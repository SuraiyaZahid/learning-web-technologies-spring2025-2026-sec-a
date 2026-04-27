<?php
    session_start();

    if(!isset($_SESSION['status']) || $_SESSION['status'] != true){
        header('location: C.php');
        exit();
    }

    // logout
    if(isset($_GET['page']) && $_GET['page'] == 'logout'){
        setcookie('remember_username', '', time() - 3600, '/');
        session_destroy();
        header('location: ../C. login/login.php');
        exit();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<div style="width:800px; margin:auto;">

<table border="1" width="100%">

<tr>
    <td colspan="2">
        <h4 style="display:inline;">X Company</h4>

        <span style="float:right;">
            Logged in as <?php echo $_SESSION['username']; ?> |
            <a href="?page=logout">Logout</a>
        </span>
    </td>
</tr>

<tr valign="top">

    <!-- Left Menu -->
    <td width="30%">
        <h3>Account</h3>
        <hr>

        <ul>
            <li><a href="?page=dashboard">Dashboard</a></li>
            <li><a href="?page=view_profile">View Profile</a></li>
            <li><a href="?page=edit_profile">Edit Profile</a></li>
            <li><a href="?page=change_picture">Change Profile Picture</a></li>
            <li><a href="?page=change_password">Change Password</a></li>
            <li><a href="?page=logout">Logout</a></li>
        </ul>
    </td>

    <!-- Right Content -->
    <td width="70%">

    <?php
        $page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

        // dashboard
        if($page == 'dashboard'){
            echo "<h3>Welcome " . $_SESSION['username'] . "!</h3>";
        }

        // view profile
        elseif($page == 'view_profile'){
            echo "<h3>Profile</h3>";
            echo "Name: " . $_SESSION['username'] . "<br><hr>";
            echo "Email: " . $_SESSION['email'] . "<br><hr>";
            echo "Gender: " . $_SESSION['gender'] . "<br><hr>";
            echo "DOB: " . $_SESSION['dob'] . "<br><hr>";
            echo "<a href='?page=edit_profile'>Edit Profile</a>";
        }

        // edit profile
        elseif($page == 'edit_profile'){
    ?>

        <h3>Edit Profile</h3>

        <form method="post" action="?page=update_profile">
            Name: <input type="text" name="username" value="<?php echo $_SESSION['username']; ?>"><br><br>
            Email: <input type="text" name="email" value="<?php echo $_SESSION['email']; ?>"><br><br>

            Gender:
            <input type="radio" name="gender" value="Male" <?php if($_SESSION['gender']=="Male") echo "checked"; ?>> Male
            <input type="radio" name="gender" value="Female" <?php if($_SESSION['gender']=="Female") echo "checked"; ?>> Female
            <input type="radio" name="gender" value="Other" <?php if($_SESSION['gender']=="Other") echo "checked"; ?>> Other
            <br><br>

            DOB: <input type="text" name="dob" value="<?php echo $_SESSION['dob']; ?>"><br><br>

            <input type="submit" name="submit" value="Update">
        </form>

    <?php
        }

        // update profile
        elseif($page == 'update_profile' && isset($_POST['submit'])){

            $_SESSION['username'] = $_POST['username'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['gender'] = $_POST['gender'];
            $_SESSION['dob'] = $_POST['dob'];

            echo "<p style='color:green;'>Profile updated!</p>";
        }

        // change password
        elseif($page == 'change_password'){
    ?>

        <h3>Change Password</h3>

        <form method="post" action="?page=update_password">
            Current: <input type="password" name="current"><br><br>
            New: <input type="password" name="new"><br><br>
            Confirm: <input type="password" name="confirm"><br><br>
            <input type="submit" name="submit" value="Change">
        </form>

    <?php
        }

        // update password
        elseif($page == 'update_password' && isset($_POST['submit'])){

            if($_POST['current'] != $_SESSION['password']){
                echo "<p style='color:red;'>Wrong current password!</p>";
            }
            elseif($_POST['new'] != $_POST['confirm']){
                echo "<p style='color:red;'>Password not matched!</p>";
            }
            else{
                $_SESSION['password'] = $_POST['new'];
                echo "<p style='color:green;'>Password changed!</p>";
            }
        }

        else{
            echo "<h3>Welcome " . $_SESSION['username'] . "</h3>";
        }
    ?>

    </td>
</tr>

<tr>
    <td colspan="2" align="center">
        <p>Copyright &copy; 2017</p>
    </td>
</tr>

</table>

</div>

</body>
</html>