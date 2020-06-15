





function slideHeader() {
	var mainheader = document.querySelector('.main-header'),
	status = mainheader.getAttribute('data-status'),
	darkBg = document.querySelector('.dark-bag');
	if(status == 'off'){
	mainheader.style.width = '300px';
	mainheader.setAttribute('data-status', 'on');
	$('.dark-bag').fadeIn();
	}else{
	console.log(mainheader.clientWidth);
	mainheader.style.width = '0px';
	mainheader.setAttribute('data-status', 'off');
	$('.dark-bag').fadeOut();
	}
}








	$('.filter-res').click(function(){
	let windowSize = window.matchMedia("(max-width: 992px)");
	if(windowSize.matches)
	$('.filter-options').slideToggle();

});



window.onresize = function(){
	let windowSize = window.matchMedia("(max-width: 992px)");
	if(!windowSize.matches)
		$('.filter-options').show();
	else{
		$('.filter-options').hide();
	}
}











