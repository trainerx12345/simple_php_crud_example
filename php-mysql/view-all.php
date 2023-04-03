<?php

$servername= "localhost";
$user= "root";
$password = "";
$dba="dtbse";

$conn = new mysqli($servername,$user,$password,$dba);
if($conn->connect_error)
{
    die ("Connection failed".$conn->connect_error);
}
$sql = "SELECT * FROM tbl_user order by id desc";
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
            <th>ACTIONS</th>
            <th>View Profile</th>
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
        echo "<td style='margin:auto;' ><a href=\"edit.php?id=$row[id]\">Edit</a> | <a href=\"delete.php?id=$row[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
        echo "<td  > <form action='view.php' method='get' >
                <button name = 'username' value='".$row['username']."'>View</button>
                </form> </td>";
        echo    "</tr>";
    }
    echo"</tbody>";
    echo"</table>";
}
else
{
    echo "No entries yet.";
}

?>