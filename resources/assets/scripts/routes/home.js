import Wow from 'wow.js';

export default {
  init() {
    const wow = new Wow();
    wow.init();
    // JavaScript to be fired on the home page

    $('.icon-bounce').hover(function() { 
        $(this).addClass('animated bounce'); 
    }, function() { 
        $(this).removeClass('animated bounce'); 
    });

  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS
  },
};
