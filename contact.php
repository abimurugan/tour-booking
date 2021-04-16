<!DOCTYPE html>
<html>
<head>
    <title>Send an Email</title>
    <link rel="icon" type="image/x-icon" href="img/favicon.png" />
    <link rel="stylesheet" href="css/index.css">
      <link rel="stylesheet" href="css/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">
    <!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Montserrat|Ubuntu" rel="stylesheet">

<!-- CSS Stylesheets -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- Font Awesome -->
 <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
<!-- Bootstrap Scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
  <div id="layoutDefault">
          <div id="layoutDefault_content">
              <main>
    <nav class="navbar navbar-expand-lg bg-white navbar-light">
                    <div class="container">
                        <h1 class="title" >Travalong</h1>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02">
          <span class="navbar-toggler-icon"></span>
      </button>
                        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                            <ul class="navbar-nav ml-auto ">
                                <li class="nav-item">
                                    <a class="nav-link" href="index.html">Home </a>
                                </li>
                                <li class="nav-item ">
                                    <a class="nav-link" href="about.html">About</a>
                                </li>
                                <li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Plan your tour</a>
  <ul class="dropdown-menu">
    <li><a class="dropdown-item" href="#">wildlife</a></li>
    <li><a class="dropdown-item" href="#">Heritage</a></li>
    <li><a class="dropdown-item" href="#">Adventure</a></li>
      <li><a class="dropdown-item" href="#">Beach</a></li>
      <li><a class="dropdown-item" href="#">Hillstation</a></li>

    <li><a class="dropdown-item" href="#"></a></li>
  </ul>
  </li>

                             </ul>
                             <form  action="home.html" method="get">
                             <button type="submit" class=" button btn-teal btn rounded-pill px-4 ml-lg-4" >Book-Now</button>
                             </form>

                          </div>
                  </div>
              </nav>
          </div>
  </div>
	<center>
		<h4 class="sent-notification"></h4>
		<form id="myForm">
        <div >
          <center>Send an Email<center></center>
        </div>

			<label >Name</label>
			<input id="name" type="text" placeholder="Enter Name">
			<br><br>

			<label >Email</label>
			<input id="email" type="text" placeholder="Enter Email">
			<br><br>

			<label >Subject</label>
			<input id="subject" type="text" placeholder=" Enter Subject">
			<br><br>
      <label >Message</label><br />
			<textarea id="body" rows="5" placeholder="Type Message"></textarea></br></br>


      <button type="button" onclick="sendEmail()" value="Send An Email">Submit</button>

		</form>
	</center>
  <footer class="footer">
     <div class="containerf">
      <div class="row">
        <div class="footer-col">
          <h4>About</h4>
          <ul>
            <li class="a">We are here to make your trip more enjoyable.let us show you the unforgatable rail journey for unbridled spirit</li>

          </ul>
        </div>

        <div class="footer-col contact">
          <h4>contact</h4>
          <ul>
            <li class="a"><i class="fas fa-map-marker-alt"></i>       no.53 Shakthi nagar,valasaravakam,chennai pincode:600016</li>
            <li class="a"> <i class="fa fa-phone" aria-hidden="true"></i>        +919442246176</li>
            <li class="a"> <i class="fa fa-envelope" aria-hidden="true"></i>         travalong@gmail.com</li>

          </ul>
        </div>
        <div class="footer-col">
          <h4>follow us</h4>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>
     </div>
  </footer>
	<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
	<script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var subject = $("#subject");
            var body = $("#body");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(subject) && isNotEmpty(body)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       subject: subject.val(),
                       body: body.val()
                   }, success: function (response) {
                        $('#myForm')[0].reset();
                        $('.sent-notification').text("Message Sent Successfully.");
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


      <!-- Option 2: Separate Popper and Bootstrap JS -->
      <!--
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
      -->

</body>
</html>
