<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>PHP UI</title>

    <link rel="stylesheet" href="../assets/css/ui.css">
    <link rel="stylesheet" href="../assets/css/button.css">
    <link rel="stylesheet" href="../assets/css/card.css">
    <link rel="stylesheet" href="../assets/css/alert.css">
    <link rel="stylesheet" href="../assets/css/badge.css">
    <link rel="stylesheet" href="../assets/css/input.css">
    <link rel="stylesheet" href="../assets/css/textarea.css">
    <link rel="stylesheet" href="../assets/css/select.css">
    <link rel="stylesheet" href="../assets/css/checkbox.css">
    <link rel="stylesheet" href="../assets/css/radio.css">
    <link rel="stylesheet" href="../assets/css/switch.css">
    <link rel="stylesheet" href="../assets/css/form.css">
    <link rel="stylesheet" href="../assets/css/modal.css">
    <link rel="stylesheet" href="../assets/css/dropdown.css">
    <link rel="stylesheet" href="../assets/css/toast.css">
    <link rel="stylesheet" href="../assets/css/tabs.css">
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>

    <div class="ui-tabs">

        <div
            class="ui-tabs-list"
            role="tablist">

            <button
                type="button"
                class="ui-tab ui-tab-active"
                data-ui-tab="general-panel"
                role="tab"
                aria-selected="true">
                General
            </button>

            <button
                type="button"
                class="ui-tab"
                data-ui-tab="questions-panel"
                role="tab"
                aria-selected="false">
                Questions
            </button>

            <button
                type="button"
                class="ui-tab"
                data-ui-tab="participants-panel"
                role="tab"
                aria-selected="false">
                Participants
            </button>

        </div>

        <div
            id="general-panel"
            class="ui-tab-panel"
            role="tabpanel">
            <h3>General</h3>
            <p>Exam title, duration and status.</p>
        </div>

        <div
            id="questions-panel"
            class="ui-tab-panel"
            role="tabpanel"
            hidden>
            <h3>Questions</h3>
            <p>Manage exam questions.</p>
        </div>

        <div
            id="participants-panel"
            class="ui-tab-panel"
            role="tabpanel"
            hidden>
            <h3>Participants</h3>
            <p>Manage exam participants.</p>
        </div>

    </div>

    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/dropdown.js"></script>
    <script src="../assets/js/toast.js"></script>
    <script src="../assets/js/tabs.js"></script>
</body>

</html>