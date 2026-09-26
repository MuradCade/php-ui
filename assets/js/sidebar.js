document.addEventListener("click", function (event) {
    const toggle = event.target.closest("[data-ui-sidebar-toggle]");

    if (toggle) {
        const sidebar = document.querySelector(".ui-sidebar");
        const overlay = document.querySelector(".ui-sidebar-overlay");

        if (!sidebar || !overlay) {
            return;
        }

        sidebar.classList.toggle("ui-sidebar-open");
        overlay.classList.toggle(
            "ui-sidebar-overlay-visible"
        );

        return;
    }

    const overlay = event.target.closest(
        "[data-ui-sidebar-overlay]"
    );

    if (overlay) {
        const sidebar = document.querySelector(".ui-sidebar");

        sidebar?.classList.remove("ui-sidebar-open");

        overlay.classList.remove(
            "ui-sidebar-overlay-visible"
        );
    }
});