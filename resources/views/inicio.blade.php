@extends('index')
@section('content')
<section class="portada" class="my-3">
  <div class="portada-videos ">
    <video class="portada-video" autoplay muted loop>
      <source
        src="https://cdn.discordapp.com/attachments/1085486925714042903/1105762643341496340/pexels-rhys-abel-6420515-1280x720-24fps.mp4"
        type="video/mp4"
      />
      Tu navegador no soporta vídeos en formato MP4.
    </video>
    <video class="portada-video" autoplay muted loop>
      <source
        src="https://cdn.discordapp.com/attachments/1085486925714042903/1105762642846564474/pexels-cottonbro-studio-5803091-1280x720-50fps.mp4"
        type="video/mp4"
      />
      Tu navegador no soporta vídeos en formato MP4.
    </video>
    <video class="portada-video" autoplay muted loop>
      <source
        src="https://cdn.discordapp.com/attachments/1085486925714042903/1105766188337864776/pexels-vadim-mishin-10005906-1280x720-30fps.mp4"
        type="video/mp4"
      />
      Tu navegador no soporta vídeos en formato MP4.
    </video>
    <video class="portada-video" autoplay muted loop>
      <source
        src="https://cdn.discordapp.com/attachments/1085486925714042903/1105764945624309760/pexels-dario-fernandez-ruz-9130066-1280x720-30fps.mp4"
        type="video/mp4"
      />
      Tu navegador no soporta vídeos en formato MP4.
    </video>
  </div>
  <div class="portada-overlay d-flex align-items-center justify-content-center text-center col-12 col-md-6">
    <h1 class="portada-texto animate__animated animate__wobble ">
      <span class="astur">Astur</span><span class="cross">Cross</span>
    </h1>
  </div>
  
</section>

<section class="my-3" id="conocenos">
  <div id="contenedor">
    <div class="row ">
      <div class="col-12 col-md-6" id="presentacion">
        <div class="row">
          <h2>Que es AsturCross</h2>
          <p>
            ¡Bienvenido a AsturCross, la página web para los amantes de la
            montaña! Aquí encontrarás listados de las mejores rutas para
            disfrutar de la naturaleza y la aventura. Además, podrás agregar
            tus propias rutas y compartirlas con nuestra comunidad de
            exploradores, y votar por tus rutas favoritas para ayudar a
            otros a encontrar las mejores experiencias en la montaña.
            También puedes ser parte de nuestro equipo de voluntarios y
            contribuir con tus conocimientos y habilidades para mantener y
            mejorar las rutas existentes, y para crear nuevas experiencias
            emocionantes en la montaña. Únete a nuestra comunidad y disfruta
            de la emoción y la belleza de la montaña en AsturCross.
            ¡Explora, comparte, vota y participa en nuestro creciente mundo
            de la aventura!
          </p>
        </div>
      </div>
      <div class="col-12 col-md-6" id="carrousel">
        <div class="row">
          <div class="video-slider">
            <div class="video-slide active">
              <video autoplay muted loop>
                <source
                  src="https://cdn.discordapp.com/attachments/1085486925714042903/1088024948808892519/video_2.mp4"
                  type="video/mp4"
                />
                Tu navegador no soporta vídeos en formato MP4.
              </video>
              <h5>Respira</h5>
            </div>
            <!-- Añade más diapositivas aquí -->
            <div class="video-slide">
              <video autoplay muted loop>
                <source
                  src="https://cdn.discordapp.com/attachments/1085486925714042903/1088027307521880094/Pexels_Videos_2040076.mp4"
                  type="video/mp4"
                />
                Tu navegador no soporta vídeos en formato MP4.
              </video>
              <h5>Relájate</h5>
            </div>
            <div class="video-slide">
              <video autoplay muted loop>
                <source
                  src="https://cdn.discordapp.com/attachments/1085486925714042903/1105083046614532136/pexels-ruvim-miksanskiy-2474616-1280x720-24fps.mp4"
                  type="video/mp4"
                />
                Tu navegador no soporta vídeos en formato MP4.
              </video>
              <h5>Disfruta</h5>
            </div>
            <!-- Añade más diapositivas si es necesario -->
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="oferta" class="my-3">
  <h2 id="titulo">Qué ofrecemos</h2>
  <div class="row">
    <div class="col-lg-3 col-md-5 col-sm-12 col mx-3" id="bici">
      <h3>Bici</h3>
      <p>
        ¡Descubre nuevas aventuras en la naturaleza con nuestra página web!
        Encuentra las mejores rutas de bici y disfruta del paisaje mientras
        pedaleas.
      </p>
    </div>
    <div class="col-lg-3 col-md-5 col-sm-12 col mx-3" id="senderismo">
      <h3>Senderismo</h3>
      <p>
        ¿Eres amante del senderismo? En nuestra página web encontrarás rutas
        increíbles para explorar y descubrir la naturaleza en todo su
        esplendor.
      </p>
    </div>
    <div class="col-lg-3 col-md-5 col-sm-12 col mx-3" id="moto">
      <h3>Moto</h3>
      <p>
        Si prefieres la adrenalina sobre dos ruedas, no te pierdas nuestras
        rutas en moto. ¡Siente la velocidad y la emoción de la conducción en
        medio de paisajes impresionantes!
      </p>
    </div>
    <div class="col-lg-3 col-md-5 col-sm-12 col mx-3" id="buddy">
      <h3>Buggy</h3>
      <p>
        Para los más atrevidos, nuestra página web también ofrece rutas de
        buggi. ¡Siente la brisa en tu cara mientras recorres los senderos
        más emocionantes!
      </p>
    </div>
  </div>
