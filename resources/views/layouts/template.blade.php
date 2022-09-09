<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;0,900;1,100&display=swap"
        rel="stylesheet">
    {{-- fontawesome --}}
    <script src="https://kit.fontawesome.com/ce4324abd4.js" crossorigin="anonymous"></script>
    <!-- sweetalert -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
    <title>Sistema de Adimistración de Rentas</title>
</head>

<body>
    <div class="wrapper">
        <nav class="header"></nav>
        @yield('content')
        @include('layouts.footer')
    </div>
    <div class="modal" id="modal_windows">
        <div class="modal-dialog">
          <header class="modal-header">
            ...
            <button class="close-modal" aria-label="close modal" data-close>✕</button>
          </header>
          <section class="modal-content">
            <div class="contenedor">
                <form action="">
                    <label for="">Nombre</label>
                    <input type="text" placeholder="ingresa un nombre">
                </form>
            </div>
          </section>
          <footer class="modal-footer">...</footer>
        </div>
      </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const openEls = document.querySelectorAll("[data-open]");
        const closeEls = document.querySelectorAll("[data-close]");
        const isVisible = "is-visible";

        for (const el of openEls) {
            el.addEventListener("click", function() {
                const modalId = this.dataset.open;
                document.getElementById(modalId).classList.add(isVisible);
            });
        }

        for (const el of closeEls) {
            el.addEventListener("click", function() {
                this.parentElement.parentElement.parentElement.classList.remove(isVisible);
            });
        }

        document.addEventListener("click", e => {
            if (e.target == document.querySelector(".modal.is-visible")) {
                document.querySelector(".modal.is-visible").classList.remove(isVisible);
            }
        });

        document.addEventListener("keyup", e => {
            // if we press the ESC
            if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
                document.querySelector(".modal.is-visible").classList.remove(isVisible);
            }
        });


        Resources
    </script>
</body>

</html>
