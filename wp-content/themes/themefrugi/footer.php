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
// Fonction pour animer les compteurs
function animateCounters() {
    const counters = document.querySelectorAll('.counter');
    const speed = 200; // plus le nombre est bas, plus c’est rapide

    counters.forEach(counter => {
      const updateCount = () => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;

        const increment = Math.ceil(target / speed);

        if (count < target) {
          counter.innerText = count + increment;
          setTimeout(updateCount, 30);
        } else {
          counter.innerText = target;
        }
      };

      updateCount();
    });
  }

  // Détection de scroll avec IntersectionObserver
  const section = document.querySelector('.chiffres');

  let animated = false;

  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting && !animated) {
      animateCounters();
      animated = true;
    }
  }, { threshold: 0.5 });

  if (section) observer.observe(section);


</script>

</body>
</html>
