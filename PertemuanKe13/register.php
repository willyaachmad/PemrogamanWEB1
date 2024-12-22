<?php
include 'config.php';
session_start();

// Redirect to index.php if the user is already logged in
if (isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();
}

// Handle form submission
if (isset($_POST['submit'])) {
    // Sanitize user inputs
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = hash('sha256', $_POST['password']);
    $cpassword = hash('sha256', $_POST['cpassword']);

    // Check if passwords match
    if ($password === $cpassword) {
        // Check if the email is already registered
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) === 0) {
            // Insert new user into the database
            $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<script>alert('Selamat, registrasi berhasil!')</script>";
                // Clear the form fields
                $username = "";
                $email = "";
                $_POST['password'] = "";
                $_POST['cpassword'] = "";
            } else {
                echo "<script>alert('Woops! Terjadi kesalahan.')</script>";
            }
        } else {
            echo "<script>alert('Woops! Email Sudah Terdaftar.')</script>";
        }
    } else {
        echo "<script>alert('Password Tidak Sesuai')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Mahasiswa Register</title>
</head>

<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>

            <?php
            $username = isset($_POST['username']) ? $_POST['username'] : '';
            $email = isset($_POST['email']) ? $_POST['email'] : '';
            ?>

            <div class="input-group">
                <input type="text" placeholder="Username" name="username"
                    value="<?php echo htmlspecialchars($username); ?>" required>
            </div>

            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo htmlspecialchars($email); ?>"
                    required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" required>
            </div>

            <div class="input-group">
                <button name="submit" class="btn">Register</button>
            </div>

            <p class="login-register-text">
                Anda sudah punya akun? <a href="index.php">Login</a>
            </p>
        </form>
    </div>
</body>

</html>