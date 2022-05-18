<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Título do Site -->
    <title>Conversor</title>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" defer></script>

    <!-- Fonts -->

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styles/conversor.css" rel="stylesheet">
</head>
<body class="bg-secondary">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="Logomarca conversor temperatura" width="30px"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <!-- <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
              </li> -->
            </ul>
          </div>
        </div>
      </nav>
      
      <main class="container">
        <div class="bg-light p-5 rounded">
            <?php include_once "functions/conversor.php"; ?>      
        </div>
      </main>
</body>
</html>