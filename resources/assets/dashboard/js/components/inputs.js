require('../plugin/tinymce.min.js');

/*
 |--------------------------------------------------------------------------
 | Document Ready Function
 |--------------------------------------------------------------------------
 */
$(document).ready(function() {

    // WYSIWYG - TinyMCE
    tinymce.baseURL = '/js/tinymce';
    tinymce.init({
        selector: 'textarea.wysiwyg',  // change this value according to your HTML
        plugins : 'link,image,paste,code,table, paste, lists',
        toolbar: "insertfile undo redo | styleselect | bold italic | blockquote | numlist bullist | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
        image_advtab: true,
        images_upload_url: '/dashboard/uploads/images?_token=' + $('meta[name="_token"]').attr('content'),
        automatic_uploads: false,
        images_upload_credentials: true
    });

});
