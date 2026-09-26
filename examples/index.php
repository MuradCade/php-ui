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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>
    <button
        class="ui-button ui-button-primary"
        data-ui-modal-open="exam-modal">
        Create Exam
    </button>

    <dialog class="ui-modal" id="exam-modal">

        <div class="ui-modal-header">
            <h2 class="ui-modal-title">Create Exam</h2>

            <button
                type="button"
                class="ui-modal-close"
                data-ui-modal-close
                aria-label="Close dialog">
                &times;
            </button>
        </div>

        <div class="ui-modal-body">
            <p>Enter the details of your new exam.</p>

            <label class="ui-label" for="modal-exam-title">
                Exam Title
            </label>

            <input
                class="ui-input"
                type="text"
                id="modal-exam-title"
                placeholder="Enter exam title">
        </div>

        <div class="ui-modal-footer">
            <button
                type="button"
                class="ui-button ui-button-secondary"
                data-ui-modal-close>
                Cancel
            </button>

            <button
                type="button"
                class="ui-button ui-button-primary">
                Save Exam
            </button>
        </div>

    </dialog>

    <script src="../assets/js/modal.js"></script>
</body>

</html>