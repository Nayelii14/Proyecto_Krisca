document.querySelector("#iniciar-cliente-btn").addEventListener("click", async()=>{
    let correo = document.querySelector("#correo-txt").value;
    let pass = document.querySelector("#pass-txt").value;
    let resp = getClienteCorreo(correo);

    let errores = [];
    if(correo==""){
        errores.push("Debe ingresar un correo");
    }

    if(pass==""){
        errores.push("Debe ingresar una contraseña");
    }

    if(errores.length==0){
        if(Object.keys(resp).length==0){
            errores.push("No hay una cuenta asociada");
            errores.push("Recomendamos crear una");
            Swal.fire({
                title: "Error",
                icon: "warning",
                html: errores.join("<br />")
            });
        }
    }else{
        Swal.fire({
            title: "Error al ingresar",
            icon: "warning",
            html: errores.join("<br />")
        });

    }

});

