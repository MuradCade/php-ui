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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>

    <button
        class="ui-button ui-button-success"
        onclick="uiToast('Exam created successfully.', 'success', 'Success')">
        Success
    </button>

    <button
        class="ui-button ui-button-danger"
        onclick="uiToast('Unable to create exam.', 'danger', 'Error')">
        Danger
    </button>

    <button
        class="ui-button ui-button-primary"
        onclick="uiToast('Your exam is being processed.', 'info', 'Information')">
        Info
    </button>

    <button
        class="ui-button ui-button-secondary"
        onclick="uiToast('Please check your information.', 'warning', 'Warning')">
        Warning
    </button>

    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/dropdown.js"></script>
    <script src="../assets/js/toast.js"></script>
</body>

</html>