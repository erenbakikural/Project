<?php
	session_start();
	include 'ayar.php';
	include 'ukas.php';
?>

<?php
	ukas_giris("ayar.php", "testprofil.php", "<p>Lütfen boş bırakmayınız!</p>", "<p>Kullanıcı adı veya şifre hatalı!</p>");
	// Ayar dosyası, Giriş yapıldıktan sonra yönlendirilecek yer, Uyarı mesajı, Hata mesajı
?>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<section class="vh-100 gradient-custom" style="background-color: #508bfc;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <div class="mb-md-5 mt-md-4 pb-5">
                          

<h2 class="fw-bold mb-2">Giriş Yap!</h2>
<form action="" method="POST">
<div class="form-outline form-white mb-4">
	<input type="text" name="kadi" class="form-control form-control-lg" placeholder="Kullanıcı adı">
</div>
              <div class="form-outline form-white mb-4">
	<input type="password" name="sifre" placeholder="Şifre" class="form-control form-control-lg">
                  </div>
	<input type="submit" class="btn btn-outline-light btn-lg px-5" name="giris" value="Giriş"></br>
    <div style="margin-top:10px;">
<a href="/deneme/lgs/yonetim/test.php">
<button type="button" class="btn btn-outline-light btn-lg px-5" >Kurum Girişi</button>
</div>
</a>
</form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>

