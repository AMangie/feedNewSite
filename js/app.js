$(function() {
 	
	$(document).ready(function(){
		$('select').on('change', function () {
		    var val = $(this).val();
		    var i = $(this).index();
		    $('select:not(:eq('+i+'))').each(function () {
		        if ($(this).val() === val) {
		            alert($(this).index()+' has the same value');
		        }
		    });
		});
	}); // document ready

	

if ($('#feedbackform').length > 0 ) {
  $("#rateYo").rateYo({
    normalFill: "#A0A0A0",
    fullStar: true,
    onSet: function(rating, rateInstance){
    	$("#inpHdnCalificacion").val(rating);
    }
  });
}
  
 /*
	function changeClass() {
	    $('.Toggle-button--form').removeClass('is-buttonActive');
	    $(this).addClass('is-buttonActive');
	    $('.Toggle-button--form').on('click', changeClass);
	}
	changeClass();
*/

	function changeClass() {
	    $(this).parent().parent().find("button").removeClass('is-buttonActive');
	    $(this).parent().parent().find("input[type='hidden']").val("0");
	    $(this).addClass('is-buttonActive');
	    $(this).parent().find("input[type='hidden']").val("1");
	    
	}
	changeClass();
	$('.Toggle-button--form').on('click', changeClass);


	$("#mc-embedded-subscribe").on('click', function(){
			console.log("click boton");	
    		window.location = "https://beta.aeromexico.com/";    
	});

 });// function


