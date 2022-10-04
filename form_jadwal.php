<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" href="stylejadwal.css">
    <!-- poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="kiri">
            <div class="img">
                <img src="foto/student (1).png">
            </div>
            <div class="tulisan">
                <h3>Hallo</h3>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid veniam illum ut assumenda necessitatibus consectetur.</p>
            </div>
            
        </div>
        <div class="kanan">
        <form enctype="multipart/form-data" action="edit_regular.php" method="post">
        <table>
            <tr>
                <td><input class="input" type="hidden" name="id_murid" required="required"></td>
            </tr>

            <tr>
            <td><Label>Nama Siswa</Label></td>
            </tr>
            <tr>
                <td><input  class="input" type="text" name="nama_murid" required="required"></td>
            </tr>

            <tr>
            <td><label>Kelas Siswa</label></td>
            </tr>
            <tr>
                <td><input  class="input" type="text, number" name="kelas_murid" required="required"></td>
            </tr>

            <tr>
            <td><label>Topik Konseling</label></td>
            </tr>
            <tr>
                <td><input class="input" type="text" name="topik_konseling" required="required"></td>
            </tr>
            
        </table>
        <input type="submit" name="simpan" value="Buat Jadwal" class="btn-simpan">
        </form>
        </div>
        
        
    </div>
</body>
</html>