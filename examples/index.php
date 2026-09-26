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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>

    <div style="max-width: 400px;">

        <!-- Text input -->
        <div style="margin-bottom: 1rem;">
            <label class="ui-label" for="exam-title">
                Exam Title
            </label>

            <input
                class="ui-input"
                type="text"
                id="exam-title"
                placeholder="Enter exam title" />
        </div>

        <!-- Email input -->
        <div style="margin-bottom: 1rem;">
            <label class="ui-label" for="email">
                Email Address
            </label>

            <input
                class="ui-input"
                type="email"
                id="email"
                placeholder="Enter your email" />
        </div>

        <!-- Error input -->
        <div style="margin-bottom: 1rem;">
            <label class="ui-label" for="invalid-title">
                Exam Title
            </label>

            <input
                class="ui-input ui-input-error"
                type="text"
                id="invalid-title"
                aria-invalid="true"
                aria-describedby="title-error"
                value="" />

            <span class="ui-error-message" id="title-error">
                Exam title is required.
            </span>
        </div>

        <!-- Disabled input -->
        <div>
            <label class="ui-label" for="disabled-field">
                Disabled Field
            </label>

            <input
                class="ui-input"
                type="text"
                id="disabled-field"
                value="This field is disabled"
                disabled />
        </div>

    </div>
</body>

</html>