<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="css/dashboard_style.css">
    <title>Admin Dashboard</title>
  </head>
  <body>
    
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-light">
      <button class="navbar-toggler ml-auto mb-2 bg-light" type="button" data-toggle="collapse" data-target="#myNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myNavbar">
        <div class="container-fluid">
          <div class="row">
            <!-- sidebar -->
            <div class="col-xl-2 col-lg-3 col-md-4 sidebar fixed-top">
              <a href="#" class="navbar-brand text-white d-block mx-auto text-center py-3 mb-4 bottom-border">Home Page</a>
              <div class="bottom-border pb-3">
                <img src="images/admin.jpeg" width="50" class="rounded-circle mr-3">
                <a href="#" class="text-white">Admin</a>
              </div>
              <ul class="navbar-nav flex-column mt-4">
                <li class="nav-item"><a href="/dashboard" class="nav-link text-white p-3 mb-2 current"><i class="fas fa-home text-light fa-lg mr-3"></i>Dashboard</a></li>
                <li class="nav-item"><a href="/gpu_form" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-user text-light fa-lg mr-3"></i>Insert GPU Information</a></li>
                <li class="nav-item"><a href="/cpu_form" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-envelope text-light fa-lg mr-3"></i>Insert CPU Information</a></li>
                <li class="nav-item"><a href="/show/gpu" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-shopping-cart text-light fa-lg mr-3"></i>GPUS</a></li>
                <li class="nav-item"><a href="/show/cpu" class="nav-link text-white p-3 mb-2 sidebar-link"><i class="fas fa-chart-line text-light fa-lg mr-3"></i>CPUs</a></li>
                     </ul>
            </div>
            <!-- end of sidebar -->

            <!-- top-nav -->
            <div class="col-xl-10 col-lg-9 col-md-8 ml-auto bg-dark fixed-top py-2 top-navbar">
              <div class="row align-items-center">
                <div class="col-md-4">
                  <h4 class="text-light text-uppercase mb-0">Dashboard</h4>
                </div>
               
                <div class="col-md-3">
                  <ul class="navbar-nav">
                    <li class="nav-item icon-parent"><a href="/dashboard" class="nav-link"> <button type="button" class="btn btn-danger">Logout</button></a></li>
                    </ul>
                </div>
              </div>
            </div>
            <!-- end of top-nav -->
          </div>
        </div>
      </div>
    </nav>
    <!-- end of navbar -->

    <!-- modal -->
   

    <!-- cards -->
    <section>
    
    </section>
    <!-- end of cards -->

    <!-- tables -->
    <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-6 col-12 mb-4 mb-xl-0">
                <h3 class="text-muted text-center mb-3">Staff Salary</h3>
                <form action="{{url('\cpu_update',[$users->id])}}" method="POST">
  @csrf
  <div class="contact-form">
    <div class="input-fields">
      <legend style="text-align-last: center;">Update CPU</legend>
      <legend>CPU Code Name</legend>
      <input type="text" name="name" class="form-control"  value="{{ $users->name }}"  required>
      <legend>Cores</legend>
      <input type="text" name="core" class="form-control"  value="{{ $users->core }}" >
      <legend>Threads</legend>
      <input type="text" name="thread" class="form-control"  value="{{ $users->thread }}" >
      <legend>Clock Speed</legend>
      <input type="text" name="clock" class="form-control"   value="{{ $users->clock }}">
      <legend>L1 Cache</legend>
      <input type="text" name="l1" class="form-control"  value="{{ $users->l1 }}">
      <legend>L2 Cache</legend>
      <input type="text" name="l2" class="form-control"   value="{{ $users->l2 }}">
      <legend>L3 Cache</legend>
      <input type="text" name="l3" class="form-control"  value="{{ $users->l3 }}">
      <br>
      <button class="btn btn-info">Submit</button>
    </div>
</div>
</form>

              

              </div></div></div></div></div>
           

    <!-- footer -->
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row border-top pt-3">
              <div class="col-lg-6 text-center">
                <ul class="list-inline">
                  <li class="list-inline-item mr-2">
                    <a href="#" class="text-dark">CodeAndCreate</a>
                  </li>
                  <li class="list-inline-item mr-2">
                    <a href="#" class="text-dark">About</a>
                  </li>
                  <li class="list-inline-item mr-2">
                    <a href="#" class="text-dark">Support</a>
                  </li>
                  <li class="list-inline-item mr-2">
                    <a href="#" class="text-dark">Blog</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6 text-center">
                <p>&copy; 2018 Copyright. Made With <i class="fas fa-heart text-danger"></i> by <span class="text-success">CodeAndCreate</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- end of footer -->
   
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <script src="script1.js"></script>
  </body>
</html>






