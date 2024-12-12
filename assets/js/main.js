$(document).ready(function(){
  $(".btn-toggle").click(function(e) {
    e.preventDefault();
      $(".wrapper").toggleClass("toggled");
  });
	
  $(".table").DataTable();
});


// $.fn.filepond.registerPlugin(FilePondPluginImagePreview);

// $('.filepond').filepond({
// 	labelIdle: `Drag & Drop your picture or <span class="filepond--label-action">Browse</span>`,
//     imagePreviewHeight: 170,
//     imageCropAspectRatio: '1:1',
//     imageResizeTargetWidth: 200,
//     imageResizeTargetHeight: 200,
//     stylePanelLayout: 'compact circle',
//     styleLoadIndicatorPosition: 'center bottom',
//     styleProgressIndicatorPosition: 'right bottom',
//     styleButtonRemoveItemPosition: 'left bottom',
//     styleButtonProcessItemPosition: 'right bottom',
// });

$(document).ready(function(){
  $('.select').niceSelect();
});


var ckeditor = document.getElementById("product-desc");
var ckeditor2 = document.getElementById("product-specification");

CKEDITOR.replace(ckeditor,{
languange:'en-gb'
}); 
CKEDITOR.replace(ckeditor2,{
languange:'en-gb'
}); 

CKEDITOR.config.allowedContent = true;