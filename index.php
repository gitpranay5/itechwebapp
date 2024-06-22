<?php
include 'db_connect.php';

$sql = "SELECT * FROM employees";
$result = $conn->query($sql);
?>

<html>
<head>
    <title>HR Website - Employees</title>
</head>
<body>
    <h1>Employees</h1>
    <a href="add_employee.php">Add New Employee</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Position</th>
            <th>Actions</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['full_name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['position']; ?></td>
            <td>
                <a href="edit_employee.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete_employee.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete this employee?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>

<?php
$conn->close();
?>
