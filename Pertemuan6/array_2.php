<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dosen</title>
    <link rel="stylesheet" type="text/css"  href="styleArray2.css"> 
</head>
<body>
    <table> 
    <tr>
            <th>Nama Dosen</th>
            <th>Domisili</th>
            <th>Jenis Kelamin</th>
        </tr>
    <?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana', 
        'domisili' => 'Malang', 
        'jenis_kelamin' => 'Perempuan']; 
    
    echo "<tr>";
    echo "<td>". "{$Dosen ['nama']}". "</td>";
    echo "<td>"."{$Dosen ['domisili']}". "</td>";
    echo "<td>". "{$Dosen ['jenis_kelamin']}". "</td>";
    echo "</tr>";
        
    ?>
    </table>
   
</body>
</html>