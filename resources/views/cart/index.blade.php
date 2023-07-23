@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
        <div class="card-header">
            Products in Cart
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>${{ $product->getPrice() }}</td>
                            <td>{{ session('products')[$product->getId()] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                    <a class="btn btn-outline-secondary mb-2"><b>Total to pay:</b> ${{ $viewData['total'] }}</a>
                    @if (count($viewData['products']) > 0)
                        {{-- <a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Purchase</a> --}}
                        <a id="purchaseBtn" class="btn bg-primary text-white mb-2">Purchase</a>
                        <div id="paymentMethods" style="display: none;">
                            <!-- List of payment methods -->
                            <label class="paymentMethodOption">
                                <input type="radio" name="paymentMethod" value="paypal">
                                <img src="{{ asset('img/esewa.png')}}" style="width: 150px; height:80px"> 
                            </label><br>
                            <label class="paymentMethodOption">
                                <input type="radio" name="paymentMethod" value="creditCard">
                                <img src="{{ asset('img/khalit.png')}}"  style="width: 150px; height:80px">
                            </label><br>
                            <!-- Add more payment methods as needed -->
                            <button id="payBtn">Pay</button>
                        </div>



                        <a href="{{ route('cart.delete') }}">
                            <button class="btn btn-danger mb-2 mt-2">
                                Remove all products from Cart
                            </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script>
        // Get references to the elements
        const purchaseBtn = document.getElementById("purchaseBtn");
        const paymentMethods = document.getElementById("paymentMethods");
        const payBtn = document.getElementById("payBtn");

        // Add click event listener to "Purchase" button
        purchaseBtn.addEventListener("click", function() {
            // Show the payment methods
            paymentMethods.style.display = "block";
        });

        // Add click event listener to "Pay" button
        payBtn.addEventListener("click", function() {
            // Find the selected payment method
            const selectedPaymentMethod = document.querySelector('input[name="paymentMethod"]:checked');

            // If a payment method is selected, redirect to the cart.purchase route
            if (selectedPaymentMethod) {
                const paymentMethod = selectedPaymentMethod.value;
                window.location.href = `{{ route('cart.purchase') }}?method=${paymentMethod}`;
            }
            // You can add an else clause here to display an error message if no payment method is selected
        });
    </script>

@endsection
