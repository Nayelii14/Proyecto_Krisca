const iniciarEliminacion = async function(){
    let id = this.idProducto;
    let resp = await Swal.fire({
        title:"Esta seguro?", 
        text:"Esta operacion es irreversible",
        icon: "warning",
        showCancelButton:true
    });

    if(resp.isConfirmed){
        if(await eliminarProducto(id)){
            let productos = await getProductos();
            let categorias = await getCategorias();
            cargarTabla(productos, categorias);
            Swal.fire("Producto Eliminado", "Producto eliminado con éxito", "success");
        }else{
            Swal.fire("Error", "No se pudo eliminar producto", "error");
        }
    }else{
        Swal.fire("Cancelado", "La eliminación ha sido cancelada", "info");
    }
    
}

const cargarSelect = (categorias)=>{
    let select = document.querySelector("#categoria-select");
    let select_act = document.querySelector("#categoria-act-txt");
    for(let i=0;i<categorias.length;i++){
        let option = document.createElement("option");
        option.value = categorias[i].id;
        option.innerText = categorias[i].nom_categoria;
        select.appendChild(option);
    }
};

const cargarSelectActualizar = (categorias)=>{
    let select_act = document.querySelector("#categoria-act-txt");
    for(let i=0;i<categorias.length;i++){
        let option = document.createElement("option");
        option.value = categorias[i].nom_categoria;
        option.innerText = categorias[i].nom_categoria;
        select_act.appendChild(option);
    }
};

const actualizacion = async function(){
    let id = this.idProducto;
    let resp = await getProductos();
    let nombre = document.querySelector("#nombre-producto-txt");
    let talla = document.querySelector("#talla-producto-txt");
    let precio = document.querySelector("#precio-producto-txt");
    let categoria_txt = document.querySelector("#categoria-act-txt");
    let boton = document.querySelector("#guardar-cambios-btn");
    categoria_txt.disabled = false;
    nombre.disabled = false;
    talla.disabled = false;
    precio.disabled = false;
    for(let i=0; i<resp.length;i++){
        if(resp[i].id==id){
            nombre.value = resp[i].nombre;
            talla.value = resp[i].talla;
            precio.value = resp[i].precio;
            categoria_txt.selected = resp[i].nom_categoria;
            boton.idProducto = id;
            boton.stock = this.stock;
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
        btnActualizar.stock = productos[i].stock;
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
    let categorias = await getCategorias();
    console.log(filtro);
    let resp = await filtroProducto(filtro);

    cargarTabla(resp, categorias);
});
document.querySelector("#guardar-cambios-btn").addEventListener("click", async()=>{
    let nombre = document.querySelector("#nombre-producto-txt");
    let talla = document.querySelector("#talla-producto-txt");
    let precio = document.querySelector("#precio-producto-txt");
    let categoria_txt = document.querySelector("#categoria-act-txt");
    //let id = document.querySelector("#categoria-txt").id;
    let errores=[];
    if(nombre===""){
        errores.push("Ingrese un nombre válido");
    }
    if(talla===""){
        errores.push("Ingrese una talla válida");
    }
    if(precio===""){
        errores.push("Ingrese un precio válido");
    }
    if(categoria_txt==="none"){
        errores.push("Ingrese una categoria válida");
    }

    if(errores.length!=0){
        Swal.fire({
            title: "Error",
            icon: "warning",
            html: errores.join("<br />")
        });
    
    }else{
        //let resp = await getProductos();
        let categorias = await getCategorias();

        let producto = {};
        producto.id = document.querySelector("#guardar-cambios-btn").idProducto;
        producto.nombre = nombre.value;
        producto.talla = talla.value;
        producto.precio = precio.value;
        producto.stock = document.querySelector("#guardar-cambios-btn").stock;
        let num;
        for(let i=0; i<categorias.length;i++){
            if(categoria_txt.value==categorias[i].nom_categoria){
                num = categorias[i].id;
            }
        }
        console.log(num);
        producto.cod_categoria = num;
        console.log(producto);
        let respuesta= await actualizarProducto(producto);
        if(respuesta!=false){
            Swal.fire({
                title: "Producto actualizado",
                icon: "success",
                text: "La acción ha sido realiza con éxito"
            });
            let productos = await getProductos();
            
            cargarTabla(productos, categorias);

        }else{
            Swal.fire({
                title: "Error",
                icon: "error",
                text: "No se pudo realizar la acción"
            });
        }
    }
});

document.addEventListener("DOMContentLoaded", async ()=>{
    let categorias=await getCategorias();
    cargarSelect(categorias);
    cargarSelectActualizar(categorias);
    let productos=await getProductos();
    cargarTabla(productos, categorias);

});