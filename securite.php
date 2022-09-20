

<!DOCTYPE html>
<!-- Coding By CodingNepal - youtube.com/codingnepal -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="securite.css">
  </head>
  <body>
    <div class="center">
      <h1>Login</h1>
      <form method="post" action="authentification.php">
        <div class="txt_field">
          <input type="text" name = "mail" required>
          <span></span>
          <label>Email</label>
        </div>
        <div class="txt_field">
          <input type="password"name = "mp"  required>
          <span></span>
          <label>Mot de passe</label>
        </div>
        <div class="pass">Mot de passe oublié?</div>
        <button>Envoye</button>
        <div class="signup_link">
          Not a member? <a href="#">Signup</a>
        </div>
      </form>
    </div>

  </body>
</html>

