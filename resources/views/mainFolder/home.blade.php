@extends('layouts.mainHome')
@section('container')

<div>
    <h4 class="text-center text-success font-weight-bold mx-auto">ITEMS</h4>
</div><br>
<div class="container col-sm col-md col-lg d-flex flex-row justify-content-center">
    <!-- Obat 1 -->
   
    <div class="card mx-2" style="width: 20rem;">
          <img src="depeonarIMG/items/Narkotika.png" class="card-img-top" alt="...">
        <div class="card-body text-center p-3">
            <!-- <h5 class="card-title">PROCOLD FLU</h5> -->
            <!-- <p class="card-text">Procold merupakan obat untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin yang disebabkan oleh alergi pada saluran pernapasan atas.</p> -->
            <a href="/Narkotika" class="btn btn-success px-3">LIHAT</a>
    </div>
  </div>
    <!-- Obat 2 -->
    <div class="card mx-2" style="width: 20rem;">
          <img src="depeonarIMG/items/Psikotropika.png" class="card-img-top" alt="...">
        <div class="card-body text-center p-3">
            <!-- <h5 class="card-title">DUMOLID</h5> -->
            <!-- <p class="card-text">Procold merupakan obat untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin yang disebabkan oleh alergi pada saluran pernapasan atas.</p> -->
            <a href="/Psikotropika" class="btn btn-success px-3">LIHAT</a>
    </div>
  </div>
    <!-- Obat 3 -->
    <div class="card mx-2" style="width: 20rem;">
          <img src="depeonarIMG/items/Prekursor.png" class="card-img-top" alt="...">
        <div class="card-body text-center p-3">
            <!-- <h5 class="card-title">TRAMADOL</h5> -->
            <!-- <p class="card-text">Procold merupakan obat untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin yang disebabkan oleh alergi pada saluran pernapasan atas.</p> -->
            <a href="/Prekursor" class="btn btn-success px-3">LIHAT</a>
    </div>
  </div>
</div>
<br><br>
<div class="container col-sm col-md col-lg d-flex flex-row justify-content-center">
     <!-- Obat 1 -->
   
     <div class="card mx-2" style="width: 20rem;">
          <img src="depeonarIMG/items/Obat bebas Terbatas.png" class="card-img-top" alt="...">
        <div class="card-body text-center p-3">
            <!-- <h5 class="card-title">PROCOLD FLU</h5> -->
            <!-- <p class="card-text">Procold merupakan obat untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin yang disebabkan oleh alergi pada saluran pernapasan atas.</p> -->
            <a href="/ObatBebasTerbatas" class="btn btn-success px-3">LIHAT</a>
    </div>
  </div>
    <!-- Obat 2 -->
    <div class="card mx-2" style="width: 20rem;">
          <img src="depeonarIMG/items/Obat bebas.png" class="card-img-top" alt="...">
        <div class="card-body text-center p-3">
            <!-- <h5 class="card-title">DUMOLID</h5> -->
            <!-- <p class="card-text">Procold merupakan obat untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin yang disebabkan oleh alergi pada saluran pernapasan atas.</p> -->
            <a href="/ObatBebas" class="btn btn-success px-3">LIHAT</a>
    </div>
  </div>
    <!-- Obat 3 -->
    <div class="card mx-2" style="width: 20rem;">
          <img src="depeonarIMG/items/Obat Keras.png" class="card-img-top" alt="...">
        <div class="card-body text-center p-3">
            <!-- <h5 class="card-title">TRAMADOL</h5> -->
            <!-- <p class="card-text">Procold merupakan obat untuk meringankan gejala flu seperti demam, sakit kepala, hidung tersumbat dan bersin-bersin yang disebabkan oleh alergi pada saluran pernapasan atas.</p> -->
            <a href="/ObatKeras" class="btn btn-success px-3">LIHAT</a>
    </div>
  </div>
</div>
<!--  -->

@endsection