let slideIndex = 0;
const slides = document.querySelectorAll(".slide");
const totalSlides = slides.length;

function showSlides() {
  slideIndex++;
  if (slideIndex >= totalSlides) {
    slideIndex = 0;
  }

  const offset = -slideIndex * 100;
  document.querySelector(".slider").style.transform = `translateX(${offset}%)`;

  setTimeout(showSlides, 3000); // Change image every 3 seconds
}

showSlides(); // Initial call to start the slideshow
