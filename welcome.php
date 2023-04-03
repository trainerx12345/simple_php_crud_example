<?php
if(isset($_POST['username'])){
    echo"Welcome",$_POST['username'],"<br />";
    echo"Name:",$_POST['username'],"<br />";
    echo"Email:",$_POST['username'],"<br />";
    echo"Password:",$_POST['username'],"<br />";
    if($_POST['password'] == $_POST['password2']){
        echo"Password is the same. <br />";
    }
    else
    {
        echo "Password is not the same.";
    }


}

?>