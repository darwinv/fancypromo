<div style="display: none;">
 <div id="promo">
  <p>¡Hola Mundo!</p>
 </div>
</div>


<script type="text/javascript">
$(document).ready(function() {

  $("#promo").fancybox({
    maxWidth  : 800,
    maxHeight : 600,
    fitToView : false,
    width   : '70%',
    height    : '70%',
    autoSize  : false,
    closeClick  : false,
    openEffect  : 'none',
    closeEffect : 'none'
  });

$("#promo").fancybox().trigger('click');


});</script>