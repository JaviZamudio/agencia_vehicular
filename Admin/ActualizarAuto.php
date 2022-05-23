<form method="get">
    Valor:
    <input type="text" name="Valor" id="Valor" required> Valor <br>
    Atributo:
    <input type="radio" name="Atributo" id="Atributo" value="Id" checked> Id
    <input type="radio" name="Atributo" id="Atributo" value="Imagen"> Imagen
    <input type="radio" name="Atributo" id="Atributo" value="Marca"> Marca
    <input type="radio" name="Atributo" id="Atributo" value="Linea"> Linea
    <input type="radio" name="Atributo" id="Atributo" value="Clase"> Clase
    <input type="radio" name="Atributo" id="Atributo" value="Modelo"> Modelo
    <input type="radio" name="Atributo" id="Atributo" value="NumSerie"> NumSerie
    <input type="radio" name="Atributo" id="Atributo" value="Tipo"> Tipo
    <input type="radio" name="Atributo" id="Atributo" value="Capacidad"> Capacidad
    <input type="radio" name="Atributo" id="Atributo" value="Combustible"> Combustible
    <input type="radio" name="Atributo" id="Atributo" value="Origen"> Origen
    <input type="radio" name="Atributo" id="Atributo" value="Color"> Color
    <input type="radio" name="Atributo" id="Atributo" value="Cilindros"> Cilindros
    <input type="radio" name="Atributo" id="Atributo" value="Puertas"> Puertas
    <input type="radio" name="Atributo" id="Atributo" value="Asientos"> Asientos
    <input type="radio" name="Atributo" id="Atributo" value="Transmision"> Transmision
    <input type="radio" name="Atributo" id="Atributo" value="Precio"> Precio

    <br>
    <input type="submit">

</form>

<?php
    if(isset($_GET['Valor']))
    {
        $Valor = $_GET['Valor'];
        $Atributo = $_GET['Atributo'];
        include("Conexiones.php");
        $Con = Conectar();
        $SQL = "SELECT * FROM vehiculos WHERE $Atributo LIKE '%$Valor%';";
        $Result = Ejecutar($Con, $SQL);

        print(
            "<table border = 1>
                <tr>
                    <th>Id</th>
                    <th>Imagen</th>
                    <th>Marca</th>
                    <th>Linea</th>
                    <th>Clase</th>
                    <th>Modelo</th>
                    <th>NumSerier</th>
                    <th>Tipo</th>
                    <th>Capacidad</th>
                    <th>Combustible</th>
                    <th>Origen</th>
                    <th>Color</th>
                    <th>Cilindros</th>
                    <th>Puertas</th>
                    <th>Asientos</th>
                    <th>Transmision</th>
                    <th>Precio</th>


                </tr>"
        );

        for($F=0; $F<mysqli_num_rows($Result); $F++){
            $Fila = mysqli_fetch_row($Result);
            print(
                "<tr>
                    <td>$Fila[0]</td>
                    <td>$Fila[1]</td>
                    <td>$Fila[2]</td>
                    <td>$Fila[3]</td>
                    <td>$Fila[4]</td>
                    <td>$Fila[5]</td>
                    <td>$Fila[6]</td>
                    <td>$Fila[7]</td>
                    <td>$Fila[8]</td>
                    <td>$Fila[9]</td>
                    <td>$Fila[10]</td>
                    <td>$Fila[11]</td>
                    <td>$Fila[12]</td>
                    <td>$Fila[13]</td>
                    <td>$Fila[14]</td>
                    <td>$Fila[15]</td>
                    <td>$Fila[16]</td>
                </tr>"
            );
        }

        Cerrar($Con);
    }
?>