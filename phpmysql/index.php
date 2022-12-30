<?php
include 'baglanti.php';
//require yoksa hata alir calismaz
//require_once bir kere cagirir

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Urun Tablosu</title>
    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body>
<!-- int sayi ifade eder 1-10 harf almaz
varchar sizin yazi yazmanizi ve sayi içermesini saglar -->
<H1 class="h1 m-3 text-warning">Urunler Tablosu</H1>
<div class="container">
    <?php 
    if(@$_GET['durum']=="ok"){  ?>
 <div class="alert alert-success alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
   işlem<strong> başarılı</strong> 
</div>
        
<?php }
elseif(@$_GET['durum']=="no"){ ?>

<div class="alert alert-danger alert-dismissible fade in">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  işlem sırasında <strong>hata oluştu !</strong> 
</div>

<?php }?>



    
   
  


<table class="table table-hover  ">

    <button style="float:right ; margin: 10px;" type="button" class="btn btn-info"> <a style="text-decoration: none; color: white ;" href="urunekle.php">Urun Ekle</a> </button>
    <thead>
        <tr>
            <th>Urun Basligi</th>
            <th>Urun Aciklamasi</th>
            <th>Urun Sirasi</th>
            <th>Urun Fiyati</th>
            <th></th>
            <th></th>
             
        </tr>
    </thead>
    <tbody>
   <?php
   $urunsor=$db->prepare("SELECT * FROM urun"); //veritabanindan tablodaki belirlenen verileri sectik
   $urunsor->execute(); //belirlenen ve secilen sql komutunu uygular
   // fetch dbden verileri gidip getirir ve belirtilen tipde ciktisini verir
   while($uruncek=$urunsor->fetch(PDO::FETCH_ASSOC)){
?>



        <tr>
            <td><?php echo $uruncek ['baslik']; ?></td>
            <td><?php echo $uruncek ['aciklama']; ?></td>
            <td><?php echo $uruncek ['sira']; ?></td>
            <td><?php echo $uruncek ['fiyat']; ?></td>
            <td> <a href="urun-duzenle.php?id=<?php echo $uruncek ['id']; ?>"> <button class="btn btn-success" type="submit">Duzenle</button></a></td>
            <td> <a href="islem.php?urunsil&id=<?php echo $uruncek ['id'] ?>"> <button class="btn btn-danger" type="submit">Sil</button></td></a>
        </tr>
        <?php
   }
   ?>
        <!-- <tr>
            <td>Adidas Ayakkabi</td>
            <td>Adidas Spor Ayakkabisi</td>
            <td>2</td>
            <td>399.99 TL</td>
        </tr>
        <tr>
            <td>Gucci Ayakkabi</td>
            <td>Gucci Deri Ayakkabi</td>
            <td>3</td>
            <td>500 TL</td>
        </tr> -->
    </tbody>
</table>
</div>











<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>





