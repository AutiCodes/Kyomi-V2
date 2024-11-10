<!DOCTYPE html>
<html lang="nl">
	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<!-- Page title -->
    <title>Inloggen</title>
	  <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	  <!-- tab icon -->
	  <link rel="icon" href="/media/images/TRMC_LOGO_PNG.ico" type="image/x-icon">
  </head>
	<body>
		<main>
      @if (session()->has('error'))
        <div class="alert alert-success" role="alert">
          {{ session('error') }}
        </div>
      @endif
      @if (session()->has('errors'))
        <div class="alert alert-success" role="alert">
          {{ session('errors') }}
        </div>
      @endif

      <!-- LOGIN -->
      <div class="container mt-5 bg-dark bg-opacity-25 rounded shadow-lg p-2" style="max-width: 400px">
        <img src="/app_media/faticon.ico" class="rounded mx-auto d-block" alt="" style="width: 150px;">
        <h2 class="text-white text-center pt-3">Inloggen</h2>

        <form class="col-auto pt-4 pb-4 mw-50" action="/login-post" method="POST">
          @csrf
          <div class="form-group">
            <label for="email" class="text-white"><strong>Email</strong></label>
            <input type="text" class="form-control" id="email" name="email" aria-describedby="email" placeholder="" required>
          </div>
          <div class="form-group mt-2">
            <label for="password" class="text-white"><strong>Wachtwoord</strong></label>
            <input type="password" class="form-control mb-2" id="password" name="password" placeholder="Wachtwoord" required>
          </div>

          <button type="submit" class="btn text-white mt-2" style="background-image: linear-gradient(45deg, #874da2 0%, #c43a30 100%)">Inloggen</button>
        </form>
      </div>
		</main>

    <style>
      body, html {
        background-image: linear-gradient(45deg, #874da2 0%, #c43a30 100%);
        width: 100%;
        height: 100%;
        position: absolute;
      }
    </style>

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	</body>
</html>