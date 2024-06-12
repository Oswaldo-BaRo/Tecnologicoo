<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Bienvenido a este Tecnológico</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }
    .jumbotron {
      background-color: #00325F;
      color: #fff;
    }
    .card-header {
      background-color: #00325F;
      color: #fff;
    }
    .navbar {
      background-color: #00325F;
    }
    .navbar-brand, .nav-link {
      color: #fff !important;
    }
    /* Estilos específicos para dispositivos móviles */
    @media only screen and (max-width: 768px) {
      .jumbotron {
        padding: 2rem 1rem;
      }
      .card {
        margin-bottom: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <a class="navbar-brand" href="#">Ingeniería en Sistemas</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#informacion-general">Información General</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#plan-de-estudios">Plan de Estudios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#perfil-egresados">Perfil de Egresados</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#oportunidades-laborales">Oportunidades Laborales</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#requisitos-admision">Requisitos de Admisión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#beneficios-carrera">Beneficios de la Carrera</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#noticias-articulos">Noticias y Artículos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#eventos">Eventos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto-soporte">Contacto y Soporte</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#recursos-materias">Recursos y Materias</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Portada de Inicio -->
  <div class="jumbotron text-center">
    <h1 class="display-4">¡BIENVENIDO Al TECNOLOGICO SUPERIOR ZACATECAS NORTE!</h1>
    <p class="lead">Donde el conocimiento y la innovación se encuentran en este lugar.</p>
    <p class="lead"> Descubre todo lo que tenemos para ofrecerte en nuestro instituto tecnológico.</p>
    <a class="btn btn-primary btn-lg" href="#informacion-general" role="button">Conoce más</a>
  </div>

  <!-- Sección de Información General -->
  <div class="container mt-5" id="informacion-general">
    <div class="card">
      <div class="card-header">
        <h2>Información General</h2>
      </div>
      <div class="card-body">
        <p>La carrera de Ingeniería en Sistemas está diseñada para formar profesionales capaces de desarrollar, implementar y gestionar sistemas de información.</p>
        <p>El objetivo es proporcionar a los estudiantes las herramientas y conocimientos necesarios para enfrentar los retos tecnológicos del presente y futuro.</p>
      </div>
    </div>
  </div>

  <!-- Sección del Plan de Estudios -->
  <div class="container mt-5" id="plan-de-estudios">
    <div class="card">
      <div class="card-header">
        <h2>Plan de Estudios</h2>
      </div>
      <div class="card-body">
        <ul>
          <li>Primer Semestre
            <ul>
              <li>Matemáticas I</li>
              <li>Introducción a la Programación</li>
              <li>Fundamentos de Ingeniería</li>
              <li>Comunicación Oral y Escrita</li>
            </ul>
          </li>
          <!-- Más semestres y materias -->
        </ul>
      </div>
    </div>
  </div>

  <!-- Sección del Perfil de Egresados -->
  <div class="container mt-5" id="perfil-egresados">
    <div class="card">
      <div class="card-header">
        <h2>Perfil de Egresados</h2>
      </div>
      <div class="card-body">
        <p>El egresado de la carrera de Ingeniería en Sistemas será capaz de:</p>
        <ul>
          <li>Desarrollar y mantener sistemas de información eficientes y seguros.</li>
          <li>Gestionar proyectos de tecnología de la información.</li>
          <li>Analizar y optimizar procesos organizacionales a través de la tecnología.</li>
          <li>Trabajar en equipo y liderar proyectos multidisciplinarios.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Sección de Oportunidades Laborales -->
  <div class="container mt-5" id="oportunidades-laborales">
    <div class="card">
      <div class="card-header">
        <h2>Oportunidades Laborales</h2>
      </div>
      <div class="card-body">
        <p>Los egresados tienen diversas oportunidades laborales, como:</p>
        <ul>
          <li>Desarrollador de software</li>
          <li>Administrador de bases de datos</li>
          <li>Consultor en tecnologías de la información</li>
          <li>Gerente de proyectos de TI</li>
          <li>Especialista en ciberseguridad</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Sección de Requisitos de Admisión -->
  <div class="container mt-5" id="requisitos-admision">
    <div class="card">
      <div class="card-header">
        <h2>Requisitos de Admisión</h2>
      </div>
      <div class="card-body">
        <p>Para ingresar a la carrera, es necesario cumplir con:</p>
        <ul>
          <li>Exámenes de Admisión</li>
          <li>Documentación Necesaria</li>
          <li>Fechas Importantes</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Sección de Beneficios de la Carrera -->
  <div class="container mt-5" id="beneficios-carrera">
    <div class="card">
      <div class="card-header">
        <h2>Beneficios de la Carrera</h2>
      </div>
      <div class="card-body">
        <p>Estudiar Ingeniería en Sistemas ofrece ventajas como:</p>
        <ul>
          <li>Alta demanda laboral</li>
          <li>Salarios competitivos</li>
          <li>Desarrollo de habilidades técnicas y blandas</li>
          <li>Innovación y creatividad</li>
          <li>Contribución a la sociedad</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Sección de Noticias y Artículos -->
  <div class="container mt-5" id="noticias-articulos">
    <div class="card">
      <div class="card-header">
        <h2>Noticias y Artículos</h2>
      </div>
      <div class="card-body">
        <h3>Noticias</h3>
        <ul>
          <li>Guía para el Desarrollo de Aplicaciones Web: Aprende los fundamentos del desarrollo web con esta guía completa, desde HTML y CSS hasta JavaScript y frameworks modernos.</li>
          <li>Introducción a la Ciberseguridad: Descubre los conceptos básicos de la ciberseguridad y cómo proteger tus sistemas y datos en un mundo digital cada vez más conectado.</li>
        </ul>
        <h3>Artículos Informativos</h3>
        <ul>
          <li>Introducción a la Inteligencia Artificial: Aprende sobre los fundamentos de la inteligencia artificial, sus aplicaciones en la vida cotidiana y su impacto en diversas industrias.</li>
          <li>Tendencias Tecnológicas del Futuro: Explora las tecnologías emergentes que están transformando el mundo, como la computación cuántica, la realidad aumentada y algunas otras más.</li>
          <li>Seguridad Informática para Principiantes: Descubre cómo proteger tu información personal y tus dispositivos contra amenazas en línea.</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Sección de Eventos -->
  <div class="container mt-5" id="eventos">
    <div class="card">
      <div class="card-header">
        <h2>Eventos</h2>
      </div>
      <div class="card-body">
        <h3>Calendario de Eventos</h3>
        <ul>
          <li>15 de junio: Taller de Programación en Python</li>
          <li>16 de junio: Feria de Empleo Tecnológico</li>
          <li>17 de junio: Conferencia sobre Ciberseguridad</li>
          <li>18 de junio: Reunión de Egresados</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Sección de Recursos y Materias -->
  <div class="container mt-5" id="recursos-materias">
    <div class="card">
      <div class="card-header">
        <h2>Recursos y Materias</h2>
      </div>
      <div class="card-body">
        <h3>Libros Recomendados</h3>
        <ul>
          <li>Introducción a la Ingeniería de Software - Roger S. Pressman</li>
          <li>Base de Datos: Diseño y Gestión - Peter Rob & Carlos Coronel</li>
          <li>Redes de Computadoras - Andrew S. Tanenbaum</li>
        </ul>
        <h3>Proyectos Destacados por Estudiantes</h3>
        <ul>
          <li>Sistema de Gestión Escolar para Escuelas Primarias</li>
          <li>Aplicación Móvil para el Control de Gastos Personales</li>
          <li>Plataforma Web de Aprendizaje Colaborativo</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Sección de Contacto y Soporte -->
  <div class="container mt-5" id="contacto-soporte">
    <div class="card">
      <div class="card-header">
        <h2>Contacto y Soporte</h2>
      </div>
      <div class="card-body">
        <p>Puedes ponerte en contacto con nosotros en cualquier momento, te dejo algunas opciones para comunicarte</p>
        <ul>
          <li>Email: oswaldo010102baro@gmail.com</li>
          <li>Teléfono: 4981058255</li>
          <li>Dirección: Av. Tecnológico #300 Rio Grande Zacatecas</li>
        </ul>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="container mt-5">
    <hr>
    <p class="text-center">&copy; 2024 Ingeniería en Sistemas - Desarrollado por <a href="https://www.ejemplo.com">Tu Empresa</a></p>
  </footer>

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
