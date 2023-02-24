<!doctype html>
<html lang="en">
  <head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <link rel="stylesheet" href="css/style.css">

  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!------ Include the above in your HEAD tag ---------->


  </head>
  
  <body>
    <!-- Section: Design Block -->
    <section class="text-center">
      <!-- Background image -->
      <div class="p-5 bg-image" style="
            /*background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');*/
            background-color: purple;
            height: 300px;
            "></div>
      <!-- Background image -->

      <div class="card mx-4 mx-md-5 shadow-5-strong" style="
            margin-top: -100px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px);
            ">
        <div class="card-body py-5 px-md-5">

          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h2 class="fw-bold mb-5">Login</h2>
              <form action = "login_proc.php" method ="POST">
               
                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name ="email" id="form3Example3" class="form-control" placeholder ="Email address" />
                    <label class="form-label" for="form3Example3"></label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
  
                  <input type="password" name ="upass" id="form3Example4" class="form-control" placeholder = "Password" />
                  <label class="form-label" for="form3Example4"></label>
                </div>

                <!-- Submit button -->
                <button type="submit" name = "login" style="background: purple; color: white;">
                  Login
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Section: Design Block -->

  </body>
</html>

