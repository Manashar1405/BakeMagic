document.addEventListener("DOMContentLoaded", () => {
  // Select all sweet items (links inside .item)
  const links = document.querySelectorAll(".item a");

  links.forEach(link => {
    const img = link.querySelector(".menu-img");

    link.addEventListener("click", event => {
      event.preventDefault(); // prevent immediate navigation

      // Add rotation effect if not already applied
      if (!img.classList.contains("rotate")) {
        img.classList.add("rotate");

        // Wait for the rotation animation to finish before redirecting
        setTimeout(() => {
          window.location.href = link.href;
        }, 2500); // matches your CSS rotation duration
      }
    });
  });

  // Smooth scroll for "Explore" button
  const exploreBtn = document.querySelector(".explore-btn");
  if (exploreBtn) {
    exploreBtn.addEventListener("click", () => {
      const menuSection = document.querySelector(".menu");
      menuSection.scrollIntoView({ behavior: "smooth" });
    });
  }
});
