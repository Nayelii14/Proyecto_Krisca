const getCategorias = async()=>{
    let resp;
    resp = await axios.get("api/categoria/get");
    return resp.data;
};
const getProductos = async()=>{
    let resp;
    resp = await axios.get("api/productos/get");
    return resp.data;
};


const busquedaIdProducto = async (id)=>{
    let resp;
    resp = await axios.get(`api/productos/getId?id=${id}`);
    
    return resp.data;
};

const filtroProducto = async (filtro ="todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/productos/get");
    }else {
        resp = await axios.get(`api/productos/filtrar?filtro=${filtro}`);
    }
    return resp.data;
};

const crearAjuste = async(ajuste)=>{
    let resp = await axios.post("api/ajuste/post", ajuste, {
        headers:{
            'Content-Type':'application/json'
        }
    });
    return resp.data;
};

const actualizarProducto = async(producto)=>{
    try{
        let resp = await axios.post("api/productos/actualizar",producto,{
            headers: {
                'Content-Type':'application/json'
            }
        });
        return resp.data;
    }catch(e){
        return false;
    }
};