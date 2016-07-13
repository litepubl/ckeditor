(function( $, window, document){
window.CKEDITOR_BASEPATH = '/plugins/ckeditor/ckeditor/';

  $(function() {
$.load_script(ltoptions.files + "/plugins/ckeditor/ckeditor/ckeditor.js", function() {
$.load_script(ltoptions.files + "/plugins/ckeditor/ckeditor/adapters/jquery.js", function() {
  $( 'textarea' ).ckeditor();
});
});
});
})( jQuery, window, document );