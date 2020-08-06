'use strict';

// フラッシュメッセージ
(function() {
  $(function(){
      $('.flash_message').fadeOut(3000);
  });

})();

function change() {
    let target = document.getElement('target');
    if (target.style.display === "none") {
        target.style.display = "block";
    } else {
        target.style.display = "none";
    }
}