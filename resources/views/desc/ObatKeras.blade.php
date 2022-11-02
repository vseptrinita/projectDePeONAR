@extends('layouts.mainHome')
@section('container')
<script>
alert("Produk tidak dapat diperjualbelikan melalui online, dapatkan produk di apotek terdekat!");
</script>

<div class="contaimer col-sm col-md float-center">
   
    <div class="row">
      <!-- img obat -->
        <div id="letakimg_procol"class=" col d-flex flex-column">
        <div id="imgduatugeleh" class="imgbarcode-wrap p-4 "> <img class="img" src="depeonarIMG/tramadol.png" height="200" width="200" alt=""></div><br>
          <div id="imgduatugeleh" class="imgbarcode-wrap p-4"> <img class="img" src="depeonarIMG/BARCODECONTOH.png" height="200" width="200" alt=""></div>

        </div>
        <!-- deskripsi -->
        
          <div class="descrip col">
        <br><br><br>
      <h3>Deskripsi</h3>
      <h6 class="text-secondary">Obat untuk mengatasi nyeri pada orang dewasa dan anak-anak di atas usia 12 tahun. Dalam menghilangkan rasa sakit, tramadol bekerja dengan cara memengaruhi reaksi kimia di dalam otak yang berperan dalam mengontrol rasa nyeri. Tramadol disebut mirip dengan zat endorfin yang ada di otak.</h6>
      <ul clas="li_procold">
      <!-- <div class="kandungan">
      Kandungan Zat Aktif 
          </div> -->
        <li id="li_procold">
          <h5 id="h5_liprocold">Kandungan Zat Aktif </h5>
        <div class="line_title"></div>
        Tramadol HCl 50 mg      </li><br>
        <li id="li_procold">
          <!-- <div class="peringatan">
          Peringatan
          </div> -->
          <h5 id="h5_liprocold">Peringatan</h5>
          <div class="line_title"></div>
          -	Harus dengan resep dokter <br>
          -	Pada penggunaan jangka panjang dapat terjadi ketergantungan, sehingga dokter harus menentukan lama pengobatan.<br>
          -	Hati-hati penggunaan pada penderita trauma kepala, meningkatnya tekanan intrakranial, gangguan fungsi ginjal dan hati yang berat atau hipersekresi bronkhus, karena dapat mengakibatkan risiko kejang atau syok.<br>
          -	Penggunaan bersama dengan obat-obat penekan SSP lain atau penggunaan dengan dosis berlebih dapat menyebabkan menurunnya fungsi paru.<br>
          -	Penggunaan selama kehamilan harus mempertimbangkan manfaat dan risikonya baik terhadap janin maupun ibu.<br>
          -	Hati-hati penggunaan pada ibu menyusui, karena Tramadol diekskresikan melalui ASI.<br>
          -	Tramadol dapat mengurangi kecepatan reaksi penderita, seperti kemampuan mengemudikan kendaraan atau mengoperasikan mesin.<br>
          -	Depresi pernafasan akibat dosis yang berlebihan dapat dinetralisir dengan nalokson, sedangkan kejang dapat diatasi dengan pemberian benzodiazepin.<br>
          -	Meskipun termasuk antagonis opiat, Tramadol tidak dapat menekan gejala withdrawal akibat pemberian morfin.<br>
          -	Tidak dianjurkan penggunaan pada anak dibawah 16 tahun karena keamanan dan efikasi belum ditetapkan.<br>
          -	Tramadol mempunyai potensi menyebabkan ketergantungan fisik dan psikis seperti pada morfin.<br>
          -	Tidak dianjurkan penggunaan pada pasien yang mempunyai kecenderungan melakukan penyalahgunaan obat, mempunyai riwayat ketergantungan obat atau pengguna opium kronis.<br>
        </li><br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Golongan</h5>
          <div class="line_title"></div>
          Obat keras golongan narkotika
          <!-- <img src="depeonarIMG/logo_Obatkeras_gol_narkotika.png" height="40" width ="40" alt=""> -->
      </li><br>
        <li id="li_procold">
          <h5 id="h5_liprocold">Aturan Pakai	</h5>
          <div class="line_title"></div>
          Dewasa dan anak diatas 16 tahun: <br>
          -	Dosis umum: Dosis tunggal 50 mg. Dosis tersebut biasanya cukup untuk meredakan nyeri, apabila masih terasa nyeri dapat ditambahkan 50 mg setelah selang waktu 30 - 60 menit. <br>
          -	Dosis maksimum: 400 mg sehari.
            Dosis sangat tergantung pada intensitas rasa nyeri yang diderita. <br>
          -	Penderita gangguan hati dan ginjal dengan ‘bersihan klirens’< 30 ml/menit : 50 - 100 mg setiap 12 jam, maksimum 200 mg sehari. <br>
          -	Dosis yang dianjurkan untuk pasien dengan cirrhosis adalah 50 mg setiap 12 jam. <br>
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