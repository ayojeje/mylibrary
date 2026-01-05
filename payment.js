document.getElementById("paymentForm").addEventListener("submit", payWithPaystack);

function payWithPaystack(e) {
    e.preventDefault();

    let email = document.getElementById("email").value;
    let amount = document.getElementById("amount").value;

    let handler = PaystackPop.setup({
        key: 'pk_test_xxxxxxxxxxxxx', // 🔑 Your PUBLIC key
        email: email,
        amount: amount * 100,
        currency: "NGN",
        ref: 'PAY_' + Math.floor(Math.random() * 1000000000),

        callback: function (response) {
            window.location.href = "verify.php?reference=" + response.reference;
        },

        onClose: function () {
            alert("Payment cancelled");
        }
    });

    handler.openIframe();
}
