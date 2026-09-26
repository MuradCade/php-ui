document.addEventListener("click", function (event) {
    const tab = event.target.closest("[data-ui-tab]");

    if (!tab) {
        return;
    }

    const tabs = tab.closest(".ui-tabs");

    if (!tabs) {
        return;
    }

    const targetId = tab.dataset.uiTab;
    const targetPanel = tabs.querySelector(`#${targetId}`);

    if (!targetPanel) {
        return;
    }

    const allTabs = tabs.querySelectorAll("[data-ui-tab]");
    const allPanels = tabs.querySelectorAll(".ui-tab-panel");

    allTabs.forEach(function (item) {
        item.classList.remove("ui-tab-active");
        item.setAttribute("aria-selected", "false");
    });

    allPanels.forEach(function (panel) {
        panel.hidden = true;
    });

    tab.classList.add("ui-tab-active");
    tab.setAttribute("aria-selected", "true");

    targetPanel.hidden = false;
});