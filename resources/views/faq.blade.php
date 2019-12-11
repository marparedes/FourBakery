<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Pastelería · Preguntas frecuentes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Livvic&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Dancing+Script&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/font-awesome.css">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="/css/preguntasFrecuentes.css">
    <link rel="stylesheet" href="/css/main.css">

</head>

<body>

    @include('encabezado')

    <main>

        <h1>Preguntas frecuentes</h1>

        <div class="accordion" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne"
                            aria-expanded="false" aria-controls="collapseOne">
                            Sobre nuestras tortas
                        </button>
                    </h2>
                </div>
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        <h3>¿Qué tortas tienen?</h3>
                        <p>En la sección [....] puedes encontrar la variedad de masas, rellenos y coberturas que
                            elaboramos.</p>
                        <h3>¿Qué tamaño tienen las tortas?</h3>
                        <p>Ofrecemos las tortas en tres tamaños:</P>
                        <ul>
                            <li>Chico es para 4 o 5 porciones y mide 13 cm de diámetro</li>
                            <li>Mediano es para 10 a 12 porciones y mide 21 cm de diámetro</li>
                            <li>Grande es para 20 porciones y mide 26 cm de diámetro</li>
                        </ul>
                        <p>Todas tienen 8cm de altura.</P><br>
                        <p>NOTA: Las porciones por tamaño son sólo sugeridas y las medidas son aproximadas ya que al ser
                            elaborados artesanalmente pueden variar un poco entre uno y otro.</p>

                        <h3>¿Puedo elegir el diseño?</h3>
                        <p> Nos encanta personalizar cada uno de nuestros postres. Descríbenos tu idea y nosotros te
                            asesoramos para que volvamos realidad el torta de tus sueños.</p>

                        <h3>¿Cuál es el precio de las tortas?</h3>
                        <p>Los precios de las tortas de línea, puedes consultarlos en la sección [....]. Respecto de las
                            tortas con diseños especiales, cada torta es única, por eso te pedimos que nos envíes a
                            detalle la información de cómo te gustaría que fuera para poder enviarte en presupuesto
                            personalizado. Puedes enviar tu consulta en la sección [....].</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingTwo">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Sobre cómo realizar los pedidos
                        </button>
                    </h2>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="card-body">

                        <h3>¿Cómo realizo un pedido?</h3>
                        <p>Entra a la sección [....] y completa el formulario, te responderemos lo antes posible para
                            que puedas realizar el pago de tu anticipo y agendemos tu pedido.</p>

                        <h3>¿Con qué anticipación debo realizar el pedido?</h3>
                        <p>Para las tortas de línea, el tiempo estimado de preparación y entrega de los pedidos, una vez
                            acordados, es de un máximo de 1 hora y media. Algunos de nuestros pedidos son decorados en
                            el momento y eso demora la entrega.</p>
                        <p>Para pedidos de Diseños Especiales requerimos de 4 días hábiles de anticipación y una seña
                            del 50% para tomar tu pedido.</p>
                        <p>Los pedidos para Eventos requieren un mínimo 10 días hábiles de anticipación y una seña del
                            50% para tomar tu pedido.</p>
                        <p>En caso que tengas una emergencia, ponte en contacto con nosotros y haremos lo posible por
                            ayudarte.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Sobre los tiempos y modalidades de envíos
                        </button>
                    </h2>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <h3>¿Realizan envíos a domicilio?</h3>
                        <p>Si, los envíos a domicilio se realizan dentro de nuestro horario de atención presencial, de
                            10:00 a 19:00 hs. Puedes consultar los barrios adónde llegamos sin cargo en [....].</p>

                        <h3>¿Qué hago si mi zona no tiene cobertura de servicio a domicilio?</h3>
                        <p>Puedes retirar tu pedido en nuestra sucursal o solicitar entrega a domicilio con costo de
                            envío.</p>

                        <h3>¿En dónde se retiran los Diseños Especiales? ¿Tienen servicio a domicilio?</h3>
                        <p>Puedes recoger tu torta en nuestra sucursal o tenemos opción de envío a domicilio sin costo
                            en área limitada o entrega con costo de envío. También te podemos hacer llegar tus pedidos
                            si envías un UBER a nuestra tienda, en esta opción el torta deberá estar liquidado antes de
                            la entrega.</p>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header" id="headingFour">
                    <h2 class="mb-0">
                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                            Más preguntas
                        </button>
                    </h2>
                </div>
                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                    <div class="card-body">
                        <h3>¿Tienes alguna otra duda? ¿Quieres hacer el pago en efectivo? ¿No encuentras tu barrio?</h3>
                        <p>Comunícate por teléfono o mensaje al [....] y haremos lo posible por ayudarte.</p>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>


    @include('footer')


    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>