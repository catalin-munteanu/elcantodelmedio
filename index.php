<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="wp-content\themes\cantodelmedio\css\style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&family=Quicksand:wght@300;400;600;700&display=swap" rel="stylesheet">
    <script src="wp-content\themes\cantodelmedio\js\main.js"></script>
    <title>El canto del medio</title>
</head>

<body>

    <header>
        <ul id="menuRedesHeader">
            <li class="iconRedesHeader"><a href="https://www.youtube.com/channel/UCLtgVMuTefGp63pZiPophPA" target="_blank"><img src="wp-content\themes\cantodelmedio\img\mobile\yt_logo_only.png" class="imgRedesHeader" id="logoYoutubeHeader"></a></li>
            <li class="iconRedesHeader"><a href="https://www.instagram.com/elcantodelmedio/" target="_blank"><img src="wp-content\themes\cantodelmedio\img\mobile\ig-logo.png" class="imgRedesHeader" id="logoInstagramHeader"></a></li>
            <li class="iconRedesHeader"><a href="https://wa.me/5491136148307" target="_blank"><img src="wp-content\themes\cantodelmedio\img\mobile\wa-logo.png" class="imgRedesHeader" id="logoWhatsAppHeader"></a></li>
        </ul>

        <button id="burgerMenu"><img src="wp-content\themes\cantodelmedio\img\mobile\burger-menu.png" id="burgerMenuImg"></button>
    </header>

    <main>

        <section>

            <img src="wp-content\themes\cantodelmedio\img\mobile\TEXTO PRINCIPAL.png" id="logoCuerpoOrig">

            <article>

                <h1 class="elementoSeccion1">El canto del medio</h1>

                <img src="wp-content\themes\cantodelmedio\img\mobile\TIPITO.png" id="tipito" class="elementoSeccion1">

                <h2 class="elementoSeccion1"><span id="escuelaCantoTitulo">Escuela de Canto Consciente y Visionario</span>
                    <br>de <a href="#bio" id="paulaNaanim">Paula Naanim Telis</a>
                </h2>

            </article>

        </section>

        <section id="formacionIntegral">

            <h2>Formación integral</h2>

            <article>
                <p>El programa de Formación está diseñado para que realices un recorrido de aprendizaje teórico-práctico de (re)conocimiento, estimulación y entrenamiento de las funciones neurofisiológicas que sustentan la emisión saludable del sonido vocal integrando la expresión emocional y el abordaje de las creencias mentales que sustentan nuestro canto. con el objetivo de que desarrolles un Canto Consciente y lo apliques en tu vida artística y creativa.</p>
                <p>También contamos con una formación especial en Canto Visionario, con el objetivo de que aprendas a usar tu voz en estados alterados o expandidos de conciencia.</p>
                <p>Conocé el programa completo</p>
                <p class="importantP">Próximo curso en abril 2023</p>
            </article>

            <button class="accordion">Nivel 1<br>Iniciación al Canto Consciente</button>
            <article class="panel">
                <p>Este curso teórico - práctico está pensado para que aprendas las bases funcionales esenciales de la emisión neurofisiológica. Dichas funciones permiten la activación del canal principal, el canal del medio, desde el cual potenciamos el desarrollo de un canto consciente, saludable y musicalmente eficiente.</p>

                <p>Modalidad: presencial y grupal<br>
                    Duración: 4 meses (Abril - Julio 2023)<br>
                    Cursada: Lunes de 19hs a 21hs<br>
                    Lugar: Estudio Neo Baladi (zona Parque Centenario)<br>
                    Valor: $6000 mensual</p>

                <p>Orientado a cantantes-artistas y a toda persona interesada en integrar al canto como medio de auto-conocimento y creación</p>

                <p>Inicia el lunes 3 de abril</p>

                <p>Si querés conocer los contenidos del curso, hace click acá.</p>

                <p>(*) El curso cuatrimestral de Iniciación al Canto Consciente corresponde al nivel 1 de formación obligatoria para acceder a los demás cursos facilitados por la escuela.</p>

                <p>Reservá tu lugar</p>
            </article>

            <script>
                var acc = document.getElementsByClassName("accordion");
                var i;

                for (i = 0; i < acc.length; i++) {
                    acc[i].addEventListener("click", function() {
                        this.classList.toggle("active");
                        var panel = this.nextElementSibling;
                        if (panel.style.maxHeight) {
                            panel.style.maxHeight = null;
                        } else {
                            panel.style.maxHeight = panel.scrollHeight + "px";
                        }
                    });
                }
            </script>

        </section>

        <section id="consultoriaVoz">
            <h2>Consultoría para la voz</h2>

            <p>Solicitá tu consulta</p>
        </section>

        <section id="bio">

            <h2 id="hola">¡Hola!<br>
                <strong id="nombrePaula">soy Paula Naanim Telis</strong>
            </h2>
            <img src="wp-content\themes\cantodelmedio\img\mobile\imagenBioRecortada.png" id="imagenBio">
            <br>
            <p>Cantante y compositora de música urbana y tribal, escritora, artista de performance y practicante de danzas
                orientales y contemplativas.</p>
            <br>
            <p>Profesora de canto y Lic. En Musicoterapia (UBA) con perspectiva en género, comunidad, salud holística y
                transpersonal.</p>
            <br>
            <p>Luego de más de 12 años de experiencia, más de 500 acompañamientos y del estudio comparado de usos y
                funciones del cuerpo y la voz en distintas culturas y subculturas del mundo, creé El canto del medio para
                difundir los hallazgos de mi investigación.</p>
            <br>
            <p>Considero que la práctica del canto consciente nos permite conocer y activar a nuestro canal central, desde
                el cual es posible (re)unificarnos en la percepción de nuestro medio interno, externo y divino a partir del
                uso de la voz. Ello nos pone en contacto con la emisión fisiológica, garantía de salud física y emocional al
                servicio de la expresión, la comunicación y la creatividad. A partir de allí, también es posible desarrollar
                un canto visionario.</p>
            <br>
            <p>Es mi deseo que descubras, percibas e integres los beneficios del canto para expandirlos, potenciarlos y
                aplicarlos en tu vida artística y creativa.</p>

        </section>

        <section id="cierre">
            <article>
                <p>Gracias por tu interés en los servicios de<br>
                    <strong>El canto del medio<br>Escuela de Canto Consciente y Visionario.</strong>
                </p>
                <p>¡Te espero!</p>
            </article>

            <img src="wp-content\themes\cantodelmedio\img\mobile\TIPITO.png" id="tipito" class="elementoSeccion1">

            <article>
                <p><strong>Paula Naanim Telis</strong></p>
                <p>info@elcantodelmedio.com.ar</p>
                <p>1136148307</p>
            </article>
        </section>

    </main>

    <footer>

    </footer>

</body>

</html>