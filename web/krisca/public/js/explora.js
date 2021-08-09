const cargarOpciones = async()=>{
    let nav = document.querySelector("#categorias-nav");
    
    let categorias = await getCategorias();

    //nav.innerHTML = "<div class='form-check'><input class='form-check-input' type='checkbox' value='' id='flexCheckDefault'><label class='form-check-label' for='flexCheckDefault'>holas</label></div>";
    for(let i=0; i<categorias.length;i++){
        let div = document.createElement("div");
        let input = document.createElement("input");
        let label = document.createElement("label");
        div.classList.add("form-check","ms-3");
        input.classList.add("form-check-input");
        input.type = "checkbox";
        label.classList.add("form-check-label");
        label.innerText = categorias[i].nom_categoria;
        div.appendChild(input);
        div.appendChild(label);

        nav.appendChild(div);

        
    }
}

const cargarProductos = async()=>{
    let body_producto = document.querySelector("#body-productos");
    body_producto.classList.add("text-center");
    let productos = await getProductos();
    for(let i=0;i<productos.length;i++){
        let card = document.createElement("div");
        card.classList.add("card","mb-1","mt-2","ms-5");
        let row = document.createElement("div");
        row.classList.add("row","g-0");
        let col1 = document.createElement("div");
        col1.classList.add("col-md-3");
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
        boton.classList.add("btn","btn-success","mt-1");
        
        text.innerText = productos[i].talla+", "+productos[i].stock+", "+productos[i].precio;
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
}


document.addEventListener("DOMContentLoaded",()=>{
    let input_buscar = document.querySelector("#buscar");
    input_buscar.classList.remove("invisible");
    cargarOpciones();
    cargarProductos();
});