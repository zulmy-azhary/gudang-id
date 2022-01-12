$(document).ready(function () {
	let group = $(".form-group");

	group.each(function () {
		let thatShit = $(this),
			inputs = thatShit.find(".input");

		inputs.on("focus", function () {
			thatShit.addClass("label-float");
		});
		inputs.on("blur", function () {
			if (!$(this).val()) {
				thatShit.removeClass("label-float");
			}
		});
	});

	$(".form-group").on("change", function () {
		let username = $("#username").val().trim();
		let password = $("#password").val().trim();

		// const response = [
		// 	"Username tidak boleh kosong!",
		// 	"Password tidak boleh kosong!",
		// 	"Username & Password cocok!",
		// 	"Username & Password salah!",
        // ];
        
        const response = {
			username: "Username tidak boleh kosong!",
			password: "Password tidak boleh kosong!",
			both: "Username & Password salah!",
		};

		$.ajax({
			async: true,
			url: "http://localhost/gudang-id/public/login/getUser",
			method: "post",
			data: { username: username, password: password },
			success: function (res) {
				// Response for input if on change
				if (res == 1) {
					$("#msgError").html(response.username).fadeIn().delay(900).fadeOut("slow");
                }
                else if (res == 2) {
					$("#msgError").html(response.password).fadeIn().delay(900).fadeOut("slow");
                }
                else if (res == 3) {
					$("#msgError").html(response.both).fadeIn().delay(900).fadeOut("slow");
				}

				// Enable button element if username & password are match
				if (res == 9) {
                    $("#loginBtn").prop("disabled", false);
				} else {
					$("#loginBtn").prop("disabled", true);
				}
			},
		});
	});
});

// const mySwiper = new Swiper(".my-swiper", {
// 	direction: "horizontal",
// 	loop: true,
// 	centeredSlide: true,
// 	// autoplay: {
// 	//     delay: 2000,
// 	// },
// 	pagination: {
// 		el: ".swiper-pagination",
// 		dynamicBullets: true,
// 	},
// });
