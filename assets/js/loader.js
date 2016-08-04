
var loadPage = function(){
  var loader = document.getElementById('loader'),
      content = document.getElementsByClassName('page-wrapper')[0];

  setTimeout(function(){
      
      //set the content opacity to 1.
      content.style.opacity = 1;

  }, 200);
    
  setTimeout(function(){
      
      //set the loader opacity to 0.
      loader.style.opacity = 0;     
      //move the loader to the back so as not to affect the text select.
      loader.style.zIndex = -1;

  }, 1000);
}

window.onload = loadPage;

