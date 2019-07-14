<?php
require_once 'php_action/db_connect.php';
include_once 'php_action/do_login.php';
include_once 'php_action/do_register.php';
include_once 'php_action/do_sendMessages.php';
include_once 'php_action/do_ticket.php';
include_once 'php_action/fetchTickets.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Java Jazz</title>
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- stylesheets css -->
	<link rel="stylesheet" href="assets/public/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/public/css/animate.min.css">
  <link rel="stylesheet" href="assets/public/css/et-line-font.css">
	<link rel="stylesheet" href="assets/public/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/public/css/vegas.min.css">
	<link rel="stylesheet" href="assets/public/css/style.css">

	<link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'>
	<link href="https://fonts.googleapis.com/css?family=Teko" rel="stylesheet">

	<script type="text/javascript">
	function ValidatePassword() {
			var passwordRegister = document.getElementById("passwordRegister").value;
			var confirm_passwordRegister = document.getElementById("confirm_passwordRegister").value;
			if (passwordRegister != confirm_passwordRegister) {
					confirm_password.setCustomValidity("Passwords don't match");
			}
			else {
				confirm_password.setCustomValidity('');
			}

			password.onchange = ValidatePassword;
			confirm_password.onkeyup = ValidatePassword;
	}
	</script>
</head>
<body>

<!-- preloader section -->
<section class="preloader">
	<div class="sk-circle">
       <div class="sk-circle1 sk-child"></div>
       <div class="sk-circle2 sk-child"></div>
       <div class="sk-circle3 sk-child"></div>
       <div class="sk-circle4 sk-child"></div>
       <div class="sk-circle5 sk-child"></div>
       <div class="sk-circle6 sk-child"></div>
      <div class="sk-circle7 sk-child"></div>
       <div class="sk-circle8 sk-child"></div>
       <div class="sk-circle9 sk-child"></div>
       <div class="sk-circle10 sk-child"></div>
       <div class="sk-circle11 sk-child"></div>
       <div class="sk-circle12 sk-child"></div>
     </div>
</section>

<?php

if (isset($_SESSION['id_customer'])) {
	echo '
		<div class="user">
			<button type="button" class="btn btn-lg btn-default  userLogin" name="button">Hallo ☻ <span style="userLoginUsername"></span> '.$_SESSION['nama_customer'].' </span></button>
		</div><br>
		<div class="user">
			<a href="#" data-toggle="modal" data-target="#logout" class="btn btn-lg btn-default userLogin">Logout</a>
		</div>
		';
}
else {
	echo '
		<div class="user">
			<a href="#" data-toggle="modal" data-target="#login" class="btn btn-lg btn-default userLogin">Login</a>
		</div><br>
		<div class="user">
			<a href="#" data-toggle="modal" data-target="#register" class="btn btn-lg btn-default userLogin">Mendaftar</a>
		</div>
	';
}

 ?>

<!-- home section -->
<section id="home">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="home-thumb">
					<h1 class="wow fadeInUp" data-wow-delay="0.4s">WE ARE COOMING</h1>
      			<h3 class="wow fadeInUp" data-wow-delay="0.6s">We are almost <strong>ready to show</strong> our <strong>new generation</strong> of vacation</h3>
      			<a href="#about" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">Let's begin</a>
						<a href="#ticket" class="btn btn-lg btn-success smoothScroll wow fadeInUp hidden-xs" data-wow-delay="0.8s">Buy a Ticket</a>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- about section -->
<section id="about">
	<div class="container">
		<div class="row">

      <div class="col-md-6 col-sm-12">
        <img src="images/banner.png" class="img-responsive wow fadeInUp" alt="Java Jazz Festival">
      </div>

			<div class="col-md-6 col-sm-12">
				<div class="about-thumb">
					<div class="section-title">
						<h1 class="wow fadeIn" data-wow-delay="0.2s">Java Jazz</h1>
						<h3 class="wow fadeInUp" data-wow-delay="0.4s">Mari datang, dan bersenang senanglah</h3>
					</div>
					<div class="wow fadeInUp" data-wow-delay="0.6s">
						<p>Vivamus elit risus, porttitor id placerat ut, aliquet non quam. Pellentesque nulla metus, ornare et porttitor vel, consectetur vitae erat. Vestibulum tristique semper tellus vitae condimentum. Duis sed eros eget diam dictum posuere.</p>
						<p>Aliquam vel gravida ligula. Phasellus ut purus ac libero ultrices commodo commodo at quam. In vestibulum purus sit amet tempus euismod. Donec sed congue nisl.</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Person section -->
