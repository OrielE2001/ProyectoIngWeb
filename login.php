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
    <div class="container shadow" id="login_container">
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
                <h2 class="fw-bold text-center pt-5 mb-5">Bienvenido Nuevamente</h2>
                <!-- Login -->
                <form action="#">
                    <div class="mt-2 mb-4">
                        <input type="text" class="form-control shadow-sm" name="user" placeholder="usuario"  id="input_text" require>
                    </div>
                    <div class="mt-5 mb-4">
                        <input type="password" class="form-control shadow-sm" name="password" placeholder="contrasena"  id="input_text" require>
                    </div>
                    <div class="d-grid" id="button_login">
                      <button type="submit" class="btn text-light fw-bold">INICIAR</button>
                    </div>

                    <div class="olvidar">
                      <span><a href="#" style="text-decoration: none;"> Olvidaste tu contrasena?</a></span>
                      <span class="mr-0">No tienes una cuenta <a href="#">create una</a></span>
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
