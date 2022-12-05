<html>

<head>
    <title>traffic24 - @yield('title')</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/5.0.0/mdb.min.css" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: rgb(91, 4, 4);
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: rgb(91, 4, 4);
  color: rgba(201, 236, 77, 0.632);
}

.topnav a.active {
  background-color: rgb(38, 2, 2);
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>


</head>

<body style="background-color: rgb(221, 200, 82)">

    <div class="topnav" id="myTopnav">
        <a href="#home" class="active" style="font-size: 15px">Home</a>
        <a href="#news" style="font-size: 15px">VEHICLE</a>
        <a href="#contact" style="font-size: 15px">DRIVING LICENSE</a>
        <a href="#about" style="font-size: 15px">OTHER SERVICES</a>
        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      
      <div style="padding-left:16px">
        <div class="container">
            @yield('content')
        </div>
      </div>

      <div class="footer" style="position: fixed;
      left: 0;
      bottom: 0;
      width: 100%;
      background-color: rgb(91, 4, 4);
      color: white;
      text-align: center;">
        <p>Copyright © 2022 Traffic24. All Rights Reserved.
            Designed & Developed by Traffic24 Teams</p>
      </div>
      
    <script>
        function myFunction() {
          var x = document.getElementById("myTopnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
        </script>
</body>

</html>