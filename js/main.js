// custom scripts

var photoArray = [
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Jobs.png",
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Morita.png", 
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Marriot.png", 
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Prichard.png",
"http://localhost/test/wordpress/wp-content/uploads/2017/02/Yaccoca.png",
];


var i = 0;

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

