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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>

    <div>
        <div class="ui-dropdown">

            <button
                type="button"
                class="ui-button ui-button-secondary"
                data-ui-dropdown-toggle
                aria-expanded="false">
                Actions
            </button>

            <div class="ui-dropdown-menu" hidden>

                <a href="#" class="ui-dropdown-item">
                    View
                </a>

                <a href="#" class="ui-dropdown-item">
                    Edit
                </a>

                <div class="ui-dropdown-divider"></div>

                <button
                    type="button"
                    class="ui-dropdown-item ui-dropdown-item-danger">
                    Delete
                </button>

            </div>

        </div>
    </div>

    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/dropdown.js"></script>
</body>

</html>