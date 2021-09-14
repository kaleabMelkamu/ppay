paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '8.99'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://localhost/ppay/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/ppay/Oncancel.php")
    }
}).render('#paypal-payment-button');