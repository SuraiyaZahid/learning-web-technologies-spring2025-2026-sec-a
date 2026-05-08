<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != true) {
    header('location: ../C. login/login.php');
    exit();
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $current_password = $_POST['current_password'] ?? '';
    $new_password     = $_POST['new_password'] ?? '';
    $retype_password  = $_POST['retype_password'] ?? '';

    $username = $_SESSION['user']['username'];
    $old_password = $_SESSION['users'][$username]['password'];

    if ($current_password == '' || $new_password == '' || $retype_password == '') {
        $error = 'All fields are required.';
    } elseif ($current_password != $old_password) {
        $error = 'Current password is incorrect.';
    } elseif ($new_password != $retype_password) {
        $error = 'New password and retype password do not match.';
    } else {
        $_SESSION['users'][$username]['password'] = $new_password;
        $_SESSION['user']['password'] = $new_password;

        $success = 'Password changed successfully!';
    }
}

require 'header.php';
?>

<div class="content-with-sidebar">
    <?php require 'sidebar.php'; ?>

    <div class="main">
        <?php if ($error): ?><p class="msg-error"><?= $error ?></p><?php endif; ?>
        <?php if ($success): ?><p class="msg-success"><?= $success ?></p><?php endif; ?>

        <form method="post" action="change_password.php">
            <fieldset>
                <legend>CHANGE PASSWORD</legend>

                <div class="form-row">
                    <label>Current Password</label> :
                    <input type="password" name="current_password">
                </div>

                <div class="form-row">
                    <label style="color:green;">New Password</label> :
                    <input type="password" name="new_password">
                </div>

                <div class="form-row">
                    <label style="color:red;">Retype New Password</label> :
                    <input type="password" name="retype_password">
                </div>

                <hr>

                <div class="btn-row">
                    <input type="submit" name="submit" value="Submit">
                </div>
            </fieldset>
        </form>
    </div>
</div>

<?php require 'footer.php'; ?>