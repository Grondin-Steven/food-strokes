<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Animate scroll library (pour les animations)-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- Js animate scroll library (pour les animations) -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- JavaScript Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <!-- CCS et JS local -->
    <link rel="stylesheet" href="/css/accueil.css">
    <script src="assets/js/script.js"></script>
    <!-- icons de boxicons.com -->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <title>Food Strokes</title>



    <style>
        #scrollUp
        {
        position: fixed;
        bottom : 10px;
        right: -100px;
        opacity: 0.5;
        }
        </style>
         
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
         
        <script>
                    jQuery(function(){
                        $(function () {
                            $(window).scroll(function () {
                                if ($(this).scrollTop() > 200 ) { 
                                    $('#scrollUp').css('right','10px');
                                } else { 
                                    $('#scrollUp').removeAttr( 'style' );
                                }
         
                            });
                        });
                    });
        </script>




</head>
