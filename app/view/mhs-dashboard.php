<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Halaman | Utama</title>
  </head>
  <body>
    <?php include '../app/view/mhs-navbar.php'; ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="side-bar">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="?halaman=mhs-profile"><i class="fas fa-tachometer-alt"></i> Profile</a>
              </li>


              <?php include '../app/view/mhs-accordion.php'; ?>


            </ul>
          </div>
        </div>

        <div class="col-md-10">
          <div class="main-bar">
                <?php include '../app/controller/controller.php'; ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://kit.fontawesome.com/0b9574c8b5.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
  </body>
</html>