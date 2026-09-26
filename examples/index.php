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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>
    <div>
        <label class="ui-checkbox-wrapper">
            <input
                class="ui-checkbox"
                type="checkbox"
                name="settings[]"
                value="shuffle">
            <span class="ui-checkbox-label">
                Shuffle questions
            </span>
        </label>
    </div>

    <div>
        <label class="ui-checkbox-wrapper">
            <input
                class="ui-checkbox"
                type="checkbox"
                name="settings[]"
                value="timer"
                checked>
            <span class="ui-checkbox-label">
                Enable exam timer
            </span>
        </label>
    </div>

    <div>
        <label class="ui-checkbox-wrapper">
            <input
                class="ui-checkbox"
                type="checkbox"
                name="settings[]"
                value="results"
                disabled>
            <span class="ui-checkbox-label">
                Show results immediately
            </span>
        </label>
    </div>

</body>

</html>