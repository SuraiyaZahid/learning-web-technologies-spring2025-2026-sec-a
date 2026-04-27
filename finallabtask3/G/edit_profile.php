
<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != true) {
    header('location: ../C. login/login.php');
    exit();
}
?>

<?php


$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name   = trim($_POST['name'] ?? '');
    $email  = trim($_POST['email'] ?? '');
    $gender = $_POST['gender'] ?? '';
    $dob_d  = trim($_POST['dob_d'] ?? '');
    $dob_m  = trim($_POST['dob_m'] ?? '');
    $dob_y  = trim($_POST['dob_y'] ?? '');

    if (!$name || !$email || !$gender || !$dob_d || !$dob_m || !$dob_y) {
        $error = 'All fields are required.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = 'Invalid email address.';
    } else {
        $dob = sprintf('%02d/%02d/%04d', $dob_d, $dob_m, $dob_y);
        $username = $_SESSION['user']['username'];

        $_SESSION['users'][$username]['name']   = $name;
        $_SESSION['users'][$username]['email']  = $email;
        $_SESSION['users'][$username]['gender'] = $gender;
        $_SESSION['users'][$username]['dob']    = $dob;

        // Sync the active session user
        $_SESSION['user'] = $_SESSION['users'][$username];
        $success = 'Profile updated successfully!';
    }
}

$u = $_SESSION['user'];

// Parse dob for form fields
$dobParts = explode('/', $u['dob']);

require 'header.php';
?>

    <div class="content-with-sidebar">
        <?php require 'sidebar.php'; ?>
        <div class="main">
            <?php if ($error): ?><p class="msg-error"><?= $error ?></p><?php endif; ?>
            <?php if ($success): ?><p class="msg-success"><?= $success ?></p><?php endif; ?>

            <form method="post" action="edit_profile.php">
                <fieldset>
                    <legend>EDIT PROFILE</legend>

                    <div class="form-row">
                        <label>Name</label> :
                        <input type="text" name="name" value="<?= htmlspecialchars($u['name']) ?>"/>
                    </div>
                    <div class="form-row">
                        <label>Email</label> :
                        <input type="email" name="email" value="<?= htmlspecialchars($u['email']) ?>"/>
                        &nbsp;<strong>i</strong>
                    </div>
                    <div class="form-row">
                        <label>Gender</label> :
                        <label><input type="radio" name="gender" value="Male"   <?= $u['gender']==='Male'   ? 'checked':'' ?>/> Male</label>
                        <label><input type="radio" name="gender" value="Female" <?= $u['gender']==='Female' ? 'checked':'' ?>/> Female</label>
                        <label><input type="radio" name="gender" value="Other"  <?= $u['gender']==='Other'  ? 'checked':'' ?>/> Other</label>
                    </div>
                    <div class="form-row">
                        <label>Date of Birth</label> :
                        <input type="text" name="dob_d" maxlength="2" value="<?= $dobParts[0] ?? '' ?>" style="width:40px"/>
                        /
                        <input type="text" name="dob_m" maxlength="2" value="<?= $dobParts[1] ?? '' ?>" style="width:40px"/>
                        /
                        <input type="text" name="dob_y" maxlength="4" value="<?= $dobParts[2] ?? '' ?>" style="width:55px"/>
                        <em style="font-size:12px; color:#888;"> (dd/mm/yyyy)</em>
                    </div>

                    <div class="btn-row">
                        <input type="submit" name="submit" value="Submit"/>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>

<?php require 'footer.php'; ?>
