document.querySelector("#iniciar-cliente-btn").addEventListener("click", async()=>{
    let correo = document.querySelector("#correo-txt").value;
    let pass = document.querySelector("#pass-txt").value;
    let resp = await getAll(correo);


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

document.querySelector("#iniciar-admin-btn").addEventListener("click", ()=>{
    window.location.href="admin";
});

