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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>
    <div style="max-width: 400px;">

        <label class="ui-label" for="exam-description">
            Exam Description
        </label>

        <textarea
            class="ui-textarea ui-textarea:disabled"
            id="exam-description"
            rows="4"
            placeholder="Enter exam instructions..."></textarea>

        <small class="ui-help">
            Provide a short description of the exam.
        </small>

    </div>

</body>

</html>