<!DOCTYPE html>
<html lang="en">
<head>
    <title>HTML aman</title>
</head>
<body>

<h2>Form Input PHP</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

<label for="input">Inputan: </label> 

<input type="text" name="input" id="input"> <br><br>

<label for="email">Email: </label> 

<input type="email" name="email" id="email"> <br><br>

<input type="submit" name="submit" value="Submit">

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") { 

$input = $_POST['input'];
$input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8'); 

echo "Inputan yang diterima = " . $input; 

$email = $_POST['email'];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    
    echo "<br> Email yang diterima: " .$email;
} else {
    
    echo "<br>Input email tidak valid";
}
}
?>

</body>
</html>
<?php

