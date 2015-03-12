/**
* Remixer 3: Sarah Householder (http://www.sarahhouseholder.com)
* Remixer 2: @hotappsfactory (http://www.hotappsfactory.com)
* Remixer 1: @herkulano (http://www.herkulano.com)
* Thanks to: Niels Bosma (niels.bosma@motorola.com)
*/

var folder = Folder.selectDialog();

/**
* To set the target directory and get no prompt while
* running the script, replace
*
*     var folder = Folder.selectDialog();
*
* with
*
*	  var folder = new Folder("/absolute/path/to/target/directory");
*
*/

var document = app.activeDocument;
var suffix;

if (document && folder) {
	suffix = "";

/**
* To be prompted to add additional text to the end of each filename,
* replace
*
*     suffix = "";
*
* with
*
*	  suffix = prompt("Enter additional text to add to filenames.", "") || "";
*
*/

}

if (document && folder) {
	var documentName = document.name.replace(".ai","");
	
	saveToRes(100, documentName, "", false);
	saveToRes(200, documentName, "@2x", false);	
}

/**
* scaleTo: scaling factor (in percent)
* nameOfAiFile: the active .ai file on which the script is being run
* densitySuffix: the string added to the output filenames denoting res
* lowerCase: whether or not the output filenames should be lowercase
*
*/

function saveToRes(scaleTo, nameOfAiFile, densitySuffix, lowerCase) {
	var i, ab, file, options;
		
	var myFolder = new Folder(folder.absoluteURI);
	if(!myFolder.exists) myFolder.create();
	
	for (i = document.artboards.length - 1; i >= 0; i--) {
		document.artboards.setActiveArtboardIndex(i);
		ab = document.artboards[i];
		
		var fileName = nameOfAiFile + "-" + ab.name + suffix;

/**
* If you don't want the artboard name in your exported filename, replace
*
*     var fileName = nameOfAiFile + ab.name + suffix;
* 
* with
*
*     var fileName = nameOfAiFile + suffix; 
*
* WARNING: If you have more than one artboard in your .ai file,
* this change will cause the script to overwrite all but the
* last artboard and ONLY ONE ARTBOARD will be exported.
*
*/		
		
		if(lowerCase){
			var fileNameLowerCase = "";
			
			for (var j = 0; j < fileName.length; j++) {
				if(isUpperCase(fileName.charAt(j))){
					if(j > 0){
						fileNameLowerCase += "_";
					}
					 fileNameLowerCase += fileName.charAt(j).toLowerCase();
				}
				else{
					fileNameLowerCase += fileName.charAt(j);
				}
			}
			fileName = fileNameLowerCase;
		}
	
		file = new File(myFolder.fsName + "/" + fileName + densitySuffix + ".png");
		
		options = new ExportOptionsPNG24();
		options.antiAliasing = true;
		options.transparency = true;
		options.artBoardClipping = true;
		options.verticalScale = scaleTo;
		options.horizontalScale = scaleTo;
		
		document.exportFile(file, ExportType.PNG24, options);
	}
}

function isUpperCase(myString) { 
      return (myString == myString.toUpperCase()); 
} 
