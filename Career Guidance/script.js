let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
    loop:true,
    pagination: {
      el: ".swiper-pagination",
      type: "progressbar",
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  // JavaScript to highlight active link and scroll to the section correctly

document.querySelectorAll('.navbar a').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();

      const headerHeight = document.querySelector('.header').offsetHeight; // Get the height of the fixed header
      const targetId = this.getAttribute('href'); // Get the target section ID
      const targetSection = document.querySelector(targetId); // Find the target section
      
      // Smooth scroll to the section with header offset
      window.scrollTo({
          top: targetSection.offsetTop - headerHeight, // Adjust scroll position to account for fixed header
          behavior: 'smooth' // Enables smooth scrolling
      });
  });
});

window.addEventListener('scroll', () => {
  const sections = document.querySelectorAll('section');
  const navLinks = document.querySelectorAll('.navbar a');

  let currentSection = '';

  sections.forEach(section => {
      const sectionTop = section.offsetTop - 150; // Adjust to account for fixed header height
      const sectionHeight = section.clientHeight;

      if (window.pageYOffset >= sectionTop && window.pageYOffset < sectionTop + sectionHeight) {
          currentSection = section.getAttribute('id');
      }
  });

  navLinks.forEach(link => {
      link.classList.remove('active'); // Remove active class from all links
      if (link.getAttribute('href') === `#${currentSection}`) {
          link.classList.add('active'); // Add active class to the current section link
      }
  });
});