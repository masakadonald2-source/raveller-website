const revenueCtx = document.getElementById('revenueChart').getContext('2d');
new Chart(revenueCtx, {
  type: 'line',
  data: { 
    labels: ['Week 1','Week 2','Week 3','Week 4'],
    datasets: [{ 
      label: 'Revenue (KES)', 
      data: [12000,15000,18000,20000], 
      borderColor: '#4da6d6', 
      backgroundColor: 'rgba(77, 166, 214, 0.1)',
      borderWidth: 3,
      fill: true,
      tension: 0.4,
      pointBackgroundColor: '#4da6d6',
      pointBorderColor: '#fff',
      pointBorderWidth: 2,
      pointRadius: 6,
      pointHoverRadius: 8
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: true, labels: { font: { size: 12 }, color: '#2c3e50' } }
    },
    scales: {
      y: { beginAtZero: true, ticks: { color: '#2c3e50' }, grid: { color: '#e0f4ff' } },
      x: { ticks: { color: '#2c3e50' }, grid: { color: '#e0f4ff' } }
    }
  }
});

const serviceCtx = document.getElementById('serviceChart').getContext('2d');
new Chart(serviceCtx, {
  type: 'bar',
  data: { 
    labels: ['Interior','Exterior','Engine','Package'],
    datasets: [{ 
      label: 'Services Count', 
      data: [12,20,8,15], 
      backgroundColor: ['#4da6d6', '#7dd3c0', '#87ceeb', '#b0e0e6'],
      borderRadius: 8,
      borderSkipped: false
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: true, labels: { font: { size: 12 }, color: '#2c3e50' } }
    },
    scales: {
      y: { beginAtZero: true, ticks: { color: '#2c3e50' }, grid: { color: '#e0f4ff' } },
      x: { ticks: { color: '#2c3e50' }, grid: { color: '#e0f4ff' } }
    }
  }
});