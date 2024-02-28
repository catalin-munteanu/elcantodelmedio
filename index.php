<?php

get_header();

?>
<main>

	<section id="presentacionSitio">

		<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/logo-color-2.webp" id="logoCuerpoOrig">

		<article>

			<h1 class="elementoSeccion1">El canto del medio</h1>

			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/TIPITO.png" id="tipito" class="elementoSeccion1">

			<h2 class="elementoSeccion1"><span id="escuelaCantoTitulo">Escuela de Canto Consciente y Visionario</span>
				<br>de <a href="#bio" id="paulaNaanim">Paula Naanim Telis</a>
			</h2>

		</article>

	</section>

	<section id="videosInformativos">
		<article>
			<div class="videoContainer">
				<iframe width="330" height="186" class="itemVideoInformativo" data-src="https://www.youtube.com/embed/I81JaE04lGs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<h2>Canto Consciente</h2>
			<p>¿Qué es?</p>
		</article>

		<article>
			<div class="videoContainer">
				<iframe width="330" height="186" class="itemVideoInformativo" data-src="https://www.youtube.com/embed/aMfno7dpu1Q" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<h2>El canto del medio</h2>
			<p>¿Por qué?</p>
		</article>

		<article>
			<div class="videoContainer">
				<iframe width="330" height="186" class="itemVideoInformativo" data-src="https://www.youtube.com/embed/1B9qxSre-N0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
			</div>
			<h2>Canto Visionario</h2>
			<p>¿Qué es?</p>
		</article>
	</section>

	<section id="formacionIntegral">

		<figure class="imgFondo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/fondo-verde-nvo.svg" alt="" srcset="">
		</figure>

		<h2>Formación integral</h2>

		<img class="trazoDecorativo" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-1.svg" alt="" srcset="">

		<article>
			<p>El programa de Formación está diseñado para que realices un recorrido de aprendizaje que te permita adquirir los conocimientos teóricos y las habilidades prácticas esenciales para que el contacto con tu Voz sea saludable, orgánico, expresivo, creativo y musicalmente eficiente. Nuestro enfoque se caracteriza por estudiar a la Voz de una forma integral, es decir, contemplando la intrínseca relación de la creación de sonido humano con los atravesamientos emocionales alojados en las memorias del cuerpo, con las creencias personales y colectivas que condicionan o potencian nuestra expresión y también, con el desarrollo y la construcción de la identidad personal en relación a un contexto, cultura o subcultura.</p>
			<p>La Formación en Canto Consciente está dirigida a quienes deseen aplicar estos conocimientos en entornos artísticos y creativos. La Formación en Canto Visionario, a quienes quieran aplicarlos en entornos terapéuticos y de sanación.</p>

			<video playsinline id="video-principal" class="videoPlayer" controls width="280" onclick="togglePlayPause(this)">
				<source src="<?php echo get_template_directory_uri(); ?>/img/mobile/Video-1.mp4" type="video/mp4">
			</video>

			<p>Ambos enfoques se completan con 2 niveles de estudio. Una vez realizados, contás con la posibilidad de anotarte en las reuniones de Supervisión, en donde resolveremos dudas y compartiremos hallazgos o reflexiones surgidas de las experiencias prácticas de los estudiantes.</p>

			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/TIPITO.png" id="separadorFormacion" class="elementoSeccion1">

			<p class="importantP">Los próximos cursos inician en Abril 2024</p>
			<p><strong class="textoNegrita">Nivel 1 Virtual:</strong> Lunes 19 a 20.30hs / Miércoles 10 a 11.30hs<br>
				<strong class="textoNegrita">Nivel 1 Presencial:</strong> Martes 19 a 21hs<br>
				<strong class="textoNegrita">Nivel 2 Virtual:</strong> Miércoles 19.30 a 21hs<br>
				<strong class="textoNegrita">Nivel 2 Presencial:</strong> Jueves 19 a 20.30hs
			</p>
			<p class="importantP">Inscripciones abiertas</p>
		</article>

		<img class="trazoDecDos" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-2.svg" alt="" srcset="">

		<button class="accordion">Nivel 1<br>Iniciación al Canto Consciente</button>
		<article class="panel">

			<video playsinline id="video-nivel-1" class="videoPlayer" controls width="280" onclick="togglePlayPause(this)">
				<source src="<?php echo get_template_directory_uri(); ?>/img/mobile/Video-2.mp4" type="video/mp4">
			</video>

			<p>El Nivel 1 de la Formación Integral en Canto Consciente es un curso teórico - práctico orientado al estudio de las bases funcionales esenciales de la emisión neurofisiológica. Estas bases son las que sustentan el desarrollo de un canto orgánico, saludable, expresivo y musicalmente eficiente.</p>

			<article id="coordenadasIniciacionConsciente">
				<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-circ-3.svg" alt="" srcset="">
				<div>
					<p><strong class="textoNegrita">Duración:</strong> 4 meses (Abril-Julio)</p>
					<p><strong class="textoNegrita">Modalidad virtual:</strong> Lunes de 19 a 20.30hs / Miércoles de 10 a 11.30hs</p>
					<p><strong class="textoNegrita">Modalidad presencial:</strong> Martes de 19 a 21hs en Río Cultural (Río de Janeiro y Av. Rivadavia, CABA, Argentina)</p>
					<br>
					<p><strong class="textoNegrita">Todos los cursos son grupales</strong></p>
				</div>
			</article>

			<p>Orientado a cantantes-artistas y a toda persona interesada en integrar al canto como medio de auto-conocimento y creación.</p>

			<p>El curso cuatrimestral de Iniciación al Canto Consciente corresponde al nivel 1 de formación obligatoria para acceder a los demás cursos facilitados por la escuela.</p>
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
						panel.style.maxHeight = panel.scrollHeight + 500 + "px";
					}
				});
			}
		</script>

		<div class="containerBotonesHorizontal">
			<div class="containerCadaBoton">
				<button class="accordionNivelDos">Nivel 2<br>Profundización en Canto Consciente</button>
				<article class="panelNivelDos">

					<p>El Nivel 2 de la Formación Integral en Canto Consciente es un curso teórico - práctico orientado al fortalecimiento de las bases funcionales de la emisión neurofisiológica estudiadas en el nivel 1. También, se propone acompañar la creación de hábitos de entrenamiento que potencien la integración y aplicación de lo aprendido en la vida artística y creativa. </p>

					<article id="coordenadasProfundizacionConsciente">
						<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-circ-4.svg" alt="" srcset="">
						<div>
							<p><strong class="textoNegrita">Duración:</strong> 4 meses (Abril-Julio)</p>
							<p><strong class="textoNegrita">Modalidad virtual:</strong> Miércoles de 19.30 a 21hs</p>
							<p><strong class="textoNegrita">Modalidad presencial:</strong> Jueves de 19 a 20.30hs en CasaEstudio El Canto del Medio (A 2 cuadras de Rojas y Av. Rivadavia, CABA, Argentina)</p>
							<br>
							<p><strong class="textoNegrita">Todos los cursos son grupales</strong></p>
						</div>
					</article>

					<p>Orientado a cantantes-artistas y a toda persona interesada en profundizar en el canto como medio de auto-conocimento y creación.</p>
				</article>

				<script>
					var acc = document.getElementsByClassName("accordionNivelDos");
					var i;

					for (i = 0; i < acc.length; i++) {
						acc[i].addEventListener("click", function() {
							this.classList.toggle("active");
							var panelNivelDos = this.nextElementSibling;
							if (panelNivelDos.style.maxHeight) {
								panelNivelDos.style.maxHeight = null;
							} else {
								panelNivelDos.style.maxHeight = panelNivelDos.scrollHeight + 500 + "px";
							}
						});
					}
				</script>

			</div>

			<div class="containerCadaBoton">

				<button class="accordionNivelDosVisionario">Nivel 2<br>Profundización en Canto Visionario</button>
				<article class="panelNivelDosVisionario">

					<p>El Nivel 2 de la Formación Integral en Canto Visionario es un curso teórico-práctico orientado al estudio de la voz como medio de canalización akáshica o cuántica. Se propone entrenar estados de presencia expandida por medio de la escucha holística para favorecer su aplicación en ámbitos terapéuticos y de sanación.</p>

					<article id="coordenadasProfundizacionVisionario">
						<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-circ-5.svg" alt="" srcset="">
						<div>
							<p><strong class="textoNegrita">Modalidad:</strong> presencial y grupal</p>
							<p><strong class="textoNegrita">Duración:</strong> 4 meses</p>
							<p><strong class="textoNegrita">Lugar:</strong> Estudio Neo Baladi (zona Parque Centenario, Capital Federal, Argentina)</p>
						</div>
					</article>

					<p>Orientado a cantantes-canalizadores y a toda persona interesada en integrar al canto como medio de lectura y escritura akáshica o cuántica.</p>
				</article>

				<script>
					var acc = document.getElementsByClassName("accordionNivelDosVisionario");
					var i;

					for (i = 0; i < acc.length; i++) {
						acc[i].addEventListener("click", function() {
							this.classList.toggle("active");
							var panelNivelDosVisionario = this.nextElementSibling;
							if (panelNivelDosVisionario.style.maxHeight) {
								panelNivelDosVisionario.style.maxHeight = null;
							} else {
								panelNivelDosVisionario.style.maxHeight = panelNivelDosVisionario.scrollHeight + 500 + "px";
							}
						});
					}
				</script>

			</div>
		</div>

		<article class="links-detalles-formacion">
			<div class="container-link-pc">
				<img class="flecha-izq-formacion" src="<?php echo get_template_directory_uri(); ?>/img/mobile/flecha-doble-izq.svg">
				<p class="textoNegrita"><a href="../programa-curso" target="_blank">Conocé el programa completo y los contenidos de los cursos</a></p>
				<img class="flecha-der-formacion" src="<?php echo get_template_directory_uri(); ?>/img/mobile/flecha-doble-der.svg">
			</div>

			<!--<article class="links-detalles-consultoria">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-circ-1.svg" alt="" srcset="" class="trazo-circ-consultoria">
			<div>
				<p class="textoNegrita"><a href="https://wa.me/5491136148307" target="_blank">
						Si querés solicitar tu consulta hacé click acá
					</a></p>
				<img class="trazo-subrayado-contacto-cons" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-sub-cont.svg">
			</div>
		</article> -->
			<article class="link-consultas-reserva">
				<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-circ-1.svg" alt="" srcset="" class="trazo-circ-reserva">
				<div class="container-consultas-formacion">
					<p class="textoNegrita"><a href="https://wa.me/5491136148307" target="_blank">Consultas y reserva de cupos</a></p>
					<img class="trazo-subrayado-contacto-form" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-sub-cont.svg">
				</div>
			</article>
		</article>

	</section>

	<section id="consultoriaVoz">
		<figure class="imgFondo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/fondo-negro.svg" alt="" srcset="">
		</figure>

		<h2>Consultorías para la voz</h2>

		<img class="trazoDecDosCinco" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-9.svg" alt="" srcset="">

		<img class="trazoDecTres" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-4.svg" alt="" srcset="">

		<p>El servicio de Consultoría para la Voz es un espacio individual creado para acompañar la expresión de emociones y recuerdos que podrían estar bloqueando a tu garganta, inhibiendo la expresión espontánea o condicionando el contacto sensible con la Voz propia. También ofrecemos la posibilidad de decodificar y recodificar creencias condicionantes que pudieran estar afectando tu relación con el despliegue de la Voz, tanto en contextos de desarrollo artístico profesional como en la comunicación e interacción con otras áreas de la vida cotidiana.</p>

		<article id="coordenadasConsultoria">
			<p>Modalidad : presencial y/u online</p>
			<p>Lugar : Estudio El Canto del Medio (zona Caballito, Capital Federal, Argentina)</p>
		</article>

		<article class="links-detalles-consultoria">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-circ-1.svg" alt="" srcset="" class="trazo-circ-consultoria">
			<div class="container-consultas-consultoria">
				<p class="textoNegrita"><a href="https://wa.me/5491136148307" target="_blank">
						Si querés solicitar tu consulta hacé click acá
					</a></p>
				<img class="trazo-subrayado-contacto-cons" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-sub-cont.svg">
			</div>
		</article>

	</section>

	<section id="asesoriaVoz">
		<figure class="imgFondo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/fondo-amarillo.svg" alt="" srcset="">
		</figure>

		<img class="trazoDecCinco" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-6.svg" alt="" srcset="">

		<h2>Asesorías para cantantes y artistas de la voz</h2>

		<p>El servicio de Asesoría es un espacio de acompañamiento individual creado para informar y orientar a cantantes y artistas de la Voz en la elección de técnicas, estrategias y procedimientos que sean coherentes con los objetivos de su formación y también con la creación de su identidad y recorrido profesional. También ofrecemos la posibilidad de decodificar y recodificar creencias condicionantes que pudieran estar afectando el crecimiento o desarrollo artístico.</p>

		<img class="trazoDecSeis" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-7.svg" alt="" srcset="">

		<article id="coordenadasAsesoria">
			<p>Modalidad : presencial y/u online</p>
			<p>Lugar : Estudio El Canto del Medio (zona Caballito, Capital Federal, Argentina)</p>
		</article>

		<article class="links-detalles-asesoria">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-circ-2.svg" alt="" srcset="" class="trazo-circ-asesoria">
			<div class="container-consultas-asesoria">
				<p class="textoNegrita"><a href="https://wa.me/5491136148307" target="_blank">Si querés solicitar tu asesoramiento hacé click acá</a></p>
				<img class="trazo-subrayado-contacto-ases" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-sub-cont.svg">
			</div>
		</article>

	</section>

	<section id="bio">

		<article id="presentacionFoto">
			<h2 id="hola">¡Hola!<br>
				<strong id="nombrePaula">Soy Paula Naanim Telis</strong>
			</h2>
			<figure>
				<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-circ-foto.svg" id="trazoImagenBio" loading="lazy">
				<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/imagenBioRecortada.png" id="imagenBio" loading="lazy">
			</figure>
		</article>
		<br>
		<article>
			<p>Cantante y compositora de música urbana y tribal, escritora de dos libros, artista de performance, practicante de danzas orientales y contemplativas, profesora de canto y Licenciada en Musicoterapia (UBA) con perspectiva en género, comunidad, salud holística y transpersonal. Me dedico a crear y acompañar transformaciones individuales y colectivas realizadas por medio del arte. Luego de más de 12 años de experiencia, más de 500 acompañamientos y de una investigación continua en el estudio comparado de usos y funciones del cuerpo y la voz en distintas culturas y subculturas del mundo, creé El canto del medio para difundir mis conclusiones e inspirar a otras personas en el descubrimiento e integración de su propia voz fisiológica, orgánica, saludable y expresiva.</p>

			<p>Es mi deseo que seamos cada vez más quienes conozcamos los beneficios de desarrollarnos artística y creativamente por medio de la Voz.</p>
		</article>

		<article>
			<div class="container-link-pc">
				<img class="flecha-izq-bio" src="<?php echo get_template_directory_uri(); ?>/img/mobile/flecha-doble-izq.svg">
				<div class="container-link-tye">
					<p class="textoNegrita"><a href="<?php echo esc_url(get_permalink(get_page_by_path('trayectoria-estudios'))); ?>" target="_blank">Ver trayectoria y estudios</a>
					</p>
					<img class="trazo-subrayado-link-tye" src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-sub-cont.svg">
				</div>
				<img class="flecha-der-bio" src="<?php echo get_template_directory_uri(); ?>/img/mobile/flecha-doble-der.svg">
			</div>
		</article>

		<article id="galeriaFotosBioIndex">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-scotch-uno.svg" class="trazo-scotch-uno" id="scotch-bio-gruesa-1" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-scotch-tres.svg" class="trazo-scotch-uno" id="scotch-bio-fina-1" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/fotoBio01-c.webp" class="fotoGaleriaBio" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/foto-bio-02b.webp" class="fotoGaleriaBio" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/foto-bio-03.webp" class="fotoGaleriaBio" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-scotch-dos.svg" class="trazo-scotch-dos" id="scotch-bio-gruesa-2" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-scotch-cuatro.svg" class="trazo-scotch-dos" id="scotch-bio-fina-2" loading="lazy">
		</article>

	</section>

	<section id="last-post-blog">
		<h2>Blog</h2>
		<p class="link-all-posts"><a href="<?php echo esc_url(site_url('/blog/')); ?>" target="_blank">Ver todos los posteos</a></p>
		<?php
		$recent_posts = get_posts(array(
			'numberposts' => 1,
			'orderby'     => 'post_date',
			'order'       => 'DESC',
		));

		if ($recent_posts) {
			$recent_post = $recent_posts[0];

			// Display post title
			echo '<h3 class="titulo-post-blog">' . esc_html($recent_post->post_title) . '</h3>';

			// Display only the first 200 characters of the post content
			$post_content = apply_filters('the_content', $recent_post->post_content);
			$trimmed_content = wp_trim_words($post_content, 30, '... ');

			// Add a clickable link to the full post
			echo '<div class="texto-post-blog">' . $trimmed_content . '<a class="textoNegrita" href="' . esc_url(get_permalink($recent_post->ID)) . '" target="_blank">Ver más</a></div>';
		} else {
			echo 'No posts found.';
		}
		?>
	</section>


	<section id="cierre">
		<figure class="imgFondo">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/fondo-verde-final.svg" alt="" srcset="">
		</figure>
		<article>
			<p>Gracias por tu interés en los servicios de<br>
				<strong>El canto del medio<br>Escuela de Canto Consciente y Visionario.</strong>
			</p>
			<p>¡Te espero!</p>
		</article>

		<article id="galeriaFotosServicios">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-scotch-uno.svg" class="trazo-scotch-tres" id="scotch-cierre-gruesa-1" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-scotch-tres.svg" class="trazo-scotch-tres" id="scotch-cierre-fina-1" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/foto-final-01.jpeg" class="fotoGaleriaServicios" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/foto-final-02.jpeg" class="fotoGaleriaServicios" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/foto-final-03.jpeg" class="fotoGaleriaServicios" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/foto-final-04.jpeg" class="fotoGaleriaServicios" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/foto-final-05.jpeg" class="fotoGaleriaServicios" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-scotch-dos.svg" class="trazo-scotch-cuatro" id="scotch-cierre-gruesa-2" loading="lazy">
			<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/trazo-scotch-cuatro.svg" class="trazo-scotch-cuatro" id="scotch-cierre-fina-2" loading="lazy">
		</article>
		<img src="<?php echo get_template_directory_uri(); ?>/img/mobile/TIPITO.png" id="tipito" class="elementoSeccion1">

		<article>
			<p><strong>Paula Naanim Telis</strong></p>
			<p>info@elcantodelmedio.com</p>
			<p><a href="https://wa.me/5491136148307" target="_blank">(+54 9) 1136148307</a></p>
		</article>
	</section>

	<section id="section-ig-posts">

		<article id="instagram-posts">

			<?php
			?>
			<?php

			$url_contents = file_get_contents('https://sheets.googleapis.com/v4/spreadsheets/106KshOGZ4R6zF7vv8v45DAgYj2HW977f1HnEa0PTjz8/values/final?alt=json&key=AIzaSyDmz_K1S2UXf7DaFy-4VVVVRUw-Rtewgh4');

			$data = json_decode($url_contents, true);

			if (is_array($data) && !empty($data)) {
				for ($i = 0; $i < count($data['values']); $i++) {
					echo '<div class="instagram-post">' . $data['values'][$i][0] . '</div>';
				};
			}

			?>

		</article>

	</section>

</main>

<footer>
	<p>Diseño y desarrollo del sitio: <strong class="textoNegrita">Catalina Pampin</strong> ◆ Concepto visual: <strong class="textoNegrita">El canto del medio</strong></p>
</footer>

</body>

</html>