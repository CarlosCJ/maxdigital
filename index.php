<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="MaxDigital: Agencia experta en diseño UX/UI, desarrollo web, y posicionamiento SEO para tu marca." />
  <meta name="keywords" content="UX, UI, diseño web, SEO, marketing digital, MaxDigital" />
  <meta name="author" content="MaxDigital" />
  <meta property="og:title" content="MaxDigital | Diseño UX/UI y SEO" />
  <meta property="og:description" content="Agencia especializada en diseño UX/UI y posicionamiento SEO." />
  <meta property="og:image" content="http://maxdigital.test/logo.jpeg" />
  <meta property="og:url" content="https://maxdigital.cl" />
  <meta name="twitter:card" content="summary_large_image" />
  <title>MaxDigital | Diseño UX/UI y SEO</title>

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <link rel="stylesheet" href="styles.actualizado.css" />

  <script type="application/ld+json">
    <?php include('datos/empresa-maxdigital.json'); ?>
  </script>

</head>
<body>

  <!-- Header -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <!-- Aquí va el logo como imagen -->
      <a class="navbar-brand" href="/">
        <img src="logo.jpeg" alt="MaxDigital" class="logo img-fluid" />
      </a>
      <!-- Menú colapsable Bootstrap -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
          <li class="nav-item"><a class="nav-link" href="#nosotros">Nosotros</a></li>
          <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero">
    <div class="container text-center">
      <h1 class="display-4">Transformamos tu presencia digital</h1>
      <p class="lead">Expertos en diseño UX/UI y posicionamiento SEO para hacer crecer tu marca.</p>
      <a href="#contacto" class="btn btn-light btn-lg mt-3">Contáctanos</a>
    </div>
  </section>

  <!-- Hero Section -->
  <section class="hero text-center">
    <div class="container">
      <h1 class="display-4">Impulsa tu presencia digital con MaxDigital</h1>
      <p class="lead">Diseño UX/UI profesional + posicionamiento SEO real</p>
      <a href="#contacto" class="btn btn-lg" style="background-color: #7ed957; color: white;">Contáctanos</a>
    </div>
  </section>

  <!-- Servicios -->
  <section id="servicios" class="py-5">
    <div class="container">
      <h2 class="text-center section-title">Nuestros Servicios</h2>
      <div class="row text-center">
        <div class="col-md-4">
          <i class="fas fa-laptop-code feature-icon"></i>
          <h4>Diseño UX/UI</h4>
          <p>Diseños intuitivos y atractivos centrados en el usuario para lograr una experiencia única.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-search feature-icon"></i>
          <h4>SEO</h4>
          <p>Optimizamos tu sitio para mejorar el posicionamiento en buscadores y atraer tráfico orgánico.</p>
        </div>
        <div class="col-md-4">
          <i class="fas fa-chart-line feature-icon"></i>
          <h4>Marketing Digital</h4>
          <p>Estrategias digitales que conectan con tu audiencia y generan conversiones.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Nosotros -->
  <section id="nosotros" class="py-5 bg-light">
    <div class="container">
      <h2 class="text-center section-title">¿Quiénes somos?</h2>
      <p class="text-center mx-auto" style="max-width: 1100px;">
      En Max Digital, no somos solo una agencia de marketing digital: somos el socio estratégico que camina contigo hacia el crecimiento sin fronteras. Creemos que cada marca tiene un potencial único, y nuestro objetivo es llevarlo al siguiente nivel, explorando todas las oportunidades que el mundo digital tiene para ofrecer.
Nuestro logo, el símbolo del infinito, representa más que un diseño: refleja nuestra filosofía. No existen límites cuando combinamos creatividad, estrategia e innovación. Cada campaña, cada idea y cada acción están pensadas para que tu negocio no solo crezca, sino que evolucione constantemente.
Juntos, podemos llegar tan lejos como imagines. Porque cuando se trata de hacer crecer tu marca, las posibilidades son infinitas.
      </p>
    </div>
  </section>

  <!-- Contacto -->
  <section id="contacto" class="py-5">
    <div class="container">
      <h2 class="text-center section-title">Contáctanos</h2>
      <form class="mx-auto" style="max-width: 600px;">
        <div class="mb-3">
          <label for="nombre" class="form-label">Nombre</label>
          <input type="text" class="form-control" id="nombre" required>
        </div>
        <div class="mb-3">
          <label for="correo" class="form-label">Correo Electrónico</label>
          <input type="email" class="form-control" id="correo" required>
        </div>
        <div class="mb-3">
          <label for="mensaje" class="form-label">Mensaje</label>
          <textarea class="form-control" id="mensaje" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </section>

  <!-- Footer -->
  <footer class="bg-dark text-white text-center py-3">
    <small>&copy; 2025 MaxDigital. Todos los derechos reservados.</small>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
