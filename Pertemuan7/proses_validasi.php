<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $errors = array();

    
    if (empty($nama)) {
        $errors[] = "Nama harus diisi.";
    }

   
    if (empty($email)) {
        $error[] = "Email harus diisi.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

   
    if (empty($password)) {
        $errors[] = "Password harus diisi";
    } else if (strlen($password) < 8) {
        $errors[] = "Minimal password memiliki minimal 8 karakter";
    }

    
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    } else {
        echo "Data berhasil dikirm: Nama = $nama, Email = $email";
    }
}
?>