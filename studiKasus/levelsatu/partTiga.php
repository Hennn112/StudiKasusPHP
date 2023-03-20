<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Level 1 Part 3</h1>
  <form action="" method="post">
    <label for="angka1">Angka 1:</label>
    <input type="number" id="angka1" name="angka1">
    <br><br>
    <label for="angka2">Angka 2:</label>
    <input type="number" id="angka2" name="angka2">
    <br><br>
    <label for="angka3">Angka 3:</label>
    <input type="number" id="angka3" name="angka3">
    <br><br>
    <label for="angka4">Angka 4:</label>
    <input type="number" id="angka4" name="angka4">
    <br><br>
    <button type="submit" name="submit">Hitung</button>
  </form>
  <br><br>
  <?php
    if (isset($_POST['submit'])) {
      $angka1 = $_POST['angka1'];
      $angka2 = $_POST['angka2'];
      $angka3 = $_POST['angka3'];
      $angka4 = $_POST['angka4'];
      $terbesar = $angka1;
    }if($angka2 > $angka1){
        $terbesar = $angka2;
    }if ($angka3 > $terbesar) {
      $terbesar = $angka3;
    }if ($angka4 > $terbesar) {
      $terbesar = $angka4;
    }
    echo "angka terbesar adalah ". $terbesar;
    ?>
</body>
</html>