<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html lang="en">
<head>
    
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
</head>
<body>
    <div id="wrapper">
        
        <div class="slider-wrapper theme-default">
            <div id="slider" class="nivoSlider">
                <img src="img/Ruet_pic1.jpeg" data-thumb="img/Ruet_pic1.jpeg" alt="" />
                <img src="img/Ruet_pic2.jpeg" data-thumb="img/Ruet_pic2.jpeg" alt="" title="" />
                <img src="img/Ruet_pic3.jpeg" data-thumb="img/Ruet_pic3.jpeg" alt="" data-transition="slideInLeft" />
                
            </div>
            
        </div>

    </div>
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>
</body>
</html>