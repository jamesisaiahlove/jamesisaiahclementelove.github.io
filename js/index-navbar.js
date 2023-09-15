// Get a reference to the navbar element
const navbar = document.querySelector('.part-one-one');

// Define the scroll threshold (where you want to change the background color)
const scrollThreshold = 500; // Adjust this value as needed

// Listen for scroll events
window.addEventListener('scroll', () => {
  // Check the scroll position
  if (window.scrollY > scrollThreshold) {
    // Add a CSS class to change the background color
    navbar.classList.add('navbar-colored'); // Update 'navbar-colored' to your desired CSS class
  } else {
    // Remove the CSS class if the scroll position is less than the threshold
    navbar.classList.remove('navbar-colored');
  }
});