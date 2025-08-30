<?php
// about.php - Public "Read More" page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About - Smart Gas Metering System</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

  <style>
    .bg-light-red { background-color: #f8d7da !important; }     /* light red */
    .bg-light-gold { background-color: #fff3cd !important; }    /* light gold */
    .bg-light-green { background-color: #d4edda !important; }   /* light green */
  </style>
</head>
<body class="bg-light">

<div class="container py-5">
  <!-- Title -->
  <div class="text-center mb-5">
    <h1 class="fw-bold text-primary">
      <i class="bi bi-fire"></i> Smart Gas Metering & Alert System
    </h1>
    <p class="lead">Real-Time Monitoring for Safety, Convenience, and Budget Control</p>
  </div>

  <!-- Problem Definition -->
  <div class="card mb-4 shadow-sm bg-light-red">
    <div class="card-body">
      <h3 class="card-title"><i class="bi bi-exclamation-triangle text-danger"></i> Problem Definition</h3>
      <p>
        In many households and small businesses, gas usage remains a mystery until—BAM!—it runs out in the middle of cooking.  
        The result? Half-cooked meals, frustrated families, and sometimes awkward moments when visitors show up.  
        Beyond embarrassment, unexpected gas depletion disrupts budget planning, forces unplanned expenses, and delays operations 
        in restaurants or food vendors.
      </p>
    </div>
  </div>

  <!-- Proposed Solution -->
  <div class="card mb-4 shadow-sm bg-light-gold">
    <div class="card-body">
      <h3 class="card-title"><i class="bi bi-lightbulb text-warning"></i> Proposed Solution</h3>
      <p>
        The Smart Gas Metering & Alert System continuously monitors gas cylinder levels and sends timely alerts as usage crosses 
        defined thresholds. This gives users enough time to plan refills before hitting the dreaded “empty” stage.  
        Instead of surprises, users track gas in real-time—just like mobile airtime or data usage.
      </p>
    </div>
  </div>

  <!-- How the System Works -->
  <div class="card mb-4 shadow-sm bg-light-green">
    <div class="card-body">
      <h3 class="card-title"><i class="bi bi-gear text-primary"></i> How the System Works</h3>
      <ul>
        <li><strong>Gas Level Tracking:</strong> A sensor measures the current gas level in percentage.</li>
        <li><strong>Real-Time Display:</strong> Dashboard shows a progress bar with color zones:
          <ul>
            <li class="text-success">Above 75% – Green (Safe Zone)</li>
            <li class="text-primary">Above 50% – Blue (All Good)</li>
            <li class="text-warning">30%–50% – Yellow (Consider Refilling Soon)</li>
            <li class="text-danger">Below 30% – Red (Danger Zone, Immediate Action Needed)</li>
          </ul>
        </li>
        <li><strong>Smart Alerts:</strong> Notifications sent via SMS/app (demo uses pop-up modal).</li>
        <li><strong>Refill Button:</strong> Log a refill instantly, resetting the meter reading.</li>
      </ul>
    </div>
  </div>

  <!-- Developer's Benefit -->
  <div class="card mb-4 shadow-sm bg-light-red">
    <div class="card-body">
      <h3 class="card-title"><i class="bi bi-currency-exchange text-success"></i> Developer's Benefit & Monetization Plan</h3>
      <p>
        Collaborations with regulatory bodies, gas distributors, or energy agencies could make this system an industry standard.  
        It can extend into a mobile app for on-the-go monitoring.
      </p>
      <p>
        <strong>Revenue Model:</strong> A partnership granting 10% revenue from gas sales, or a per-unit licensing fee for 
        every smart meter installed.
      </p>
    </div>
  </div>

  <!-- Challenges & Solutions -->
  <div class="card mb-4 shadow-sm bg-light-gold">
    <div class="card-body">
      <h3 class="card-title"><i class="bi bi-tools text-secondary"></i> Challenges Faced & Solutions</h3>
      <ul>
        <li><strong>Sensor Accuracy:</strong> Initial readings fluctuated. <em>Solution:</em> Use calibrated, temperature-compensated sensors with averaging algorithms.</li>
        <li><strong>Connectivity Issues:</strong> Alerts require stable networks. <em>Solution:</em> Support GSM + offline logging.</li>
        <li><strong>User Adoption:</strong> Resistance to change. <em>Solution:</em> Trial period + market convenience & savings.</li>
      </ul>
    </div>
  </div>

  <!-- Competitive Edge -->
  <div class="card mb-4 shadow-sm bg-light-green">
    <div class="card-body">
      <h3 class="card-title"><i class="bi bi-star-fill text-warning"></i> Competitive Edge</h3>
      <p>
        This system is not just a monitor—it’s a budgeting tool, safety measure, and convenience enhancer.  
        By integrating with official gas distributors, it also reduces illegal refills and improves regulatory oversight.
      </p>
    </div>
  </div>

  <!-- Back button -->
  <div class="text-center mt-5">
    <a href="index.php" class="btn btn-outline-secondary">
      <i class="bi bi-arrow-left"></i> Back to Home
    </a>
  </div>
</div>

</body>
</html>
