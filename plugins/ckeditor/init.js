(function( $, window, document){
window.CKEDITOR_BASEPATH = '/plugins/ckeditor/';

  $(document).ready(function() {
$.load_script(ltoptions.files + "/plugins/ckeditor/ckeditor.js", function() {
$.load_script(ltoptions.files + "/plugins/ckeditor/adapters/jquery.js", function() {
  $( 'textarea' ).ckeditor();
});
});
});
})( jQuery, window, document );