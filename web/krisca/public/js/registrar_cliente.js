document.querySelector("#reg-cliente-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector("#nombre-txt").value;
    let apellidos = document.querySelector("#apellidos-txt").value;
    let pass = document.querySelector("#pass-txt").value;
    let passR = document.querySelector("#passR-txt").value;
    let fono = document.querySelector("#fono-txt").value;
    let correo = document.querySelector("#correo-txt").value;
    let rut = document.querySelector("#rut-txt").value;


    let errores = [];
    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }
    if(pass=="" || passR==""){
        errores.push("Debe ingresar contraseña");
    }
    if(fono==""){
        errores.push("Debe ingresar un número de celular o teléfono");
    }

    if(pass!==passR){
        errores.push("Error, las contraseñas no son iguales.");
    }

    if(correo === ""){
        errores.push("Debe ingresar un correo");
    }else{
        let cliente = await getClienteCorreo(correo);
        if (Object.keys(cliente).length!=0){
            errores.push("Ya hay una cuenta asociada a este correo");
        }
        if(errores.length!=0){

            Swal.fire({
                title: "Error al ingresar",
                icon: "warning",
                html: errores.join("<br />")
            });
        }else{

            let cliente = {};
            cliente.nombre = nombre;
            cliente.apellidos = apellidos;
            cliente.pass = pass;
            cliente.num_celular = fono;
            cliente.correo = correo;
            cliente.rut = rut;
            resp = await crearCliente(cliente);
            if(resp.length!=0){
                Swal.fire({
                    title: "Correcto",
                    icon: "success",
                    text: "Usuario creado"
                });
            }
        }
    }


});