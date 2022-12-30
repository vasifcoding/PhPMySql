<?php
include 'baglanti.php';   // baglanti.php dosyasini bu dosyaya ekledik ulasmak icin
if(isset($_POST['urun-kaydet'])){  //eger urun-kaydet basilirsa degisken olusturup urun tablosuna inputlardaki degerleri eklesin
    // echo 'Urun Ismi : ';
    // echo $_POST['urun-ismi'];
    // echo '<br>';
    // echo 'Urun Aciklamasi : ';
    // echo $_POST['urun-aciklamasi'];
    // echo '<br>';
    // echo 'Urun Sirasi : ';
    // echo $_POST['urun-sirasi'];
    // echo '<br>';
    // echo 'Urun Fiyati : ';
    // echo $_POST['urun-fiyati'];

    // urun tablosunu hazirlama
    $kaydet=$db->prepare("INSERT INTO urun set 
    
    baslik=:baslik,
    aciklama=:aciklama,
    sira=:sira,
    fiyat=:fiyat  

    ");  
    $insert=$kaydet->execute(array(
        'baslik'=> $_POST['urun-ismi'],
        'aciklama'=> $_POST['urun-aciklamasi'],
        'sira'=> $_POST['urun-sirasi'],
        'fiyat'=> $_POST['urun-fiyati']
    ));
    if($insert){
      Header("Location:index.php?durum=ok");

    }
    else{
      Header("Location:index.php?durum=no");
    }
  
}






  # INSERT - YUKLEME
    # UPDATE - GUNCELLEME
    # DELETE - SILME




    if(isset($_POST['urunduzenle'])){
        $duzenle=$db->prepare("UPDATE urun set 
    baslik=:baslik,
    aciklama=:aciklama,
    sira=:sira,
    fiyat=:fiyat 
        WHERE id={$_POST['id']}
        ");

      $update=$duzenle->execute(array(
        'baslik'=> $_POST['urun-ismi'],
        'aciklama'=> $_POST['urun-aciklamasi'],
        'sira'=> $_POST['urun-sirasi'],
        'fiyat'=> $_POST['urun-fiyati']
      ));
      if($update){
        Header("Location:index.php?durum=ok");
      }
      else{
        Header("Location:index.php?durum=no");
      }

    }
if(isset($_GET['urunsil'])){
  $sil=$db->prepare("DELETE FROM urun WHERE id=:id");
  $sil->execute(array(
    'id'=>$_GET['id']
  ));
  if($sil){
    Header("Location:index.php?durum=ok");
  }
  else{
    Header("Location:index.php?durum=no");
  }
}
?>