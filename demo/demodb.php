<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form>
        <input name ='so1'>
        <input name ='so2'>
        <input type='submit' name='cong' value='cong'>
        <input type='submit' name='tru' value='tru'>
    </form>
    <div> kết quả là:
    <?php 
        if(isset($_GET['cong'])) {
            $result = $_GET['so1'] + $_GET['so2'];
            $pheptoan = '+';
        }
        if(isset($_GET['tru'])) {
            $result = $_GET['so1'] - $_GET['so2'];
            $pheptoan = '-';
        }
    ?>
    </div>

    <?php
        if(isset($_GET['cong']) || isset($_GET['tru']) ) {
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "test2";

            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
            }
            $id = 3;
            $so1 = $_GET['so1'];
            $so2 = $_GET['so2'];
            $sql = "INSERT INTO pheptinh (id, so1, so2,pheptoan,ketqua)
            VALUES ('".$id."','".$so1."', '".$so2."','".$pheptoan."','".$result."')";

            if ($conn->query($sql) === TRUE) {
            echo "New record created successfully";
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();
        }
    ?>

    <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "test2";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM pheptinh";

        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"] . ":" . $row['so1']
                . $row['pheptoan'] . $row['so2'] . '=' . $row['ketqua'] . '<br>' ;
            }
        } else {
        echo "0 results";
        }
        $conn->close();
    ?>
</body>
</html>