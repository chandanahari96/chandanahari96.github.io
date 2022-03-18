<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="shortcut icon" href="Images/Untitled-1-2.png" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" href="Styles/Stylesheet.css" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://www.jacklmoore.com/colorbox/example1/colorbox.css" />
  </head>
    </head>
    <body>
        
        <div id="wrapper">
                
            <div id="logo">
                <a href="index.php"><img id="siteLogo" src="Images/Untitled-1-2.png" title="AY Associates"></a>
            </div>

            <nav id="navigation">
                <ul id="nav">
                    <li><a href="thefirm.php" >The Firm</a></li>
                    <li><a href="areasofpractice.php">Areas of Practice</a></li>
                    <li><a href="firmexperience.php">Firm's Experience</a></li>
                    <li><a href="aboutus.php">About us</a></li>
                    <li><a href="contactus.php">Contact us</a></li>
                </ul>
            </nav>
                           
            <div id="content_area">
                <?php echo $content; ?>
            </div>
            
            
            <footer>
                <p>All rights reserved</p>
            </footer>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="http://www.jacklmoore.com/colorbox/jquery.colorbox.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.js"></script>
        <script type="text/javascript" src="JavaScript/JavaScript.js"></script>
    </body>
</html>


