<!DOCTYPE html>
<html>
<style>
.button {
  padding: 10px 20px;
  font-size: 12px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #EF7B00;
  border: none;
  border-radius: 15px;
}
a:hover {
    color: white;
}
.buttonbrochure {
  padding: 13px 24px;
  font-size: 14px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #EF7B00;
  border: none;
  border-radius: 15px;
}

.k_fixed_bro {
    position: fixed;
    bottom: 3%;
    right: 0px;
}
</style>
    <head>
         <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
       <!--<meta charset="UTF-8">
  <meta name="description" content="Free Web tutorials">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="John Doe">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">-->
      <!-- Bootstrap CSS -->
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&amp;display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
      <link href="./public/css/bootstrap.min.css" rel="stylesheet">
      <link href="./public/css/style.css" rel="stylesheet">
      <link href="./public/css/slider.css" rel="stylesheet">
      <title>India Smart Utility Week </title>
	  <link rel="shortcut icon" href="/public/images/ISUW Logo 2022.jpg" type="/public/images/ISUW Logo 2022.jpg"/>
    </head>
    <body class="antialiased">
       
    @include('components.header')
    <div class="component-part">
    @yield('content')
    </div>
    @include('components.footer')
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script src="https://kenwheeler.github.io/slick/slick/slick.js"></script>
      <script src="./public/js/bootstrap.bundle.min.js"></script>
      <script src="./public/js/script.js"></script>
      <script>
         const year = new Date().getFullYear();
         const tenthOfJuly = new Date(year, 13,4).getTime();
         const tenthOfJulyNextYear = new Date(year + 1, 2, 18).getTime();
		 const month = new Date().getMonth();
         
         // countdown
         let timer = setInterval(function() {
         
           // get today's date
           const today = new Date().getTime();
         
           // get the difference
           let diff;
           if(month > 6) {
             diff = tenthOfJulyNextYear - today;
           } else {
             diff = tenthOfJuly - today;
           }
		      
         
         
           // math
           let days = Math.floor(diff / (1000 * 60 * 60 * 24));
           let hours = Math.floor((diff % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
           let minutes = Math.floor((diff % (1000 * 60 * 60)) / (1000 * 60));
           let seconds = Math.floor((diff % (1000 * 60)) / 1000);
         
           // display
           document.getElementById("timer111").innerHTML =
             "<div class=\"days\"> \
           <div class=\"numbers\">" + days + "</div>daysssss</div> \
         <div class=\"hours\"> \
           <div class=\"numbers\">" + hours + "</div>hours</div> \
         <div class=\"minutes\"> \
           <div class=\"numbers\">" + minutes + "</div>minutes</div> \
         <div class=\"seconds\"> \
           <div class=\"numbers\">" + seconds + "</div>seconds</div> \
         </div>";
         
         }, 1000);
      </script>
    </body>
</html>
