<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal Payment</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Shopping Cart Items</h1>
        </div>
        <div class="container">
            <div class="grid">
              
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>
                        <ul>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">$8.99</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://www.paypal.com/sdk/js?client-id=AXn_boL3ukqT7d1im-kW37Q2xdOADnYOEKckwrzWJ7QgorsqhoOc1WxbUd73fMLML6Ub0Bf1ijUzy6xH&disable-funding=credit,card"></script>
    <script src="index.js"></script>
</body>
</html>
