function toggleMenu() {
    const navLinks = document.getElementById("navLinks");
    const toggleMenuBtn = document.getElementById("toggleMenuBtn");
    const toggleIcon = document.getElementById("toggleIcon");

    navLinks.classList.toggle("active");

    if(navLinks.classList.contains("active")) {
        toggleIcon.textContent = "close";
        toggleMenuBtn.setAttribute("title", "Hide Menu");
    } else {
        toggleIcon.textContent = "menu";
        toggleMenuBtn.setAttribute("title","Show Menu");
    }
}