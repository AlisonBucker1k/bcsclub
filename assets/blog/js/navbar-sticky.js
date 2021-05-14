$(function () {
    /*===== navbar sticky ======*/
    window.onscroll = function() {stickyFunction()};

    var navbarField = document.getElementById("sticky-content-navbar");
    var sticky = navbarField.offsetTop;

    function stickyFunction() {
        if (window.pageYOffset >= sticky) {
            navbarField.classList.add("is-sticky");
        } else {
            navbarField.classList.remove("is-sticky");
        }
    }
});