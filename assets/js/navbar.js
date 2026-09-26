document.addEventListener("click", function (event) {
    const toggle = event.target.closest("[data-ui-navbar-toggle]");

    if (!toggle) {
        return;
    }

    const navbar = toggle.closest(".ui-navbar");

    if (!navbar) {
        return;
    }

    const nav = navbar.querySelector(".ui-navbar-nav");

    if (!nav) {
        return;
    }

    const isOpen = nav.classList.toggle("ui-navbar-nav-open");

    toggle.setAttribute("aria-expanded", String(isOpen));
});