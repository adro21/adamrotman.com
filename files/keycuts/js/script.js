$('.key').click(function() {
    $(this).toggleClass("key-selected");

   $('.capture-btn').removeClass("disabled");
   
   $('.tooltip-holder').removeAttr("data-bs-toggle");
   $('.tooltip-holder').removeAttr("data-bs-original-title");

    html2canvas(document.querySelector("#capture"), {scale: window.devicePixelRatio = 1}).then(canvas => {
       var imageURI = canvas.toDataURL("image/png").replace("image/png", "image/octet-stream");
       $('.capture-btn').attr('href', imageURI);
   });
   
});

/* Init Bootstrap Tooltips */
var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
  return new bootstrap.Tooltip(tooltipTriggerEl)
})