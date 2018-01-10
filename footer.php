<footer id="p-footer"> <!-- #p-footer -->
  <section class="contact" data-aos="fade-up">
   <div class="container">
    <h3>CONTACT</h3>
    <span>お問い合わせ</span>
    <p>XiMの各種事業と複合的なトータルサービス、コンサルティング各種のご依頼やお見積もりは、お電話またはお問い合わせフォーム、オンラインルームからご連絡ください。</p>
    <a href="" class="btn primary" data-aos="zoom-in-up">お問い合わせフォーム</a>
    <a href="" class="btn secondary" data-aos="zoom-in-up">オンラインルーム</a>
   </div>
  </section>
  <section class="copyright">
    <figure class="logo-footer">
     <img src="images/common/logo.png" alt="" />
     <a href="https://www.xim.co.jp">https://www.xim.co.jp</a>
    </figure>
    <p class="copy">Copyright © XiM inc All Rights Reserved.</p>
  </section>
</footer> <!-- // #p-footer -->

</div> <!-- // #p-wrap -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.page-scroller.js" charset="utf-8"></script>
<script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script type="text/javascript">
 AOS.init();

 //offset() measures how far down the sticky element is from the top of the window
 var stickyTop = $("#p-banner").offset().top;

 //whenever the user scrolls, measure how far we have scrolled
 $(window).scroll(function() {
  var windowTop = $(window).scrollTop();

  //check to see if we have scrolled past the original location of the sticky element
  if (windowTop > stickyTop) {

   //if so, change the sticky element to fised positioning
   $("#s-header").addClass("stuck");
  } else {
  $("#s-header").removeClass("stuck");
  }
 });

</script>

<script type="text/javascript">
$(document).ready(function(){
  $('.slider-single').slick({
   slidesToShow: 1,
   slidesToScroll: 1,
   arrows: true,
   fade: false,
   adaptiveHeight: true,
   infinite: false,
 useTransform: true,
   speed: 400,
   cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
 });

 $('.slider-nav')
   .on('init', function(event, slick) {
     $('.slider-nav .slick-slide.slick-current').addClass('is-active');
   })
   .slick({
     slidesToShow: 7,
     slidesToScroll: 7,
     dots: false,
     focusOnSelect: false,
     infinite: false,
     responsive: [{
       breakpoint: 1024,
       settings: {
         slidesToShow: 5,
         slidesToScroll: 5,
       }
     }, {
       breakpoint: 640,
       settings: {
         slidesToShow: 4,
         slidesToScroll: 4,
     }
     }, {
       breakpoint: 420,
       settings: {
         slidesToShow: 3,
         slidesToScroll: 3,
   }
     }]
   });

 $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
   $('.slider-nav').slick('slickGoTo', currentSlide);
   var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
   $('.slider-nav .slick-slide.is-active').removeClass('is-active');
   $(currrentNavSlideElem).addClass('is-active');
 });

 $('.slider-nav').on('click', '.slick-slide', function(event) {
   event.preventDefault();
   var goToSingleSlide = $(this).data('slick-index');

   $('.slider-single').slick('slickGoTo', goToSingleSlide);
 });
 });
</script>

</body>
</html>
