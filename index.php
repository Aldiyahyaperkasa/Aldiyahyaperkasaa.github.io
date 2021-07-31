<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="login.css"

  </head>
  <body>

    <div class="space"></div>
    <div class="wraper justify-content-center">
        
    <div class="row justify-content-center">
        <div class="col-md-6 "><img src="image/ig.png" alt=""></div>
        <div class="col-md-4 ">
            <div class="login-box">
                <img class="ig-img" src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2a/Instagram_logo.svg/1200px-Instagram_logo.svg.png" alt="">
                <form method="POST" action="login.php">
                <?php 
                  if(isset($_GET['pesan']))
                  {
                    if($_GET['pesan'] == "gagal")
                    {
                      echo "username dan password salah!";
                    }
                    else if($_GET['pesan'] == "logout")
                    {
                      echo "Anda telah berhasil logout";
                    }
                      else if($_GET['pesan'] == "belum_login")
                    {
                      echo "Anda harus login untuk mengakses halaman admin";
                    }
                  }
                ?><br>
                    <div class="input">
                      <input type="email" placeholder="Nomor telepon, nama pengguna, atau email" name="username">
                    </div>
                    <div class="input">
                      <input type="password"  placeholder="Kata Sandi" name="password">
                    </div>
                    <div class="submit">
                        <input class="bg-primary text-light" type="submit" value="Login">
                    </div>
                  </form>
                  
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>    