<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    exit;
}

$name    = htmlspecialchars(trim($_POST['name'] ?? ''), ENT_QUOTES, 'UTF-8');
$email   = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
$message = htmlspecialchars(trim($_POST['message'] ?? ''), ENT_QUOTES, 'UTF-8');

if (!$name || !$email || !$message) {
    http_response_code(400);
    header('Location: index.html#contact?error=1');
    exit;
}

$to      = 'm.rei0902@gmail.com';
$subject = '【cielsaloon.com】お問い合わせ：' . $name;
$body    = "お名前：{$name}\nメール：{$email}\n\n{$message}";
$headers = "From: noreply@cielsaloon.com\r\nReply-To: {$email}\r\nContent-Type: text/plain; charset=UTF-8";

mail($to, $subject, $body, $headers);

header('Location: index.html#contact?sent=1');
exit;
