	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>

	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>

	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

	<!-- Atlantis JS -->
	<script src="assets/js/rpy.min.js"></script>
	<script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
      var fileName = $(this).val().split("\\").pop();
      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>

	<script>

	function getImage(el){
		document.getElementById('school-profile').src = window.URL.createObjectURL(el.files[0])
		str = $("#customFile").val();
		$('#titleImage').val(str.split(/[\\/]/).pop());
	}

	$(function () {
		// this will get the full URL at the address bar
		var url = window.location.href;
		// passes on every "a" tag
		$(".nav .nav-link").each(function () {
			// checks if its the same on the address bar
			if (url == (this.href)) {
				$(this).closest("li").addClass("active");
				//for making parent of submenu active
				$(this).closest("li").parent().parent().addClass("active");
			}
		});
    });
	</script>
</body>
</html>