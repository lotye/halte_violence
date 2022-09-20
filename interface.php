<?php
session_start();

// echo $_SESSION['state'];

if ($_SESSION['state'] !== 'autorisé') {
  echo 'désolé';
  header('location:securite.php');
}

else{




?>

<style>
body {
  background: #ffea92;
  margin: 0;
  font-family: "Open Sans", Helvetica Neue, Helvetica, Arial, sans-serif;
  color: #fff;
  padding-left: 240px;
  width: 100%;
}

.aide{
  width: 50%;
  margin-left: 50px;
  margin-right:50px;
}

.menu {
  background: #5bc995;
  height: 100vh;
  width: 240px;
  position: fixed;
  top: 0;
  left: 0;
  z-index: 5;
  outline: none;
}
.menu .avatar {
  background: rgba(0, 0, 0, 0.1);
  padding: 2em 0.5em;
  text-align: center;
}
.menu .avatar img {
  width: 100px;
  border-radius: 50%;
  overflow: hidden;
  border: 4px solid #ffea92;
  box-shadow: 0 0 0 4px rgba(255, 255, 255, 0.2);
}
.menu .avatar h2 {
  font-weight: normal;
  margin-bottom: 0;
}
.menu ul {
  list-style: none;
  padding: 0.5em 0;
  margin: 0;
}
.menu ul li {
  padding: 0.5em 1em 0.5em 3em;
  font-size: 0.95em;
  font-weight: regular;
  background-repeat: no-repeat;
  background-position: left 15px center;
  background-size: auto 20px;
  transition: all 0.15s linear;
  cursor: pointer;
}
.menu ul li.icon-dashboard {
  background-image: url("http://www.entypo.com/images//gauge.svg");
}
.menu ul li.icon-customers {
  background-image: url("http://www.entypo.com/images//briefcase.svg");
}
.menu ul li.icon-users {
  background-image: url("http://www.entypo.com/images//users.svg");
}
.menu ul li.icon-settings {
  background-image: url("http://www.entypo.com/images//tools.svg");
}
.menu ul li:hover {
  background-color: rgba(0, 0, 0, 0.1);
}
.menu ul li:focus {
  outline: none;
}
@media screen and (max-width: 900px) and (min-width: 400px) {
  body {
    padding-left: 90px;
  }
  .menu {
    width: 90px;
  }
  .menu .avatar {
    padding: 0.5em;
    position: relative;
  }
  .menu .avatar img {
    width: 60px;
  }
  .menu .avatar h2 {
    opacity: 0;
    position: absolute;
    top: 50%;
    left: 100px;
    margin: 0;
    min-width: 200px;
    border-radius: 4px;
    background: rgba(0, 0, 0, 0.4);
    transform: translate3d(-20px, -50%, 0);
    transition: all 0.15s ease-in-out;
  }
  .menu .avatar:hover h2 {
    opacity: 1;
    transform: translate3d(0px, -50%, 0);
  }
  .menu ul li {
    height: 60px;
    background-position: center center;
    background-size: 30px auto;
    position: relative;
  }
  .menu ul li span {
    opacity: 0;
    position: absolute;
    background: rgba(0, 0, 0, 0.5);
    padding: 0.2em 0.5em;
    border-radius: 4px;
    top: 50%;
    left: 80px;
    transform: translate3d(-15px, -50%, 0);
    transition: all 0.15s ease-in-out;
  }
  .menu ul li span:before {
    content: '';
    width: 0;
    height: 0;
    position: absolute;
    top: 50%;
    left: -5px;
    border-top: 5px solid transparent;
    border-bottom: 5px solid transparent;
    border-right: 5px solid rgba(0, 0, 0, 0.5);
    transform: translateY(-50%);
  }
  .menu ul li:hover span {
    opacity: 1;
    transform: translate3d(0px, -50%, 0);
  }
}
@media screen and (max-width: 400px) {
  body {
    padding-left: 0;
  }
  .menu {
    width: 230px;
    box-shadow: 0 0 0 100em rgba(0, 0, 0, 0);
    transform: translate3d(-230px, 0, 0);
    transition: all 0.3s ease-in-out;
  }
  .menu .smartphone-menu-trigger {
    width: 40px;
    height: 40px;
    position: absolute;
    left: 100%;
    background: #5bc995;
  }
  .menu .smartphone-menu-trigger:before,
  .menu .smartphone-menu-trigger:after {
    content: '';
    width: 50%;
    height: 2px;
    background: #fff;
    border-radius: 10px;
    position: absolute;
    top: 45%;
    left: 50%;
    transform: translate3d(-50%, -50%, 0);
  }
  .menu .smartphone-menu-trigger:after {
    top: 55%;
    transform: translate3d(-50%, -50%, 0);
  }
  .menu ul li {
    padding: 1em 1em 1em 3em;
    font-size: 1.2em;
  }
  .menu:focus {
    transform: translate3d(0, 0, 0);
    box-shadow: 0 0 0 100em rgba(0, 0, 0, 0.6);
  }
  .menu:focus .smartphone-menu-trigger {
    pointer-events: none;
  }
}
</style>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>interface</title>
</head>
<body>
  
<nav class="menu" tabindex="0">
	<div class="smartphone-menu-trigger"></div>
  <header class="avatar">
		<img src="images/logo1.png" />
  </header>
	<ul>
    <li tabindex="0" class="icon-dashboard"><span><a href="savane.php">Savane</a> </span>  </li>
    <li tabindex="0" class="icon-customers"><span> <a href="admin.php">Kara</a></span></li>
    <li tabindex="0" class="icon-users"><span><a href="maritime.php">Maritime</a></span></li>
    <li tabindex="0" class="icon-settings"><span><a href="plateaux.php">Plateaux</a></span></li>
    <li tabindex="0" class="icon-settings"><span><a href="centrale.php">Centrale</a></span></li>
  </ul>
</nav>


<div class="container  " >
  <div class=""><p>INFORMATION ADMINISTRATIFS</p> </div>

  <div class="row items-content-center">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nom</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid first name is required.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Prenom</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Nom d'utilisateur</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Username" required="">
              <div class="invalid-feedback">
                  Your username is required.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Poste de Responsabilité</label>
              <input type="text" class="form-control" id="address" placeholder="responsable genre ,profesionnel de santé,securité..." required="">
              <div class="invalid-feedback">
                Please enter your shipping address.
              </div>
            </div>


            <div class="col-md-5">
              <label for="country" class="form-label">horaire de prise de service</label>
              <select class="form-select" id="country" required="">
                <option value="">7H - 17H</option>
                <option>17H - 7H</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Types de requettes traites</label>
              <select class="form-select" id="state" required="">
                <option value="">Temoins, Victimes</option>
                <option value="">Victimes.</option>
                <option>Temoins</option>
              </select>
              <div class="invalid-feedback">
                Please provide a valid state.
              </div>
            </div>

            
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Nombre de requetes traités</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
              </div>

          </div>
          <input type="submit" value="Login">
  </div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>
</html>



<!--   
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="interface.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <section>
        <ul>
            <li class="active"><a href="">Home</a></li>
            <li><a href="">4242  <br> appel femme violence</a></li>
            <li><a href="">117 <br>appeler la police qu secour</a></li>
            <li><a href="">notification</a><i class="fa-thin fa-bell"></i></li>
        </ul>
    </section>


    <section1>
        <div class="interface">




           <div class="grace">
              <ul class="grace">
                 <li class="active"><a href="savane.php">Savane</a></li>
                 <li><a href="admin.php">Kara</a></li>
                 <li><a href="centrale.php" target="_blank">Centrale</a></li>
                 <li><a href="plateaux.php">Plateaux</a></li>
                 <li><a href="">Maritime</a></li>
              </ul>
           </div>

           
           <div class="afichage">

            <div class="col">
                <div class="card mb-4 rounded-3 shadow-sm rond">
                  <div class="card-header py-3">
                    <h4 class="my-0 fw-normal">Free</h4>
                  </div>
                  <div class="card-body ">
                    <h1 class="card-title pricing-card-title">$0<small class="text-muted fw-light">/mo</small></h1>
                    
                    <button type="button" class="w-100 btn btn-block btn-outline-primary">Sign up for free</button>
                  </div>
                </div>
              </div>
              

           </div>
           </div>
           
        </div>
        
       <div>region</div>
    </section>
    
  <script src="/docs/5.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
  crossorigin="anonymous"></script>
</body>
</html>
  <?php
  }
  // echo'correct mail and pass';
?>
 -->
