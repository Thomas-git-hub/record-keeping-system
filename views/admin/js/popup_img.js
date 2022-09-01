jQuery(function($){
	$('#profile-img').click(function(){
		var src = $(this).attr("src");
		$('.modal-img').modal('show');
		$('#popup-img').attr('src', src);
		});
	
	$('#vaxx-img').click(function(){
		var src = $(this).attr("src");
		$('.modal-img').modal('show');
		$('#popup-img').attr('src', src);
		});

	$('#id-img').click(function(){
		var src = $(this).attr("src");
		$('.modal-img').modal('show');
		$('#popup-img').attr('src', src);
		});
	});