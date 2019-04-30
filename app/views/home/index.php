<?php defined('BASEPATH') or exit ('No se permite acceso directo');?>

	<aside id="client">
		<h3>CLIENT AREA : </h3>
				<hr><br>
		<div id="loog">
			<h2>loog_in</h2><br>
			<div>
			<label>nick_name:</label><br>
			<input type="name" class="form" name="id_client">	
			</div>
			<div>
			<label>password:</label><br>
			<input type="password" class="form" name="clau">	
			</div><br>
			<input type="button" class="form" name="boto" id="loog_in" value="GET IN!">
			<div id="loog_alert"></div>
			<br><hr class="punts"><br>
			<div>
			<label>new user:</label><br>
			<input type="submit" class="form" name="boto" id="to_register" value="TO REGISTER">	
			</div>
		</div>
	</aside>

	
		<div id="register">
			<h2>register <i class="fa fa-close" style="color: white" id="close_register"></i></h2><br>
									
			<form>
				<div>
				<label>nick_name (*): </label>
				<input type="text" class="form" name="nick_name"><br>
				<input type="button" class="form" name="nick_name" id="nick_name" value="CHECK nick_name">	
				</div>
				<div>
				<label>e-mail (*): </label>
				<input type="email" class="form" name="email">	
				</div>
				<div>
				<label>password (*): </label>
				<input type="password" class="form" name="pss1">	
				</div>
				<div>
				<label>repite password (*): </label>
				<input type="password" class="form" name="pss2">	
				</div>
				<input type="submit" class="form" name="register" value="REGISTER">
				<label><h4>los campos con (*) són obligatorios para el registro de cliente</h4></label>
				<hr><br>
				<div>
				<label>name:</label>
				<input type="text" class="form" name="nombre">
				</div>
								
				<label>surname:</label>
				<input type="text" class="form" name="apellido"><br>
				<label>adress:</label>
				<input type="text" class="form" name="adress"><br>
				<label>CP/city:</label>
				<input type="text" class="form" name="city"><br>
				<label>country:</label>
				<input type="text" class="form" name="country"><br>
				<input type="button" class="form" name="datos" value="ACTUALIZE"><br><br>
			</form>				
		</div>				
	
	<aside id="joc">
		<div>
		<h3>PERFUME : </h3><hr><br>
		<h2>personalizado</h2>
		<h2>natural</h2>
		<h2>artesanal</h2><br>	
		<p><cite>"Para los griegos, todo lo bello, armonioso, proporcionado y estético era bueno y por ende de origen divino, así que a nadie puede extrañarle que atribuyeran a sus Dioses el regalo de los perfume"</cite> </p>	
		</div>
		<br><hr class="punts"><br>
		<content>
			<input type="button" class="crea" value="crea tu propuesta">
		</content>


		</div>
	</aside>

	<div class="limpia"></div>
	<section id="galeria">
		<img src="<?php echo BASE_DIR_URL?>webroot/img/foto.png" width="422px" height="282px" alt="Imagen" title="fotografia">	
	</section> 

	<div class="limpia"></div>