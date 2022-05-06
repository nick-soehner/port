<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nick Soehner | Form Submission</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="icon" href="./images/n.png">
    <script src="https://code.iconify.design/2/2.2.1/iconify.min.js"></script>
    <script src="./jquery-3.6.0.min.js"></script>
</head>

<body>

    <!-- LOADER -->

    <div class="loader">
        <svg height="200" width="200">
            <circle class="circle" cx="100" cy="100" r="95" stroke="#fad4af" stroke-width="10" fill-opacity="0" />
        </svg>
        <div class="logo">
            <p>N</p>
        </div>
    </div>

    <!-- HEADER -->
    
    <header>
        <div class="header-container">
            <div class="header-logo">
                <a href="#">
                    <img src="./images/n.png" alt="logo" style="width: 50px;">
                </a>
            </div>
            <nav>
                <a href="#about">
                    <li>about</li>
                </a>
                <a href="#work">
                    <li>work</li>
                </a>
                <a href="#contact">
                    <li>contact</li>
                </a>
            </nav>
        </div>

    </header>

    <!-- LANDING -->

    <div id="landing">
        <div class="form-container text-light">
            
        <?php

        if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $email = $_POST['email'];
        $msg = $_POST['message'];

        function IsInjected($str) {
            $injections = array('(\n+)',
           '(\r+)',
           '(\t+)',
           '(%0A+)',
           '(%0D+)',
           '(%08+)',
           '(%09+)'
           );
               
            $inject = join('|', $injections);
            $inject = "/$inject/i";
    
            if(preg_match($inject,$str))
            {
              return true;
            }
            else
            {
              return false;
            }
        }

        if(IsInjected($visitor_email)) {
            echo "Bad email value!";
            exit;
        }


        $to = "info@nicksoehner.com";
        $subject = "Form Submission";
        $message = "Name: ".$fname."\n"."Email: ".$email."\n"."Message: ".$msg."\n";
        $headers="From: ".$email;

        if(mail($to, $subject, $message, $headers)){
            echo "<h1>Thank you for your submission!</h1>";
        } else {
            echo "<h1>Not Poggers</h1>";
        }
        
    }

        ?>
            <h1 class="text-light">Thank you for your submission!</h1>
            <a href="./index.html">
                <button class="btn-contact">go back</button>
            </a>
        </div>
    </div>

    <script src="./script.js"></script>
</body>

</html>