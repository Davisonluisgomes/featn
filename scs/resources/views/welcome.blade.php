<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Dra. Silva | Advocacia</title>

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@500;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    body {
      font-family: "Poppins", sans-serif;
      background: #fdfdfd;
      color: #333;
      scroll-behavior: smooth;
    }

    h1, h2, h3, h4, h5 {
      font-family: "Playfair Display", serif;
    }

    /* NAVBAR */
    .navbar {
      background: #fff;
      border-bottom: 1px solid #eee;
      padding: 1rem 0;
    }
    .navbar-brand {
      font-family: "Playfair Display", serif;
      font-weight: 700;
      font-size: 1.5rem;
      color: #c9a646 !important; /* dourado */
    }
    .navbar-nav .nav-link {
      font-weight: 500;
      margin-left: 1.5rem;
      color: #333 !important;
      transition: 0.3s;
    }
    .navbar-nav .nav-link:hover {
      color: #c9a646 !important;
    }

    /* HERO */
    .hero {
      background: url("https://i.ibb.co/D1M06mr/law-bg.jpg") center/cover no-repeat;
      color: white;
      text-align: center;
      padding: 140px 20px;
      position: relative;
    }
    .hero::before {
      content: "";
      position: absolute;
      inset: 0;
      background: rgba(0,0,0,0.6);
    }
    .hero .container {
      position: relative;
      z-index: 1;
    }
    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
      margin-bottom: 1rem;
    }
    .hero p {
      font-size: 1.2rem;
      margin-bottom: 2rem;
    }
    .hero .btn {
      background: #c9a646;
      color: #fff;
      font-weight: 600;
      padding: 12px 32px;
      border-radius: 50px;
      transition: 0.3s;
    }
    .hero .btn:hover {
      background: #b18f38;
    }

    /* SOBRE */
    #sobre {
      padding: 80px 0;
    }
    #sobre p {
      max-width: 800px;
      margin: auto;
      line-height: 1.7;
      font-size: 1.1rem;
    }

    /* COMO TRABALHAMOS */
    #como-trabalhamos {
      background: #f9f9f9;
      padding: 80px 0;
    }
    .work-step {
      background: #fff;
      padding: 2rem;
      border-radius: 12px;
      border: 1px solid #eee;
      transition: 0.3s;
    }
    .work-step:hover {
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      transform: translateY(-5px);
    }
    .work-step h5 {
      color: #c9a646;
      margin-bottom: 1rem;
      font-weight: 600;
    }

    /* SERVIÇOS */
    .nossos-servicos {
      padding: 80px 0;
    }
    .service-card {
      background: #fff;
      border: 1px solid #eee;
      padding: 2rem;
      border-radius: 12px;
      height: 100%;
      transition: 0.3s;
    }
    .service-card:hover {
      border-color: #c9a646;
      box-shadow: 0 6px 20px rgba(0,0,0,0.08);
      transform: translateY(-5px);
    }
    .service-card h5 {
      color: #c9a646;
      font-weight: 600;
      margin-bottom: 1rem;
    }
    .service-card ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .service-card li {
      margin-bottom: 0.6rem;
      padding-left: 1.2rem;
      position: relative;
    }
    .service-card li::before {
      content: "•";
      position: absolute;
      left: 0;
      color: #c9a646;
      font-size: 1.2rem;
    }

    /* MAPA */
    #mapa iframe {
      border: 0;
      border-radius: 12px;
      width: 100%;
      height: 380px;
      box-shadow: 0 4px 18px rgba(0,0,0,0.1);
    }

    /* CONTATO */
    #contato {
      padding: 80px 0;
    }
    #contato .form-control {
      border-radius: 10px;
      padding: 14px;
    }
    #contato button {
      background: #c9a646;
      border: none;
      border-radius: 50px;
      padding: 12px 32px;
      font-weight: 600;
      color: #fff;
    }
    #contato button:hover {
      background: #b18f38;
    }

    /* FOOTER */
    footer {
      background: #fff;
      color: #555;
      padding: 20px 0;
      font-size: 0.95rem;
    }
    footer p {
      margin: 0;
    }
  </style>
