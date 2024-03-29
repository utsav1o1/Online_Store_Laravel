<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    <title>@yield('title', 'Online Store')</title>
    <style>
        /* Style for the "Purchase" button */
        .btn {
          padding: 10px 20px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
        }
      
        .bg-primary {
          background-color: #007bff;
        }
      
        .text-white {
          color: #fff;
        }
      
        /* Style for the payment methods list container */
        #paymentMethods {
          margin-top: 10px;
          padding: 10px;
          border: 1px solid #ccc;
          border-radius: 5px;
        }
      
        /* Style for payment method options */
        .paymentMethodOption {
          display: flex;
          align-items: center;
        }
      
        /* Style for payment method images */
        .paymentMethodOption img {
          width: 30px; /* Adjust the width as needed */
          height: 30px; /* Adjust the height as needed */
          margin-right: 5px;
        }
      
        /* Style for the "Pay" button in the payment methods list */
        #payBtn {
          margin-top: 10px;
          padding: 8px 15px;
          border: none;
          border-radius: 5px;
          background-color: #007bff;
          color: #fff;
          cursor: pointer;
        }
      
        /* Optional: Style for the error message when no payment method is selected */
        #errorMessage {
          color: red;
          font-size: 14px;
          margin-top: 5px;
        }
      </style>
      
      
      
</head>

<body>
    {{-- header --}}
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary py-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home.index') }}">E-commerce Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" href="{{ route('home.index') }}">Home</a>
                    <a class="nav-link active" href="{{ route('product.index') }}">Products</a>
                    <a class="nav-link active" href="{{ route('cart.index') }}">Cart</a>
                    <a class="nav-link active" href="{{ route('home.about') }}">About</a>
                    <a class="nav-link active" href="{{ route('admin.home.index') }}">Admin</a>
                    <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                    @guest
                        <a class="nav-link active" href="{{ route('login') }}">Login</a>
                        <a class="nav-link active" href="{{ route('register') }}">Register</a>
                        <a class="nav-link active" href="{{ route('myaccount.orders') }}">My Orders</a>
                    @else
                        <form id="logout" action="{{ route('logout') }}" method="POST">
                            <a role="button" class="nav-link active"
                                onclick="document.getElementById('logout').submit();">Logout</a>
                            @csrf
                        </form>
                    @endguest

                </div>
            </div>
        </div>
    </nav>
    <header class="masthead bg-primary text-white text-center py-4">
        <div class="container d-flex align-items-center flex-column">
            <h2>@yield('subtitle', 'A Laravel Online Store')</h2>
        </div>
    </header>
    <!-- header -->
    <div class="container my-4">
        @yield('content')
    </div>

    <!-- footer -->
    <div class="copyright py-4 text-center text-white" >
        <div class="container">
            <small>
                Copyright - <a class="text-reset fw-bold text-decoration-none" target="_blank"
                    href="https://twitter.com/utsav1o1">
                    Utsav Karki
                </a> -<b>Sambit Rimal</b>-<b>Rakesh Thapa</b>
            </small>
        </div>
    </div>
    <!-- footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</body>

</html>
