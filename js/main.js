function copyrightYear() {
		let today = new Date();
		let year = today.getFullYear();

		document.getElementById("copyright_span").innerHTML = year;
	}

	window.onload = copyrightYear();

	grecaptcha.ready(() => {
         grecaptcha.execute('6LcCP1EaAAAAAJ3Y4IWGDqQH-FFmUnrIcLgy2AyG', { action: 'contact' }).then(function(token) {
                const recaptchaResponse = document.getElementById('recaptchaResponse');
                recaptchaResponse.value = token;
        });
 });