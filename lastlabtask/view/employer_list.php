<?php
session_start();
if(!isset($_COOKIE['status'])) {
    header('location: login.php');
    exit();
}
require_once('../model/employer_model.php');
$employers = getAllEmployers();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employer List</title>
</head>
<body>
    <h2>All Employers</h2>
    <a href="admin_home.php">Back</a> | <a href="../controller/logout.php">Logout</a>
    <hr>
    
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Employer Name</th>
            <th>Company Name</th>
            <th>Contact No</th>
            <th>Username</th>
            <th>Action</th>
        </tr>
        <?php foreach($employers as $emp) { ?>
        <tr>
            <td><?php echo $emp['id']; ?></td>
            <td><?php echo $emp['employer_name']; ?></td>
            <td><?php echo $emp['company_name']; ?></td>
            <td><?php echo $emp['contact_no']; ?></td>
            <td><?php echo $emp['username']; ?></td>
            <td>
                <a href="update_employer.php?id=<?php echo $emp['id']; ?>">UPDATE</a> |
                <a href="../controller/delete_employer.php?id=<?php echo $emp['id']; ?>" onclick="return confirm('Are you sure?')">DELETE</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>