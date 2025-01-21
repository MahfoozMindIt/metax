<?php
$url = 'https://api.indexnow.org/IndexNow';
$data = array(
    "host" => "www.metaxpayments.com",
    "key" => "5ce0f90b9951446b8883d52c6fc8ccb1",
    "keyLocation" => "https://www.metaxpayments.com/5ce0f90b9951446b8883d52c6fc8ccb1.txt",
    "urlList" => array(
        "https://www.metaxpayments.com/",
        "https://metaxpayments.com/pages/features/corporate-visa",
        "https://metaxpayments.com/pages/features/euro-account",
        "https://metaxpayments.com/pages/features/usd-account",
        "https://metaxpayments.com/pages/features/sepa-payments",
        "https://metaxpayments.com/pages/features/swift-payments",
        "https://metaxpayments.com/pages/features/start-up-business",
        "https://metaxpayments.com/pages/features/non-canadian-resident",
        "https://metaxpayments.com/pages/features/apple-pay",
        "https://metaxpayments.com/pages/pricing/pricing-for-business",
        "https://metaxpayments.com/pages/pricing/pricing-for-individual",
        "https://metaxpayments.com/pages/about-us",
        "https://metaxpayments.com/pages/contact-us",
        "https://metaxpayments.com/pages/blog",
        "https://metaxpayments.com/pages/blog/post.php?id=first-post"
    )
);

$options = array(
    CURLOPT_URL => $url,
    CURLOPT_POST => true,
    CURLOPT_POSTFIELDS => json_encode($data),
    CURLOPT_HTTPHEADER => array('Content-Type: application/json'),
    CURLOPT_RETURNTRANSFER => true
);

$ch = curl_init();
curl_setopt_array($ch, $options);
$result = curl_exec($ch);

echo 'HTTP Status Code: ' . curl_getinfo($ch, CURLINFO_HTTP_CODE) . PHP_EOL;
echo 'Response Body: ' . $result . PHP_EOL;

curl_close($ch);
?>