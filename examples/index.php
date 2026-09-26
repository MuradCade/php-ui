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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>

    <div style="max-width: 400px;">

        <label class="ui-label" for="exam-status">
            Exam Status
        </label>

        <select class="ui-select ui-select-error" id="exam-status" name="status">
            <option value="">Select a status</option>
            <option value="published">Published</option>
            <option value="unpublished">Unpublished</option>
            <option value="disabled">Disabled</option>
        </select>

        <p class="ui-select-error">
            Choose the current status of the exam.
        </p>

    </div>

</body>

</html>