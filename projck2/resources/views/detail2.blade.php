<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <title>Hijab_store</title>
  </head>
  <body>
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container">
  <h5><li class="fas fa-cart-plus mr-2"><li></h5>
    <a class="navbar-brand font-weight-bold"  href="/halaman">HIJAB-STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active"  href="/halaman">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/About">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link  active" href="/login">login</a>
        </li>
       </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-warning" type="submit">Cari</button>
      </form>
      
    </div>
  </div>
</nav>

<div class="row ">
    <div class="col-md-2 bg-light">
        <ul class="list-group-flush p-2 pt-4">
            <li class="list-group-item bg-warning"><i class="fas fa-list mr-2"></i> katagori</li>
            <li class="list-group-item" ><i class="fas fa-angle-right "></i>Home</li>
            <li class="list-group-item"><i class="fas fa-angle-right "></i>Produk</li>
            <li class="list-group-item"><i class="fas fa-angle-right "></i>Login</li>
                       
        </ul>
    </div>
    <div class="col-md-10">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
            <img src="fotoku/logo.jpg" class="d-block w-100" alt="..." height="550px">
            </div>
            <div class="carousel-item">
            <img src="fotoku/ddd.jpg" class="d-block w-100" alt="..." height="550px">
            </div>
            <div class="carousel-item">
            <img src="fotoku/tqy.webp" class="d-block w-100" alt="..." height="550px">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    <main class="mt-3 mb-3">
        <div class="container">
            <h5 class="font-weight-bold p-3">Detail Produk</h5>
            <hr>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <div class="card" >
                    <img src="fotoku/ceruty.jpg" class="img-fluid" alt="...">
                    </div>
                </div>

                <div class="col-lg-8 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <table>
                                <tr>
                                <th>Nama </th>
                                <td>:</td>
                                <td>Pashmina Ceruty Babydoll</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>:</td>
                                    <td>bahan tidak menerawang, Elastis nyaman di Pakai </td>
                                </tr>
                                <tr>
                                    <th>Stok</th>
                                    <td>:</td>
                                    <td>Stok Ready Melimpah</td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td>:</td>
                                    <td>Rp 35.000</td>
                                </tr>
                                
                            </table>
                            <br>
                            <button type="button" class="btn btn-warning btn-block "><i class="fa fa-shopping-cart" aria-hidden="true"></i><i class="fa fa-plus" aria-hidden="true"></i></button>
                            
                        </div>
                    </div>
                </div>
                
            </div>
                
        
        </div>
    </main>
        
    
</div>
    
  <footer class="bg-primary text-white pt-5 pb-4">
   <div class="container text-center text-md-left">
     <div class="row text-center text-md-left">
        <div class="col-md-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-warning">Hijab_store</h6>
          <p>Allshop Hijab dan aksessoris Hijab </p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-warning">Produk</h6>
          <p>
            <a href="#" class="text-white" style="text-decoration: none;">Hijab_instan</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none;">Hijab_pashmina</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none;">aksessoris</a>
          </p>
        </div>
         
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-warning">Useful links</h6>
          <p>
            <a href="#" class="text-white" style="text-decoration: none;">creativitas</a>
          </p>
          <p>
            <a href="#" class="text-white" style="text-decoration: none;">produk_Real</a>
          </p>
          
        </div>

        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h6 class="text-uppercase mb-4 font-weight-bold text-warning">Contact</h6>
          <p>
            <i class="fas fa-home mr-3"></i>KALBAR, Ketapang, No 123, Indonesia
          </p>
          <p>
            <i class="fas fa-envelope mr-3"></i>HijabStore000@gmail.com
          </p>
          <p>
            <i class="fas fa-phone mr-3"></i>+921245678
          </p>
          <p>
            <i class="fas fa-print mr-3"></i>+01 222 333 44
          </p>
        </div>

      </div>  

      <hr class="mb-4">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8">
          <p>copyright @2021 All rights reserved by:
            <a href="#" style="text-decoration: none;">
               <strong class="text-warning">Hijab_store</strong>
            </a></p>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-right">
            
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-instagram"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="btn-floating btn-sm text-white" style="font-size: 23px;"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
          </div>
        </div>
      </div>
    </div>

  </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>