<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="{{ asset('/css/admin.css') }}" rel="stylesheet" />
    <title>@yield('title', 'Admin - Online Store')</title>
</head>

<body>
    <div class="row g-0 ">
        <!-- sidebar -->
        <div class="p-3 col fixed text-white bg-dark">
            <a href="{{ route('admin.home.index') }}" class="text-white text-decoration-none">
                <span class="fs-4">Admin Panel</span>
            </a>
            <hr />
            <ul class="nav flex-column">
                <button class="btn btn-success"> <li><a href="{{ route('admin.home.index') }}" class="nav-link text-white"> Admin - Home</a></li></button>
               <button class="btn btn-success mt-2"> <li><a href="{{route('admin.product.index')}}" class="nav-link text-white"> Admin - Products</a></li></button>
                 <button class="mt-2 btn bg-primary">

                     <li>
                         <a href="{{ route('home.index') }}" class="text-white nav-link" >Go Back In Home Page</a>
                     </li>
                 </button>
            </ul>
        </div>
        <!-- sidebar -->
        <div class="col content-grey">
            <nav class="p-3 shadow text-end">
                <span class="profile-font">Admin</span>
                <img class="img-profile rounded-circle" src="{{ asset('/img/utsav.jpg') }}">
            </nav>
            <div class="g-0 m-5">
                @yield('content')
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="copyright py-4 text-center text-white">
        <div class="container">
            <small>
                Copyright : <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://github.com/utsav1o1">
                   Utsav Karki - Sambit Rimal - Rakesh Thapa 
                </a>
            </small>
        </div>
    </div>
    <!-- footer -->
