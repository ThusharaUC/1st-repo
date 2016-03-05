<html lang="en">
<head>
    <title>Simplest jQuery Slideshow</title>

    <style>
        body {font-family:Arial, Helvetica, sans-serif; font-size:12px;}

        .fadein {
            position:relative; height:332px; width:500px; margin:0 auto;
            background: url("") repeat-x scroll left top transparent;
            padding: 10px;
        }
        .fadein img { position:absolute; left:10px; top:10px; }
    </style>

    <script src="../../public/js/jquery.min.js"></script>
    <script>
        $(function(){
            $('.fadein img:gt(0)').hide();
            setInterval(function(){$('.fadein :first-child').fadeOut().next('img').fadeIn().end().appendTo('.fadein');}, 3000);
        });
    </script>

</head>
<body>
<div class="fadein">
    <img src="../../public/images/paving/1.jpg">
    <img src="../../public/images/paving/2.jpg">
    <img src="../../public/images/paving/3.jpg">
    <img src="../../public/images/paving/4.jpg">
    <img src="../../public/images/paving/5.png">
</div>
</body>
</html>