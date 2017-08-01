$(function(){ 

	$("#form1").validate({
	debug: true,
    rules: {
        username: "required",
        email: "required",
        cellphone: "required",
                    
    },
    submitHandler: function(form) {
    	form.submit();
    },
});

$("#form1-button").on("click",function(e){
	e.preventDefault();
	if($("#form1").valid() && $( "input:filled" )) {
	$("#form1").submit();
	window.location.href = "shareddrive.html";
	}
});
$(".body-sharedobject").on("click",function(e){
	e.preventDefault();
});
$("#form2-button").on("click",function(e){
	e.preventDefault();

	window.location.href = "sharedobject-info.html";
});
$("#form2-button").on("click",function(e){
	e.preventDefault();
	window.location.href = "sharedobject-info.html";
});
$(".login").on("click",function(e){
	e.preventDefault();
	window.location.href = "index.html";
});
$(".title-link").on("click",function(e){
	e.preventDefault();
	window.location.href = "index.html";
});
$(".about").on("click",function(e){
	e.preventDefault();
	window.location.href = "about.html";
});

$("#form3-button").on("click",function(e){
	e.preventDefault();
	window.location.href = "timeslots.html";
});

$("#datepicker-start").datepicker();
$("#datepicker-end").datepicker();

$("#form-email").keyup(function() {
	var re = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
	var emailFormat = re.test($("#form1-email").val());
	if(emailFormat) {
		$("#form-email").parent().addClass("has-warning");
	}
});


});