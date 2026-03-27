<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Analytics - Raveller Car Wash</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header>
    <h1>📈 Raveller Car Wash Analytics</h1>
    <p class="tagline">Revenue and service performance insights</p>
  </header>
  
  <section style="padding: 40px 20px; max-width: 1200px; margin: 0 auto;">
    <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08); margin-bottom: 30px;">
      <h3 style="color: #2c3e50; margin-top: 0;">Weekly Revenue Trend</h3>
      <canvas id="revenueChart"></canvas>
    </div>
    
    <div style="background: white; padding: 30px; border-radius: 15px; box-shadow: 0 5px 20px rgba(0,0,0,0.08);">
      <h3 style="color: #2c3e50; margin-top: 0;">Services Booked</h3>
      <canvas id="serviceChart"></canvas>
    </div>
  </section>
  
  <footer>
    <p>&copy; 2026 Raveller Car Wash. All rights reserved.</p>
  </footer>
  
  <script src="js/charts.js"></script>
</body>
</html>