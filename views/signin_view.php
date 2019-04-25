<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Import de la police Montserrat-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css">
    <title>GenSchool - Booster votre niveau scolaire</title>
</head>
<body>
	<div class="main-container">
		<div class="blur"></div>
		<div class="container">
			<div class="sec0">
				<h2>GenSchool</h2>
				<p>vec son modèle économique, GenSchool peut faire face à l'essor spectaculaire des MOOCs, ces cours produits généralement par <br>de grandes écoles et proposés également gratuitement. Internet a déclenché un bouleversement technologique, qui permet de diffuser le savoir sur toute la planète, et qui augure de profonds changements dans le système éducatif.

Pour GBELE HANS , cofondateur de GenSchool, «il est difficile de dire aujourd'hui à quoi va ressembler le système éducatif de demain, pour autant on sait qu'une révolution est en marche et que beaucoup d'acteurs sont en train d'arriver et c'est tout un écosystème qui est en train de se réinventer, à la fois à l'intérieur de la classe avec des solutions innovantes, mais aussi en dehors, et c'est là que GenSchool se positionne».

L'école de demain pourrait donc devenir un espace virtuel, où il sera possible d'apprendre partout tout le temps et quel que soit le niveau.</p>
			</div>
			<div class="sec1">
				<div class="yForm">
					<h2>Inscrivez Vous</h2>
					<form action="signin" method="POST" enctype="multipart/form-data">
						<div class="inputG">
							<label for="regName">Votre Nom</label>
							<input id="regName" name="regName" type="text">
						</div>
						<div class="inputG">
							<label for="regPren">Votre Prenom</label>
							<input id="regPren" name="regPren" type="text">
						</div>
						<div class="inputG">
							<label for="regLevel">Votre Niveau</label>
							
							<select name="regLevel" id="regLevel">
								<option value="">-Choisir SVP-</option>
								<?php
                                $niveau = Niveau::getAllNiveau();
									//debug($niveau);
									foreach($niveau as $niv)
									{
								?>
								
								<option value="<?= $niv['idNiveau']; ?>"><?= $niv['libNiveau']; ?></option>
								<?php
									}
								?>
							</select>
							
						</div>
                        <div class="inputG">
                            <label for="regImg">Image</label>
                            <input id="regImg" name="regImg" type="file" accept="image/*">
                        </div>
						<div class="inputG">
							<label for="regMail">Votre Email</label>
							<input id="regMail" name="regMail" type="email">
						</div>
						<div class="inputG">
							<label for="regPass">Votre Mot de Passe</label>
							<input id="regPass" name="regPass" type="password">
						</div>
						<button type="submit">Soumettre</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>