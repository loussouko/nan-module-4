<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!--Import de la police Montserrat-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/addCourse.css">
    <title>GenSchool - Booster votre niveau scolaire</title>
</head>
<body>
    <div class="container">
        <h2>Ajouter une cour</h2>
        <form action="">
            <div class="inputG">
                <label for="lecTitle">Entrez le titre</label>
                <input type="text" name="lecTitle">
            </div>
            <div class="inputG">
                <label for="">Selectionner la Lecon</label>
                <select name="lecLecon" id="lecLecon">
                    <option value="">-Choisir SVP-</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="inputG">
                <label for="">Selectionner le niveau</label>
                <select name="lecLevel" id="lecLevel">
                    <option value="">-Choisir SVP-</option>
                    <option value=""></option>
                </select>
            </div>
            <div class="inputG">
                <label for="">Saisissez le contenu</label>
                <textarea name="lecCont" id="lecCont" cols="30" rows="10"></textarea>
            </div>
            <button>Sauvegarder</button>
        </form>
    </div>
    
</body>
</html>