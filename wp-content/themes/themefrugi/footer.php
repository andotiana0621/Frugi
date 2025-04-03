<footer>
    <p>&copy; <?php echo date('Y'); ?> - Mon site WordPress</p>
  </footer>

  <?php wp_footer(); ?>
<script type="text/javascript">
var swiper = new Swiper(".swiper", {
  effect: "coverflow",
  grabCursor: true,
  centeredSlides: true,
  slidesPerView: "auto",
  autoplay: false,
 // initialSlide: 3,
  coverflowEffect: {
    rotate: 0,
    stretch: 0,
    depth: 100,
    modifier: 2,
    slideShadows: true
  },
  spaceBetween: 50,
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  },
  navigation: {
    nextEl: ".swiper-button-prev",
    prevEl: ".swiper-button-next"
  }
});


</script>

</body>
</html>
