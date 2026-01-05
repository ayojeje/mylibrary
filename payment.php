<?php
if (!isset($_GET['reference'])) {
    die("No payment reference supplied");
}

$reference = $_GET['reference'];
$secret_key = "sk_test_xxxxxxxxxxxxx"; // 🔐 Your SECRET key

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.paystack.co/transaction/verify/" . rawurlencode($reference),
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "Authorization: Bearer $secret_key",
        "Cache-Control: no-cache"
    ]
]);

$response = curl_exec($curl);
curl_close($curl);

$result = json_decode($response, true);

if ($result['status'] && $result['data']['status'] === 'success') {

    $email = $result['data']['customer']['email'];
    $amount = $result['data']['amount'] / 100;

    echo "<h2>✅ Payment Successful</h2>";
    echo "<p>Email: $email</p>";
    echo "<p>Amount Paid: ₦$amount</p>";
    echo "<p>Reference: $reference</p>";

} else {
    echo "<h2>❌ Payment Failed</h2>";
}
