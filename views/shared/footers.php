<link rel="stylesheet" href="../views/assets/css/normalize.min.css">
<link rel="stylesheet" href="../views/assets/css/egg.min.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
<style>
    :root {
        --primary: hsl(196, 100%, 45%);
        --secondary-light: #F5F5F5;
        --secondary-dark: #CCC;
        --secondary-alt: #AAA;
        --text-primary: #333;
        --danger: hsl(0, 100%, 45%);
        --border-radius: 7px;
        --primary-width: 300px;
        --secondary-width: 150px;
        --dark-1: rgba(0, 0, 0, .4);
        --dark-2: rgba(0, 0, 0, .2);
    }

    * {
        font-family: 'Noto Sans', sans-serif;
        color: var(--text-primary);
        border-radius: var(--border-radius);
    }

    body {
        padding: 15px 10%;
        background-color: var(--secondary-light);
        overflow-x: hidden;
    }

    a {
        text-decoration: underline;
        padding: 7.5px 15px;
    }

    a:hover {
        background-color: var(--secondary-dark);
    }

    tr:nth-child(2n+1) {
        background-color: white;
    }

    #login-form {
        width: auto;
    }

    #login-form input, form input {
        padding: 10px 15px;
        margin: 0;
        border-radius: var(--border-radius);
        border: 1px solid var(--secondary-alt);
        width: var(--primary-width);
    }

    #login-form input:focus, form input:focus {
        border: 1px solid var(--primary);
        outline: none;
    }

    #form-header * {
        margin: 0;
    }

    #form-body {
        padding: 15px 0;
    }

    #form-group {
        padding: 5px 0;
    }

    form select, select {
        width: 100%;
        padding: 6px 10px;
        border: 1px solid var(--secondary-alt);
    }

    form select:focus, select:focus {
        outline: none;
        border: 1px solid var(--primary);
    }

    div.table-container {
        overflow-x: auto;
    }

    [nomargin] {
        margin: 0;
    }

    [flex] {
        display: flex;
        flex: auto;
    }

    [flex-center] {
        align-items: center;
        gap: 15px;
    }

    [auto-width] {
        width: auto;
    }

    [contain=none] {
        box-shadow: none;
    }

    @media only screen and (max-width: 430px) {
        body {
            padding: 15px;
        }
    }
</style>