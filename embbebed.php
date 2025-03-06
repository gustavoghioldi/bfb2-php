<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
     $peoples = array(
            array('nombre' => 'Juan', 'apellido' => 'Perez'), 
            array('nombre' => 'Maria', 'apellido' => 'Gomez'),
            array('nombre' => 'Carlos', 'apellido' => 'Rodriguez'),
            array('nombre' => 'Luis', 'apellido' => 'Fernandez'),
            array('nombre' => 'Ana', 'apellido' => 'Jimenez'),
            array('nombre' => 'Pedro', 'apellido' => 'Diaz'),
            array('nombre' => 'Pablo', 'apellido' => 'Moreno'),
            array('nombre' => 'Carmen', 'apellido' => 'Ruiz'),
            array('nombre' => 'Alberto', 'apellido' => 'Gutierrez'),
            array('nombre' => 'Rosa', 'apellido' => 'Navarro')
        );

//  [
//     {"nombre":"Juan","apellido":"Perez"},
//     {"nombre":"Maria","apellido":"Gomez"},
//     {"nombre":"Carlos","apellido":"Rodriguez"},
//     {"nombre":"Luis","apellido":"Fernandez"},
//     {"nombre":"Ana","apellido":"Jimenez"},
//     {"nombre":"Pedro","apellido":"Diaz"},
//     {"nombre":"Pablo","apellido":"Moreno"},
//     {"nombre":"Carmen","apellido":"Ruiz"},
//     {"nombre":"Alberto","apellido":"Gutierrez"},
//     {"nombre":"Rosa","apellido":"Navarro"}
// ]
        // echo json_encode($peoples);
    ?>

    <h1>HOLA PERSONAS</h1>

    <table border="1">
        <tr>
            <th>Nombre</th>
            <th>Apellido</th>
        </tr>
        <?php 
            foreach ($peoples as $people) {
                echo "<tr>";
                echo "<td>".$people['nombre']."</td>";
                echo "<td>".$people['apellido']."</td>";
                echo "</tr>";
            }
        ?>
      
    </table>
    <p>CARLO</p>
        <?php 
            echo $peoples[2]['nombre']." ".$peoples[2]["apellido"];
        ?>
</body>
</html>