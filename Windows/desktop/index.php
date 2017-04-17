<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <title>Mac OS X Lion</title>
        <meta name="description" content="Mac Os X Lion with CSS3 Experiment" />
        <link rel="stylesheet" type="text/css" media="screen" href="Windows/desktop/jquery-ui.min.css"/>
        <link rel="stylesheet" type="text/css" media="screen" href="Windows/desktop/desktop.css"/>
        <script type="text/javascript" src="Windows/desktop/jquery.min.js"></script>
        <script type="text/javascript" src="Windows/desktop/jquery-ui.min.js"></script>
        <script type="text/javascript" src="Windows/desktop/modernizr.js"></script>
        <script type="text/javascript" src="Windows/desktop/desktop.js"></script>
    </head>

<body>
    <!-- FAIL -->
    <div id="fail">
    	<div class="fail-browser-logo">
        	<img src="Windows/desktop/img/apple-logo-login.png" alt="Mac OS X" />
        </div>
        <div class="fail-browser">
            <p><strong>I'm sorry to inform you that your browser don't support CSS3 Animations!</strong></p> 
            <p>This site uses features that <em>require</em> a modern browser - why not try <a href="http://www.mozilla.org/en-US/firefox/fx/" target="_blank" title="Download Firefox">Firefox</a> ?</p>
        </div>
    </div>

    <!-- DESKTOP -->
    <div id="page" class="vis">
    <div id="bg">
        <?php include "Windows/desktop/nav.php" ?>

        <div id="work"></div>

        <?php include "Windows/desktop/dock.php" ?>
    </div>
    </div>
</body>
</html>