<?php get_headers(); ?>

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
        <input type="checkbo    x" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Recordarme</label>
      </div>
      <button>Enviar</button>
    </form>
<?php get_footer(); ?>