const cargarSelect = (categorias)=>{
    let select = document.querySelector("#categoria-select");
    for(let i=0;i<categorias.length;i++){
        let option = document.createElement("option");
        option.value = categorias[i].id.toString();
        option.innerText = categorias[i].nom_categoria;
        select.appendChild(option);
    }
};

document.querySelector("#crear-btn").addEventListener("click", async()=>{
    let nom_producto = document.querySelector("#nombre-txt").value;
    let stock = +document.querySelector("#stock-txt").value;
    let talla = document.querySelector("#talla-txt").value;
    let categoria = +document.querySelector("#categoria-select").value;
    let precio = +document.querySelector("#precio-txt").value;

    let errores=[];
    if(nom_producto===""){
        errores.push("Debe ingresar nombre de producto");
    }

    if(stock===0){
        errores.push("Debe ingresar stock");
    }

    if(talla===""){
        errores.push("Debe ingresar talla");

    }

    if(categoria==="none"){
        errores.push("Debe ingresar una categoría");
    }

    if(precio===0){
        errores.push("Debe ingresar un precio");
    }

    if(errores.length!=0){
        Swal.fire({
            title: "Error",
            icon: "warning",
            html: errores.join("<br />")
        });
    }else{
        let producto={};
        producto.nombre=nom_producto;
        producto.stock=stock;
        producto.talla=talla;
        producto.precio=precio;
        producto.cod_categoria=categoria;
        let respuesta=await crearProducto(producto);
        if(respuesta.length!=0){
            Swal.fire({
                title: "Producto creado",
                icon: "success",
                text: "El producto se ha creado con éxito"
            });
        }else{
            Swal.fire({
                title: "Error",
                icon: "error",
                text: "Error al crear el producto"
            });
        }
    }
});

document.addEventListener("DOMContentLoaded", async ()=>{
    let categorias=await getCategorias();
    cargarSelect(categorias);


});