<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Input dengan Validasi</title>
</head>
<body>
    <h1>Form Input dengan validasi</h1> 
    
    <form method="post" action="proses_validasi.php">
       
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <br>

        
        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <br>

        
        <label for="password">Password</label>
        <input type="password" id="password" name="password">
        <span id="password-error"></span>
        <br>

       
        <input type="submit" value="Submit">
    </form>


    <script>
        $(document).ready(function() {
            
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val(); 
                var valid = true;

                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                } else {
                    $("#nama-error").text("");
                }

                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                } else {
                    $("#email-error").text("");
                }

                if (password === "") { 
                    $("#pass-system").text("Email harus diisi.");
                    valid = false;
                } else if (password.length < 8) { 
                    $("#pass-system").text("Minimal password memiliki minimal 8 karakter");
                    valid = false;
                } else {
                    $("#pass-system").text("");
                }

                
                if (valid) {
                    $.ajax({ 
                    url: "proses_validasi.php", 
                    type : "POST",
                    data: $("#myForm").serialize(),
                    succes: function (response) {
                        $("#hasil").html(response);
                    }
                });
                }
            });
        });
    </script>
</body>
</html>