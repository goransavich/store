@extends('layouts.master')

@section('content')

<!-- Jumbotron -->
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="storage/images/baner_novi_sajt_gladna_srca_1200x360pxplus-korica.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="storage/images/baner_slider_1200x360_andric_price.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="storage/images/baner_slider_1200x360_pijev_zivot.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="storage/images/baner_slider_1200x360_snovi_po_meri_foto_ispravka.jpg">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="storage/images/baner_slider_1200x360_tajni_zivot_drveca.jpg">
            </div>
          </div>
      </div>
      

      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Get free e-book</h2>
          <img src="storage/images/probna_faza-tomas_pincon_v.jpg" width="180" height="280">
          
          <p><a class="btn btn-primary free-bookbutton" href="/gift" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
          <p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Heading</h2>
          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>
          <p><a class="btn btn-primary" href="/gift" role="button">View details &raquo;</a></p>
        </div>
      </div>
      


@endsection

