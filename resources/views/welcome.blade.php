<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{ config('app.name') }} | Accueil</title>

  <!-- Fonts -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
    integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- Styles / Scripts -->
  <link rel="stylesheet" href="{{ asset('css/home.css') }}" />
  <script src="{{ asset('js/script.js') }}" defer></script>
  @vite(['resources/css/app.css', 'resources/js/app.js'])

</head>

<body>
  <nav id="navbar">
    <a href="{{ route('welcome') }}" class="logo">
      <img src="{{ asset('imgs/logo.png') }}" alt="" />
      <span>Ucc Scholarships</span>
    </a>
    <div class="navbar">
      <ul class="nav-items">
        <li class="nav-item">
          <a href="#header" class="nav-link active">Accueil</a>
        </li>
        <li class="nav-item"><a href="#why" class="nav-link">Bourses</a></li>
        <li class="nav-item">
          <a href="#testimonials" class="nav-link">Témoignages</a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link">Contact</a>
        </li>
      </ul>
      <div class="auth-btns">
        @if (Route::has('login'))
          <a href="{{ route('login') }}">
            Se connecter
          </a>
        @endif
        @if (Route::has('register'))
          <a href="{{ route('register') }}">
            S'inscrire
          </a>
        @endif
      </div>
    </div>
    <label for="nav-toggler" class="nav-toggler-label">
      <i class="fas fa-bars burger"></i>
    </label>
  </nav>
  <header id="header">
    <div class="desc">
      <h2>
        Transformez votre avenir <br />
        avec nos <span>bourses d'étude</span> <br />
        d'excellence !
      </h2>
      <p>
        Donnez vie à vos ambitions académiques. L'Université Catholique du Congo
        soutient les talents prometteurs avec des bourses qui ouvrent les portes
        d’un avenir brillant.
      </p>
      <p>Votre avenir commence ici avec nos bourses</p>
      <a href="{{ route('login') }}" class="cta">Postulez dès maintenant <i class="fas fa-paper-plane"></i></a>
    </div>
    <div class="img">
      <img src="{{ asset('imgs/hero-img.png') }}" alt="hero-img" />
    </div>
  </header>
  <main>
    <section id="why" class="why">
      <h3 class="title">Pourquoi postuler à nos bourses?</h3>
      <p class="why-desc">
        Faire le choix de postuler à nos bourses, c’est investir dans votre avenir
        académique et professionnel. Voici ce que vous gagnez :
      </p>
      <div class="opportunities">
        <div class="card">
          <i class="fas fa-graduation-cap"></i>
          <h4>Accès à une Éducation de Qualité</h4>
          <p>
            Rejoignez un programme d'excellence reconnu pour ses opportunités
            uniques
          </p>
        </div>
        <div class="card">
          <i class="fas fa-sack-dollar"></i>
          <h4>Soutien Financier</h4>
          <p>
            Réduisez ou éliminez vos frais de scolarité pour vous concentrer
            pleinement sur vos études.
          </p>
        </div>
        <div class="card">
          <i class="fas fa-rocket"></i>
          <h4>Développement Personnel et Professionnel</h4>
          <p>
            Bénéficiez d’un encadrement académique, de stages, et d’opportunités
            de mentorat qui enrichiront votre parcours.
          </p>
        </div>
        <div class="card">
          <i class="fas fa-medal"></i>
          <h4>Reconnaissance et Distinction</h4>
          <p>
            Être lauréat d’une bourse est un gage de mérite et d’ambition qui
            renforcera votre CV et impressionnera vos futurs employeurs.
          </p>
        </div>
      </div>
    </section>
    <section id="testimonials" class="testimonials">
      <h3 class="title">Ils ont réalisé leurs rêves grâce à nos bourses</h3>
      <p class="testimonials-desc">
        Découvrez les parcours inspirants de nos étudiants et anciens
        bénéficiaires qui ont transformé leur vie grâce à nos bourses:
      </p>
      <div class="testimonial-contents">
        <div class="testimonial-content">
          <p>
            <i class="fas fa-quote-left"></i>
            Grâce à cette bourse, j’ai pu intégrer la faculté des sciences
            économiques de l’Université Catholique au Congo sans me soucier des
            frais de scolarité. Aujourd’hui, je prépare mon master et je travaille
            sur un projet qui a un impact réel dans ma communauté.
            <i class="fas fa-quote-right"></i>
          </p>
          <h3>Marie Luemba</h3>
          <h4>Étudiante en Sciences Économiques</h4>
        </div>
        <div class="testimonial-content">
          <p>
            <i class="fas fa-quote-left"></i>
            Obtenir cette bourse d'étude m’a permis de suivre ma passion pour la
            technologie. J’ai également participé à un programme d’échange qui a
            élargi mes perspectives professionnelles.
            <i class="fas fa-quote-right"></i>
          </p>
          <h3>Ahmed Kaniki</h3>
          <h4>Diplômé en Informatique</h4>
        </div>
        <div class="testimonial-content">
          <p>
            <i class="fas fa-quote-left"></i>
            Avec le soutien financier de l’Université Catholique du Congo grâce à
            la bourse Omnia omnibus, j’ai pu me consacrer à mes études et
            décrocher un stage dans un hôpital renommé. Mon rêve de devenir
            médecin devient réalité.
            <i class="fas fa-quote-right"></i>
          </p>
          <h3>Fatuma Sala</h3>
          <h4>Étudiante en Médecine</h4>
        </div>
      </div>
      <a href="{{ route('login') }}" class="apply">Postulez dès maintenant <i class="fas fa-paper-plane"></i></a>
    </section>
    <section id="contact" class="contact">
      <h3 class="title">Contactez-nous</h3>
      <p class="contact-desc">
        Vous avez des questions ou besoin d’aide pour votre candidature ? Notre
        équipe est là pour vous accompagner !
      </p>
      <div class="contacts">
        <div class="credentials">
          <h4>Nos Coordonnées</h4>
          <div class="items">
            <div class="item">
              <i class="fas fa-envelope"></i><span>contact@ucc.ac.cd</span>
            </div>
            <div class="item">
              <i class="fas fa-phone-alt"></i><span>(+243) 891 456 789</span>
            </div>
            <div class="item">
              <i class="fas fa-map-pin"></i><span>123 Avenue de université, Kinshasa, RDC</span>
            </div>
          </div>
        </div>
        <div class="planning">
          <h4>Horaires d’Ouverture</h4>
          <div class="items">
            <div class="item">
              <span>Lundi - Vendredi : 9h00 - 17h00</span>
            </div>
            <div class="item">
              <span>Samedi : 10h00 - 14h00</span>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <button id="scrollUp" title="Retour en haut">
    <i class="fas fa-arrow-up"></i>
  </button>
  <footer>
    <div class="left">
      <a href="{{ route('welcome') }}" class="logo"><img src="imgs/logo.png"
          alt="" /><span>UCCScholarships</span></a>
      <div class="copyright">
        Copyright Ucc scholarships ©2024. Tous les droits résérvés.
      </div>
    </div>
    <div class="right">
      <a href="" class="links"><i class="fab fa-facebook-f"></i></a>
      <a href="" class="links"><i class="fab fa-x-twitter"></i></a>
      <a href="" class="links"><i class="fab fa-whatsapp"></i></a>
      <a href="" class="links"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </footer>
</body>

</html>
