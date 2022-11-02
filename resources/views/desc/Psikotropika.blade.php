@extends('layouts.mainHome')
@section('container')
<script>
alert("Produk tidak dapat diperjualbelikan melalui online, dapatkan produk di apotek terdekat!");
</script>

<div class="contaimer col-sm col-md float-center">
   
    <div class="row">
      <!-- img obat -->
        <div id="letakimg_procol"class=" col d-flex flex-column">
        <div id="imgduatugeleh" class="imgbarcode-wrap p-4 "> <img class="img" src="depeonarIMG/dumolid.png" height="200" width="200" alt=""></div><br>
          <div id="imgduatugeleh" class="imgbarcode-wrap p-4"> <img class="img" src="depeonarIMG/BARCODECONTOH.png" height="200" width="200" alt=""></div>

        </div>
        <!-- deskripsi -->
        
          <div class="descrip col">
        <br><br><br>
      <h3>Deskripsi</h3>
      <h6 class="text-secondary">Digunakan untuk untuk pengobatan jangka pendek insomnia/ gangguan tidur dengan berbagai sebab.</h6>
      <ul clas="li_procold">
      <!-- <div class="kandungan">
      Kandungan Zat Aktif 
          </div> -->
        <li id="li_procold">
          <h5 id="h5_liprocold">Kandungan Zat Aktif </h5>
        <div class="line_title"></div>
        Nitrazepam 5 mg
        </li><br>
        <li id="li_procold">
          <!-- <div class="peringatan">
          Peringatan
          </div> -->
          <h5 id="h5_liprocold">Peringatan</h5>
          <div class="line_title"></div>
          -	Harus dengan resep dokter <br>
          -	Tidak dianjurkan untuk <br>
          o	Hamil dan menyusui <br>
          o	Penyakit pernapasan <br>
          o	Kelemahan otot <br>
          o	Riwayat penyalahgunaan obat atau alcohol <br>
          o	Kelainan kepribadian yang jelas <br>
          o	Gangguan faal hati dan ginjal <br>
          -	Kurangi dosis pada lansia dan debil <br>
          -	Dapat menyebabkan gangguan kemampuan mengemudi dan menjalankan mesin. <br>
        </li><br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Golongan</h5>
          <div class="line_title"></div>
          Obat keras golongan psikotropika
          <!-- <img src="depeonarIMG/logo_Obatkeras_gol_narkotika.png" height="40" width ="40" alt=""> -->
      </li><br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Aturan Pakai	</h5>
          <div class="line_title"></div>
          -	Dosis dewasa : 5-10 mg sebelum tidur <br> 
          -	Dosis lansia : 2,5-5 mg <br>
          -	Tidak dianjurkan untuk anak anak <br>

        </li><br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Cara Penyimpanan</h5>
          <div class="line_title"></div>
          Simpan di bawah suhu 30°C.
        </li>
        <br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Pembuangan</h5>
          <div class="line_title"></div>
          Obat yang sudah melewati tanggal kadaluwarsa atau mengalami perubahan baik warna, rasa dan kekerasan harus dikembalikan ke apotek untuk dimusnahkan.
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