<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script>
    function validate_form()
    {
        var valid = false;
        var password = document.getElementById("password").value;
        var password2 = document.getElementById("password2").value;
        
     if(password.length >= 8 && password2.length >= 7)
     {
        if(password == password2)
        {
            document.getElementById("reg-form").submit();
        }
        else{
            alert("Passwords does not match.");
        }
    }
    else
    {
        alert("Does not accept password with the lenght of 8 and below.");
    }
}
    </script>
</head>
<div class="wrapper">
    <div class="reg-div">
        <form autocomplete="off" action="validateRegister.php" id="reg-form" method="post" name="reg-form">
            <table>
                <tr >
                    <td><input type="text" id="name" name ="name" placeholder="Name"  required></td>
                </tr>
                <tr >
                    <td><input type="text" id="email" name ="email" placeholder="Email Address" required></td>
                </tr>
                <tr >
                    <td><input type="text" id="username" name ="username" placeholder="Username" required></td>
                </tr>
                <tr >
                    <td><input type="password" id="password" name ="password"  placeholder="Password"   required></td>
                </tr>
                <tr >
                    <td><input type="password" id="password2" name ="password2" placeholder="Re-type Password" required></td>
                </tr>
                <tr >
                    <td><input type="button" id="btn_register" onclick="validate_form()" value="Register"></td>
                </tr>
            </table>
        </form>
    </div>
    <?php         echo "<br/><a href='index.php' style='text-decoration:none;'>GO TO INDEX</a>";?>
</div>

    
</body>
</html>