</head>
<body>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">Dra. Vitoria</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#sobre">Sobre</a></li>
          <li class="nav-item"><a class="nav-link" href="#servicos">Serviços</a></li>
          <li class="nav-item"><a class="nav-link" href="#como-trabalhamos">Como Trabalhamos</a></li>
          <li class="nav-item"><a class="nav-link" href="#mapa">Localização</a></li>
          <li class="nav-item"><a class="nav-link" href="#contato">Contato</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- HERO -->
  <section class="hero">
    <div class="container">
      <h1>Soluções Jurídicas com Excelência</h1>
      <p>Atendimento estratégico, ético e personalizado para garantir sua tranquilidade e segurança jurídica.</p>
      <a href="#contato" class="btn">Agende sua Consulta</a>
    </div>
  </section>

  <!-- SOBRE -->
  <section id="sobre" class="text-center">
    <div class="container">
      <h2>Sobre a Dra. Silva</h2>
      <p class="lead">Advogada especializada em Direito de Família e Direito Criminal, com experiência em causas complexas e atendimento humanizado.</p>
      <p>Minha atuação é marcada pela ética, clareza e dedicação. Busco sempre soluções inteligentes e preventivas, mas atuo com firmeza quando a defesa de seus direitos exige posicionamento estratégico.</p>
    </div>
  </section>

  <!-- COMO TRABALHAMOS -->
  <section id="como-trabalhamos">
    <div class="container text-center">
      <h2>Como Trabalhamos</h2>
      <div class="row g-4 mt-4">
        <div class="col-md-4">
          <div class="work-step">
            <h5>1. Atendimento Inicial</h5>
            <p>Escutamos com atenção sua situação e apresentamos as opções legais de forma clara.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-step">
            <h5>2. Estratégia Personalizada</h5>
            <p>Criamos um plano de ação adequado ao seu caso, priorizando eficácia e agilidade.</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="work-step">
            <h5>3. Acompanhamento Constante</h5>
            <p>Você recebe atualizações transparentes em cada etapa do processo.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SERVIÇOS -->
  <section id="servicos" class="nossos-servicos text-center">
    <div class="container">
      <h2>Nossos Serviços</h2>
      <div class="row g-4 mt-4">
        <div class="col-md-3">
          <div class="service-card">
            <h5>Direito de Família</h5>
            <ul>
              <li>Divórcio / Separação</li>
              <li>Pensão Alimentícia</li>
              <li>Guarda e Adoção</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-card">
            <h5>Direito Criminal</h5>
            <ul>
              <li>Defesa em processos</li>
              <li>Habeas Corpus</li>
              <li>Audiência de Custódia</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-card">
            <h5>Clientes no Exterior</h5>
            <ul>
              <li>Homologação de Sentença</li>
              <li>Autorização de Viagem</li>
              <li>Busca Internacional</li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="service-card">
            <h5>Outros</h5>
            <ul>
              <li>Retificação de Registro</li>
              <li>Usucapião</li>
              <li>Consultoria Preventiva</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- MAPA -->
  <section id="mapa" class="text-center">
    <div class="container">
      <h2>📍 Localização</h2>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63714.15329968284!2d-60.08226435!3d-3.1190277"
        allowfullscreen="" loading="lazy"></iframe>
    </div>
  </section>

  <!-- CONTATO -->
  <section id="contato" class="text-center">
    <div class="container">
      <h2>Entre em Contato</h2>
      <form class="row g-3 justify-content-center mt-4">
        <div class="col-md-6">
          <input type="text" class="form-control" placeholder="Seu nome" required>
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" placeholder="Seu e-mail" required>
        </div>
        <div class="col-12">
          <textarea class="form-control" rows="4" placeholder="Sua mensagem" required></textarea>
        </div>
        <div class="col-12">
          <button class="btn btn-lg">Enviar</button>
        </div>
      </form>
    </div>
  </section>

  <!-- FOOTER -->
  <footer class="text-center">
    <p>&copy; 2025 Dra. Silva - Todos os direitos reservados</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>



