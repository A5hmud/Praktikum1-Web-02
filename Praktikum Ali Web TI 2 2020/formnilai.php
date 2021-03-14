<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Mahasiswa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
     integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
<form class="form-horizontal" method="POST" action="arraysiswa.php">
<fieldset>

<!-- Form Name -->
<legend>Form Nilai Mahasiswa</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Nama Lengkap</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" type="text" placeholder="Masukkan Nama Anda" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Daftar Mata Kuliah">Mata Kuliah</label>
  <div class="col-md-4">
    <select id="Daftar Mata Kuliah" name="matkul" class="form-control">
      <option value="Dasar-Dasar Pemrograman">Dasar-Dasar Pemrograman</option>
      <option value="Basis Data 1">Basis Data 1</option>
      <option value="Pemrograman Web 2">Pemrograman Web 2</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai">Nilai UTS</label>  
  <div class="col-md-4">
  <input id="nilai" name="uts" type="number" placeholder="Masukkan Nilai" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai">Nilai UAS</label>  
  <div class="col-md-4">
  <input id="nilai" name="uas" type="number" placeholder="Masukkan Nilai" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nilai">Nilai Tugas/Praktikum</label>  
  <div class="col-md-4">
  <input id="nilai" name="tugas" type="number" placeholder="Masukkan Nilai" class="form-control input-md" required="">
    
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="proses"></label>
  <div class="col-md-4">
    <input type="submit" value="Simpan" name="proses"/>
  </div>
</div>

</fieldset>
</form>

</body>
</html>