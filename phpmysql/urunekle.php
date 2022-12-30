<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<H1 class="h1 m-3 text-warning">Urun Ekleme Sayfasi</H1>
<form action="islem.php" method="post">
<div style="border-radius: 10px;" class="row bg-secondary p-3  g-1 m-5">

  <div class="col-sm-3">
    <input type="text" id="baslik"  name="urun-ismi"  class="form-control" placeholder="Urun Basligi" aria-label="urunbasligi">
  </div>
  <div class="col-sm-5">
    <input type="text"  id="aciklama"   name="urun-aciklamasi"  class="form-control" placeholder="Urun Aciklamasi" aria-label="urunaciklamasi">
  </div>
  <div class="col-sm">
    <input type="number"  id="sira"   name="urun-sirasi"   class="form-control" placeholder="Urun Sirasi" aria-label="urunsirasi">
  </div>
  <div class="col-sm">
    <input type="text"  id="fiyat"   name="urun-fiyati"  class="form-control" placeholder="Urun fiyati" aria-label="urunfiyati">
  </div>
  <div class="col-sm">
    <button name="urun-kaydet" id="urun-kaydet" type="submit" class="btn btn-primary "> Urun Ekle </button>
  </div>
</div>
</form>










<script src="urun-kaydet.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





