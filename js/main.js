// custom scripts

var photoArray = [
"http://woxed.hol.es/wp-content/uploads/2017/02/Jobs.png",
"http://woxed.hol.es/wp-content/uploads/2017/02/Morita.png", 
"http://woxed.hol.es/wp-content/uploads/2017/02/Mariot.png", 
"http://woxed.hol.es/wp-content/uploads/2017/02/Devid.png",
"http://woxed.hol.es/wp-content/uploads/2017/02/Yacocca.png",
];

var quoteArray = [
	document.getElementById('quote0'),
	document.getElementById('quote1'),
	document.getElementById('quote2'),
	document.getElementById('quote3'),
	document.getElementById('quote4')
]; // please format arrays like this
var nameArray =  [document.getElementById('name0'),document.getElementById('name1'),document.getElementById('name2'),document.getElementById('name3'),document.getElementById('name4')];
var positionArray =  [document.getElementById('position0'),document.getElementById('position1'),document.getElementById('position2'),document.getElementById('position3'),document.getElementById('position4')];
var personPhoto = document.getElementById('person-photo');


var operatSlider,
	timeoutId = 0;


var i = 0;
var j = 3;

var autoSlider = function(){
	clearTimeout(timeoutId);
	timeoutId = setTimeout('next(1)', 8000);
}

var next = function(operation){
	personPhoto.style.transition = '0.4s';
	quoteArray[i].style.transition = '0.4s';
	nameArray[i].style.transition = '0.4s';
	positionArray[i].style.transition = '0.4s';
	personPhoto.style.backgroundPosition = '250% 100%';
	quoteArray[i].style.opacity = '0';
	nameArray[i].style.opacity = '0';
	positionArray[i].style.opacity = '0';
	operatSlider=operation;
	setTimeout('noneFunc()', 500);
}

var noneFunc = function(){
		quoteArray[i].style.display = 'none';
		nameArray[i].style.display = 'none';
		positionArray[i].style.display = 'none';
		if(i+operatSlider>4){
			i=0;
		}else if(i+operatSlider<0){
			i=4;
		} else {
			i=i+operatSlider;
		}
		personPhoto.style.transition = '0s';
		personPhoto.style.backgroundImage = 'url(' + photoArray[i] + ')';	
		personPhoto.style.transition = '0.4s';
		if(window.innerWidth>1860){
			personPhoto.style.backgroundPosition = '85% 100%';
		}else if(window.innerWidth<1860 && window.innerWidth>1500){
			personPhoto.style.backgroundPosition = '100% 100%';
		}else if(window.innerWidth<1500 && window.innerWidth>1024){
			personPhoto.style.backgroundPosition = '120% 100%';
		}
		quoteArray[i].style.display = 'block';
		nameArray[i].style.display = 'block';
		positionArray[i].style.display = 'block';
		quoteArray[i].style.opacity = '1';
		nameArray[i].style.opacity = '1';
		positionArray[i].style.opacity = '1';
		autoSlider()

	}

var comentNext = function(operation){
	var comentArray = [document.getElementById('com1'), document.getElementById('com2'), document.getElementById('com3'), document.getElementById('com4'), document.getElementById('com5')];
	comentArray[0].style.transition="0.5s"
	comentArray[0].style.position="absolute";
	comentArray[0].style.left = "0";
}

var openBurger = function(oper){
	var bur = document.getElementById('burger');
	var back = document.getElementById('black-back');	
	if(oper){
		bur.style.display="block";
		back.style.display = "block";
		var burger1 = function(){
			bur.style.left = "0px";
			back.style.opacity = "0.7";
		}
		setTimeout(burger1, 500);
		oper=false;
	}else{
		back.style.display = "none";
		var burger2 = function(){
			bur.style.left = "-300px";
		}
		setTimeout(burger2, 500);
		bur.style.display="none";
		oper=true;
	}
}

var openVideoWindow = function(){
	var videoWindow = document.getElementById('video-window');
	var back = document.getElementById('black-back');	
	videoWindow.style.display = "block"
	back.style.display = "block"
}

var openMap = function(numberMap){
	var maps = [document.getElementById('first-map'), document.getElementById('sec-map')];
	var tittles = [document.getElementById('tit1'), document.getElementById('tit2')];
	var lines = [document.getElementById('lin1'), document.getElementById('lin2')]
	if(numberMap==0){
		maps[1].style.display="none";
		maps[0].style.display="block";
		tittles[1].style.color="#284ecd";
		tittles[0].style.color="#373737";
		lines[1].style.display="none";
		lines[0].style.display="block";
	}else{
		maps[0].style.display="none"
		maps[1].style.display="block"
		tittles[0].style.color="#284ecd";
		tittles[1].style.color="#373737";
		lines[0].style.display="none";
		lines[1].style.display="block";
	}
}



var VideoSlider = function(){

	var sliderContainer;

	var init = function () {
		sliderContainer = document.getElementById('video-slider-container');

	}

	this.next = function(){

		list(function(container){
			var elements = container.find('.video-slider-item');
			var first = $(elements[0]).clone();
			$(elements[0]).remove();
			container.append(first);
		});
	}

	this.prev = function(){
		list(function(container){
			var elements = container.find('.video-slider-item');
			var last = $(elements.last()).clone();
			$(elements.last()).remove();
			container.prepend(last);
		});
	}

	var list = function(lister){
		var container = $(sliderContainer);
		container.animate({
			opacity: 0
		}, {
			done: function(){
				lister(container);
				container.animate({
					opacity: 1
				});
			}
		});
	}

	init();
}


window.onload = function(){
	var slider = new VideoSlider();
	
	$('.person-slider-buttons').find('.next').click(function(e){
		slider.next();
	});
	$('.person-slider-buttons').find('.pre').click(function(e){
		slider.prev();
	});

}