var matriculaModificar;

function validarRegistroCoches(){
    if(vacio(document.registro.marca)) return;
    if(vacio(document.registro.modelo)) return;
    if(malnum(document.registro.caballos)) return;
    if(malmatricula(document.registro.matricula)) return;
    if(malTLF(document.registro.telefono)) return;

    document.registro.submit()
}

function validarIdentificacion(){
    if(malmatricula(document.identificacion.matricula)) return;
    matriculaModificar=document.getElementById("matmodificar").value;

    document.identificacion.submit()
}

function vacio(campo)
{
    texto=campo.value;

    if (texto.length < 1) {
        alert("Tienes que completar todos los campos.");
        campo.focus();
        campo.select();
        return true;
    }
    return false;
}

function malnum(campo){
    var caballos=/^[0-9]+$/;

    if(!caballos.test(campo.value)){
        alert("El numero de caballos " + campo.value + " es incorrecto.");
        campo.focus();
        campo.select();
        return true;
    }
    
    if(campo.value>1500 || campo.value<0){
        alert("El numero de caballos " + campo.value + " es imposible.");
        campo.focus();
        campo.select();
        return true;
    }
    return false;
}

function malmatricula(campo){
    var matricula=/^[0-9]{4}[A-Z]{3}$/;

    if(!matricula.test(campo.value)){
        alert("La matricula " + campo.value + " es incorrecta o es un vehiculo especial.");
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