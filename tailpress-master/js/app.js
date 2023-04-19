(() => {
  // resources/js/app.js
  window.addEventListener("load", function() {
    let main_navigation = document.querySelector("#primary-menu");
    document.querySelector("#primary-menu-toggle").addEventListener("click", function(e) {
      e.preventDefault();
      main_navigation.classList.toggle("hidden");
    });
  });
  (function($){
    $('.dropdown-wrapper .drop-down').on('click', function(){
        //check if other dropdown is open
        if($(this).hasClass('show')){
          $(this).removeClass('show');
        }else{
          $('.dropdown-wrapper .drop-down').removeClass('show');
          $(this).addClass('show');
        }
    })
})(jQuery)
})();
