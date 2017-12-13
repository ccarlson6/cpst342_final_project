<?php
if (isset($_POST['send'])) {
    if (isset($_POST['send'])) {
        $to = 'ccarlson6@luc.edu';
        $subject = 'ChrisCarlsonTravels.com Contact Form';
        $message = 'Name: ' . $_POST['name'] . "\r\n\r\n";
        $message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
        $message .= 'Subscribe to New Content: ' . $_POST['subscribe_to_new_content'] . "\r\n\r\n";
        $message .= 'Subscribe to Newsletter: ' . $_POST['subscribe_to_newsletter'] . "\r\n\r\n";
        $message .= 'Message: ' . $_POST['comments'];
    }    
}
$headers = "From: webmaster@chriscarlsontravels.com\r\n";
$headers .= 'Content-Type: text/plain; charset=utf-8';
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
if ($email) {
    $headers .= "\r\nReply-To: $email";
}
$success = mail($to, $subject, $message, $headers);
?>
<body>
<?php if (isset($success) && $success) { ?>
<!-- START OF HTML TEMPLATE FOR PHPMAILER SUCCESS -->

<!doctype html>
<html lang="en">
<head>
    <title>Chris Carlson Travels - Contact</title>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- CSS STYLES FOR THIS TEMPLATE -->
    
    <style>
    
    /* http://meyerweb.com/eric/tools/css/reset/ 
    v2.0 | 20110126 License: none (public domain) 
    */

    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed, 
    figure, figcaption, footer, header, hgroup, 
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
	    margin: 0;
	    padding: 0;
	    border: 0;
	    font-size: 100%;
	    font: inherit;
	    vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure, 
    footer, header, hgroup, menu, nav, section {
	    display: block;
    }
    body {
        line-height: 1;
    }
    ol, ul {
    	list-style: none;
    }
    blockquote, q {
	    quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
	    content: '';
	    content: none;
    }
    table {
	    border-collapse: collapse;
	    border-spacing: 0;
    }
    /* END OF CSS RESET */
    
    body {
        padding-top: 5rem;
    }
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Arial', Helvetica, sans-serif;
	    font-size: 1em;
	    font-style: normal;
	    font-variant: normal;
	    font-weight: normal;
        overflow-x: hidden;
    }
    .logo {
	   font-family: 'Pacifico', Helvetica, sans-serif;
	   font-size: 1.35em;
	   font-style: normal;
	   font-variant: normal;
	   font-weight: 0;
	   color: #2b2b2b;
	   line-height: 5.4px;
	   margin-top: 10px;
	   margin-bottom: 10px;
	   margin-right: 40px;
	   -webkit-font-smoothing: antialiased;
        text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);
    }
    .compass {
        display: inline-block;
        max-height: 95px;
        bottom: 7%;
        position: absolute;
    }
    #container {
        min-height: 530px;
        max-height: 530px;
        min-width: 90%; 
        max-width: 90%;
        padding-top:0%;
        margin: 8px auto;
    }
    .footer {
        font-size: .8em;
        color: #ABB2B9;
        display: inline-block;
        text-align: center;
    }
    .nav-item {
        font-family: calibri;
        font-weight: normal;
        font-style: normal;
        font-size: 1.2em;
        color: gray;
    }
    a {
        color: #ABB2B9;
    }
    a.customlinks {
        color: blue;
    }
    .formlabel {
        font-family: calibri;
        font-weight: normal;
        font-style: normal;
        font-size: 1.15em;
        color: #202020;
    }
    .formcheckbox {
        font-family: calibri;
        font-weight: normal;
        font-style: normal;
        font-size: 1em;
        color: #202020;
        margin-left: 5px;
        margin-bottom: 5px;
        padding-top: 5px;
    }
    .form-submit-button {
        background: gray;
        color: #fff;
        border: 1px solid #eee;
        height: 35px;
        width: 90px;
        border-radius: 5px;
        box-shadow: 2px 2px 2px #eee;
        text-shadow:none;
    }
    .form-submit-button:hover {
        background: #686868;
        color: #fff;
        border: 1px solid #eee;
        height: 35px;
        width: 90px;
        border-radius: 5px;
        box-shadow: 2px 2px 2px #eee;
        text-shadow:none;
    }
    .albums {
        display: inline-block;
        text-align: center;
    }
    h2 {
        font-family: calibri;
        font-weight: normal;
        font-style: italic;
        font-size: 1.25em;
        color: #202020;
        margin-bottom: 10px;
    }
    hr.contact {
        overflow: visible;
        margin-top: 80px;
        padding: 0;
        border: none;
        border-top: medium double #333;
        color: #202020;
        text-align: center;
    }
    hr.contact:after {
        content: " Contact ";
        display: inline-block;
        position: relative;
        top: -0.62em;
        font-size: 1.5em;
        padding: 0 0.25em;
        background: white;
    }
    path {
        stroke: gray;
    }
    @media(max-width: 767px) {
        .container {
        width: auto;
    }
    </style>
</head>

<body>
<div class="container">
    
    <!–– START OF NAVIGATION BAR ––>
        
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand logo" href="http://www.chriscarlsontravels.com">Chris Carlson Travels</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://www.chriscarlsontravels.com/index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.chriscarlsontravels.com/about.html">About the Traveler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="https://www.chriscarlsontravels.com/contact.html">Contact<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
    </nav>
    
    <!–– END OF NAVIGATION BAR ––>
    
</div>
<main role="main" class="container">
    <div class="row">
        <div class="col-10 col-md" id="container"><hr class="contact">
            <p class="formlabel"><br>Your message has been sent! You will receive a response within 48 hours.<br><br><a href="http://www.chriscarlsontravels.com/index.html" class="customlinks">Return to Home Page</a></p><br><br>
        </div>
        <div class="col-2 col-md"></div>
    </div>
    <h2>&nbsp;</h2>
    <h2>&nbsp;</h2>
    <h2>&nbsp;</h2>
    <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-bottom footer"> Copyright © 2017 ChrisCarlsonTravels.com.&emsp;Photographs may not be used without permission.&emsp;Hosted by <a href="http://www.a2hosting.com" target=_blank>A2Hosting.com</a>.
    </nav>
    </main>
</body>
</html>

<!-- END OF HTML TEMPLATE FOR PHPMAILER SUCCESS -->


<?php } else { ?>

<!-- START OF TEMPLATE FOR PHPMAILER FAILED -->

<html lang="en">
<head>
    <title>Chris Carlson Travels - Contact</title>
    <link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/photoswipe.min.css'>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/photoswipe/4.1.1/default-skin/default-skin.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://code.highcharts.com/maps/highmaps.js"></script>
    <script src="https://code.highcharts.com/mapdata/custom/world.js"></script>

    <!-- CSS STYLES FOR THIS TEMPLATE -->
    
    <style>
    
    /* http://meyerweb.com/eric/tools/css/reset/ 
    v2.0 | 20110126 License: none (public domain) 
    */

    html, body, div, span, applet, object, iframe,
    h1, h2, h3, h4, h5, h6, p, blockquote, pre,
    a, abbr, acronym, address, big, cite, code,
    del, dfn, em, img, ins, kbd, q, s, samp,
    small, strike, strong, sub, sup, tt, var,
    b, u, i, center,
    dl, dt, dd, ol, ul, li,
    fieldset, form, label, legend,
    table, caption, tbody, tfoot, thead, tr, th, td,
    article, aside, canvas, details, embed, 
    figure, figcaption, footer, header, hgroup, 
    menu, nav, output, ruby, section, summary,
    time, mark, audio, video {
	    margin: 0;
	    padding: 0;
	    border: 0;
	    font-size: 100%;
	    font: inherit;
	    vertical-align: baseline;
    }
    /* HTML5 display-role reset for older browsers */
    article, aside, details, figcaption, figure, 
    footer, header, hgroup, menu, nav, section {
	    display: block;
    }
    body {
        line-height: 1;
    }
    ol, ul {
    	list-style: none;
    }
    blockquote, q {
	    quotes: none;
    }
    blockquote:before, blockquote:after,
    q:before, q:after {
	    content: '';
	    content: none;
    }
    table {
	    border-collapse: collapse;
	    border-spacing: 0;
    }
    /* END OF CSS RESET */
    
    body {
        padding-top: 5rem;
    }
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
        font-family: 'Arial', Helvetica, sans-serif;
	    font-size: 1em;
	    font-style: normal;
	    font-variant: normal;
	    font-weight: normal;
        overflow-x: hidden;
    }
    .logo {
	   font-family: 'Pacifico', Helvetica, sans-serif;
	   font-size: 1.35em;
	   font-style: normal;
	   font-variant: normal;
	   font-weight: 0;
	   color: #2b2b2b;
	   line-height: 5.4px;
	   margin-top: 10px;
	   margin-bottom: 10px;
	   margin-right: 40px;
	   -webkit-font-smoothing: antialiased;
        text-shadow: 3px 3px 0px rgba(0,0,0,0.1), 7px 7px 0px rgba(0,0,0,0.05);
    }
    .compass {
        display: inline-block;
        max-height: 95px;
        bottom: 7%;
        position: absolute;
    }
    #container {
        min-height: 530px;
        max-height: 530px;
        min-width: 90%; 
        max-width: 90%;
        padding-top:0%;
        margin: 8px auto;
    }
    .footer {
        font-size: .8em;
        color: #ABB2B9;
        display: inline-block;
        text-align: center;
    }
    .nav-item {
        font-family: calibri;
        font-weight: normal;
        font-style: normal;
        font-size: 1.2em;
        color: gray;
    }
    a {
        color: #ABB2B9;
    }
    a.customlinks {
        color: blue;
    }
    .formlabel {
        font-family: calibri;
        font-weight: normal;
        font-style: normal;
        font-size: 1.15em;
        color: #202020;
    }
    .formcheckbox {
        font-family: calibri;
        font-weight: normal;
        font-style: normal;
        font-size: 1em;
        color: #202020;
        margin-left: 5px;
        margin-bottom: 5px;
        padding-top: 5px;
    }
    .form-submit-button {
        background: gray;
        color: #fff;
        border: 1px solid #eee;
        height: 35px;
        width: 90px;
        border-radius: 5px;
        box-shadow: 2px 2px 2px #eee;
        text-shadow:none;
    }
    .form-submit-button:hover {
        background: #686868;
        color: #fff;
        border: 1px solid #eee;
        height: 35px;
        width: 90px;
        border-radius: 5px;
        box-shadow: 2px 2px 2px #eee;
        text-shadow:none;
    }
    .albums {
        display: inline-block;
        text-align: center;
    }
    h2 {
        font-family: calibri;
        font-weight: normal;
        font-style: italic;
        font-size: 1.25em;
        color: #202020;
        margin-bottom: 10px;
    }
    hr.contact {
        overflow: visible;
        margin-top: 80px;
        padding: 0;
        border: none;
        border-top: medium double #333;
        color: #202020;
        text-align: center;
    }
    hr.contact:after {
        content: " Contact ";
        display: inline-block;
        position: relative;
        top: -0.62em;
        font-size: 1.5em;
        padding: 0 0.25em;
        background: white;
    }
    path {
        stroke: gray;
    }
    @media(max-width: 767px) {
        .container {
        width: auto;
    }
    </style>
</head>

<body>
<div class="container">
    
    <!–– START OF NAVIGATION BAR ––>
        
    <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <a class="navbar-brand logo" href="http://www.chriscarlsontravels.com">Chris Carlson Travels</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="http://www.chriscarlsontravels.com/index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="http://www.chriscarlsontravels.com/about.html">About the Traveler</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="https://www.chriscarlsontravels.com/contact.html">Contact<span class="sr-only">(current)</span></a>
            </li>
        </ul>
    </div>
    </nav>
    
    <!–– END OF NAVIGATION BAR ––>
    
</div>
<main role="main" class="container">
    <div class="row">
        <div class="col-10 col-md" id="container"><hr class="contact">
            <p class="formlabel"><br>An error has occurred and we are unable to send your message. Please try again.<br><br><a href="https://www.chriscarlsontravels.com/contact.html" class="customlinks">Return to Contact Form</a></p><br><br>
        </div>
        <div class="col-2 col-md"></div>
    </div>
    <h2>&nbsp;</h2>
    <h2>&nbsp;</h2>
    <h2>&nbsp;</h2>
    <nav class="navbar navbar-expand-md navbar-light bg-dark fixed-bottom footer"> Copyright © 2017 ChrisCarlsonTravels.com.&emsp;Photographs may not be used without permission.&emsp;Hosted by <a href="http://www.a2hosting.com" target=_blank>A2Hosting.com</a>.
    </nav>
    </main>
</body>
</html>

<!-- END OF TEMPLATE FOR PHPMAILER FAILED -->

<?php } ?>
</body>
