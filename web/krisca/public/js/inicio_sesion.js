document.querySelector("#iniciar-cliente-btn").addEventListener("click", async()=>{
    let correo = document.querySelector("#correo-txt").value;
    let pass = document.querySelector("#pass-txt").value;
    let resp = await getClienteCorreo(correo);


    let errores = [];
    if(correo==""){
        errores.push("Debe ingresar un correo");
    }

    if(pass==""){
        errores.push("Debe ingresar una contraseña");
    }

    if(errores.length==0){
        if(resp.length==0){
            errores.push("No hay una cuenta asociada");
            errores.push("Recomendamos crear una");
            Swal.fire({
                title: "Error",
                icon: "warning",
                html: errores.join("<br />")
            });
        }else{
            let correcto=false;
            for(let i=0;i<resp.length;i++){
                if(resp[i].pass==pass){
                    correcto=true;
                }
            }
            if(correcto==true){
                window.location.href="/krisca/public";
            }else{
                Swal.fire({
                    title: "Error al ingresar",
                    icon: "warning",
                    text: "Contraseña incorrecta"
                }); 
            }
        }
    }else{
        Swal.fire({
            title: "Error al ingresar",
            icon: "warning",
            html: errores.join("<br />")
        });

    }

});
const usuariosInexistentes = async()=>{
    let usuarios = await getUsuariosAll();
    if (usuarios.length==0){
        let correo = "profesebaAraya@gmail.com";
        let nombre = "sebastian";
        let apellidos = "araya";
        let pass = "1234";
        let nivel_acceso = "A";
        let user = {};
        user.correo = correo;
        user.nombre = nombre;
        user.apellidos = apellidos;
        user.pass = pass;
        user.nivel_acceso = nivel_acceso;

        let resp = await crearUsuario(user);

        let correo_input = document.querySelector("#correo-txt");
        correo_input.value = correo;
        let pass_input = document.querySelector("#pass-txt");
        pass_input.value = pass;

    }else{
        console.log("Ya hay una cuenta creada.");
        let resp = await getUsuariosAll();

        let correo_input = document.querySelector("#correo-txt");
        correo_input.value = resp[0].correo;
        let pass_input = document.querySelector("#pass-txt");
        pass_input.value = resp[0].pass;
    }
}
document.addEventListener("DOMContentLoaded", async()=>{
    usuariosInexistentes();
    /*let resp = await getUsuariosAll();
    for(let i=0;i<resp.length;i++){
        let eliminar = await eliminarUsuario(resp[i].id);
        console.log(eliminar);
    }*/
    
});
document.querySelector("#iniciar-admin-btn").addEventListener("click", async()=>{
    let correo = document.querySelector("#correo-txt").value;
    let pass = document.querySelector("#pass-txt").value;
    let resp = await getUsuarioCorreo(correo);


    let errores = [];
    if(correo==""){
        errores.push("Debe ingresar un correo");
    }

    if(pass==""){
        errores.push("Debe ingresar una contraseña");
    }
    if(errores.length==0){
        if(resp.length==0){
            errores.push("No hay una cuenta asociada");
            Swal.fire({
                title: "Error",
                icon: "warning",
                html: errores.join("<br />")
            });
        }else{
            let correcto=false;
            for(let i=0;i<resp.length;i++){
                if(resp[i].pass==pass){
                    correcto=true;
                }
            }
            if(correcto==true){
                window.location.href="admin";
            }else{
                Swal.fire({
                    title: "Error al ingresar",
                    icon: "warning",
                    text: "Contraseña incorrecta"
                }); 
            }
        }
    }else{
        Swal.fire({
            title: "Error al ingresar",
            icon: "warning",
            html: errores.join("<br />")
        });

    }

    
});

