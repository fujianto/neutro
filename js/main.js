// MasonryJS
 
// Masonry options
 
jQuery(document).ready(function($) {

  function masonry() {
     //masonry
    var $container = jQuery('#container');
    var container = document.querySelector('#container');

    imagesLoaded( container, function() {
      var msnry = new Masonry( container, {
        itemSelector: '.content .item',
        columnWidth: '.content .item'
      });
    });
  };
  
  masonry();
    
});