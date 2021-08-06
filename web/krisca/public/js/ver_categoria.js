const iniciarEliminacion = async function(){
    let id = this.idCategoria;
    let resp = await Swal.fire({
        title:"Esta seguro?", 
        text:"Esta operacion es irreversible",
        icon: "warning",
        showCancelButton:true
    });

    if(resp.isConfirmed){
        if(await eliminarCategoria(id)){
            let categorias = await getCategorias();
            cargarTabla(categorias);
            Swal.fire("Categoria Eliminada", "Categoria eliminada con éxito", "success");
        }else{
            Swal.fire("Error", "No se pudo eliminar categoria", "error");
        }
    }else{
        Swal.fire("Cancelado", "La eliminación ha sido cancelada", "info");
    }
    
}

const actualizacion = async function(){
    let id = this.idCategoria;
    let resp = await getCategorias();
    let categoria_txt = document.querySelector("#categoria-txt");
    categoria_txt.disabled = false;
    for(let i=0; i<resp.length;i++){
        if(resp[i].id==id){
            categoria_txt.value = resp[i].nom_categoria;
            categoria_txt.idCat=id;
        }
    }
}

const cargarTabla = (categorias)=>{
    let tbody = document.querySelector("#tbody-categorias");
    tbody.innerHTML = "";
    for(let i=0; i< categorias.length; ++i){
        let tr=document.createElement("tr");

        let tdNom = document.createElement("td");
        tdNom.innerText = categorias[i].nom_categoria;
        let tdAcciones = document.createElement("td");
        let btnEliminar = document.createElement("button");
        let btnActualizar = document.createElement("button");
        btnEliminar.innerText= "Eliminar";
        btnEliminar.classList.add("btn","btn-warning","me-3");
        btnEliminar.idCategoria = categorias[i].id;
        btnEliminar.addEventListener("click", iniciarEliminacion);
        btnActualizar.innerText= "Actualizar";
        btnActualizar.classList.add("btn","btn-info");
        btnActualizar.idCategoria = categorias[i].id;
        btnActualizar.addEventListener("click", actualizacion);
        tdAcciones.appendChild(btnEliminar);
        tdAcciones.appendChild(btnActualizar);

        tr.appendChild(tdNom);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    }
}

document.querySelector("#guardar-cambios-btn").addEventListener("click", async()=>{
    let categoria_txt = document.querySelector("#categoria-txt");
    //let id = document.querySelector("#categoria-txt").id;
    let errores=[];
    if(categoria_txt===""){
        errores.push("Ingrese un nombre válido");
    }

    if(errores.length!=0){
        Swal.fire({
            title: "Error",
            icon: "warning",
            html: errores.join("<br />")
        });
    }else{
        let resp = await getCategorias();
        let encontrado = false;

        for(let i=0;i<resp.length;i++){
            if(resp[i].nom_categoria == document.querySelector("#categoria-txt").value){
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
            categoria.id=categoria_txt.idCat;
            categoria.nom_categoria=categoria_txt.value;
            let respuesta= await actualizarCategoria(categoria);
            if(respuesta!=false){
                Swal.fire({
                    title: "Categoría actualizada",
                    icon: "success",
                    text: "La acción ha sido realiza con éxito"
                });
                let categorias=await getCategorias();
                cargarTabla(categorias);

            }else{
                Swal.fire({
                    title: "Error",
                    icon: "error",
                    text: "No se pudo realizar la acción"
                });
            }
        }
    }
});

document.addEventListener("DOMContentLoaded", async ()=>{
    let categorias=await getCategorias();
    cargarTabla(categorias);


});

