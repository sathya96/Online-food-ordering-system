<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Online Ordering!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: orange;
                color: red;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .topnav {
                overflow: hidden;
                  background-color: ##808080;
                }

             .topnav a {
                  float: left;
                  color: #808080;
                  text-align: center;
                  padding: 14px 16px;
                  text-decoration: none;
                  font-size: 17px;
                }

                .topnav a:hover {
                  background-color: #808080;
                  color: black;
                }

                .topnav a.active {
                  background-color: #C1371A;
                  color: white;
                }
                .footer {
                   
                   left: 0;
                   bottom: 0;
                   width: 100%;
                   background-color: red;
                   color: white;
                   text-align: center;
                }

                /* On smaller screens, decrease text size */
              @media only screen and (max-width: 300px) {
              .text {font-size: 11px}
              }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* Add a black background color to the top navigation */
  .topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Change the color of links on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Add a color to the active/current link */
.topnav a.active {
  background-color: #4CAF50;
  color: white;
}
        </style>
    </head>
    <body>
        <div class="topnav">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="/contact">Contact</a>
  <a href="/location">Location</a>
</div>
        <div class="flex-center position-ref full-height">

            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    LET'S ORDER NOW!
                </div>

            </div>
            <br>
            <div class="slideshow-container">

<div class="mySlides fade">
  
  
  <img src="img/dectar.jpg" style="width:100%" >
  
</div>

<div class="mySlides fade">
  
  <img src="img/zakat.png" style="width:100%">
  
</div>
<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
        </div>
    </body>
    <body>

<br>
<br>
<div class="slideshow-container">

<div class="mySlides fade">
  
  
  <img src="img/dectar.jpg" style="width:100%" >
  
</div>

<div class="mySlides fade">
  
  <img src="img/zakat.png" style="width:100%">
  
</div>
<div class="mySlides fade">
  
  <img src="img/b77a.png" style="width:100%">
  
</div>



</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>
</div>
</div>

<div class="footer">
  <p>Aras 1, Masjid Universiti,</p>
     <p>Universiti Kebangsaan Malaysia (UKM),</p>
<p>43600 UKM Bangi,</p>
<p>Selangor Darul Ehsan</p>
<p>+603-8921 4225 / 5820</p>
<p>infozakat@ukm.my</p>

  
<p>Copyright © 2018 , Group 8</p>
</div>


<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script>
    </body>
</html>