<section id="feature">
  <div class="container">
    <div class="row">

			<svg preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg" class="svgcolor-light">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.4s">
          <div class="media-object media-left">
            <i class="icon icon-laptop"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Responsive</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-6">
        <div class="media wow fadeInUp" data-wow-delay="0.8s">
          <div class="media-object media-left">
            <i class="icon icon-refresh"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Bootstrap</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

      <div class="col-md-4 col-sm-8">
        <div class="media wow fadeInUp" data-wow-delay="1.2s">
          <div class="media-object media-left">
            <i class="icon icon-chat"></i>
          </div>
          <div class="media-body">
            <h2 class="media-heading">Support</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque luctus lacus nulla, eget varius justo tristique ut.</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- Ticket Section  -->
<section id="ticket">
  <div class="container">
    <div class="row">

			<?php
			if ($resultTicket->num_rows > 0) {
				while ($row = $resultTicket->fetch_array()) {
					$id_ticket = $row[0];

					$harga_tiket = $row[1];
					$jenis_tiket = $row[3];

					?>

					<div class="ticket-item col-sm-6 col-md-3">

						<?php
						if (isset($_SESSION['id_customer'])) {
							echo '<a href="#" target="_blank" class="ticket js-ticket js-track-ticket" data-toggle="modal" data-target="#pesanTicket">';
						}
						else {
							echo '<a href="#" target="_blank" class="ticket js-ticket js-track-ticket" data-toggle="modal" data-target="#login">';
						}
						 ?>


			        <div class="ticket-type">
			          <div class="vcenter">
			            <span class="ticket-type-label"><?php echo $jenis_tiket; ?></span>
			            <small class="ticket-type-desc"></small>
			          </div>
			        </div>
			        <span class="ticket-label">Starts from</span>
			        <div class="ticket-price">
			          <span class="ticket-currency">IDR</span>
			          <span class="ticket-num">
			            <?php echo $harga_tiket; ?><span class="ticket-letter">K</span>
			          </span>
			        </div>
			      </a>
						<?php
							if (isset($_SESSION['id_customer'])) {
								echo '<a href="#" data-toggle="modal" data-target="#pesanTicket" class="btn btn-lg btn-danger smoothScroll" data-wow-delay="1.0s">Beli Tiket</a>';
							}
							else {
								echo '<a href="#" data-toggle="modal" data-target="#login" class="btn btn-lg btn-danger smoothScroll" data-wow-delay="1.0s">Beli Tiket</a>';
							}
						?>
			    </div>

				<?php
				}
			}
			 ?>

    </div>
  </div>
</section>

<!-- contact section -->
<section id="contact">
	<div class="container">
		<div class="row">
			<div class="col-md-offset-2 col-md-8 col-sm-12">
				<div class="section-title">
					<h1 class="wow fadeInUp" data-wow-delay="0.3s">Mari Dekat Dengan Kita</h1>
					<p class="wow fadeInUp" data-wow-delay="0.6s">Yang kau mau, akan kami kuruti. Tapi maaf kami tidak bisa menuruti semua yang kau mau.</p>
				</div>
				<div class="contact-form wow fadeInUp" data-wow-delay="1.0s">
					<form id="contact-form" method="post" action="index.php">
            <div class="col-md-6 col-sm-6">
            	<input name="nameMessages" type="text" class="form-control" placeholder="Nama Anda" required>
            </div>
            <div class="col-md-6 col-sm-6">
            	<input name="emailMessages" type="email" class="form-control" placeholder="example@email.com" required>
            </div>
   			  	<div class="col-md-12 col-sm-12">
	   					<textarea name="messageMessages" class="form-control" placeholder="Apa yang anda butuhkan?" rows="6" required></textarea>
      	  	</div>
						<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
							<input name="btnMessages" type="submit" class="form-control submit" id="submit" value="KIRIM PESAN">
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- footer section -->
<footer>
	<div class="container">
		<div class="row">
      <svg class="svgcolor-light" preserveAspectRatio="none" viewBox="0 0 100 102" height="100" width="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 0 L50 100 L100 0 Z"></path>
      </svg>
      <div class="col-md-4 col-sm-6">
        <h2>java jazz</h2>
          <div class="wow fadeInUp" data-wow-delay="0.3s">
             <p class="text-justify">Sebuah konser besar besaran, tapi tidak melebih lebihkan. Dapat ditonton oleh orang yang tuli, dan dapat didengar dengan orang buta. Berlaku untuk semua kalangan, baik muda maupun yang tidak dapat diperkerikan seperti apa mudanya.<br> Jangan lupa untuk senang.</p>
             <p class="copyright-text">Copyright &copy; 2018 <br>
             Modified by <a rel="nofollow" href="" target="_parent">Tukang Koding</a></p>
          </div>
      </div>
      <div class="col-md-1 col-sm-1"></div>
      <div class="col-md-4 col-sm-5">
        <h2>Location</h2>
        <p class="wow fadeInUp" data-wow-delay="0.6s">
          Berada, dalam peredaran manusia<br>
          Masih bisa dihirup aromanya lewat hidung, dan mudah dilihat dengan mata.<br>
          Indonesia.
        </p>
        <ul class="social-icon">
          <li><a href="#" class="fa fa-facebook wow bounceIn" data-wow-delay="0.9s"></a></li>
          <li><a href="#" class="fa fa-twitter wow bounceIn" data-wow-delay="1.2s"></a></li>
          <li><a href="#" class="fa fa-behance wow bounceIn" data-wow-delay="1.4s"></a></li>
          <li><a href="#" class="fa fa-dribbble wow bounceIn" data-wow-delay="1.6s"></a></li>
        </ul>
      </div>

		</div>
	</div>
