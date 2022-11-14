$(document).ready(function() {
    $(".add").click(function() {
        var Codeepreuve = $("#Code epreuve").val();
        var NumeroEleve = $("#Numero Eleve").val();
        var NomEleve = $("#Nom Eleve").val();
        var Prenomeleve = $("#Prenom eleve").val();
        var date = $("#date").val();
        var note = $("#note").val();
        var Coefficient = $("#Coefficient").val();
        var ligne = "<tr><td>" + "<input type='checkbox' name='select'>" + 
                    "</td><td>" +"<input type='text' name='Code epreuve' value=' '' maxlength='4' size='6' >" +
                    "</td><td>" + "<input type='text' name='Numero Eleve' value=' '' maxlength='8' size='10'>" + 
                    "</td><td>" + "<input type='text' name='Nom eleve' value=' '' maxlength='20' size='15'>" +
                    "</td><td>" + "<input type='text' name='Prenom Eleve' value=' '' maxlength='20' size='15'>"  +
                    "</td><td>"+ "<input type='date'>" +
                    "</td><td>"+ "<input type='number' step='any' maxlength='5' size='6'>" + 
                    "</td><td>" + "<input type='number'  step='any' maxlength='5' size='6'>" + "</td></tr>";
        $("table.test").append(ligne);
    });
    $(".delete").click(function() {
        $("table.test").find('input[name="select"]').each(function() {
            if ($(this).is(":checked")) {
                $(this).parents("table.test tr").remove();
            }
        });
    });
});