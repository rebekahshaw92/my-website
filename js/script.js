window.onload = copyrightYear();

	function copyrightYear(){
		var today = new Date();
		var year = today.getFullYear();

		document.getElementById("copyright_span").innerHTML = year;
	}