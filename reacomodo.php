<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <title>Reacomodo</title>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <link rel="stylesheet" href="/21_octubre/estilos.css">

</head>

<body>
    <!-- <body class="p-3  bd-example m-0 border-0 bd-example-row"> -->


    <div>

        <ul class='custom-menu'>
            <li data-action="details">Ver detalles</li>
            <li data-action="delete">Eliminar</li>
            <li data-action="inhabilitar">Inhabilitar</li>
        </ul>

        <!-- div nombre de columnas -->
        <div class="container text-center ">
            <div class="row">
                <div class="col">
                    Ala A
                </div>
                <div class="col">
                    Ala B
                </div>
                <div class="col">
                    Ala C
                </div>
            </div>
        </div>


        <!-- div del grid -->

        <div class="container ">
            <div class="row">
                <div class="col">
                    <div class="Sala_A" id="info-materias">
                        <div id="grid-container_A" class="padre_A" style="display: grid; gap: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="Sala_B">
                        <div id="grid-container_B" class="padre_B" style="display: grid; gap: 10px;">
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="Sala_C">
                        <div id="grid-container_C" class="padre_C" style="display: grid; gap: 10px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- div botones -->

        <div class="container  ">
            <div class="row">
                <div class="col">
                    <label class="auto"><i class="bi bi-arrows-collapse-vertical">Columnas</i> </label>
                    <input id="columnas" min="1" max="10" type="number" oninput="agregarColumnaA()" value="1" />
                    <label class="auto"> <i class="bi bi-arrows-vertical">Filas</i></label>
                    <input class="auto" id="filas" min="1" max="10" type="number" oninput="agregarFilaA()" value="1" />
                    <button type="button" class="btn btn-success" id="reserve-btn1">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                            <path d="M11 2H9v3h2z"></path>
                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"></path>
                        </svg>
                        Guardar
                    </button>
                    <div id="selected-seats1"></div>
                </div>
                <div class="col">
                    <label class="auto"><i class="bi bi-arrows-collapse-vertical">Columnas</i> </label>
                    <input id="columnas_B" min="1" max="10" type="number" oninput="agregarColumnaB()" value="1" />
                    <label class="auto"> <i class="bi bi-arrows-vertical">Filas</i></label>
                    <input id="filas_B" min="1" max="10" type="number" oninput="agregarFilaB()" value="1" />
                    <button type="button" class="btn btn-success" id="reserve-btn2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                            <path d="M11 2H9v3h2z"></path>
                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"></path>
                        </svg>
                        Guardar
                    </button>
                    <div id="selected-seats2"></div>
                </div>
                <div class="col">
                    <label class="auto"><i class="bi bi-arrows-collapse-vertical">Columnas</i> </label>
                    <input id="columnas_C" min="1" max="10" type="number" oninput="agregarColumnaC()" value="1" />
                    <label class="auto"> <i class="bi bi-arrows-vertical">Filas</i></label>
                    <input id="filas_C" min="1" max="10" type="number" oninput="agregarFilaC()" value="1" />
                    <button type="button" class="btn btn-success" id="reserve-btn3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                            <path d="M11 2H9v3h2z"></path>
                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"></path>
                        </svg>
                        Guardar
                    </button>
                    <div id="selected-seats3"></div>
                </div>
            </div>
        </div>



    </div>


    <script src="/21_octubre/script.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            //   Cambiar la imagen de los <td> en grid-container_A
            $('#grid-container_A').on('click', 'td', function() {
                $(this).css('background-image', "url('/17_de_agosto/silla_d.png')");
            });

            //   Cambiar la imagen de los <td> en grid-container_B
            $('#grid-container_B').on('click', 'td', function() {
                $(this).css('background-image', "url('/17_de_agosto/silla_d.png')");
            });

            //   Cambiar la imagen de los <td> en grid-container_C
            $('#grid-container_C').on('click', 'td', function() {
                $(this).css('background-image', "url('/17_de_agosto/silla_d.png')");
            });



            //             $('#grid-container_A').on ('contextmenu','td',function(){
            //     alert("joafj");
            //   });





            var materiaSeleccionada;
            $('#grid-container_A').on("contextmenu", 'td', function(event) {
                event.preventDefault();
                $('.custom-menu').toggle(100).css({
                    top: event.pageY + "px",
                    left: event.pageX + "px"
                });
                //Selecciono donde di clic para ejecutar una accion despues
                materiaSeleccionada = $(this);
            });
            $('#grid-container_B').on("contextmenu", 'td', function(event) {
                event.preventDefault();
                $('.custom-menu').toggle(100).css({
                    top: event.pageY + "px",
                    left: event.pageX + "px"
                });
                //Selecciono donde di clic para ejecutar una accion despues
                materiaSeleccionada = $(this);
            });
            $('#grid-container_C').on("contextmenu", 'td', function(event) {
                event.preventDefault();
                $('.custom-menu').toggle(100).css({
                    top: event.pageY + "px",
                    left: event.pageX + "px"
                });
                //Selecciono donde di clic para ejecutar una accion despues
                materiaSeleccionada = $(this);
            });


            $(".custom-menu li").click(function() {
                let action = $(this).attr('data-action');

                switch (action) {
                    case "delete":
                        $(materiaSeleccionada).remove();
                        break;
                    case "details":
                        let nombreMateria = materiaSeleccionada.first().text();
                        alert("Detalles de la materia " + nombreMateria);
                        break;
                    case "inhabilitar":
                        //  alert("sirve");
                        $(this).hide();
                        break;
                }
                // Esconder el menu después de la ejecución
                $(".custom-menu").hide(100);
            });

            $(document).on("mousedown", function(e) {
                // Si no se da clic al menu contextual
                if (!$(e.target).parents(".custom-menu").length > 0) {
                    // Escondelo
                    $(".custom-menu").hide(100);
                }
            });






        });


        // $('#reserve-btn1').click(function() {
        //     const selectedSeats = $('#grid-container_A');

        //     if (selectedSeats.length === 0) {
        //         alert('Por favor, seleccione al menos un asiento.');
        //         return;
        //     }

        //     selectedSeats.each(function() {
        //         $(this).removeClass('selected').addClass('reserved').off('click');
        //         $(this).text('X'); // Marcar como reservado
        //     });

        //     updateSelectedSeats();
        //     alert('Asientos reservados exitosamente.');
        // });
    </script>





</body>

</html>