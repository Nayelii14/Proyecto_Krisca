document.querySelector("#enviar-btn").addEventListener("click", async()=>{
    let pass = document.querySelector("#pass-txt").value;
    let passR = document.querySelector("#passR-txt").value;
    let correo = document.querySelector("#correo-txt").value;


    let errores = [];
    if(pass=="" || passR==""){
        errores.push("Debe ingresar contraseña");
    }

    if(pass!==passR){
        errores.push("Error, las contraseñas no son iguales.");
    }

    if(correo === ""){
        errores.push("Debe ingresar un correo");
    }
        
    if(errores.length!=0){

        Swal.fire({
            title: "Error al ingresar",
            icon: "warning",
            html: errores.join("<br />")
        });
    }else{
        let cliente = await getClienteCorreo(correo);
        console.log(cliente);
        if (cliente.length!=0){
            let cliente_act = {};
            cliente_act.nombre = cliente[0].nombre;
            cliente_act.apellidos = cliente[0].apellidos;
            cliente_act.pass = pass;
            cliente_act.num_celular = cliente[0].num_celular;
            cliente_act.correo = correo;
            cliente_act.rut = cliente[0].rut;
            let resp = await crearCliente(cliente_act);
            if(resp.length!=0){
                Swal.fire({
                    title: "Exito",
                    icon: "success",
                    text: "Cliente actualizado"
                });
            }
        }else{
            Swal.fire({
                title: "Error",
                icon: "error",
                text: "No hay una cuenta asociada a este correo."
            });
        }
        
    }
    
});