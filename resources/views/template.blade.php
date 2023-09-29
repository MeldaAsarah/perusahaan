<!DOCTYPE html>
<html lang="en">
<head>
    <title>MELDA ASARAH</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary mb-3">
     
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
            </button>
   <a class="navbar-brand" href="#"><font color="white">PPLG</font></a>
   <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
       <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
            <a class="nav-link" href="{{url('/home')}}"><font color="white">HOME</font> <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
               <a href="{{ url('/karyawan')}}" class="nav-link"><font color="white">Karyawan</font></a>
            </li>
            <li class="nav-item">
               <a href="{{ url('/penggajian')}}" class="nav-link"><font color="white">Penggajian</font></a>
            </li>
            <li class="nav-item">
               <a href="{{ url('/lembur')}}" class="nav-link"><font color="white">Lembur</font></a>
            </li>
            <li class="nav-item">
               <a href="{{ url('/golongan')}}" class="nav-link"><font color="white">Golongan</font></a>
            </li>
            <li class="nav-item">
               <a href="{{ url('/logout')}}" class="nav-link"><font color="white">Logout</font></a>
            </li>
            <li class="nav-item">
               <a href="{{ url('/changepassword')}}" class="nav-link"><font color="white">Ganti password</font></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><font color="white">DISABLED</font></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <font color="white">DROPDOWN LINK</font>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            </ul>

            <li class="nav-item">
               <a href="{{url('logout')}}" class="nav-link"><font color="white">Logout</font></a>
            </li>

            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
            </form>
  </div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    </nav>
</header>

    <div class="container">
<header>
        <!-- bagian judul -->
        <h3>@yield('judul_halaman')</h3>
        <!-- bagian isi -->
        @yield('konten')
        <br/>
</header>

</div>
<footer>
    <p>COPYRIGHT MELDA ASARAH PPLG 2023</p>
</footer>
</body>
</html>