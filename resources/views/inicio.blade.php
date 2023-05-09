@extends('index')
@section('content')
<section>
    <p>portada con video de fondo y un texto cambiante</p>
</section>
<section id="carrousel">
    <div id="videoCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <video src="video1.mp4" muted autoplay loop></video>
          </div>
          <div class="carousel-item">
            <video src="video2.mp4" muted autoplay loop></video>
          </div>
          <div class="carousel-item">
            <video src="video3.mp4" muted autoplay loop></video>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#videoCarousel" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#videoCarousel" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Siguiente</span>
        </button>
      </div>
      
      
      
</section>
<section id="oferta">
    <h2>Que ofrecemos</h2>
    <div class="row">
        <div class="col">
            <h3>Bici</h3>
            <p>Lore ipsum</p>
        </div>
        <div class="col">
            <h3>senderismo</h3>
            <p>ipsum lore</p>
        </div>
        <div class="col">
            <h3>Moto</h3>
            <p>pim pam</p>
        </div>
        <div class="col">
            <h3>Buggy</h3>
            <p>pam pin</p>
        </div>
    </div>
</section>
<section id="novedad">
    <h2>Programa de voluntarios</h2>
    <p>lore ipsum</p>
</section>
@endsection

@section('scripts')
@endsection