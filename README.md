# PHP UI

A clean, lightweight, HTML-first UI library for PHP applications.

PHP UI provides reusable UI components using standard HTML, CSS, and vanilla JavaScript.

## Features

* HTML-first
* Framework independent
* Accessible
* Responsive
* Lightweight
* Vanilla JavaScript
* Reusable components
* CSS design tokens
* No JavaScript framework required
* Laravel support planned

## Installation

Install PHP UI using Composer:

```bash
composer require muradcade/php-ui
```

Include the main stylesheet:

```html
<link rel="stylesheet" href="vendor/muradcade/php-ui/assets/css/ui.css">
```

Include the main JavaScript file:

```html
<script type="module" src="vendor/muradcade/php-ui/assets/js/ui.js"></script>
```

The `ui.css` file loads all PHP UI component styles.

The `ui.js` file loads all PHP UI JavaScript components.

You only need to include these two files.

## Usage

PHP UI uses simple HTML classes, so you can use it with vanilla PHP or any PHP framework.

Example:

```html
<button class="ui-button ui-button-primary">
    Create Exam
</button>
```

The library does not require a PHP rendering API.

You write normal HTML and apply PHP UI classes.

---

# Components

Click a component below to jump directly to its usage example.

## Quick Navigation

| Category         | Components                                                                                                                                                        |
| ---------------- | ----------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Actions          | [Button](#button)                                                                                                                                                 |
| Forms            | [Input](#input) · [Textarea](#textarea) · [Select](#select) · [Checkbox](#checkbox) · [Radio](#radio) · [Switch](#switch) · [Form](#form)                         |
| Feedback         | [Alert](#alert) · [Badge](#badge) · [Toast](#toast) · [Spinner](#spinner) · [Skeleton](#skeleton) · [Progress](#progress) · [Empty State](#empty-state)           |
| Navigation       | [Navbar](#navbar) · [Sidebar](#sidebar) · [Breadcrumb](#breadcrumb) · [Tabs](#tabs) · [Dropdown](#dropdown) · [Accordion](#accordion) · [Pagination](#pagination) |
| Layout & Content | [Card](#card) · [Table](#table) · [Tooltip](#tooltip) · [Modal](#modal)                                                                                           |

---

# Actions

## Button

```html
<div class="ui-example-row">
    <button class="ui-button ui-button-primary">
        Primary
    </button>

    <button class="ui-button ui-button-secondary">
        Secondary
    </button>

    <button class="ui-button ui-button-success">
        Success
    </button>

    <button class="ui-button ui-button-danger">
        Danger
    </button>

    <button class="ui-button ui-button-outline">
        Outline
    </button>

    <button class="ui-button ui-button-primary ui-button-sm">
        Small
    </button>

    <button class="ui-button ui-button-primary ui-button-lg">
        Large
    </button>
</div>
```

### Block Button

```html
<button class="ui-button ui-button-primary ui-button-block">
    Continue
</button>
```

### Disabled Button

```html
<button
    class="ui-button ui-button-primary"
    disabled
>
    Disabled
</button>
```

---

# Forms

## Input

```html
<div>
    <label class="ui-label" for="name">
        Name
    </label>

    <input
        id="name"
        type="text"
        class="ui-input"
        placeholder="Enter your name"
    >
</div>
```

### Error State

```html
<div>
    <label class="ui-label" for="email">
        Email
    </label>

    <input
        id="email"
        type="email"
        class="ui-input ui-input-error"
        placeholder="Enter your email"
    >

    <span class="ui-error-message">
        Please enter a valid email address.
    </span>
</div>
```

### Help Text

```html
<div>
    <label class="ui-label" for="username">
        Username
    </label>

    <input
        id="username"
        type="text"
        class="ui-input"
        placeholder="Enter username"
    >

    <span class="ui-help">
        Your username must be unique.
    </span>
</div>
```

---

## Textarea

```html
<div>
    <label class="ui-label" for="message">
        Message
    </label>

    <textarea
        id="message"
        class="ui-textarea"
        placeholder="Write your message..."
    ></textarea>
</div>
```

### Error State

```html
<div>
    <label class="ui-label" for="error-message">
        Message with error
    </label>

    <textarea
        id="error-message"
        class="ui-textarea ui-textarea-error"
    ></textarea>

    <span class="ui-error-message">
        Message is required.
    </span>
</div>
```

---

## Select

```html
<div>
    <label class="ui-label" for="country">
        Country
    </label>

    <select
        id="country"
        class="ui-select"
    >
        <option value="">
            Select a country
        </option>

        <option value="somalia">
            Somalia
        </option>

        <option value="kenya">
            Kenya
        </option>

        <option value="ethiopia">
            Ethiopia
        </option>
    </select>
</div>
```

---

## Checkbox

```html
<label class="ui-checkbox-wrapper">
    <input
        type="checkbox"
        class="ui-checkbox"
    >

    <span class="ui-checkbox-label">
        Accept terms
    </span>
</label>
```

### Selected

```html
<label class="ui-checkbox-wrapper">
    <input
        type="checkbox"
        class="ui-checkbox"
        checked
    >

    <span class="ui-checkbox-label">
        Selected
    </span>
</label>
```

### Disabled

```html
<label class="ui-checkbox-wrapper">
    <input
        type="checkbox"
        class="ui-checkbox"
        disabled
    >

    <span class="ui-checkbox-label">
        Disabled
    </span>
</label>
```

---

## Radio

```html
<div class="ui-radio-group">
    <label class="ui-radio-wrapper">
        <input
            type="radio"
            name="plan"
            class="ui-radio"
            checked
        >

        <span class="ui-radio-label">
            Free
        </span>
    </label>

    <label class="ui-radio-wrapper">
        <input
            type="radio"
            name="plan"
            class="ui-radio"
        >

        <span class="ui-radio-label">
            Pro
        </span>
    </label>

    <label class="ui-radio-wrapper">
        <input
            type="radio"
            name="plan"
            class="ui-radio"
        >

        <span class="ui-radio-label">
            Enterprise
        </span>
    </label>
</div>
```

---

## Switch

```html
<label class="ui-switch-wrapper">
    <input
        type="checkbox"
        class="ui-switch"
    >

    <span class="ui-switch-label">
        Enable notifications
    </span>
</label>
```

### Checked

```html
<label class="ui-switch-wrapper">
    <input
        type="checkbox"
        class="ui-switch"
        checked
    >

    <span class="ui-switch-label">
        Dark mode
    </span>
</label>
```

---

## Form

```html
<form class="ui-form">
    <div class="ui-form-section">
        <div>
            <h3 class="ui-form-section-title">
                Account Information
            </h3>

            <p class="ui-form-section-description">
                Enter your account details.
            </p>
        </div>

        <div class="ui-form-group">
            <label
                class="ui-label"
                for="form-name"
            >
                Name
            </label>

            <input
                id="form-name"
                type="text"
                class="ui-input"
            >
        </div>

        <div class="ui-form-group">
            <label
                class="ui-label"
                for="form-email"
            >
                Email
            </label>

            <input
                id="form-email"
                type="email"
                class="ui-input"
            >
        </div>
    </div>

    <div class="ui-form-actions">
        <button
            type="button"
            class="ui-button ui-button-secondary"
        >
            Cancel
        </button>

        <button
            type="submit"
            class="ui-button ui-button-primary"
        >
            Save
        </button>
    </div>
</form>
```

---

# Feedback

## Alert

```html
<div class="ui-alert ui-alert-success">
    Successfully saved.
</div>

<div class="ui-alert ui-alert-danger">
    Something went wrong.
</div>

<div class="ui-alert ui-alert-warning">
    Please review this information.
</div>

<div class="ui-alert ui-alert-info">
    This is an informational message.
</div>
```

---

## Badge

```html
<span class="ui-badge ui-badge-success">
    Success
</span>

<span class="ui-badge ui-badge-warning">
    Warning
</span>

<span class="ui-badge ui-badge-danger">
    Danger
</span>

<span class="ui-badge ui-badge-info">
    Information
</span>

<span class="ui-badge ui-badge-neutral">
    Neutral
</span>
```

---

## Toast

```html
<button
    type="button"
    class="ui-button ui-button-primary"
    onclick="uiToast(
        'Your changes have been saved.',
        'success',
        'Success'
    )"
>
    Show Toast
</button>
```

The JavaScript is already loaded through `ui.js`.

```html
<script type="module" src="vendor/muradcade/php-ui/assets/js/ui.js"></script>
```

Available types:

```text
success
danger
warning
info
```

---

## Spinner

```html
<span
    class="ui-spinner"
    role="status"
    aria-label="Loading"
></span>
```

### Sizes

```html
<span class="ui-spinner ui-spinner-sm"></span>

<span class="ui-spinner"></span>

<span class="ui-spinner ui-spinner-lg"></span>
```

---

## Skeleton

```html
<span class="ui-skeleton ui-skeleton-title"></span>

<span class="ui-skeleton ui-skeleton-text"></span>

<span class="ui-skeleton ui-skeleton-text-md"></span>

<span class="ui-skeleton ui-skeleton-text-sm"></span>

<span class="ui-skeleton ui-skeleton-avatar"></span>

<span class="ui-skeleton ui-skeleton-button"></span>

<span class="ui-skeleton ui-skeleton-input"></span>

<span class="ui-skeleton ui-skeleton-image"></span>
```

Skeleton components are designed to be composed from reusable primitives.

---

## Progress

```html
<div
    class="ui-progress"
    role="progressbar"
    aria-valuenow="25"
    aria-valuemin="0"
    aria-valuemax="100"
>
    <div
        class="ui-progress-bar"
        style="width: 25%"
    ></div>
</div>
```

### Success

```html
<div
    class="ui-progress ui-progress-success"
    role="progressbar"
    aria-valuenow="60"
    aria-valuemin="0"
    aria-valuemax="100"
>
    <div
        class="ui-progress-bar"
        style="width: 60%"
    ></div>
</div>
```

### Danger

```html
<div
    class="ui-progress ui-progress-danger"
    role="progressbar"
    aria-valuenow="85"
    aria-valuemin="0"
    aria-valuemax="100"
>
    <div
        class="ui-progress-bar"
        style="width: 85%"
    ></div>
</div>
```

---

## Empty State

```html
<div class="ui-empty-state">
    <div class="ui-empty-state-icon">
        +
    </div>

    <h3 class="ui-empty-state-title">
        No projects found
    </h3>

    <p class="ui-empty-state-description">
        You don't have any projects yet.
        Create your first project to get started.
    </p>

    <div class="ui-empty-state-actions">
        <button class="ui-button ui-button-primary">
            Create Project
        </button>
    </div>
</div>
```

---

# Navigation

## Navbar

```html
 <nav class="ui-navbar">
        <a href="#" class="ui-navbar-brand">
            PHP UI
        </a>

        <button
            type="button"
            class="ui-navbar-toggle"
            data-ui-navbar-toggle
            aria-expanded="false"
            aria-label="Toggle navigation">
            ☰
        </button>

        <ul class="ui-navbar-nav ui-navbar-nav-center">
            <li>
                <a
                    href="#"
                    class="ui-navbar-link ui-navbar-link-active">
                    Home
                </a>
            </li>

            <li>
                <a href="#" class="ui-navbar-link">
                    Components
                </a>
            </li>

            <li>
                <a href="#" class="ui-navbar-link">
                    Documentation
                </a>
            </li>
        </ul>

        <div class="ui-navbar-actions">
            <button class="ui-button ui-button-primary ui-button-block">
                Login
            </button>
        </div>
    </nav>
```

The JavaScript is already loaded through `ui.js`.

---

## Sidebar

The sidebar is intended as a layout component.

```html
<div
    class="ui-sidebar-overlay"
    data-ui-sidebar-overlay
></div>

<button
    type="button"
    class="ui-sidebar-toggle"
    data-ui-sidebar-toggle
    aria-label="Open navigation"
>
    ☰
</button>

<aside class="ui-sidebar">
    <a
        href="#"
        class="ui-sidebar-brand"
    >
        PHP UI
    </a>

    <nav class="ui-sidebar-nav">
        <a
            href="#"
            class="ui-sidebar-link ui-sidebar-link-active"
        >
            Dashboard
        </a>

        <a
            href="#"
            class="ui-sidebar-link"
        >
            Exams
        </a>

        <a
            href="#"
            class="ui-sidebar-link"
        >
            Users
        </a>
    </nav>

    <div class="ui-sidebar-section">
        <h2 class="ui-sidebar-section-title">
            Management
        </h2>

        <nav class="ui-sidebar-nav">
            <a
                href="#"
                class="ui-sidebar-link"
            >
                Questions
            </a>

            <a
                href="#"
                class="ui-sidebar-link"
            >
                Reports
            </a>

            <a
                href="#"
                class="ui-sidebar-link"
            >
                Settings
            </a>
        </nav>
    </div>
</aside>

<main class="ui-sidebar-content">
    Page content
</main>
```

The JavaScript is already loaded through `ui.js`.

The sidebar automatically switches to a mobile layout at smaller screen sizes.

---

## Breadcrumb

```html
<nav
    class="ui-breadcrumb"
    aria-label="Breadcrumb"
>
    <ol class="ui-breadcrumb-list">
        <li class="ui-breadcrumb-item">
            <a
                href="#"
                class="ui-breadcrumb-link"
            >
                Dashboard
            </a>

            <span
                class="ui-breadcrumb-separator"
                aria-hidden="true"
            >
                /
            </span>
        </li>

        <li class="ui-breadcrumb-item">
            <a
                href="#"
                class="ui-breadcrumb-link"
            >
                Exams
            </a>

            <span
                class="ui-breadcrumb-separator"
                aria-hidden="true"
            >
                /
            </span>
        </li>

        <li
            class="ui-breadcrumb-item ui-breadcrumb-current"
            aria-current="page"
        >
            Create Exam
        </li>
    </ol>
</nav>
```

---

## Tabs

```html
<div class="ui-tabs">
    <div
        class="ui-tabs-list"
        role="tablist"
    >
        <button
            class="ui-tab ui-tab-active"
            data-ui-tab="tab-overview"
            role="tab"
            aria-selected="true"
        >
            Overview
        </button>

        <button
            class="ui-tab"
            data-ui-tab="tab-settings"
            role="tab"
            aria-selected="false"
        >
            Settings
        </button>

        <button
            class="ui-tab"
            data-ui-tab="tab-profile"
            role="tab"
            aria-selected="false"
        >
            Profile
        </button>
    </div>

    <div
        id="tab-overview"
        class="ui-tab-panel"
        role="tabpanel"
    >
        Overview content.
    </div>

    <div
        id="tab-settings"
        class="ui-tab-panel"
        role="tabpanel"
        hidden
    >
        Settings content.
    </div>

    <div
        id="tab-profile"
        class="ui-tab-panel"
        role="tabpanel"
        hidden
    >
        Profile content.
    </div>
</div>
```

The JavaScript is already loaded through `ui.js`.

---

## Dropdown

```html
<div class="ui-dropdown">
    <button
        type="button"
        class="ui-button ui-button-primary"
        data-ui-dropdown-toggle
        aria-expanded="false"
    >
        Options
    </button>

    <div
        class="ui-dropdown-menu"
        hidden
    >
        <button class="ui-dropdown-item">
            Edit
        </button>

        <button class="ui-dropdown-item">
            Duplicate
        </button>

        <div class="ui-dropdown-divider"></div>

        <button class="ui-dropdown-item ui-dropdown-item-danger">
            Delete
        </button>
    </div>
</div>
```

The JavaScript is already loaded through `ui.js`.

---

## Accordion

PHP UI uses the native HTML `<details>` element for accordions.

```html
<div class="ui-accordion">
    <details class="ui-accordion-item">
        <summary class="ui-accordion-header">
            What is PHP UI?
        </summary>

        <div class="ui-accordion-content">
            PHP UI is a reusable UI library for PHP applications.
        </div>
    </details>

    <details class="ui-accordion-item">
        <summary class="ui-accordion-header">
            Does it require Laravel?
        </summary>

        <div class="ui-accordion-content">
            No. The core library is framework independent.
        </div>
    </details>
</div>
```

No JavaScript is required.

---

## Pagination

```html
<nav
    class="ui-pagination"
    aria-label="Pagination"
>
    <a
        href="#"
        class="ui-pagination-link ui-pagination-link-disabled"
    >
        Previous
    </a>

    <a
        href="#"
        class="ui-pagination-link ui-pagination-link-active"
        aria-current="page"
    >
        1
    </a>

    <a
        href="#"
        class="ui-pagination-link"
    >
        2
    </a>

    <a
        href="#"
        class="ui-pagination-link"
    >
        3
    </a>

    <span class="ui-pagination-ellipsis">
        ...
    </span>

    <a
        href="#"
        class="ui-pagination-link"
    >
        10
    </a>

    <a
        href="#"
        class="ui-pagination-link"
    >
        Next
    </a>
</nav>
```

---

# Layout & Content

## Card

```html
<div class="ui-card">
    <div class="ui-card-header">
        <h3 class="ui-card-title">
            Example Card
        </h3>

        <p class="ui-card-description">
            A simple card component.
        </p>
    </div>

    <div class="ui-card-body">
        Card content goes here.
    </div>

    <div class="ui-card-footer">
        Footer content
    </div>
</div>
```

---

## Table

```html
<div class="ui-table-wrapper">
    <table class="ui-table ui-table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>Ahmed</td>
                <td>ahmed@example.com</td>
                <td>
                    <span class="ui-badge ui-badge-success">
                        Active
                    </span>
                </td>
            </tr>

            <tr>
                <td>Hassan</td>
                <td>hassan@example.com</td>
                <td>
                    <span class="ui-badge ui-badge-warning">
                        Pending
                    </span>
                </td>
            </tr>

            <tr>
                <td>Ali</td>
                <td>ali@example.com</td>
                <td>
                    <span class="ui-badge ui-badge-danger">
                        Disabled
                    </span>
                </td>
            </tr>
        </tbody>
    </table>
</div>
```

### Table Variants

#### Striped

```html
<table class="ui-table ui-table-striped">
```

#### Compact

```html
<table class="ui-table ui-table-compact">
```

#### Bordered

```html
<table class="ui-table ui-table-bordered">
```

### Combining Variants

```html
<table class="ui-table ui-table-striped ui-table-bordered">
```

---

## Tooltip

```html
<div class="ui-tooltip">
    <button class="ui-button ui-button-secondary">
        Hover me
    </button>

    <span class="ui-tooltip-content">
        This is a tooltip.
    </span>
</div>
```

---

## Modal

```html
<button
    type="button"
    class="ui-button ui-button-primary"
    data-ui-modal-open="example-modal"
>
    Open Modal
</button>

<dialog
    id="example-modal"
    class="ui-modal"
>
    <div class="ui-modal-header">
        <h3 class="ui-modal-title">
            Example Modal
        </h3>

        <button
            type="button"
            class="ui-modal-close"
            data-ui-modal-close
            aria-label="Close modal"
        >
            &times;
        </button>
    </div>

    <div class="ui-modal-body">
        <p>
            This is an example of the PHP UI modal component.
        </p>
    </div>

    <div class="ui-modal-footer">
        <button
            type="button"
            class="ui-button ui-button-secondary"
            data-ui-modal-close
        >
            Cancel
        </button>

        <button
            type="button"
            class="ui-button ui-button-primary"
            data-ui-modal-close
        >
            Confirm
        </button>
    </div>
</dialog>
```

The JavaScript is already loaded through `ui.js`.

---

# JavaScript Components

The following components use JavaScript:

| Component             | JavaScript File |
| --------------------- | --------------- |
| [Modal](#modal)       | `modal.js`      |
| [Dropdown](#dropdown) | `dropdown.js`   |
| [Toast](#toast)       | `toast.js`      |
| [Tabs](#tabs)         | `tabs.js`       |
| [Navbar](#navbar)     | `navbar.js`     |
| [Sidebar](#sidebar)   | `sidebar.js`    |

All JavaScript components are loaded automatically through:

```text
assets/js/ui.js
```

You do not need to include the individual JavaScript files.

Include only:

```html
<script type="module" src="vendor/muradcade/php-ui/assets/js/ui.js"></script>
```

Components that do not require JavaScript:

* Button
* Badge
* Alert
* Card
* Input
* Textarea
* Select
* Checkbox
* Radio
* Switch
* Form
* Accordion
* Tooltip
* Table
* Pagination
* Spinner
* Skeleton
* Progress
* Empty State
* Breadcrumb

---

# Accessibility

PHP UI is designed with accessibility in mind.

Components use native HTML elements and standard accessibility attributes where appropriate.

Examples include:

* Native `<button>` elements
* Associated `<label>` elements
* Native form controls
* `<dialog>` for modals
* `<details>` for accordions
* `aria-selected` for tabs
* `aria-expanded` for dropdowns and navigation
* `aria-current` for pagination and breadcrumbs
* `role="progressbar"` for progress indicators
* `role="status"` for loading indicators
* Visible keyboard focus states
* Reduced-motion support

Always provide meaningful labels and accessible content when using the components in your application.

---

# Responsive Design

PHP UI components are designed to work across different screen sizes.

Responsive behavior includes:

* Responsive forms
* Responsive tables
* Responsive modals
* Responsive toast notifications
* Responsive pagination
* Mobile navbar
* Mobile sidebar
* Reduced-motion support

For example:

```html
<div class="ui-table-wrapper">
    <table class="ui-table">
        ...
    </table>
</div>
```

---

# CSS Architecture

PHP UI keeps component styles modular.

The main stylesheet is:

```text
assets/css/ui.css
```

Component styles are separated into individual files:

```text
assets/css/
├── ui.css
├── button.css
├── badge.css
├── alert.css
├── card.css
├── input.css
├── textarea.css
├── select.css
├── checkbox.css
├── radio.css
├── switch.css
├── form.css
├── modal.css
├── dropdown.css
├── toast.css
├── tabs.css
├── accordion.css
├── tooltip.css
├── table.css
├── pagination.css
├── spinner.css
├── skeleton.css
├── progress.css
├── empty-state.css
├── navbar.css
├── sidebar.css
└── breadcrumb.css
```

You only need to include:

```html
<link rel="stylesheet" href="vendor/muradcade/php-ui/assets/css/ui.css">
```

The main stylesheet loads the component styles automatically.

---

# JavaScript Architecture

JavaScript is separated by component.

```text
assets/js/
├── ui.js
├── modal.js
├── dropdown.js
├── toast.js
├── tabs.js
├── navbar.js
└── sidebar.js
```

`ui.js` is the main JavaScript entry point.

It loads all JavaScript components:

```js
import "./dropdown.js";
import "./modal.js";
import "./navbar.js";
import "./sidebar.js";
import "./tabs.js";
import "./toast.js";
```

Applications only need to include:

```html
<script type="module" src="vendor/muradcade/php-ui/assets/js/ui.js"></script>
```

This provides a single JavaScript entry point for the entire library.

---

# Framework Support

PHP UI is framework independent.

It can be used with:

* Vanilla PHP
* Laravel
* Symfony
* CodeIgniter
* Slim
* Custom PHP applications
* Other PHP frameworks

The core library does not depend on a specific PHP framework.

Laravel integration is planned as a separate package.

---

# Browser Support

PHP UI uses standard HTML, CSS, and JavaScript APIs.

Modern versions of major browsers are supported.

---

# Development

Clone the repository:

```bash
git clone https://github.com/MuradCade/php-ui.git
```

Enter the project directory:

```bash
cd php-ui
```

Install Composer dependencies:

```bash
composer install
```

The example page is located at:

```text
examples/index.php
```

The example page demonstrates the available PHP UI components.

---

# Project Structure

```text
php-ui/
├── assets/
│   ├── css/
│   └── js/
├── examples/
│   └── index.php
├── docs/
├── tests/
├── composer.json
├── README.md
├── CHANGELOG.md
└── LICENSE
```

---

# Contributing

Contributions, bug reports, documentation improvements, and feature requests are welcome.

Before submitting a pull request:

1. Keep component naming consistent.
2. Follow the existing `ui-*` naming convention.
3. Keep components framework independent.
4. Consider accessibility.
5. Test responsive behavior.
6. Test JavaScript interactions where applicable.
7. Update the documentation when adding or changing a component.

Please open an issue or submit a pull request.

---

# License

PHP UI is open-source software licensed under the MIT License.

See the [LICENSE](LICENSE) file for details.
