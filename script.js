document.addEventListener("DOMContentLoaded", function() {
    const hamburger = document.querySelector(".hamburger");
    const slideInMenu = document.querySelector(".slide-in-menu");
    const menuItems = document.querySelectorAll(".slide-in-menu-item a");
    const body = document.querySelector("body");

    // Hamburger lines
    const line1 = document.getElementById("hamburger-line-1");
    const line2 = document.getElementById("hamburger-line-2");
    const line3 = document.getElementById("hamburger-line-3");

    // Toggle menu function
    function toggleMenu() {
        slideInMenu.classList.toggle("open");
        body.classList.toggle("no-scroll");
        
        if (slideInMenu.classList.contains("open")) {
            line1.style.transform = "rotate(45deg) translate(5px, 5px)";
            line2.style.opacity = "0";
            line3.style.transform = "rotate(-45deg) translate(5px, -5px)";
        } else {
            line1.style.transform = "rotate(0) translate(0, 0)";
            line2.style.opacity = "1";
            line3.style.transform = "rotate(0) translate(0, 0)";
        }
    }

    // Open/Close menu when clicking the hamburger
    hamburger.addEventListener("click", toggleMenu);

    // Close menu when clicking a menu item
    menuItems.forEach(item => {
        item.addEventListener("click", () => {
            slideInMenu.classList.remove("open");
            body.classList.remove("no-scroll");
            line1.style.transform = "rotate(0) translate(0, 0)";
            line2.style.opacity = "1";
            line3.style.transform = "rotate(0) translate(0, 0)";
        });
    });

    // Close menu when clicking outside of it
    document.addEventListener("click", (event) => {
        if (!hamburger.contains(event.target) && !slideInMenu.contains(event.target)) {
            slideInMenu.classList.remove("open");
            body.classList.remove("no-scroll");
            line1.style.transform = "rotate(0) translate(0, 0)";
            line2.style.opacity = "1";
            line3.style.transform = "rotate(0) translate(0, 0)";
        }
    });
});

// CSS to accompany the JavaScript
const style = document.createElement("style");
style.innerHTML = `
    .slide-in-menu {
        position: fixed;
        top: 0;
        left: -100%;
        width: 100vw;
        height: 100vh;
        background: var(--charcoal);
        display: flex;
        justify-content: center;
        align-items: center;
        transition: left 0.3s ease-in-out;
    }
    .slide-in-menu.open {
        left: 0;
    }
    .no-scroll {
        overflow: hidden;
    }
    .hamburger-lines {
        transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
    }
`;
document.head.appendChild(style);
