/*!
=========================================================
* Meyawo Landing page
=========================================================

* Copyright: 2019 DevCRUD (https://devcrud.com)
* Licensed: (https://devcrud.com/licenses)
* Coded by www.devcrud.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
*/

// smooth scroll
$(document).ready(function () {
    $(".navbar .nav-link").on('click', function (event) {

        if (this.hash !== "") {

            event.preventDefault();

            var hash = this.hash;

            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 700, function () {
                window.location.hash = hash;
            });
        }
    });

    $(document).on("contextmenu", function (e) {
        e.preventDefault();
    });

    $(document).on("keydown", function (e) {
        if (e.keyCode == 123) { 
            e.preventDefault();
        }
        if (e.ctrlKey && e.shiftKey && (e.keyCode == 73 || e.keyCode == 74)) { 
            e.preventDefault();
        }
        if (e.ctrlKey && (e.keyCode == 85 || e.keyCode == 83)) { 
            e.preventDefault();
        }
    });
});

// navbar toggle
$('#nav-toggle').click(function () {
    $(this).toggleClass('is-active')
    $('ul.nav').toggleClass('show');
});