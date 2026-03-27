<?php
$file = 'receipts.json';
$data = json_decode(file_get_contents($file), true);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Receipts Dashboard - Raveller Car Wash</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>📊 Receipts Dashboard</h1>
    <p class="tagline">View and manage all customer receipts</p>
  </header>
  
  <section style="padding: 40px 20px;">
    <h2 style="color: #2c3e50; margin-bottom: 30px;">Recent Transactions</h2>
    <table border="1" cellpadding="10">
      <tr>
        <th>Receipt #</th>
        <th>Date</th>
        <th>Customer</th>
        <th>Phone</th>
        <th>Total</th>
        <th>Actions</th>
      </tr>
      <?php foreach ($data as $receipt): ?>
      <tr>
        <td><?= $receipt['receipt_number'] ?></td>
        <td><?= $receipt['date'] ?></td>
        <td><?= $receipt['customer'] ?></td>
        <td><?= $receipt['phone'] ?></td>
        <td style="color: #4da6d6; font-weight: 700;">KES <?= $receipt['total'] ?></td>
        <td>
          <a href="view.php?id=<?= $receipt['receipt_number'] ?>" class="btn" style="display: inline; padding: 8px 15px; font-size: 0.9em;">View</a> |
          <a href="download.php?id=<?= $receipt['receipt_number'] ?>" class="btn" style="display: inline; padding: 8px 15px; font-size: 0.9em;">PDF</a> |
          <a href="send.php?id=<?= $receipt['receipt_number'] ?>" class="btn btn-secondary" style="display: inline; padding: 8px 15px; font-size: 0.9em;">WhatsApp</a>
        </td>
      </tr>
      <?php endforeach; ?>
    </table>
  </section>
  
  <footer>
    <p>&copy; 2026 Raveller Car Wash. All rights reserved.</p>
  </footer>
</body>
</html>