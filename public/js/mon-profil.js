$(document).ready(function () {
   
    wheelzoom(document.querySelectorAll('img'), {
        maxZoom: 2,
        zoom: 0.05
    }); 
 
    document.querySelector('#plage').dispatchEvent(new CustomEvent('wheelzoom.reset'));
 
    document.querySelector('#plage').dispatchEvent(new CustomEvent('wheelzoom.destroy'));
  
});
