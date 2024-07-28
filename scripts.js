document.addEventListener('DOMContentLoaded', function () {
  const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
          if (entry.isIntersecting) {
              entry.target.classList.add('visible');
          } else {
              entry.target.classList.remove('visible');
          }
      });
  });

 // Sélectionner tous les éléments avec la classe 'story__titre'
  const targets = document.querySelectorAll('.story__titre');

  // Observer chaque cible individuellement
  targets.forEach(target => {
      observer.observe(target);
  });
});




  // <!-- Swiper JS -->
  // <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  var swiper = new Swiper(".mySwiper", {
    // effect: "coverflow", 
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop:true,// ajou du défilement infini
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });


  // effet nuage scroll--------------


  document.addEventListener('DOMContentLoaded', function () {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        } else {
          entry.target.classList.remove('visible');
        }
      });
    });
  
    const target = document.querySelector('.story #place h3');
    
    if (target) {
      observer.observe(target);
    }
  });


  // effet paralax 

  document.addEventListener('scroll', function() {
    const scrolled = window.scrollY;
    const logo = document.querySelector('img.logo');
  
    // Ajuster la position de l'image logo avec un léger décalage pour l'effet de retour
    logo.style.transform = `translateY(${scrolled * 1}px)`;
  
    // Ajouter une transition pour un retour en douceur uniquement lorsque l'utilisateur scroll
    if (scrolled > 0) {
      logo.style.transition = 'transform 100ms ease-out';
    } else {
      logo.style.transition = 'none';
    }
  
    // Activer l'animation de flottement lorsque l'utilisateur ne scroll pas du tout
    if (scrolled === 0) {
      logo.style.animation = 'float 1.5s ease-in-out infinite';
    } else {
      // Désactiver l'animation lorsque l'utilisateur scroll
      logo.style.animation = 'none';
    }
  });
  
  // js menus----------------------------------------------------------
 
  const links = document.querySelectorAll("nav li");

  icons.addEventListener("click", () => {
    nav.classList.toggle("active");
  });
  
  links.forEach((link) => {
    link.addEventListener("click", () => {
      nav.classList.remove("active");
    });
  });