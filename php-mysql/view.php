<?php

$databaseHost = 'localhost';
$databaseName = 'dtbse';
$databaseUsername = 'root';
$databasePassword = '';

$conn = new mysqli($databaseHost, $databaseUsername, $databasePassword, $databaseName); 
if($conn->connect_error)
{
    die("Connection is failed or lost ". $conn->connect_error);
}


if(isset($_GET['username']))
{
    
    $username = $_GET['username'];
    $sql = "SELECT * FROM tbl_user where username = '$username'";
    $result = $conn->query($sql);


    if($result->num_rows > 0)
    {
        echo "<table border=1 style='margin:auto;'>";
        echo "<thead>
            <tr  style='margin:auto;'>
                <th>No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Username</th>
                <th>Date</th>
             
            </tr>
        </thead>";
        echo"<tbody>";
        $ctr = 1;
        while($row = mysqli_fetch_array($result))
        {
            echo"<tr >";
            echo"<td>".$ctr++."</td>";
            echo"<td style='display:none;'>".$row['id']."</td>";
            echo"<td>".$row['name']."</td>";
            echo"<td>".$row['email']."</td>";
            echo"<td>".$row['username']."</td>";
            // echo"<td>".$row['password']."</td>";
            echo"<td>".$row['dtes']."</td>";
            // echo "<td style='margin:auto;' ><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
            echo    "</tr>";
        }
        echo"</tbody>";
        echo"</table>";
    }
    else
    {
        echo "Username does not exist!.";
    }




    // header("refresh:3; ../  ");
    echo "<br/><a href='./view-all.php' style='text-decoration:none;'>Go Back</a>";
    echo "<br/><a href='../index.php' style='text-decoration:none;'>Go Index</a>";
    // $result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
    
}
else
{
    echo "<span style='color:red;'>NO VALID USER ACTIVE REDIRECTING</span>";
    header("refresh:3; ./view-all.php  ");
}
?>