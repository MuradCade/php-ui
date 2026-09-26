document.addEventListener("click", function (event) {
    const openButton = event.target.closest("[data-ui-modal-open]");

    if (openButton) {
        const modalId = openButton.dataset.uiModalOpen;
        const modal = document.getElementById(modalId);

        if (modal instanceof HTMLDialogElement) {
            modal.showModal();
        }
    }

    const closeButton = event.target.closest("[data-ui-modal-close]");

    if (closeButton) {
        const modal = closeButton.closest("dialog");

        if (modal instanceof HTMLDialogElement) {
            modal.close();
        }
    }
});