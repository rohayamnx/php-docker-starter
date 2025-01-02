<?php
date_default_timezone_set("Asia/Kuala_Lumpur");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docker PHP-MySQL Demo</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Monaco', monospace;
            background: linear-gradient(135deg, #6dd5ed, #2193b0);
            color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }
        .container {
            max-width: 800px;
            background: rgba(0, 0, 0, 0.6);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.4);
        }
        h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }
        h2 {
            font-size: 2rem;
            margin-top: 0;
        }
        .created-date {
            font-size: 1.5rem;
            margin: 20px 0;
        }
        .animated-text {
            font-size: 1.5rem;
            display: inline-block;
            animation: slideIn 3s infinite alternate;
        }
        @keyframes slideIn {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }
            to {
                transform: translateX(50px);
                opacity: 1;
            }
        }
        .live-clock {
            font-size: 1.2rem;
            margin-top: 20px;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Docker PHP-MySQL Demo Project!</h1>
        <h2>Welcome to my project</h2>
        <div class="created-date">
            Created by rohayamnx on <?php echo date("Y-m-d H:i:s"); ?>
        </div>
        <div class="animated-text">
            Thanks for watching... Enjoy your day!
        </div>
        <div class="live-clock" id="clock">Time: Loading...</div>
    </div>
    <script>
        function updateClock() {
            const clockElement = document.getElementById('clock');
            const now = new Date();
            const timeString = now.toLocaleTimeString('en-MY', { timeZone: 'Asia/Kuala_Lumpur' });
            clockElement.innerHTML = `Time: ${timeString}`;
        }
        setInterval(updateClock, 1000);
        updateClock();
    </script>
</body>
</html>
