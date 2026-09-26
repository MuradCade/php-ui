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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>
    <fieldset class="ui-radio-group">
        <legend class="ui-label">Question Type</legend>

        <label class="ui-radio-wrapper">
            <input
                class="ui-radio"
                type="radio"
                name="question_type"
                value="single_choice"
                checked>
            <span class="ui-radio-label">Single Choice</span>
        </label>

        <label class="ui-radio-wrapper">
            <input
                class="ui-radio"
                type="radio"
                name="question_type"
                value="true_and_false">
            <span class="ui-radio-label">True and False</span>
        </label>

        <label class="ui-radio-wrapper">
            <input
                class="ui-radio"
                type="radio"
                name="question_type"
                value="direct_question">
            <span class="ui-radio-label">Direct Question</span>
        </label>
    </fieldset>

</body>

</html>