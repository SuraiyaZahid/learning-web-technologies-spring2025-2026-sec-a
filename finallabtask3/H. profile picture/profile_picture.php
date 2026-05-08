<?php
session_start();

if (!isset($_SESSION['status']) || $_SESSION['status'] != true) {
    header('location: ../C. login/login.php');
    exit();
}

$error = '';
$success = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (!isset($_FILES['picture']) || $_FILES['picture']['name'] == '') {
        $error = 'Please choose a picture.';
    } else {
        $fileName = $_FILES['picture']['name'];
        $tempName = $_FILES['picture']['tmp_name'];

        $uploadPath = 'uploads/' . $fileName;

        if (move_uploaded_file($tempName, $uploadPath)) {
            $username = $_SESSION['user']['username'];

            $_SESSION['users'][$username]['picture'] = $uploadPath;
            $_SESSION['user']['picture'] = $uploadPath;

            $success = 'Profile picture updated successfully!';
        } else {
            $error = 'Picture upload failed.';
        }
    }
}

$u = $_SESSION['user'];

require 'header.php';
?>

<div class="content-with-sidebar">
    <?php require 'sidebar.php'; ?>

    <div class="main">
        <?php if ($error): ?><p class="msg-error"><?= $error ?></p><?php endif; ?>
        <?php if ($success): ?><p class="msg-success"><?= $success ?></p><?php endif; ?>

        <form method="post" action="change_profile_picture.php" enctype="multipart/form-data">
            <fieldset>
                <legend>PROFILE PICTURE</legend>

                <div class="form-row">
                    <img src="<?= htmlspecialchars($u['picture'] ?? 'default.png') ?>" width="120" height="120">
                </div>

                <div class="form-row">
                    <input type="file" name="picture">
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