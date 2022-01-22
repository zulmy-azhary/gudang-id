$(".switch-button").click(function () {
    if ($("html").hasClass("dark")) {
        stayLight();
    } else {
        stayDark();
    }
});

function goDark() {
	document.documentElement.classList.add("dark");
}
function goLight() {
	document.documentElement.removeAttribute("class");
}

function stayDark() {
	goDark();
	localStorage.setItem("darkmode", true);
}
function stayLight() {
	goLight();
	localStorage.setItem("darkmode", false);
}