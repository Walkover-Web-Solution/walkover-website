<footer>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-lg-8 col-12">
				<div class="footer-address">
					<p class="text-white mb-2">Walkover, 405-406, Capt. C.S Naidu Arcade, Near Greater Kailash Hospital, 10/2 Old Palasia, Indore-452018, Madhya Pradesh, India</p>
					<a class="see-map" target="_blank" href="https://goo.gl/maps/M93XQRyqzzArWdxU9">See on map</a>
				</div>				
			</div>
			<div class="col-lg-4 col-md-4 col-12 text-md-right">
				<div class="footer-social-media">
					<ul>
						<li><a href="https://www.facebook.com/walkoverltd" target="_blank"><img src="assets/images/footer_facebook_icon.svg"></a></li>
						<li><a href="https://twitter.com/walkoverltd" target="_blank"><img src="assets/images/footer_twitter_icon.svg"></a></li>
						<li><a href="https://www.linkedin.com/company/walkover/" target="_blank"><img src="assets/images/footer_linkedin_icon.svg"></a></li>
						<li><a href="https://www.instagram.com/walkover.inc/" target="_blank"><img src="assets/images/footer_instagram_icon.svg" style="background-color: #a4000c;border-radius: 50%;"></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-8 col-12">
					<p class="text-white"><?php echo date("Y");?> Walkover Technologies | All Rights Reserved | <a class="text-white" href="https://www.termsfeed.com/live/07a7776a-e57f-42ff-8a73-f775e5b92781" target="_blank">Privacy Policy</a> </p>
				</div>
				<div class="col-lg-4 col-md-12 col-12 text-md-center text-lg-center">
					<ul class="footer-info-box">
						<li><img src="assets/images/footer_email_icon.svg"> <a class="text-white" href="mailto:info@walkover.in">info@walkover.in</a></li>
						<li><img src="assets/images/footetr_phone_icon.svg"> <a class="text-white" href="tel:+917312560056">+917312560056</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>

<script src="assets/js/jquery.min.js"></script>
<!-- <script src="assets/js/jquery.pagepiling.min.js"></script> -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>

<script>
	$(document).ready(function() {
		var prevScrollpos = window.pageYOffset;
		window.onscroll = function() {
		var currentScrollPos = window.pageYOffset;
		if (prevScrollpos > currentScrollPos) {
			document.getElementById("header").style.top = "0";
		} else {
			document.getElementById("header").style.top = "-88px";
		}
		prevScrollpos = currentScrollPos;
		}	
	});
</script>
<!-- 
<script type="text/javascript" src="https://phone91.com/widget/hello-chat.min.js"> </script>
  <script type="text/javascript">
      var helloConfig = {
      widgetToken: "2fc29"
      //unique_id: '', // any unique id, could be username, email etc.
      //name: '',  // optional, if not passed in code, a form will be displayed
      //number: '', // optional, if not passed in code, a form will be displayed
      //mail: '', // optional, if not passed in code, a form will be displayed
    };
    initChatWidget(helloConfig);
  </script> -->
  
<script>		
	window.superformIds = ['NYyA'];
</script>		
<script src="https://scripts.sokt.io/superform/superform.js"></script>