<script type="text/javascript">
function captcha_verify_callback (data, status) {
	if (status == "success" && data != "Failure") {
		$("#booking-notice").removeClass("alert-info")
							.removeClass("alert-danger")
							.addClass("alert-success")
							.html(data);

		$("#btn-email-april").removeClass("btn-github")
							 .addClass("btn-yahoo")
							 .attr("href", "mailto:"+data)
							 .attr('onclick','')
							 .off('click');
	} else {
		$("#booking-notice").removeClass("alert-info")
							.removeClass("alert-success")
							.addClass("alert-danger")
							.html("We need to know you're a person before we can reveal the email address.  "
								+ "Please click the <strong>I'm not a robot</strong> button and follow the instructions.  "
								+ "If this isn't working please contact April through Facebook and let us know.");
	}
}

function captcha_callback (val) {
	$.ajax({
		url:"email.php", 
		data:{ key:val },
		success: captcha_verify_callback,
		error: captcha_verify_callback,
		dataType: "text"
		});
	}

</script>

<!-- Booking Modal -->
<div id="booking-modal" class="modal fade" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title">Booking</h4>
			</div>
		<div class="modal-body">
		Thank you for your interest in booking April Jennifer Choi for you project!<br><br>
		<div class="g-recaptcha" data-callback="captcha_callback" data-sitekey="6LcE3wsUAAAAAGPgotYwHaS3dzQ_OLafYjb4Eghx"></div>
		<br>
		<center>	
		<a id="btn-email-april" href="#" onclick="captcha_callback()" class="btn btn-lg btn-block btn-social btn-github">
			<span class="fa fa-envelope"></span>E-mail April
		</a>
		<br></center>
		<div id="booking-notice" class="alert alert-info" role="alert">Please prove you're not a robot...</div>
	  </div>
	  <div class="modal-footer">
		<button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
	  </div>
	</div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
