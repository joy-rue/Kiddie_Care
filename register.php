<!doctype html>
<html lang="en">
  <head>
    <title>Login 10</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--   <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  
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
            margin-top: -200px;
            background: hsla(0, 0%, 100%, 0.8);
            backdrop-filter: blur(30px);
            ">
        <div class="card-body py-5 px-md-5">

          <div class="row d-flex justify-content-center">
            <div class="col-lg-8">
              <h2 class="fw-bold mb-5">Sign up now</h2>
              <form action="register_proc.php" method="POST">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="fname" class="form-control" placeholder = "First name"/>
                      <label class="form-label" for="form3Example1"></label>
                    </div>
                  </div>

                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" name="lname" class="form-control" placeholder="Last name"/>
                      <label class="form-label" for="form3Example2"></label>
                    </div>
                  </div>
                </div>

                <!-- Email input -->
                <div class="form-outline mb-4">
                    <input type="email" name="email" class="form-control" placeholder ="Email address" />
                    <label class="form-label" for="form3Example3"></label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
  
                  <input type="password" name="upass" class="form-control" placeholder = "Password" />
                  <label class="form-label" for="form3Example4"></label>
                </div>
                
                <!-- Submit button -->
                <button type="submit" name = "register" style="background: purple; color: white; margin-top: 30px;" >
                  Sign up
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