</section>

<section id="novedad" class="my-5">
  <h2>Programa de voluntarios</h2>
  <p>
    ¡Únete a nuestro programa de voluntarios para la página web de rutas de
    montaña y conviértete en parte de nuestra comunidad de amantes de la
    naturaleza! Si eres una persona apasionada por el senderismo y la
    exploración de la naturaleza, este programa es para ti. Como voluntario,
    tendrás la oportunidad de contribuir con tu conocimiento y experiencia
    en la creación y mantenimiento de rutas de montaña, ayudando a otros
    exploradores a descubrir las maravillas de la naturaleza. Además, podrás
    colaborar en la gestión y promoción de eventos y actividades
    relacionados con el senderismo y la naturaleza, y formar parte de una
    comunidad de personas que comparten tus intereses y valores. Además de
    ser una oportunidad única para contribuir a la conservación y promoción
    de la naturaleza, este programa de voluntarios te permitirá aprender y
    adquirir nuevas habilidades, establecer contactos y hacer amigos en el
    mundo del senderismo y la exploración de la naturaleza. Únete a nosotros
    y haz parte de esta experiencia única en la vida. ¡Inscríbete ya en
    nuestro programa de voluntarios para la página web de rutas de montaña!
  </p>
</section>
@endsection

@section('scripts')
<script>
  const slides = document.querySelectorAll(".video-slide");

  let currentSlide = 0;

  function changeSlide(newSlide) {
    slides[currentSlide].classList.remove("active");
    slides[newSlide].classList.add("active");
    currentSlide = newSlide;
  }

  function autoChangeSlide() {
    const newSlide = (currentSlide + 1) % slides.length;
    changeSlide(newSlide);
  }

  const autoSlideInterval = setInterval(autoChangeSlide, 3000); // Cambia automáticamente las diapositivas cada 5 segundos.

  const videoContainer = document.querySelector(".portada-videos");
  const videos = document.querySelectorAll(".portada-video");
  let currentIndex = 0;

  function changeVideo() {
    videos[currentIndex].style.display = "none";
    currentIndex = (currentIndex + 1) % videos.length;
    videos[currentIndex].style.display = "block";
  }

  setInterval(changeVideo, 5000);
</script>
@endsection