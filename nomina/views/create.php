<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>::crear::</title>
</head>

<?php if ($_POST)  {
    require_once '../controllers/create_controller.php';
    $result = create($_POST['first_name'], $_POST['last_name'], $_POST['doc_id'], $_POST['salary']);
    if ($result) {
        echo "Empleado creado";
    } else {
        echo "Error al crear el empleado";
    }
}   else { ?>

<body>
    <form action="create.php" method="post">
        <label for="first_name">First Name</label>
        <input type="text" name="first_name" id="first_name">
        <br>
        <label for="last_name">Last Name</label>
        <input type="text" name="last_name" id="last_name">
        <br>
        <label for="doc_id">Document ID</label>
        <input type="text" name="doc_id" id="doc_id">
        <br>
        <label for="salary">Salary</label>
        <input type="text" name="salary" id="salary">
        <br>
        <input type="submit" value="Crear">
    </form>
<?php } ?>
</body>
</html>
