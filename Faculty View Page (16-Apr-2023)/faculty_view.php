<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Faculty View</title>
    <link href='faculty_view.css' rel='stylesheet'/>
</head>
<body>

    <section class= "loginHeader">
        <h1 class= "centerWhite"> Faculty View </h1>
    </section>

    <br>
    <br>
    <br>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "consultation";
$connection = mysqli_connect($servername, $username, $password, $database);
if ($connection->connect_error){
    die("connectoin failed: ". $connection->connect_error);
}
$retrive = "SELECT * FROM faculty_data WHERE Initial='NIL'";
$result = mysqli_query($connection,$retrive);
$row = mysqli_fetch_assoc($result);
$name = $row['Name'];
$email = $row['Email'];
$phone = $row['Phone'];
$initial = $row['Initial'];
?>
    <section class= "leftWhite">
        <h3 class="loginHeader"> Basic informations </h3>
        <!-- REMOVE ALL THE <p> TAGS WHEN USING PHP-->
        <p ><?php echo "Name: $name "?></p>
        <p><?php echo "Email: $email "?></p>
        <p><?php echo "Initial: $initial "?></p>
        <p><?php echo "Phone: $phone "?></p>
        <!-- REMOVE ALL THE <p> TAGS WHEN USING PHP-->
    </section>  
    <br>
    <br>
    <br>

    <section class="leftWhite"> 
        <h3 class="loginHeader">Consultation Routine </h3>
        <br>
        <table class="tableBorder">

           <tr>
                <td><b><i> Student_Id </i></b></td>
                <td><b><i> Course_code </i></b></td>
                <td><b><i> Day </i></b></td>
                <td><b><i> Time </i></b></td>
                <td><b><i> Room </i></b></td>
                <td><b><i> Action </i></b></td>
            </tr>

            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "consultation";
            $connection = new mysqli($servername, $username, $password, $database);

            if ($connection->connect_error){
                die("connectoin failed: ". $connection->connect_error);
            }

            $sql = "SELECT * FROM faculty_booked_routine";
            $result = $connection->query($sql);

            if (!$result){
                die("Invalid Query: ". $connection->error);
            }

            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    
                    <td>$row[Student_id]</td>
                    <td>$row[Course_code]</td>
                    <td>$row[Day]</td>
                    <td>$row[Time]</td>
                    <td>$row[Room]</td>
                    <td>
                        <a class='facultyButton' href='consultation_delete.php?id=$row[ID]'>Delete</a>
                    </td>
                </tr>";
            }

            ?>

          

        </table>

        
       

 
</body>
</html>
