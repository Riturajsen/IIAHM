document.addEventListener("DOMContentLoaded", function() {
  const testimonials = document.querySelectorAll(".testimonial");
  let index = 0;

  function showTestimonial() {
    testimonials.forEach(testimonial => testimonial.classList.remove("active"));
    testimonials[index].classList.add("active");
    index = (index + 1) % testimonials.length;
  }

  showTestimonial(); // Show the first testimonial immediately

  setInterval(showTestimonial, 5000); // Change testimonial every 5 seconds
});
