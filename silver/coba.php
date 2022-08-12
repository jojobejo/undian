<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-grid.css" rel="stylesheet">
    <link href="../css/bootstrap-reboot.css" rel="stylesheet">
    <link href="../css/bootstrap-themes.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

    <style>
        :root {
            --lightgray: #efefef;
            --blue: steelblue;
            --white: #fff;
            --black: rgba(0, 0, 0, 0.8);
            --bounceEasing: cubic-bezier(0.51, 0.92, 0.24, 1.15);
        }

        * {
            padding: 0;
            margin: 0;
        }

        button {
            cursor: pointer;
            background: transparent;
            border: none;
            outline: none;
            font-size: inherit;
        }

        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            font: 16px/1.5 sans-serif;
        }

        .btn-group {
            text-align: center;
        }

        .open-modal {
            font-weight: bold;
            background: var(--blue);
            color: var(--white);
            padding: .75rem 1.75rem;
            margin-bottom: 1rem;
            border-radius: 5px;
        }

        .modal {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1rem;
            background: var(--black);
            cursor: pointer;
            visibility: hidden;
            opacity: 0;
            transition: all 0.35s ease-in;

        }

        .modal-dialog {
            position: relative;
            max-width: 800px;
            max-height: 80vh;
            border-radius: 5px;
            background: var(--white);
            overflow: auto;
            cursor: default;
        }


        .modal-dialog>* {
            padding: 1rem;
        }

        .modal-header,
        .modal-footer {
            background: var(--lightgray);
        }

        .modal-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .modal-header .modal-close {
            font-size: 1.5rem;
        }

        .modal p+p {
            margin-top: 1rem;
        }
    </style>

</head>

<body>

    <button type="button" class="open-modal" data-open="modal1">...</button>

    <div class="modal" id="modal1">
        <div class="modal-dialog">
            <header class="modal-header">
                ...
                <button class="close-modal" aria-label="close modal" data-close>✕</button>
            </header>
            <section class="modal-content">...</section>
            <footer class="modal-footer">...</footer>
        </div>
    </div>

</body>
<script>
    const openEls = document.querySelectorAll("[data-open]");
    const isVisible = "is-visible";

    for (const el of openEls) {
        el.addEventListener("click", function() {
            const modalId = this.dataset.open;
            document.getElementById(modalId).classList.add(isVisible);
        });
    }

    const isVisible = "is-visible";

    document.addEventListener("keyup", e => {
        if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
            document.querySelector(".modal.is-visible").classList.remove(isVisible);
        }
    });
</script>

</html>