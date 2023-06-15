

 <?php

    if(isset($_POST['submit'])){
        $nombre = $_POST ['nombre'];
        $apellido = $_POST ['apellido'];
        $email = $_POST ['email'];

        //Conexión con PDO

        $servername= "localhost";
        $username = "root";
        $password = "";
        $dbname = "cursosql_sonia";

        //Create connection

        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection

        if ($conn -> connect_error) {
            die("Connection failed: ". $conn -> connect_error);
        }

        $sql = "INSERT INTO usuario (nombre, apellido, email)
        VALUES ('$nombre', '$apellido', '$email')";

        if ($conn -> query($sql) === TRUE){
            echo "New record created sucessfully";
        } else {
            echo "Error: " . $sql . "<br>" . $conn ->error;
        }
        $conn -> close();

    }


?>
