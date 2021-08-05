document.querySelector("#registrar-categoria-btn").addEventListener("click", async()=>{
    let nom_categoria = document.querySelector("#categoria-txt").value;


    let errores = [];
    if(nom_categoria === ""){
        errores.push("Debe ingresar el nombre de la nueva categoría");
    }

    if(errores.length!=0){
        console.log("xd");
        Swal.fire({
            title: "Error",
            icon: "warning",
            html: errores.join("<br />")
        });
    }else{
        let resp = await getCategorias();
        let encontrado = false;

        for(let i=0;i<resp.length;i++){
            if(resp[i].nom_categoria == nom_categoria){
                encontrado = true;
            }
        }
        if(encontrado == true){
            errores.push("Ya hay una categoría con este nombre");
            Swal.fire({
                title: "Error",
                icon: "warning",
                html: errores.join("<br />")
            });
        }else{
            let categoria={};
            categoria.nom_categoria=nom_categoria;
            let respuesta=await crearCategoria(categoria);
            Swal.fire({
                title: "Categoria creada",
                icon: "success",
                text: "La acción ha sido realiza con éxito"
            });

        }
    }
});


