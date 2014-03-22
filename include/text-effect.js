// JavaScript Document
$(document).ready(function () {
 
 
    //custom jquery plugin loadText()
    $.fn.loadText = function (textArray, interval) {
        return this.each(function () {
            var obj = $(this);
            obj.fadeOut('slow', function () {
                var elem = textArray[0];
                obj.empty().html(elem);
                textArray.shift();
                textArray.push(elem);
                obj.fadeIn('slow');
            });
            timeOut = setTimeout(function () { obj.loadText(textArray, interval) }, interval);
        });
		
    };
 
    //array for nav
    var helloArray =
        [
            "Relax",
            "Refresh",
            "Revive",
        ];
    //load text into text effect
    $('#effect-text').loadText(helloArray, 3000); // ( array, interval )
    document.title = $('#page_title').text();
 
 
	//toggle function on responsive nav
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 600 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});


		 $(document).ready(function() {
    		$('#myform').previewForm({ show_password : false });
		});


		//Read more: http://buffernow.com/preview-form-before-submit-jquery-plugin/#ixzz2wZEh2q5x
 
});