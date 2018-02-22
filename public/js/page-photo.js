$(document).ready(function() {


    
  window.sr = ScrollReveal({ duration: 1000 });
  sr.reveal(".item", 200);


  $("#gallery-container").sGallery({
    fullScreenEnabled: true
    
  }); 

});
//JS en phase de test de plugins