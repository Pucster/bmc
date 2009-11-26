/*** SET BUTTON'S FOLDER HERE ***/
var buttonFolder = "images/";

/*** SET BUTTONS' FILENAMES HERE ***/
upSources = new Array("news_up.png","about_up.png","members_up.png","meetings_up.png","various_up.png","forum_up.png","album_up.png");

overSources = new Array("news_over.png","about_over.png","members_over.png","meetings_over.png","various_over.png","forum_over.png","album_over.png");


//*** NO MORE SETTINGS BEYOND THIS POINT ***//
totalButtons = upSources.length;



//*** MAIN BUTTONS FUNCTIONS ***//
// PRELOAD MAIN MENU BUTTON IMAGES
function preload() {
	for ( x=0; x<totalButtons; x++ ) {
		buttonUp = new Image();
		buttonUp.src = buttonFolder + upSources[x];
		buttonOver = new Image();
		buttonOver.src = buttonFolder + overSources[x];
	}
}

// SET MOUSEOVER BUTTON
function setOverImg(But, ID) {
	document.getElementById('button' + But + ID).src = buttonFolder + overSources[But-1];
}

// SET MOUSEOUT BUTTON
function setOutImg(But, ID) {
	document.getElementById('button' + But + ID).src = buttonFolder + upSources[But-1];
}


//preload();
