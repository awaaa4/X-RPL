<h1>login</h1>

<form action="" method="POST">
    <input type="email" name="email" placeholder="Email" required> <br>
    <input type="password" name="password" placeholder="password" required> <br>
    <input type="submit" value="login" name="login"> <br>
</form>

<?php 
    if (isset($_POST['login'])) {
        echo $email = $_POST['email'];
        echo $password = $_POST['password'];

        if ($email == "hiyyuu@gmail.com" && $password == "12345") {
            $_SESSION['email'] = $email;
            header ("location: index.php");
        } else {
            echo "email atau password salah";
        }
    }
?>