</footer>

<!-- Login Modal -->
<div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Login</h2>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
          <input name="usernameLogin" type="text" class="form-control" id="usernameLogin" placeholder="Username">
          <input name="passwordLogin" type="password" class="form-control" id="passwordLogin" placeholder="Password">
					<input name="loginBtn" type="submit" class="form-control" id="loginBtn" value="Login">
        </form>
      </div>
  </div>
</div>

<!-- Register Modal -->
<div class="modal fade" id="register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Mendaftar</h2>
        </div>
        <form action="index.php" method="post">
          <input name="namaRegister" type="text" class="form-control" id="namaRegister" placeholder="Nama Anda" required>
          <input name="usernameRegister" type="text" class="form-control" id="usernameRegister" placeholder="Username" required>
          <div class="row">
            <div class="col-sm-6">
              <input name="passwordRegister" type="password" class="form-control" id="passwordRegister" placeholder="Password" required>
            </div>
            <div class="col-sm-6">
              <input name="confirm_passwordRegister" type="password" class="form-control" id="confirm_passwordRegister" placeholder="Confirm Password" required>
            </div>
          </div>
          <input name="emailRegister" type="email" class="form-control" id="emailRegister" placeholder="example@email.com" required>
					<input name="noHpRegister" type="text" class="form-control" id="noHpRegister" placeholder="(021)12345678" maxlength="13" required>
					<input name="registerBtn" type="submit" class="form-control" onclick="return ValidatePassword()" id="registerBtn" value="Mendaftar">
        </form>
      </div>
  </div>
</div>

<!--Ticket modal -->
<div class="modal fade" id="pesanTicket" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Pembelian Tiket</h2>
        </div>
        <form action="index.php" method="post">
          <input name="nama_pembeli" type="text" class="form-control" id="nama_pembeli" placeholder="Full Name">
					<div class="form-group">
						<select class="form-control" id="jenis_tiket" name="jenis_tiket">
							<option class="ticket-list" value="">Jenis Tiket</option>
							<?php
								$sql = "SELECT * FROM tickets WHERE stock > 0";
								$brandResult = $connect->query($sql);
								while($row = $brandResult->fetch_array()){
									echo "<option class='ticket-list' value='".$row[0]."'>".$row[3]."</option>";
								}
							?>
						</select>
					</div>
          <input name="email_pembeli" type="text" class="form-control" id="email" placeholder="Email Address">
          <input name="ticketBtn" type="submit" class="form-control" id="submit" value="Pesan Tiket">
        </form>
      </div>
  </div>
</div>

<!-- Logout Modal-->
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Apakah anda yakin ?</h2>
        </div>
        <form action="#" method="post">
					<a class="btn btn-default" href="logout.php">Iya</a>
					<a class="btn btn-default" href="#" data-dismiss="modal" aria-label="Close">Tidak</a>
        </form>
      </div>
  </div>
</div>


<!-- Back top -->
<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>

<!-- javscript js -->
<script src="assets/public/js/jquery.js"></script>
<script src="assets/public/js/bootstrap.min.js"></script>

<script src="assets/public/js/vegas.min.js"></script>

<script src="assets/public/js/wow.min.js"></script>
<script src="assets/public/js/smoothscroll.js"></script>
<script src="assets/public/js/custom.js"></script>

</body>
</html>
