<?php 
 require_once '../controllers/read_controller.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::Read::</title>
</head>
<body>
    <h1>Nomina Completa</h1>
    <table border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Document ID</th>
            <th>Salary</th>
        </tr>
        <?php $result = read(); ?>
        <?php foreach($result as $employee) { ?>
        <tr>
            <td><?php echo $employee->first_name; ?></td>
            <td><?php echo $employee->last_name; ?></td>
            <td><?php echo $employee->doc_id; ?></td>
            <td><?php echo $employee->salary; ?></td>
            <td><a href=<?php echo "update.php?doc_id=".$employee->doc_id?>> editar</a> </td>
            <td><a href=<?php echo "delete.php?doc_id=".$employee->doc_id?>> borrar</a> </td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>