<?php get_header(); ?>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto" style="padding-left: 1400px;">
            <li class="nav-item active">
              <a class="nav-link text-white" href="#">Nosotros<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#hotel">Hotel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#terapia">GatoTerapia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white disabled" href="#" tabindex="-1" aria-disabled="true">Contacto</a>
            </li>
          </ul>
        </div>
   

    <header class="header">
        <div class="header_titulo">
            <p class="header_sub">HOTEL, VETERINARIA Y TIENDA ESPECIALIZADA EN FELINOS</p>
            <h1 class="header_tit">Mi Gato Azir</h1>
            <h3 class="header_tit2">Atencion a domicilio y envios a todo chile</h3>
            <button class="header_button">URGENCIA</button>
        </div>
      
    </header>

    <main class="main">
        <h3 class="main_titulo">Servicios</h3>
        <div class="main_card container">
            <div class="row">
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="icon">
                                <a href="#"><i class="fas fa-user-md"></i></a>
                            </div>
                            <h1>Veterinaria</h1>
                        </div>
                      <p class="card-text">Examenes,cirugia, ecografia, radiografia, hospitalizacion peluqueria y estetica</p>
                    </div>
                  </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                      <div class="card-body">
                        <div class="card-title">
                            <div class="icon">
                                <a href="#"><i class="fas fa-shopping-bag"></i></a>
                            </div>
                            <h1>Tienda</h1>
                        </div>
                        <p class="card-text">accesorios, alimento, ropa, juegos y mas. Retiro en tienda o despacho a domicilio </p>
                      </div>
                    </div>
                  </div>
                <div class="col-sm-4">
                  <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="icon">
                                <a href="blog"><i class="fas fa-cat"></i></a>
                            </div>
                            <h1>Blog</h1>
                        </div>
                      <p class="card-text">consejos, curiosidades, comunidad y todo sobre  tu gato y como poder ayudarlo.</p>
                    </div>
                  </div>
                </div>
              </div>
        </div>
    </main>

    <section id="hotel" class="section row"> <!-- seccion de hotel-->
        <div class="section_detalle col-xs-12 col-md-6">
            <p class="section_encab">Cariño y atencion</p>
            <h2 class="section_tit">Servicio Hotel de lujo</h2>
            <p class="section_conte">con mas de 5 años de experiencia en cuidado felino, Mi Gato Azir abre el primer Hotel Premium felino a nivel nacional, totalmente equipado y con personal capacitado en situaciones de riesgo para darle a tu minino la mejor experiencia mientras tu no estas con el, puedes hacerle seguimiento 24/7 mediante camaras que tenemos en diferentes puntos del lugar transmitiendo continuamente</p>
            <button>INFORMACION Y RESERVAS</button>
        </div>
        <div class="section_extra col-xs-12 col-md-3">
            <img src="assets/img/comida.jpg" alt="">
            <h3 class="section_encab2">Alimento Premium</h3>
            <p class="section_cont2">Zona ambientada especialmente para su alimentacion, con platos de ceramica sanitizados, sistema de rotacion automatica de agua y juegos estimulantes de apetito</p>
        </div>
        <div class="section_extra col-xs-12 col-md-3">
            <img src="assets/img/naturaleza.jpg" alt="">
            <h3 class="section_encab2">Espacios naturaleza</h3>
            <p class="section_cont2">El Hotel cuenta con un amplio bosque completamente cercado y con camaras de vigilancia. un ambiente natural potencia y mejora habilidades de cazeria con alto gasto energetico</p>

        </div>
    </section>

    <article id="terapia" class="article row"> <!--seccion gato terapia, analizar si poner o no iconos de check , dependiendo la paja que pueda resultar-->
        <div class="col-md-6">
            <p class="article_encab">pesonalizada - no invasiva</p>
            <h2 class="article_title">Gato Terapia</h2>
            <p class="article_conte">El gato es un animal con caracter muy delicado, donde el minimo cambio en su entorno o estilo de vida puede causar alteraciones en su comportamiento, los cuales pueden repercutir en tu vida o en tu entorno. Descubrelas, resuelvelas y ayudalo a mantenerse un ambiente confortable en tu hogar con especialista y tratamientos 100% naturales y efectivos </p>
            <div class="article_check row">
                <div class="article_box col-md-6">
                    <i class="fas fa-check"></i>
                    <h3>estress</h3>
                    <i class="fas fa-check"></i>
                    <h3>Falta de apetito</h3>
                    <i class="fas fa-check"></i>
                    <h3>Agresividad</h3>
                    <i class="fas fa-check"></i>
                    <h3>Convivencia</h3>
                    <i class="fas fa-check"></i>
                    <h3>Maternidad</h3>
                </div>
                <div class="article_box col-md-6">
                    <i class="fas fa-check"></i>
                    <h3>Problemas renales</h3>
                    <i class="fas fa-check"></i>
                    <h3>Epilepsia</h3>
                    <i class="fas fa-check"></i>
                    <h3>Movilidad Reducida</h3>
                    <i class="fas fa-check"></i>
                    <h3>Ceguera</h3>
                    <i class="fas fa-check"></i>
                    <h3>Obesidad</h3>
                </div>
            </div>
        </div>
        <div class="col-md-6 img">
            <img src="assets/img/caracho.jpg" alt="gatoenojon">
        </div>
        <button>Contacto</button>
        <button data-toggle="modal" data-target="#ver">Ver Mas</button>
        <!-- Modal Ver mas -->
        <div class="modal fade" id="ver" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gato Terapia </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <img src="assets/img/group-of-bengal-sitting-in-front-of-a-white-backgr-P7QDRCF.jpg" class="img-fluid my-3" alt="asado">
                <p>La gatoterapia es un tratamiento tradicional contra los síntomas del estrés, la ansiedad y el bajo estado de ánimo con la ayuda de gatos domésticos. La utilización de este tipo de terapia basado en la compañía que proveen estos pequeños felinos domésticos puede ayudar a mejorar la salud física y mental y la calidad de vida en general, a través de la interacción amistosa entre el gato y la persona.

                  Lo positivo de la gatoterapia es, justamente su sencillez: se fundamenta en la compañía que se ofrecen e gato y la persona y el modo en el que interactúan.</p>

                <p>Los beneficios de la gatoterapia en personas con algún tipo de discapacidad física o psíquica o con alguna clase de trastorno emocional o psíquico, han sido estudiados. Por ejemplo, entre los trastornos asociados a demencias (Alzheimer), el autismo, el Síndrome de Down, el TDAH y los trastornos conductuales en niños y en trastornos del estado de ánimo, los beneficios parecen claros.</p>

                <p>varios estudios revelaron que los pacientes aquejados de cardiopatía reportaron una progresión mejor y más rápida si convivían con un felino, incrementando así el porcentaje de supervivencia un año después de haber padecido un episodio agudo como por ejemplo, un infarto (Friedmann y Thomas, 1995).
                Las personas que viven con gatos en casa tienen una probabilidad más baja de fallecer a causa de un infarto. Esta fue la conclusión a la que llegaron varios investigadores liderados por A. Baun de la Nursing Research. En el caso de la convivencia con perros, no se reportó el mismo efecto protector, posiblemente debido a los cuidados diarios que requieren los canes: los dueños de perros estuvieron en probabilidades cercanas a la media.</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    </article>
    <!--formulario-->

    <form>
      <div class="form-group">
        <label for="exampleInputEmail1">Direccion Correo</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        <small id="emailHelp" class="form-text text-muted">Nosotros nunca compartiremos tu informacion con nadie</small>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Contraseña</label>
        <input type="password" class="form-control" id="exampleInputPassword1">
      </div>
      <div class="form-group">
        <label for="exampleFormControlTextarea1">Escribe tu mensaje</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
      </div>
      <button>Enviar</button>
    </form>
</html>
<?php get_footer(); ?>