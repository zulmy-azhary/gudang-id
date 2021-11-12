// Sweet Alert 2
$(function () {
	// Delete Button
	$(".delete-button").click(function (e) {
		e.preventDefault();
		const href = $(this).attr("href");
		Swal.fire({
			title: "Apakah anda yakin?",
			text: "Data yang terhapus tidak dapat dipulihkan kembali!",
			icon: "warning",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Ya",
			cancelButtonText: "Kembali",
		}).then((result) => {
			if (result.isConfirmed) {
				Swal.fire({
					title: "Data telah dihapus!",
					icon: "success",
				}).then(() => {
					document.location.href = href;
				});
			}
		});
	});

	// Create Button
	$(".create-button").click(function (e) {
		e.preventDefault();
		Swal.fire({
			title: "Tambahkan Data?",
			icon: "question",
			showCancelButton: true,
			confirmButtonColor: "#3085d6",
			cancelButtonColor: "#d33",
			confirmButtonText: "Ya",
			cancelButtonText: "Kembali",
		}).then((result) => {
			if (result.isConfirmed) {
				$("#createForm").submit();
			}
		});
	});
});
