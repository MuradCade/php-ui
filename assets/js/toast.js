function uiToast(message, type = "info", title = "") {
    let container = document.querySelector(".ui-toast-container");

    if (!container) {
        container = document.createElement("div");
        container.className = "ui-toast-container";

        document.body.appendChild(container);
    }

    const toast = document.createElement("div");

    toast.className = `ui-toast ui-toast-${type}`;

    toast.setAttribute("role", "status");

    toast.innerHTML = `
        <div class="ui-toast-content">
            ${title ? `<p class="ui-toast-title">${title}</p>` : ""}
            <p class="ui-toast-message">${message}</p>
        </div>

        <button
            type="button"
            class="ui-toast-close"
            aria-label="Close notification"
        >
            &times;
        </button>
    `;

    container.appendChild(toast);

    const closeButton = toast.querySelector(".ui-toast-close");

    closeButton.addEventListener("click", function () {
        toast.remove();
    });

    setTimeout(function () {
        toast.remove();
    }, 4000);
}