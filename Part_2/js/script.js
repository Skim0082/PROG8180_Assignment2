$(document).ready(function(){
        
    var $listNode = $('#image_list');
    var $captionNode = $("#image_caption");
    var $imageNode = $("#image");
    var links = $listNode.find('img');

    var imageCache = [];
    var imageCounter = 0; 
    
    var imgAryLength = 16;
    var aryIdx = [];
    var aryImg = [];
    
    var flipCount = 0;
    var flipIndex = [];
    
    var matchCount = 0;

    //random index of image cell
    while(aryIdx.length < imgAryLength){
        var rm = Math.floor(imgAryLength * Math.random());
        var found = false;
        for(var i = 0 ; i < aryIdx.length ; i++){
            if(aryIdx[i] == rm)
            {
                found = true;
                break;
            }
        }
        if(!found){
            aryIdx[aryIdx.length] =rm;
        }
    }
    //random of image file name
    while(aryImg.length < imgAryLength / 2){
        var rm = Math.floor(imgAryLength * Math.random());
        var found = false;
        for(var i = 0 ; i < aryImg.length ; i++){
            if(aryImg[i] == rm)
            {
                found = true;
                break;
            }
        }
        if(!found){
            aryImg[aryImg.length] =rm;
        }
    }    

    //show the images
    var rx = 0;
    for(var i = 0; i < imgAryLength ; i++){
        $('#image_list img')[aryIdx[i]].src = "img/list" + (aryImg[i%(imgAryLength/2)] + 1).toString() + ".JPG";
        $('#image_list img')[aryIdx[i]].alt = "Image " + (aryImg[i%(imgAryLength/2)] + 1).toString();
    }

    $captionNode.html("Are you Ready?");
    $imageNode.attr('src', "img/white.JPG");	
    $imageNode.attr('alt', "white");

	//show the random 16 images
    for(var i = 0; i < links.length ; i++){        
        var linkNode = links[i];
        var image = new Image();
        image.src = $(linkNode).attr('src');
        image.alt = $(linkNode).attr('alt');       
        imageCache.push(image);    

        $(linkNode).on('click',function(e){
            e.preventDefault();

            if(flipCount <= 1 && matchCount < 8){

                var index = $(this).parent().index();

                $(this).attr('src',imageCache[index].src);
                $(this).attr('alt',imageCache[index].alt);

                imageCounter = index;

                if(flipCount == 1){

                    flipIndex[flipCount] = index;
                    flipCount = 2; 

                    if(imageCache[flipIndex[0]].alt == imageCache[flipIndex[1]].alt){
                        flipCount = 0;

                        if(++matchCount == 8){
                            $captionNode.html("Congratulation!!!");
							$imageNode.attr('src', "img/winner.JPG");	
							$imageNode.attr('alt', "win");							
                        }
                    }else{
                        setTimeout(flipImage, 300);     
                    }                      
                }else{
                    flipIndex[flipCount] = index;
                    flipCount = 1;
                }

                //swapImage(index);
            }
        });	
    }  

    setTimeout(changeBlankImg, 2000);
    
    function flipImage(){
        
        for(var i = 0 ; i < flipIndex.length ; i++){
            $('#image_list img')[flipIndex[i]].src = "img/blank.JPG";
            $('#image_list img')[flipIndex[i]].alt = "Image Blank";             
        }  
        flipCount = 0;
    }
    
	//After 2seconds hide the all images with changing blank image
    function changeBlankImg(){

        for(var i = 0; i < imgAryLength ; i++){
            $('#image_list img')[i].src = "img/blank.JPG";
            $('#image_list img')[i].alt = "Image Blank";
			$captionNode.html("Let's Start!");
        }          
    }
    
    $('#start').on('click',function(e){
        e.preventDefault();
        location.reload();
    });
    
});