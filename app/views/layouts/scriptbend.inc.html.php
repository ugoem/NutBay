			<!-- JQuery -->
			<script src="https://cdn.jsdelivr.net/gh/jquery/jquery@3.2.1/dist/jquery.min.js"></script>
			<script src="views/assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="views/assets/js/popper.min.js"></script>
			<script src="views/assets/js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			
 			<script src="views/assets/js/jquery-ui.js"></script>					
  			<script src="views/assets/js/easing.min.js"></script>			
			<script src="views/assets/js/hoverIntent.js"></script>
			<script src="views/assets/js/superfish.min.js"></script>	
			<script src="views/assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="views/assets/js/jquery.magnific-popup.min.js"></script>						
			<script src="views/assets/js/jquery.nice-select.min.js"></script>					
			<script src="views/assets/js/owl.carousel.min.js"></script>							
			<script src="views/assets/js/mail-script.js"></script>	
			<script src="views/assets/js/main.js"></script>
			<script src="views/assets/js/adminlte.min.js"></script>
			<!-- Summernote -->
			<script src="views/assets/plugins/summernote/summernote-bs4.min.js"></script>
			
			<!-- Page specific script -->
			<script>
				$(function () {
					//Add text editor
					$('#compose-textarea').summernote()
				})
			</script>
			<!-- FontAwesome 5 
			<script src="views/assets/plugins/fontawesome-free/js/fontawesome-all.min.js" ></script>      -->
			
			<!-- Calendar -->
			<script src="https://cdn.jsdelivr.net/gh/wrick17/calendar-plugin@master/calendar.min.js"></script>
	<script type="text/javascript">
      var config = `
		function selectDate(date) {
			$('#calendar-wrapper').updateCalendarOptions({
					date: date
			});
				console.log(calendar.getSelectedDate());
		}

			var defaultConfig = {
			weekDayLength: 1,
			date: new Date(),
			onClickDate: selectDate,
			showYearDropdown: true,
			startOnMonday: false,
		};

		var calendar = $('#calendar-wrapper').calendar(defaultConfig);
			console.log(calendar.getSelectedDate());
		`;
			eval(config);
		const flask = new CodeFlask('#editor', { 
				language: 'js', 
				lineNumbers: true 
			});
			flask.updateCode(config);
			flask.onUpdate((code) => {
			try {
				eval(code);
			} catch(e) {}
		});
	</script>

		<!-- scrol to top script-->
		<script type="text/javascript">
			//Get the button
			var mybutton = document.getElementById("myBtn");

			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
					mybutton.style.display = "block";
				} else {
					mybutton.style.display = "none";
				}
			}

			// When the user clicks on the button, scroll to the top of the document
			function topFunction() {
					document.body.scrollTop = 0;
					document.documentElement.scrollTop = 0;
				}
		</script>	
		