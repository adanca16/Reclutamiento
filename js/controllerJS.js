/*Funcion que envia al archivo registrarPersona_Controller.php que se encuantra en controller
, los datos de la persona atravez del metodo POST*/

function registrarPersona(){
    $(document).ready(function() {                   
        $.post('../controller/registrarPersona_Controller.php', {
                personaId : '320820',
                personaNombre : 'Kervin',
                personaPrimerApellido: 'Araya',
                personaSegundoApellido: 'Romero',
                personaTelefono: '84528925',
                personaCorreo: 'arayaromerokervin@gmail.com',
                personaFechaNacimiento: '1997-05-24',
                personaDireccion: 'Aquí',
                personaFoto: 'No tiene',
        }, function(responseText) {
            alert(responseText);
        });
    });
}