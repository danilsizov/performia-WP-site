// custom scripts

var photoArray = [
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Jobs.png",
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Morita.png", 
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Marriot.png", 
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Prichard.png",
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Yaccoca.png",
];


var i = 0;
var j = 3;

var next = function(operation){
	var quoteArray = [document.getElementById('quote0'),document.getElementById('quote1'),document.getElementById('quote2'),document.getElementById('quote3'),document.getElementById('quote4')];
	var nameArray =  [document.getElementById('name0'),document.getElementById('name1'),document.getElementById('name2'),document.getElementById('name3'),document.getElementById('name4')];
	var positionArray =  [document.getElementById('position0'),document.getElementById('position1'),document.getElementById('position2'),document.getElementById('position3'),document.getElementById('position4')];
	var personPhoto = document.getElementById('person-photo');
	personPhoto.style.transition = '0.4s';
	quoteArray[i].style.transition = '0.4s';
	nameArray[i].style.transition = '0.4s';
	positionArray[i].style.transition = '0.4s';
	personPhoto.style.backgroundPosition = '150% 100%';
	quoteArray[i].style.opacity = '0';
	nameArray[i].style.opacity = '0';
	positionArray[i].style.opacity = '0';
	setTimeout(noneFunc, 500);
	
	function noneFunc(){
		quoteArray[i].style.display = 'none';
		nameArray[i].style.display = 'none';
		positionArray[i].style.display = 'none';
		if(i+operation>4){
			i=0;
		}else if(i+operation<0){
			i=4;
		} else {
			i=i+operation;
		}
		personPhoto.style.transition = '0s';
		personPhoto.style.backgroundImage = 'url(' + photoArray[i] + ')';	
		personPhoto.style.transition = '0.4s';
		personPhoto.style.backgroundPosition = '85% 100%';
		quoteArray[i].style.display = 'block';
		nameArray[i].style.display = 'block';
		positionArray[i].style.display = 'block';
		quoteArray[i].style.opacity = '1';
		nameArray[i].style.opacity = '1';
		positionArray[i].style.opacity = '1';
	}

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

