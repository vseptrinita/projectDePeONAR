@extends('layouts.mainHome')
@section('container')
<script>
alert("Produk tidak dapat diperjualbelikan melalui online, dapatkan produk di apotek terdekat!");
</script>

<div class="contaimer col-sm col-md float-center">
   
    <div class="row">
      <!-- img obat -->
        <div id="letakimg_procol"class=" col d-flex flex-column">
        <div id="imgduatugeleh" class="imgbarcode-wrap p-4 "> <img class="img" src="depeonarIMG/Procold.png" height="200" width="200" alt=""></div><br>
          <div id="imgduatugeleh" class="imgbarcode-wrap p-4"> <img class="img" src="depeonarIMG/BARCODECONTOH.png" height="200" width="200" alt=""></div>

        </div>
        <!-- deskripsi -->
        
          <div class="descrip col">
        <br><br><br>
      <h3>Deskripsi</h3>
      <h6 class="text-secondary">Procold merupakan obat untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin yang disebabkan oleh alergi pada saluran pernapasan atas.</h6>
      <ul clas="li_procold">
      <!-- <div class="kandungan">
      Kandungan Zat Aktif 
          </div> -->
        <li id="li_procold">
          <h5 id="h5_liprocold">     Kandungan Zat Aktif </h5>
        <div class="line_title"></div>
      paracetamol 500 mg, dextromethorphan HBr 10 mg, pseudoephedrine HCl 30 mg.
      </li>
      <br>
        <li id="li_procold">
          <!-- <div class="peringatan">
          Peringatan
          </div> -->
          <h5 id="h5_liprocold">Peringatan</h5>
          <div class="line_title"></div>
          -	Jika Anda memiliki riwayat alergi terhadap paracetamol, dextromethorphan HBr, dan pseidoephedrine HCl sebaiknya hindari penggunaan obat ini<br><br>
          -	Sebaiknya tidak minum Procold jika Anda sedang berkegiatan yang butuh kewaspadaan, seperti mengemudi, mengoperasikan mesin, dsb <br><br>
          -	Informasikan kepada dokter jika Anda sedang mengonsumsi obat kimia ataupun obat herbal, untuk menghindari terjadinya interaksi obat merugikan <br><br>
          -	Karena adanya risiko pendarahan, informasikan pula jika Anda akan melakukan operasi, seperti operasi gigi <br><br>
          -	Kandungan pseudoephedrine di dalamnya akan bereaksi jika digunakan bersamaan dengan obat golongan inhibitor monoamine oksidase (MAOIs). Sebaiknya, informasikan kepada dokter jika Anda akan mengonsumsi kedua obat ini bersamaan. Dokter dapat merekomendasikan pengganti obat ataupun aturan jeda waktu minum yang tepat
          
        </li>
        <br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Golongan</h5>
          <div class="line_title"></div>
          Obat bebas terbatas dengan kandungan prekursor pseudoefedrin HCl. Dapatkan di apotek terdekat.
          <!-- <img src="depeonarIMG/logo_Obatkeras_gol_narkotika.png" height="40" width ="40" alt=""> -->
      </li>
      <br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Aturan Pakai	</h5>
          <div class="line_title"></div>
                  Anak usia 6-12 tahun: berikan 3 kali sehari sebanyak ½ kaplet <br>
        Dewasa dan anak usia >12 tahun: berikan obat 3 kali sehari sebanyak 1 kaplet
        </li>
        <br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Cara Penyimpanan</h5>
          <div class="line_title"></div>
          -	Jika Anda memiliki riwayat alergi terhadap paracetamol, dextromethorphan HBr, dan pseidoephedrine HCl sebaiknya hindari penggunaan obat ini<br><br>
          -	Sebaiknya tidak minum Procold jika Anda sedang berkegiatan yang butuh kewaspadaan, seperti mengemudi, mengoperasikan mesin, dsb <br><br>
          -	Informasikan kepada dokter jika Anda sedang mengonsumsi obat kimia ataupun obat herbal, untuk menghindari terjadinya interaksi obat merugikan <br><br>
          -	Karena adanya risiko pendarahan, informasikan pula jika Anda akan melakukan operasi, seperti operasi gigi <br><br>
          -	Kandungan pseudoephedrine di dalamnya akan bereaksi jika digunakan bersamaan dengan obat golongan inhibitor monoamine oksidase (MAOIs). Sebaiknya, informasikan kepada dokter jika Anda akan mengonsumsi kedua obat ini bersamaan. Dokter dapat merekomendasikan pengganti obat ataupun aturan jeda waktu minum yang tepat
          
        </li>
        <br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Pembuangan</h5>
          <div class="line_title"></div>
          Obat yang sudah melewati tanggal kadaluwarsa atau mengalami perubahan baik warna, rasa dan kekerasan harus dibuang dengan benar. Cara pembuangan:
          <br>
          -	Keluarkan tablet dari kemasan <br>
          -	Campurkan dengan sampah dapur dalam plastik <br>
          -	Ikat plastik dengan kuat <br>
          -	Buang ke tempat sampah <br>
          -	Buang ke tempat sampah <br><br>
            Atau dapat dikembalikan ke apotek untuk dimusnahkan.

        </li>
        </div>
      </div>
      <!-- img barcode -->
      <!-- <div class="row p-5">
        <div class="card  p-1">  <img class="" src="depeonarIMG/BARCODECONTOH.png" alt=""></div>
    
          
      </div> -->
    </div>
</div> 


<br>


 
@endsection