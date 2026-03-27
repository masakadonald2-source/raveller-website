<?php
require __DIR__ . '/vendor/autoload.php';
use Twilio\Rest\Client;

$account_sid = "YOUR_TWILIO_SID";
$auth_token = "YOUR_TWILIO_AUTH";
$twilio_whatsapp_number = "whatsapp:+14155238886";

$name = "James";
$phone = "whatsapp:+2547XXXXXXX";
$receipt_number = "RCW-" . date("Ymd-His");
$date = date("F j, Y");
$services = [["Interior Detailing", 3000], ["Exterior Wash", 1500]];

total = 0;
$lines = "";
foreach ($services as $item) {
  $lines .= "• {\$item[0]} — KES {\$item[1]}\n";
  $total += $item[1];
}

$messageBody = "🧾 *Raveller Car Wash Receipt*\nReceipt #: {\$receipt_number}\nDate: {\$date}\nCustomer: {\$name}\n\n{\$lines}\n*Total: KES {\$total}*\n\n✨ Premium Care • Spotless Shine";

$client = new Client($account_sid, $auth_token);
$client->messages->create($phone, ["from" => $twilio_whatsapp_number, "body" => $messageBody]);

echo "Receipt sent via WhatsApp!";
?>