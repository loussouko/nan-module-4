$(function (){
    $('form').submit(function(e){

        e.preventDefault();
        $("#text").empty();
        var postdata= $("form").serialize();
        $.ajax({
            type:'post',
            url:'signin',
            data: postdata,
            dataType: 'json',
            success: function(result)
            {
                if (result.isSuccess)
                {
                   alert('votre inscription a ete enregistre avec success');
                    $("form")[0].reset();
                }
                else
                {
                    $("#nom + #text").html(result.nomError);
                    $("#prenom+ #text").html(result.prenomError);
                    $("#mail + #text").html(result.mailError);
                    $("#pays + #text").html(result.paysError);
                    $("#number + #text").html(result.contactError);
                }
            }

        });
    });
})