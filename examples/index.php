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
    <link rel="stylesheet" href="../assets/css/accordion.css">
    <link rel="stylesheet" href="../assets/css/tooltip.css">
    <link rel="stylesheet" href="../assets/css/table.css">
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>

    <div class="ui-table-wrapper">

        <table class="ui-table ui-table-compact ui-table-bordered">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>

                <tr>
                    <td>1</td>
                    <td>PHP Basics</td>
                    <td>
                        <span class="ui-badge ui-badge-success">
                            Published
                        </span>
                    </td>
                    <td>
                        <button class="ui-button ui-button-sm">
                            Edit
                        </button>
                    </td>
                </tr>

                <tr>
                    <td>2</td>
                    <td>Laravel Basics</td>
                    <td>
                        <span class="ui-badge ui-badge-warning">
                            Draft
                        </span>
                    </td>
                    <td>
                        <button class="ui-button ui-button-sm">
                            Edit
                        </button>
                    </td>
                </tr>

            </tbody>

        </table>

    </div>

    <script src="../assets/js/modal.js"></script>
    <script src="../assets/js/dropdown.js"></script>
    <script src="../assets/js/toast.js"></script>
    <script src="../assets/js/tabs.js"></script>
</body>

</html>