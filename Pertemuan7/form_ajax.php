<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Form dengan PHP dan jQuery</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!--Impor jQuery-->
</head>
<body>
    <h2>Form Contoh</h2>
    
    <form id="myForm"> 
        <label for="buah">Pilih Buah: </label> <br>
        
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>

        <br> <br>

        
        <label>Pilih Warna Favorit:</label> <br>
        
        <input type="checkbox" nama="warna[]" value="merah">Merah <br>
        <input type="checkbox" nama="warna[]" value="biru">Biru <br>
        <input type="checkbox" nama="warna[]" value="hijau">Hijau <br>

        <br> <br>

        <label>Pilih Jenis Kelamin:</label> <br>
        
        <input type="radio" name="jenis_kelamin" value="laki-laki">Laki-laki<br>
        <input type="radio" name="jenis_kelamin" value="Perempuan">Permepuan<br>

        <br> <br>

        
        <input type="submit" value="Submit">

    </form>
    
    <div id="hasil">
        
    </div>

    
    <script>
        $(document).ready(function () {
            $("#myForm").submit(function (e) {
                e.preventDefault(); 

                
                var formData = $("#myForm").serialize();

                
                $.ajax({
                    url: "proses_lanjut.php", 
                    type: "POST",
                    data: formData,
                    success: function (response) {
                        
                        $("#hasil").html(response);
                    } 
                })
            })
        })
    </script>
</body>
</html>