let username = $("#username");
let password = $("#password");
let confirmPassword = $("#confirmPassword");

// ! Manage User (Create User)
username.keyup(function () {
	let userValue = $(this).val();
	let usernameFeedback = $("#usernameFeedback");
	if (userValue === "") {
		$(this).removeClass("is-valid is-invalid");
		usernameFeedback.prop("hidden", true);
	} else if (userValue.match(/^.{4,}$/)) {
		$.ajax({
			url: "http://localhost/gudang-id/public/manageuser/getusername",
			data: { username: userValue },
			method: "POST",
			success: function (res) {
				let response = JSON.parse(res);
				if (response === true) {
					username.removeClass("is-valid").addClass("is-invalid");
					usernameFeedback
						.html("Username ini sudah ada, coba yang lain!")
						.prop("hidden", false);
				} else {
					username.removeClass("is-invalid").addClass("is-valid");
					usernameFeedback.prop("hidden", true);
				}
			},
		});
	} else {
		username.removeClass("is-valid").addClass("is-invalid");
		usernameFeedback.html("Panjang username minimal 4 karakter").prop("hidden", false);
	}
});

password.keyup(function () {
	if ($(this).val() !== "") {
		confirmPassword.prop("readonly", false).removeAttr("placeholder");
		validatePassword($(this), $(this));

		if ($(this).val() !== confirmPassword.val()) {
			if (confirmPassword.val() === "") {
				confirmPassword.removeClass("is-valid is-invalid");
			} else {
				confirmPassword.removeClass("is-valid").addClass("is-invalid");
				$("#confirmPasswordFeedback").html("Password tidak cocok!").prop("hidden", false);
			}
		} else {
			confirmPassword.removeClass("is-invalid").addClass("is-valid");
			$("#confirmPasswordFeedback").prop("hidden", true);
		}
	} else {
		$(this).removeClass("is-valid").removeClass("is-invalid");
		confirmPassword
			.prop("readonly", true)
			.attr("placeholder", "Input password terlebih dahulu")
			.removeClass("is-valid is-invalid")
			.val("");
		$("#passwordLengthFeedback, #passwordNumberFeedback, #passwordCharFeedback").prop("hidden", true);
	}
});

confirmPassword.keyup(function () {
	if ($(this).val() === password.val()) {
		$(this).removeClass("is-invalid").addClass("is-valid");
		$("#confirmPasswordFeedback").prop("hidden", true);
	} else if ($(this).val() === "") {
		$(this).removeClass("is-valid is-invalid");
		$("#confirmPasswordFeedback").prop("hidden", true);
	} else {
		$(this).removeClass("is-valid").addClass("is-invalid");
		$("#confirmPasswordFeedback").html("Password tidak cocok!").prop("hidden", false);
	}
});

$("#resetUserForm").click(function () {
	$("#username, #password, #confirmPassword").removeClass("is-valid is-invalid");
	$("small").prop("hidden", false).prop("hidden", true);
	confirmPassword
		.prop("readonly", true)
		.attr("placeholder", "Input password terlebih dahulu")
		.removeClass("is-valid is-invalid")
		.val("");
	$("#userRole").val("").trigger("change");
});

// ! Update Modal
$(document).on("click", "#userUpdateModalButton", function () {
	let id = $(this).data("id");

	$("#updateUserRole").find(`option[value=${1}]`).remove();
	$.ajax({
		url: "http://localhost/gudang-id/public/manageuser/getmodalusers",
		data: { id: JSON.stringify(id) },
		method: "POST",
		success: function (res) {
			let data = JSON.parse(res);
			console.log(data);

			$("#updateFullName").val(data.fullname);
			$("#updateUsername").val(data.username);
			// $("#updateUserCabang").val(data.id_cabang);
			$("#updateUserRole").select2("val", data.id_role);
			if (data.id_role == 1) {
				$("#updateUserRole")
					.prop("disabled", true)
					.append($(`<option selected value="${1}">${data.nm_role}</option>`));
				// $("#updateUserCabang")
				// 	.prop("disabled", true)
				// 	.append($("<option selected>").val(0).text("-"));
			} else {
				$("#updateUserRole").prop("disabled", false);
			}
		},
	});
});

function validatePassword(password, target) {
	const passwordLength = $("#passwordLengthFeedback");
	const passwordNumber = $("#passwordNumberFeedback");
	const passwordChar = $("#passwordCharFeedback");

	// Validate length
	if (password.val().match(/^.{6,12}$/)) {
		passwordLength.prop("hidden", true);
	} else if (password.val().match(/^.{13,}$/)) {
		passwordLength.html("Password tidak boleh lebih dari 12 karakter").prop("hidden", false);
	} else {
		passwordLength.html("Panjang password minimal 6 karakter").prop("hidden", false);
	}

	// Atleast have number
	if (password.val().match(/^(?=.*[0-9])/)) {
		passwordNumber.prop("hidden", true);
	} else {
		passwordNumber.html("Harus mengandung angka").prop("hidden", false);
	}

	// Atleast have special character
	if (password.val().match(/^(?=.*[!@#$%^&*_])/)) {
		passwordChar.prop("hidden", true);
	} else {
		passwordChar.html("Harus mengandung karakter spesial (!@#$%^&*_)").prop("hidden", false);
	}

	// If all meet the requirements
	if (password.val().match(/^(?=.*[0-9])(?=.*[!@#$%^&*_])[a-zA-Z0-9!@#$%^&*_]{6,12}$/)) {
		target.removeClass("is-invalid").addClass("is-valid");
	} else {
		target.removeClass("is-valid").addClass("is-invalid");
	}
}
