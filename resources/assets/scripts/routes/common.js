import '@fortawesome/fontawesome-free/js/all.js';
import lozad from 'lozad';

export default {
  init() {
    $('.navbar .dropdown > a').click(function() {
        location.href = this.href;
    });

    $('.page-header h1:contains("USB Category: ")').each(function(){
        $(this).html($(this).html().split('USB Category: ').join(''));
    });

    $('.page-header h1:contains("Mobile Category: ")').each(function(){
        $(this).html($(this).html().split('Mobile Category: ').join(''));
    });
    
    $( '.carousel-item' ).first().addClass('active');

    const observer = lozad();
    observer.observe();
  },
  finalize() {

  },
};
