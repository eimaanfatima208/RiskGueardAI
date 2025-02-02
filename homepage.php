<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="hp.css">
</head>
<body>
    <header>
    <div class="logo">
        <h2>RiskGuardAI </h2>
    </div>  

    <nav>
    <a href="index.html">Health Services</a>
        <a href="user_profile.html">User Profile</a>
        <a href="homepage.php">Dashboard</a>
        <a href="index1.html">Admin Dashboard</a>
        <a href="index.php" class="sign-up-btn">Sign-Up</a>
    </nav>
    </header>
    <div class="main">
    <div class="intro">
    <div class="dt">
        <!-- Date and Time -->
        <p style="color:white"><?php echo date('d.m.Y') . ' ' . date('h:i A'); ?></p>
    </div>
    <div class="bio">
        <!-- Good Day with the user name -->
        <p style="color:white">
            <?php
            if (isset($_SESSION['email'])) {
                $email = $_SESSION['email'];
                $query = mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                while ($row = mysqli_fetch_array($query)) {
                    // Add a line break after the greeting
                    echo "Good Day, " . $row['firstName'] . ' ' . $row['lastName'] . "<br>"; 
                }
            }
            ?>
        </p>
    </div>
    <div class="line">
    <p style="color:white"><?php  echo "Have a nice ". date('l')." !"; ?></p>
    </div>
    <div class="male">
    </div>
</div>
<div class="dashboard">
<div class="card">
        <div class="icon">
            <img src="img/heart.png" alt="Heart Rate">
        </div>
        <div class="title">Heart Rate</div>
        <div class="bpm">80 BPM</div>
    </div>
<div class="bp">
   <div class="bpimg">
         <img src="img/drop.png" alt="Blood Pressure">
   </div>
   <div class="t2">Blood Pressure</div>
    <div class="bp1">120/80 mmHG</div>
</div>
    <div class="glucose">
        <div class="glucoseimg">
            <img src="img/pink.png" alt="Glucose">
        </div>
        <div class="t3">Glucose Level</div>
        <div class="glucose1">60-120 mg/dL</div>
    </div>
    </div>
    <div class="graph-container">
        <div class="graph-title">Patient Overview</div>
        <canvas id="patientGraph" class="graph"></canvas>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('patientGraph').getContext('2d');
        const patientGraph = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['10am', '11am', '12pm', '1pm', '2pm', '3pm', '4pm', '5pm', '6pm', '7pm', '8pm', '9pm', '10pm', '11pm', '12am', '1am', '2am', '3am', '4am', '5am', '6am', '7am'],
                datasets: [
                    {
                        label: 'On Time',
                        data: [80, 75, 70, 65, 60, 55, 50, 45, 40, 35, 30, 25, 20, 25, 30, 35, 40, 45, 50, 55, 60, 65],
                        borderColor: '#007bff',
                        fill: false
                    },
                    {
                        label: 'On Late',
                        data: [60, 65, 70, 75, 80, 85, 90, 95, 100, 95, 90, 85, 80, 75, 70, 65, 60, 55, 50, 45, 40, 35],
                        borderColor: 'black',
                        fill: false
                    }
                ]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 20,
                        max: 100
                    }
                }
            }
        });
    </script>
    <div class="calen">
  <div class="calender">
    <p class="calender-title">Calender</p>
    <p class="month">January 2025</p>
  <div class="datepicker">
	<div class="datepicker-calendar">
		<span class="day">Mo</span>
		<span class="day">Tu</span>
		<span class="day">We</span>
		<span class="day">Th</span>
		<span class="day">Fr</span>
		<span class="day">Sa</span>
		<span class="day">Su</span>
		<button class="date faded">30</button>
		<button class="date">1</button>
		<button class="date">2</button>
		<button class="date">3</button>
		<button class="date">4</button>
		<button class="date">5</button>
		<button class="date">6</button>
		<button class="date">7</button>
		<button class="date">8</button>
		<button class="date ">9</button>
		<button class="date">10</button>
		<button class="date">11</button>
		<button class="date">12</button>
		<button class="date">13</button>
		<button class="date">14</button>
		<button class="date">15</button>
		<button class="date">16</button>
		<button class="date">17</button>
		<button class="date">18</button>
		<button class="date">19</button>
		<button class="date">20</button>
		<button class="date">21</button>
		<button class="date">22</button>
		<button class="date">23</button>
		<button class="date">24</button>
		<button class="date">25</button>
		<button class="date">26</button>
		<button class="date">27</button>
		<button class="date">28</button>
		<button class="date">29</button>
		<button class="date">30</button>
		<button class="date current-day">31</button>
		<button class="date faded">1</button>
		<button class="date faded">2</button>
		<button class="date faded">3</button>
	</div>
</div>
  </div>
  </div>
  <div class="treatment">
        <h2>Treatment</h2>
        <div class="treatment-item">
            <div class="pill-icon pink">
                <img src="img/pill.png" alt="Pill">
            </div>
            <div>
                <strong>Vitamin A</strong><br>
                1 tablet twice a day
            </div>
        </div>
        <div class="treatment-item">
            <div class="pill-icon blue">
                <img src="img/blue.png" alt="Pill">
            </div>
            <div>
                <strong>Vitamin B</strong>
                <br>1 tablet twice a day
            </div>
        </div>
    </div>
</div>

</body>
</html>