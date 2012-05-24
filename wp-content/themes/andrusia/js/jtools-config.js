//-------------------- header tooltips --------------------//

$("#twitter").tooltip({
	tip: '#twittip',
	effect: 'slide',
	direction: 'down'
});
	
$("#facebook").tooltip({
	tip: '#fbtip',
	effect: 'slide',
	direction: 'down'
});

$("#linkedin").tooltip({
	tip: '#lintip',
	effect: 'slide',
	direction: 'down'
});

$("#contact").tooltip({
	tip: '#contacttip',
	effect: 'slide',
	direction: 'down'
});

$("#rss").tooltip({
	tip: '#rsstip',
	effect: 'slide',
	direction: 'down'
});


//-------------------- home scrollable + tooltips --------------------//

$("div.recent-work").scrollable({ 
	size: 1,
	next: '.slidenext', 
	prev: '.slideprevious',
	items: '.items',
	easing: 'easeOutBack',
	speed: 700,
	clickable: false,
	loop: true
}).navigator({
	navi: '.slidenav'
}).autoscroll({
	autoplay: true,
	interval: 5000
});

$("#item1").tooltip({ 
	tip: '#info1',
	effect: 'fade'
});

$("#item2").tooltip({ 
	tip: '#info2',
	effect: 'fade'
});

$("#item3").tooltip({ 
	tip: '#info3',
	effect: 'fade'
});

$("#item4").tooltip({ 
	tip: '#info4',
	effect: 'fade'
});

$("#item5").tooltip({ 
	tip: '#info5',
	effect: 'fade'
});

$("#item6").tooltip({ 
	tip: '#info6',
	effect: 'fade'
});


//-------------------- portfolio scrollable --------------------//

$("div.port-web").scrollable({ 
	size: 3,
	nextPage: '.next-web', 
	prevPage: '.prev-web',
	items: '.portitems',
	easing: 'easeOutBack',
	speed: 700,
	clickable: false
}).navigator({
	navi: '.portnav-web'
});

$("div.port-graphics").scrollable({ 
	size: 3,
	nextPage: '.next-graphics', 
	prevPage: '.prev-graphics',
	items: '.portitems',
	easing: 'easeOutBack',
	speed: 700,
	clickable: false
}).navigator({
	navi: '.portnav-graphics'
});
	   
$("div.port-art").scrollable({ 
	size: 3,
	nextPage: '.next-art', 
	prevPage: '.prev-art',
	items: '.portitems',
	easing: 'easeOutBack',
	speed: 700,
	clickable: false
}).navigator({
	navi: '.portnav-art'
});
	  
$("div.port-photo").scrollable({ 
	size: 3,
	nextPage: '.next-photo', 
	prevPage: '.prev-photo',
	items: '.portitems',
	easing: 'easeOutBack',
	speed: 700,
	clickable: false
}).navigator({
	navi: '.portnav-photo'
});