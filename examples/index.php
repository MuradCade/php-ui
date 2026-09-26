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
</head>

<body>

    <h1>PHP UI</h1>

    <p>This is my first UI library.</p>
    <form class="ui-form" action="#" method="post">

        <div class="ui-form-section">
            <div>
                <h2 class="ui-form-section-title">Create Exam</h2>
                <p class="ui-form-section-description">
                    Enter the details of your new exam.
                </p>
            </div>

            <div class="ui-form-group">
                <label class="ui-label" for="title">
                    Exam Title
                </label>

                <input
                    class="ui-input"
                    type="text"
                    id="title"
                    name="title"
                    placeholder="Enter exam title"
                    required>
            </div>

            <div class="ui-form-group">
                <label class="ui-label" for="description">
                    Description
                </label>

                <textarea
                    class="ui-textarea"
                    id="description"
                    name="description"
                    placeholder="Enter exam description"></textarea>
            </div>

            <div class="ui-form-group">
                <label class="ui-label" for="status">
                    Exam Status
                </label>

                <select class="ui-select" id="status" name="status" required>
                    <option value="">Select a status</option>
                    <option value="published">Published</option>
                    <option value="unpublished">Unpublished</option>
                    <option value="disabled">Disabled</option>
                </select>
            </div>

            <label class="ui-switch-wrapper">
                <input
                    type="checkbox"
                    class="ui-switch"
                    name="enable_timer"
                    value="1"
                    role="switch">

                <span class="ui-switch-label">
                    Enable exam timer
                </span>
            </label>
        </div>

        <div class="ui-form-actions">
            <button
                type="reset"
                class="ui-button ui-button-secondary">
                Reset
            </button>

            <button
                type="submit"
                class="ui-button ui-button-primary">
                Create Exam
            </button>
        </div>

    </form>

</body>

</html>