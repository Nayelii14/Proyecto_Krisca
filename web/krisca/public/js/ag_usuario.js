document.querySelector("#agregar-usuario-btn").addEventListener("click", async()=>{
    let correo = document.querySelector("#correo-txt").value;
    let nombre = document.querySelector("#nombre-txt").value;
    let apellidos = document.querySelector("#apellidos-txt").value;
    let pass = document.querySelector("#pass-txt").value;
    let passR = document.querySelector("#passR-txt").value;
    let tipo_usuario = document.querySelector("#usuario-select").value;
    console.log(tipo_usuario);
    let errores = [];

    if(nombre === ""){
        errores.push("Debe ingresar un nombre");
    }
    if(apellidos === ""){
        errores.push("Debe ingresar sus apellidos");
    }
    if(pass=="" || passR==""){
        errores.push("Debe ingresar contraseña");
    }
    if(pass!==passR){
        errores.push("Error, las contraseñas no son iguales.");
    }
    if(tipo_usuario === "none"){
        errores.push("Debe ingresar un tipo de usuario");
    }

    if(correo === ""){
        console.log("correo no ingresado");
        errores.push("Debe ingresar un correo");
    }else{
        let cliente = await getClienteCorreo(correo);
        let usuarios = await getUsuarioCorreo(correo);
        let creacion;
        if(usuarios.length>0){
            errores.push("Este usuario ya fue creado");
        }else{
            if(errores.length!=0){
                console.log("manzana");
                Swal.fire({
                    title: "Error al ingresar",
                    icon: "warning",
                    html: errores.join("<br />")
                });
            }else{
                if (cliente.length!=0){
                    console.log("buscando");
                    let respuesta = await Swal.fire({title: "Cliente existente",
                    icon: "warning",
                    text: "Ya hay un cliente asociado con este correo\n Seguro que desea registrar como usuario?",
                    showCancelButton: true
                    });
                    if(respuesta.isConfirmed){
                        console.log("creacion");
                        let usuario = {};
                        usuario.nombre = nombre;
                        usuario.apellidos = apellidos;
                        usuario.pass = pass;
                        usuario.correo = correo;
                        usuario.nivel_acceso = tipo_usuario;
                        resp = await crearUsuario(usuario);
                        if(resp.length!=0){
                            Swal.fire({
                                title: "Correcto",
                                icon: "success",
                                text: "Usuario creado"
                            });
                        }
                    }else{
                        Swal.fire({
                            title: "Accion Cancalada",
                            icon: "warning",
                            text: "La creación ha sido cancelada"
                        });
                    }

                }
                
            }
        }

    }
});