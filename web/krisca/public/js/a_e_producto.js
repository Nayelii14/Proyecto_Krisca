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

const cargarSelect = (categorias)=>{
    let select = document.querySelector("#categoria-select");
    for(let i=0;i<categorias.length;i++){
        let option = document.createElement("option");
        option.value = categorias[i].id.toString();
        option.innerText = categorias[i].nom_categoria;
        select.appendChild(option);
    }
};

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

const cargarTabla = (productos, categorias)=>{
    let tbody = document.querySelector("#tbody-ae-producto");
    tbody.innerHTML = "";
    for(let i=0; i< productos.length; ++i){
        let tr=document.createElement("tr");

        let tdNom = document.createElement("td");
        tdNom.innerText = productos[i].nombre;
        let tdStock = document.createElement("td");
        tdStock.innerText = productos[i].stock;
        let tdTalla = document.createElement("td");
        tdTalla.innerText = productos[i].talla;
        let tdCategoria = document.createElement("td");
        for(let j=0; j<categorias.length;j++){
            if(productos[i].cod_categoria==categorias[j].id){
                tdCategoria.innerText = categorias[j].nom_categoria;
            }
        }
        let tdPrecio = document.createElement("td");
        tdPrecio.innerText = productos[i].precio;

        let tdAcciones = document.createElement("td");
        let btnEliminar = document.createElement("button");
        let btnActualizar = document.createElement("button");
        btnEliminar.innerText= "Eliminar";
        btnEliminar.classList.add("btn","btn-warning","me-3");
        btnEliminar.idProducto = productos[i].id;
        btnEliminar.addEventListener("click", iniciarEliminacion);
        btnActualizar.innerText= "Actualizar";
        btnActualizar.classList.add("btn","btn-info");
        btnActualizar.idProducto = productos[i].id;
        btnActualizar.addEventListener("click", actualizacion);
        tdAcciones.appendChild(btnEliminar);
        tdAcciones.appendChild(btnActualizar);

        tr.appendChild(tdNom);
        tr.appendChild(tdStock);
        tr.appendChild(tdTalla);
        tr.appendChild(tdCategoria);
        tr.appendChild(tdPrecio);
        tr.appendChild(tdAcciones);

        tbody.appendChild(tr);
    }
}

document.querySelector("#categoria-select").addEventListener("change", async()=>{
    let filtro = document.querySelector("#categoria-select").value;
    let resp = await filtroProducto(filtro);
    let categorias = await getCategorias();
    cargarTabla(resp, categorias);

});
/*document.querySelector("#guardar-cambios-btn").addEventListener("click", async()=>{
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
});*/

document.addEventListener("DOMContentLoaded", async ()=>{
    let categorias=await getCategorias();
    cargarSelect(categorias);
    let productos=await getProductos();
    cargarTabla(productos, categorias);
    

});

