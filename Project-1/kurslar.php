<?php require_once('config.php')?>  

<?php 

$result_kategoriler = mysqli_query($baglanti,"SELECT * FROM kategoriler");
$result_kurslar = mysqli_query($baglanti,"SELECT * FROM kurslar");
$kategoriler = mysqli_fetch_all($result_kategoriler,MYSQLI_ASSOC);
$kurslar = mysqli_fetch_all($result_kurslar,MYSQLI_ASSOC);
mysqli_close($baglanti);
 
?>

<?php include('partials/_header.php')?>

<body>
    <?php include('partials/_navbar.php')?>

<div class="container my-3">
    <div class="row">
        <div class="col-3">
        <?php include('partials/_kategoriler.php')?>
        </div>
        <div class="col-9">
        <?php foreach($kurslar as $kurs):?>

          <?php if($kurs["onay"]):?>
                <?php include('partials/_kurs.php')?>
                <?php endif;?>
                <?php endforeach;?>
            </div>
            
            
        </div>
    </div>
</div>
    

</body>
</html>
