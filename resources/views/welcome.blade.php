<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>María José</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <style>
        @font-face {
            font-family: 'Savoye LET Plain';
            font-style: normal;
            font-weight: normal;
            src: local('Savoye LET Plain'), url('./fonts/SavoyeLETPlain1.woff') format('woff');
        }

        .savoye-font {
            font-family: 'Savoye LET Plain', sans-serif;
        }

        .lila {
            color: #AB8AA7;
        }

        .gris {
            color: #57666C;
        }

        .box-out {
            position: absolute;
            top: 0px;
            left: 0px;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -10;
        }

        .box {
            border: 3px solid;
            border-color: #e5d4b8;
            padding: 0px;
            width: 80%;
            height: 120%;
            top: 10px;
            position: relative;
            margin: auto !important;
            border-radius: 200px;
        }

        .title {
            font-size: 7.6rem;
            line-height: 0.8;
        }

        .title2 {
            font-size: 4rem;
        }

        .section {
            border-top: 2px solid;
            border-bottom: 2px solid;
            border-color: #AB8AA7;
            padding: 0px;
        }

        .img-footer {
            position: absolute;
            overflow: hid;
            bottom: 0px;
            z-index: 1 !important;
        }

        .mariposa-1 {
            top: 0px;
            left: -85px;
            rotate: -40deg;
            width: 50%;
        }

        .mariposa-2 {
            top: 400px;
            right: -50px;
            rotate: 30deg;
            width: 40%;
        }

        .mariposa-3-1 {
            top: -10px;
            right: -12px;
            rotate: -50deg;
            width: 16%;
        }
    </style>
</head>

<body style="overflow-x: hidden !important; padding: 0; margin: 0;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 title savoye-font lila mb-1" style="padding-top: 100px;">
                <div>María</div>
                <p class="text-end">José</p>
            </div>

            <div class="col-11 mb-4 text-center" style="background-color: blrue;">
                <div class="row align-items-center justify-content-center">
                    <div class="col-3 section h5 lila">DOMINGO</div>

                    <div class="col-4">
                        <div class="row">
                            <div class="col-12 gris">NOVIEMBRE</div>
                            <div class="col-12 title2 lila">17</div>
                            <div class="col-12 h4 gris">2 0 2 4</div>
                        </div>
                    </div>

                    <div class="col-3 section h5 lila">14:00 hrs.</div>
                </div>
            </div>

            <div class="col-10 mb-3">
                <div class="row justify-content-center">
                    <div class="col">
                        <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#assistanceModal">CONFIRMAR ASISTENCIA</button>

                    </div>
                    <div class="col d-grid gap-2">
                        <button type="button" class="btn btn-outline-secondary btn-sm rounded-pill" data-bs-toggle="modal" data-bs-target="#locationModal">VER UBICACIÓN</button>
                    </div>
                </div>
            </div>

            <div class="col-9 mb-3" style="background-color: yeldlow;">
                <p class="savoye-font h3">Te espero en la terraza y alberca “Mónaco” ubicada en la colonia Primero de Mayo, calle Moisés Sosa No. 115</p>
            </div>
            <div class="col-9">
                <p class="savoye-font h3">Sugerencia: puedes vestir en tonos pasteles como azul, amarillo, lila, menta o nude. ¡Tu presencia hará que el día sea aún más especial!</p>
            </div>
        </div>
    </div>

    <div class="box-out">
        <div class="box"></div>

        <img src="{{ asset('images/mariposa2.svg') }}" alt="" class="position-absolute opacity-25 mariposa-1" style="z-index: 1 !important;">
        <img src="{{ asset('images/mariposa2.svg') }}" alt="" class="position-absolute opacity-25 mariposa-2" style="z-index: 1 !important;">

        <img src="{{ asset('images/flores.png') }}" alt="" class="position-absolute opacity-25 bottom-0 z-index-1 opacity-20" style="z-index: 1 !important;">

        <img src="{{ asset('images/mariposa-3.webp') }}" alt="" class="position-absolute opacity-50 mariposa-3-1" style="z-index: 1 !important;">
    </div>


    <div class="modal" tabindex="-1" id="locationModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Ubicación</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d948.7782634131463!2d-92.93139509501118!3d17.97347646299443!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85edd9d3e9ed1ce3%3A0x16a854ab083045e!2sMois%C3%A9s%20Sosa%20115%2C%20Primero%20de%20Mayo%2C%2086190%20Villahermosa%2C%20Tab.!5e0!3m2!1ses-419!2smx!4v1729225672492!5m2!1ses-419!2smx"
                        width="100%"
                        height="300"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                    <div id="emailHelp" class="form-text">Puedes usar el botón "Ampliar mapa", para abrir el mapa en google maps.</div>
                </div>
                <div class="modal-footer ma">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" tabindex="-1" id="assistanceModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirma tu asistencia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Tu número de telefóno</label>
                            <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <!-- <div id="emailHelp" class="form-text">We'll .</div> -->
                        </div>
                        <button type="submit" class="btn btn-primary">Confirmar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>

</html>