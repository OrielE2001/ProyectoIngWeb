<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/fe0dda9e61.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../Assets/style.css">
    <title>Login</title>
  </head>
  <body>
    <div class="container shadow" id="register_container">
        <div class="row">
            <div class="col-6 shadow" id="building_container">
              <div class="row text-center content-align-center">
                <div class="col-12 w-100">
                  <h1 class="login_logo">LOGO</h1>
                </div>
                <div class="col-12" id="icons_svg">
                  <span>Build with</span>
                  <b><i class="fab fa-php"></i></b>
                  <b><i class="fab fa-bootstrap"></i></b>
                  <b><i class="fab fa-node-js"></i></b>
                  <b><i class="fab fa-css3-alt"></i></b>
                </div>
              </div>
            </div>
            <div class="col-6">
                <h2 class="fw-bold pt-5 mb-0">Hola!</h2>
                <span>Registrate para iniciar</span>
                <!-- Login -->
                <form action="#">
                    <div class="mt-5">
                        <b></b>
                        
                    </div>

                    <div class="input-group mt-5">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-user"></i></span>
                        <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="Usuario" required>
                    </div>
    
                    <div class="input-group mt-5">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-envelope"></i></span>
                        <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="Correo Electrónico" required>
                    </div>

                    <div class="input-group mt-5">
                        <span class="input-group-text" id="inputGroupPrepend2"><i class="fas fa-lock"></i></i></span>
                        <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="Contraseña" required>
                    </div>

                    <div class="d-grid mt-5" id="button_login">
                      <button type="submit" class="btn text-light fw-bold">REGISTRARSE</button>
                    </div>

                    <div class="olvidar">
                      <span class="mr-0">Ya tienes una cuenta <a href="#">Inicia sesion</a></span>
                    </div>

                </form>

                <!--Redes Sociales-->

                <div class="container w-100 my-5">
                  <div class="row text-center">
                    <div class="col">
                      <img src="https://educationatw.com/wp-content/uploads/2021/03/Twitter-Logo.png" width="32px" alt="">
                      <img src="http://assets.stickpng.com/images/580b57fcd9996e24bc43c521.png" width="32px" alt="">
                      <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/83/Telegram_2019_Logo.svg/2048px-Telegram_2019_Logo.svg.png" width="32px" alt="">
                    </div>
                  </div>  
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>