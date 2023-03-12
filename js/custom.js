   // Hide projects for fading in if screensize is larger than 768px
  if (window.matchMedia("(min-width: 768px)").matches) {
    $(".project-zenlogin, .project-wave, .project-accountdock, .project-bq, .project-sanction, .project-luvly, .project-xplore" ).css({ opacity: 0});
      // Set Scroll Magic controller only on screens bigger than 768px  
      var controller = new ScrollMagic.Controller();
  } else {
    $(".project-zenlogin, .project-wave, .project-accountdock, .project-bq, .project-sanction, .project-luvly, .project-xplore" ).css({ opacity: 1});
  }


  // Hide Into
  var scene = new ScrollMagic.Scene({triggerElement: ".trigger1", duration: 500})
        .setTween(".intro-wrap", {opacity: "0"}) // the tween durtion can be omitted and defaults to 1
        // .addIndicators({name: "1 (duration: 500)"}) // add indicators (requires plugin)
        .addTo(controller);

  // Hide Stencil
  var scene = new ScrollMagic.Scene({triggerElement: ".hide-stencil", duration: 500, offset: -400})
        .setTween(".project-stencil", {opacity: "0"}) // the tween durtion can be omitted and defaults to 1
        // .addIndicators({name: "1 (duration: 500)"}) // add indicators (requires plugin)
        .addTo(controller);      

  // Wave Animation
  var tweenWave = TweenMax.to(".project-wave", 0.5, {repeat: 1, yoyo: true, opacity: 1});
  var scene = new ScrollMagic.Scene({triggerElement: ".project-wave", duration: '120%'})
          .setTween(tweenWave) 
          // .addIndicators({name: "2 (duration: 500)"})
          .addTo(controller); 

  // Zenlogin Animation
  var tweenWave = TweenMax.to(".project-zenlogin", 0.5, {repeat: 1, yoyo: true, opacity: 1});
  var scene = new ScrollMagic.Scene({triggerElement: ".project-zenlogin", duration: '120%'})
          .setTween(tweenWave) 
          // .addIndicators({name: "2 (duration: 500)"})
          .addTo(controller); 

  // AccountDock Animation
  var tweenWave = TweenMax.to(".project-accountdock", 0.5, {repeat: 1, yoyo: true, opacity: 1});
  var scene = new ScrollMagic.Scene({triggerElement: ".project-accountdock", duration: '120%'})
          .setTween(tweenWave) 
          // .addIndicators({name: "2 (duration: 500)"})
          .addTo(controller);           

   // BrainyQuote Animation
   var tweenBq = TweenMax.to(".project-bq", 0.5, {repeat: 1, yoyo: true, opacity: 1});       
   var scene = new ScrollMagic.Scene({triggerElement: ".project-bq", duration: '120%'})
          .setTween(tweenBq)
          // .addIndicators({name: "2 (duration: 500)"})
          .addTo(controller);  

   // Sanction Animation
   var tweenSanction = TweenMax.to(".project-sanction", 0.5, {repeat: 1, yoyo: true, opacity: 1});       
   var scene = new ScrollMagic.Scene({triggerElement: ".project-sanction", duration: '120%'})
          .setTween(tweenSanction)
          // .addIndicators({name: "2 (duration: 500)"})
          .addTo(controller);  

   // Sanction Animation
   var tweenSanction = TweenMax.to(".project-luvly", 0.5, {repeat: 1, yoyo: true, opacity: 1});       
   var scene = new ScrollMagic.Scene({triggerElement: ".project-luvly", duration: '120%'})
          .setTween(tweenSanction)
          // .addIndicators({name: "2 (duration: 500)"})
          .addTo(controller);        

    // Xplore Animation
   var tweenXplore = TweenMax.to(".project-xplore", 0.5, {repeat: 1, yoyo: true, opacity: 1});       
   var scene = new ScrollMagic.Scene({triggerElement: ".project-xplore", duration: '120%'})
          .setTween(tweenXplore)
          // .addIndicators({name: "2 (duration: 500)"})
          .addTo(controller);                                  

    // Disable Scoll Magic on screens smaller or equal than 768
    // controller.scrollPos(function () {
    //   if(window.innerWidth >= 768){
    //     return window.pageYOffset;
    //   } else {
    //     return 0;
    //   }
    // });


// Scroll projects link
$('.scroll-to').on('click', function (e) {
  e.preventDefault();

  $('html, body').animate({
    scrollTop: $($(this).attr('href')).offset().top
  }, 500, 'linear');
});
   
