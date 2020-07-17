$(window).load(function(){

	$(document).ready(function(){
        $('.accordion-header').click(function(e){
            e.preventDefault();
            if($(this).closest('li').find('.accordion-body').is(":visible")){
		    	$(this).closest('li').find('.accordion-icon-closed').hide();
		    	$(this).closest('li').find('.accordion-icon-open').show();
		    }
		    else {
		    	$(this).closest('li').find('.accordion-icon-open').hide();
		    	$(this).closest('li').find('.accordion-icon-closed').show();
		    }
            $(this).closest('li').find('.accordion-body').slideToggle();
        });
    });
	
});