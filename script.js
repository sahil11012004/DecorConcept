// SELECT ALL SLIDES
let slides = document.querySelectorAll(".image-slide");
let currentIndex = 0; // Start with the first image

// FUNCTION TO SHOW A SPECIFIC SLIDE
function showSlide(index) {
  slides.forEach((slide, i) => {
    slide.classList.remove("active"); // Hide all slides
    if(i === index) slide.classList.add("active"); // Show current slide
  });
}

// INITIAL DISPLAY
showSlide(currentIndex);

// AUTOMATIC ROTATION
setInterval(() => {
  currentIndex = (currentIndex + 1) % slides.length; // Loop back to first image
  showSlide(currentIndex);
}, 3000); // Change slide every 3 seconds
