<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "azzahradzs" && $password == "passwordara") {  
        $_SESSION['username'] = $username;

        header("Location: profile.php");
        exit();
    } else {
        $error_message = "Username atau password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <link rel="stylesheet" href="css/style.css">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet"> 
</head>
<body>
  <div class="login-container">
    <div class="login-form">
      <h2>Hi, Welcome! <br> Please input your information <br> </h2>
      
      <?php
        if (isset($error_message)) {
            echo "<p style='color:red;'>$error_message</p>";
        }
      ?>

      <form action="login.php" method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </div>
</body>
</html>
