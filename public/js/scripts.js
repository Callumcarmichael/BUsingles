
//When someone clicks on the navigation links
	$('.nav navbar-nav').click(function(e){
		$('.nav navbar-nav').attr('id', ''); //make all navtabs inactive
		$(this).attr('id', 'activetab'); //make the one we clicked active
		
		//hide all of the fieldsets
		$('fieldset').attr('class', 'hidden');

		whichitem=$(this).attr('title'); //get the title of the nav we clicked

		//make the class of what we cleared not hidden
		$("fieldset[title='"+whichitem+"']").attr('class', ''); 
	});