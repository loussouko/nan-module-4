$(document).ready(function()
{

    var nom =$('#nom');
    var prenom =$('#prenom');
    var contact= $('#number');
    var ville = $('#ville');
    var pays = $('#pays');
    var mdp =$('#mdp');
    var address =$('#address');
    var email =$('#mail');
    var test = $('.text');
    test.css('display','none');

    $('form').submit(function(e){

        e.preventDefault();
        var verif = verifier(nom,prenom,email,pays,ville,contact,mdp,address);
        if(verif == true)
        {
            alert('votre inscrition a ete enregistre avec success');

            $('#success').setAttribute('value', 'true');
            // innerHtml a ete remplace par html en jquery
        }
    });

    function verifier(nom,prenom,email,pays,ville,contact,mdp,address){
        if(nom.val() == "")
        { // si le champ est vide
            $('#nom + .text').css('display', 'block'); // on affiche le message d'erreur
            $('#nom + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool1 =false;
        }
        else
        {
            $('#nom + .text').css( // on rend le champ rouge
                'display', 'none');
            var bool1 =true;
        }

        if(prenom.val() == "")
        { // si le champ est vide
            $('#prenom + .text').css('display', 'block'); // on affiche le message d'erreur
            $('#prenom + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool2 =false;
        }
        else
        {
            $('#prenom + .text').css( // on rend le champ rouge
                'display', 'none');
            var bool2 =true;
        }

        if (email.val() == "") {
            $('#mail + .text').css('display', 'block'); // on affiche le message d'erreur
            $('#mail + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool3 =false;
        }
        else if(email.val() != "" &&!(/^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$/).test(email.val()))
        {
            $('#mail + .text').css('display', 'block');
            // on affiche le message d'erreur
            $('#mail + .text').text('le mail est incorrecte');
            $('#mail + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool3 =false;
        }
        else
        {
            $('#mail + .text').css(
                'display', 'none');
            var bool3 =true;
        }
        if(pays.val() == "")
        { // si le champ est vide
            $('#pays + .text').css('display', 'block'); // on affiche le message d'erreur
            $('#pays + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool4 =false;
        }
        else
        {
            $('#pays + .text').css( // on rend le champ rouge
                'display', 'none');
            var bool4 =true;
        }

        if(ville.val() == "")
        { // si le champ est vide
            $('#ville + .text').css('display', 'block'); // on affiche le message d'erreur
            $('#ville + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool5 =false;
        }
        else
        {
            $('#ville + .text').css( // on rend le champ rouge
                'display', 'none');
            var bool5 =true;
        }
        if(contact.val() == "")
        { // si le champ est vide
            $('#number + .text').css('display', 'block'); // on affiche le message d'erreur
            $('#number + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool6 =false;
        }
        else if(contact.val() != "" &&!(/^[0-9]{8,}$/).test(contact.val()))
        {
            $('#number + .text').css('display', 'block');
            // on affiche le message d'erreur
            $('#number+ .text').text('le numero doit contenir au moins 8 chiffres');
            $('#number + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool6 =false;
        }
        else
        {
            $('#number + .text').css( // on rend le champ rouge
                'display', 'none');
            var bool6 =true;
        }

        if (mdp.val() == "") {
            $('#mdp + .text').css('display', 'block'); // on affiche le message d'erreur
            $('#mdp + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool7 =false;
        }
        else if(mdp.val() != "" &&!(/^[a-zA-Z0-9]{5,}$/).test(mdp.val()))
        {
            $('#mdp + .text').css('display', 'block');
            // on affiche le message d'erreur
            $('#mdp + .text').text('le champ doit contenir au moins 5 caracteres');
            $('#mdp + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool8 =false;
        }
        else
        {
            $('#mdp + .text').css(
                'display', 'none');
            var bool7 =true;
        }
        if(address.val() == "")
        { // si le champ est vide
            $('#address + .text').css('display', 'block'); // on affiche le message d'erreur
            $('#address + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool8 =false;
        }
        else if(address.val() != "" &&!(/^[0-9]{2,}\s*[a-zA-Z]{2,}\s*[0-9]{3,}\s*[a-zA-Z]{6,}$/).test(address.val()))
        {
            $('#address + .text').css('display', 'block');
            // on affiche le message d'erreur
            $('#address + .text').text('le champ doit contenir au moins 16 caracteres');
            $('#address + .text').css( // on rend le champ rouge
                'color', 'red');
            var bool8 =false;
        }
        else
        {
            $('#address + .text').css( // on rend le champ rouge
                'display', 'none');
            var bool8 =true;
        }

        return bool1 && bool2 &&bool3 && bool4 && bool5 && bool6 && bool7 && bool8 ;
    };

});