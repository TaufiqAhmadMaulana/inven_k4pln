<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Login K4 PLN</title>
  <meta content="width=device-width, initial-scale=1.0, shrink-to-fit=no" name="viewport" />
  <link rel="icon" href="assets/img/pln-logo.png" type="image/x-icon" />
  <link rel="stylesheet" href="assets/css/login.css">
</head>

<body>
  <div class="container">
    <div class="card">
      <div class="row">
        <!-- Bagian Kiri -->
        <div class="col left">
          <img src="assets/img/pln-logo.png" alt="PLN" class="pln-img">
          <h1 class="welcome-text">Welcome to your blackboard</h1>
        </div>
        
        <!-- Bagian Kanan -->
        <div class="col right">
          <form class="login-form" action="/login" method="post">
            @csrf
            <h3>Log in</h3>
            <input type="text" name="username" id="username" placeholder="Username" required>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <button type="submit" class="btn">Login</button>
            <br>            
            <a href="/register" class="register-link">Not Have Account? Register</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>