function loginPage() {
	"use strict";
	window.location.assign("login.php");
}

function adminLoginPage() {
    "use strict";
    window.location.assign("admins/adminLogin.php");
}
function registerHomePage(){
	"use strict";
	window.location.assign("registration.php");
}

(function($) {    
	"use strict";
	$(document).ready(function(){
     $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('#back-to-top').fadeIn();
            } else {
                $('#back-to-top').fadeOut();
            }
        });
        // scroll body to 0px on click
        $('#back-to-top').click(function () {
            $('body,html').animate({
                scrollTop: 0
            }, 200);
            return false;
        });
});
})(jQuery);


$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});