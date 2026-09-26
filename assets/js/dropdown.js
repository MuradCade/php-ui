document.addEventListener("click", function (event) {
    const toggle = event.target.closest("[data-ui-dropdown-toggle]");

    // Close menus when clicking outside
    if (!toggle) {
        document.querySelectorAll(".ui-dropdown-menu").forEach(menu => {
            menu.hidden = true;
        });

        document.querySelectorAll("[data-ui-dropdown-toggle]").forEach(button => {
            button.setAttribute("aria-expanded", "false");
        });

        return;
    }

    const dropdown = toggle.closest(".ui-dropdown");
    const menu = dropdown?.querySelector(".ui-dropdown-menu");

    if (!menu) return;

    const shouldOpen = menu.hidden;

    // Close other menus
    document.querySelectorAll(".ui-dropdown-menu").forEach(item => {
        item.hidden = true;
    });

    document.querySelectorAll("[data-ui-dropdown-toggle]").forEach(button => {
        button.setAttribute("aria-expanded", "false");
    });

    // Toggle the selected menu
    menu.hidden = !shouldOpen;
    toggle.setAttribute("aria-expanded", String(shouldOpen));
});

// Close menus with Escape
document.addEventListener("keydown", function (event) {
    if (event.key !== "Escape") return;

    document.querySelectorAll(".ui-dropdown-menu").forEach(menu => {
        menu.hidden = true;
    });

    document.querySelectorAll("[data-ui-dropdown-toggle]").forEach(button => {
        button.setAttribute("aria-expanded", "false");
    });
});