$(window).load(function(){
	$(document).on('click', '.accordion-header', function(e){
        e.preventDefault();
        $(this).closest('li').find('.accordion-body').slideToggle();
    });
});