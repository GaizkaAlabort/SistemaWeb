function validar(){
    if(malEmail(document.registro.email)) return;
    if(malNombre(document.registro.nombre)) return;
    if(malTLF(document.registro.telefono)) return;
    if(malDNI(document.registro.dni)) return;
    document.registro.submit();
}

function malEmail(campo){
    var email=/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/;

    if (!email.test(campo.value)){
        alert("El correo electronico " + campo.value + " es incorrecto.");
        campo.focus();
        campo.select();
        return true;
    }
    return false;
}

function malNombre(campo){
    var nombre=/^[A-Za-z]+/

    if(!nombre.test(campo.value)){
        alert("El nombre " + campo.value + " es incorrecto.");
        campo.focus();
        campo.select();
        return true;
    }
    return false;
}

function malTLF(campo){
    var telefono=/^[0-9]{9}$/;

    if(!telefono.test(campo.value)){
        alert("El telefono " + campo.value + " es incorrecto.");
        campo.focus();
        campo.select();
        return true;
    }
    return false;
}

function malDNI(campo){
    var dni=/^[0-9]{8}[A-Z]$/;

    if(!dni.test(campo.value)){
        alert("El DNI " + campo.value + " es incorrecto.");
        campo.focus();
        campo.select();
        return true;
    }

    var dnie=campo.value;
    var letra=dnie.charAt(8);
    var numeros=dnie.substring(0,8);
    var numDni=23;
    var resto= numeros%23;

    switch(letra){
        case "T":
            numDni= 0;
            break;
        case "R":
            numDni= 1;
            break;
        case "W":
            numDni= 2;
            break;
        case "A":
            numDni= 3;
            break;
        case "G":
            numDni= 4;
            break;
        case "M":
            numDni= 5;
            break;
        case "Y":
            numDni= 6;
            break;
        case "F":
            numDni= 7;
            break;
        case "P":
            numDni= 8;
            break;
        case "D":
            numDni= 9;
            break;
        case "X":
            numDni= 10;
            break;
        case "B":
            numDni= 11;
            break;
        case "N":
            numDni= 12;
            break;
        case "J":
            numDni= 13;
            break;
        case "Z":
            numDni= 14;
            break;
        case "S":
            numDni= 15;
            break;
        case "Q":
            numDni= 16;
            break;
        case "V":
            numDni= 17;
            break;
        case "H":
            numDni= 18;
            break;
        case "L":
            numDni= 19;
            break;
        case "C":
            numDni= 20;
            break;
        case "K":
            numDni= 21;
            break;
        case "E":
            numDni= 22;
            break;
    }

    if(numDni!=resto){
        alert("Los numeros y la letra del DNI " + campo.value + " no coinciden.");
        campo.focus();
        campo.select();
        return true;
    }

    return false;
}

