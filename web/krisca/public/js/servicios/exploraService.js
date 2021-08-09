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