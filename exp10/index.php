<!DOCTYPE html>
<html lang="en">
<body>
    <form name="emp" action="index.php" method="post">
        Name : <input type="text" name="name"><br><br>
        Password : <input type="password" name="password"> <br><br>
        Email : <input type="email" name="email"><br><br>
        Address : <input type="textarea" name="address"><br><br>
        Age : <input type="number" name="age"><br><br>
        Phone no. : <input type="number" name="phone"><br><br>
        Game : 
        <input type="checkbox" name="game[]" value="hockey">hockey
        <input type="checkbox" name="game[]" value="icehockey">Ice hockey
        <input type="checkbox" name="game[]" value="airhockey">Air hockey

        <input type="submit" name="submit"><br><br>
    </form>
    <?php
        if(isset($_POST["submit"]))
        {
            echo "<pre>";
            Print_r($_POST);
            echo"<br>";
            echo "</pre>";
            $name = $_POST ["name"];
            $password = $_POST["password"];
            $email= $_POST["email"];
            $address = $_POST["address"];
            $age = $_POST["age"];
            $phone = $_POST["phone"];
            $game = $_POST["game"];

            echo "Name: $name<br>";
            echo "Password: $password <br>";
            echo "Email: $email<br>";
            echo "Address: $address<br>";
            echo "Age: $age<br>";
            echo "Phone: $phone<br>";
    
    foreach($game as $me)
    {
        echo "Game: $me<br>";
    }
}

    ?>
</body>
</html>
