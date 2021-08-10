const filtrar = async function(){
    let filtro = this.value;
    let productos = await filtroProducto(filtro);
    cargarProductos(productos);
}





const cargarOpciones = async()=>{
    let nav = document.querySelector("#categorias-nav");
    
    let categorias = await getCategorias();
    let div1 = document.createElement("div");
    let input1 = document.createElement("input");
    let label1 = document.createElement("label");
    let name = "categorias";
    div1.classList.add("form-check","ms-3");
    input1.classList.add("form-check-input");
    input1.type = "radio";
    input1.id = "todos";
    label1.classList.add("form-check-label");
    input1.value = "todos";
    input1.name = name;
    label1.innerText = "todos";
    input1.addEventListener("change",filtrar);
    input1.checked = true;
    div1.appendChild(input1);
    div1.appendChild(label1);
    nav.appendChild(div1);
    for(let i=0; i<categorias.length;i++){
        let div = document.createElement("div");
        let input = document.createElement("input");
        let label = document.createElement("label");
        div.classList.add("form-check","ms-3");
        input.classList.add("form-check-input");
        input.value = categorias[i].id;
        input.type = "radio";
        input.id =  categorias[i].id;
        input.name = name;
        input.addEventListener("change",filtrar);
        label.classList.add("form-check-label");
        label.innerText = categorias[i].nom_categoria;
        div.appendChild(input);
        div.appendChild(label);

        nav.appendChild(div);

        
    }
}
const compra = async function(){
    
    let idProducto = this.idProdc;
    let producto = await busquedaIdProducto(idProducto);
    let resp = await Swal.fire({
                        title: '<strong>¿Desea comprar este producto?</strong>',
                        icon: 'info',
                        html:
                        `<div class="card">
                            <div class = "card-header text-center">
                            <span> Nombre del producto: `+producto[0].nombre+`</span>
                            </div>
                            <div class="card-body text-center">
                            <div class="row">
                                <p>talla: `+producto[0].talla+`</p>
                            </div>
                            
                            <div class="row">
                                <p>precio: `+producto[0].precio+`</p>
                            </div>
                            
                            <span>
                            </div>
                        </div>`,
                        showCloseButton: true,
                        showCancelButton: true,
                        focusConfirm: true,
                        confirmButtonText:
                        '<i class="fa fa-thumbs-up"></i> Sí',
                        cancelButtonText:
                        '<i class="fa fa-thumbs-down"></i>No, Cancelar',
                    });
    if(resp.isConfirmed){
        let ajuste = {};
       
        const hoy = new Date();

        function formatoFecha(fecha, formato) {
            const map = {
                dd: fecha.getDate(),
                mm: fecha.getMonth() + 1,

                yyyy: fecha.getFullYear()
            }
        
            return formato.replace(/dd|mm|yyyy/gi, matched => map[matched])
        }

        ajuste.fecha_ajuste = formatoFecha(hoy, 'yyyy-mm-dd');
        ajuste.cantidad = 1;
        ajuste.tipo_ajuste = "disminucion";
        ajuste.id_usuario = 1;
        ajuste.id_producto = idProducto;
        let ajuste_resp = await crearAjuste(ajuste);
        console.log(ajuste_resp);
        Swal.fire({
            title: "Gracias por comprar en Krisca",
            icon: "success",
            text: "Tu pedido te estará esperando, Ven a buscarlo pronto",
            showCloseButton: true
        });
        let productos = await getProductos();
        cargarProductos(productos);
        
    }
}

const cargarProductos = (productos)=>{
    let body_producto = document.querySelector("#body-productos");
    body_producto.classList.add("text-center");
    body_producto.innerHTML = "";
    
    for(let i=0;i<productos.length;i++){
        let card = document.createElement("div");
        card.classList.add("card","mb-1","mt-2","ms-5");

        let row = document.createElement("div");
        row.classList.add("row","g-0");

        let col1 = document.createElement("div");
        col1.classList.add("col-md-3");

        let icono = document.createElement("img");
        icono.src ="img/icono.jpg";
        icono.style = "height: 100px;width: auto;";
        //icono.classList.add("fa-solid","fa-clothes-hanger");
        let col2 = document.createElement("div");
        col2.classList.add("col-md-5");
        let card_body = document.createElement("div");
        card_body.classList.add("card-body");
        let col3 = document.createElement("div");
        col3.classList.add("col-md-4","mt-4");
        let titulo = document.createElement("h5");
        titulo.innerText = productos[i].nombre;
        let text = document.createElement("p");
        let boton = document.createElement("button");
        boton.innerText = "Comprar";
        boton.classList.add("btn","btn-success","mt-2");
        boton.idProdc = productos[i].id;
        boton.addEventListener("click",compra);
        
        text.innerText = "Talla: "+productos[i].talla+", Stock: "+productos[i].stock+", Precio: "+productos[i].precio;
        col1.appendChild(icono);
        row.appendChild(col1);
        col3.appendChild(boton);
        card_body.appendChild(titulo);
        card_body.appendChild(text);
        col2.appendChild(card_body);
        row.appendChild(col2);
        row.appendChild(col3);
        card.appendChild(row);


        body_producto.appendChild(card);
    }
    if (productos.length == 0){
        let div_alert = document.createElement("div");
        div_alert.classList.add("alert","alert-secondary","mt-3","ms-5","shadow-sm");
        div_alert.role = "alert";
        div_alert.innerHTML = "No hay productos disponibles dentro de esta categoría!!";
        body_producto.appendChild(div_alert);
    }
}


document.addEventListener("DOMContentLoaded", async()=>{
    
    let productos = await getProductos();
    cargarOpciones();
    cargarProductos(productos);
    
});