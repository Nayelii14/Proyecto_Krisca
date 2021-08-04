
const getClienteCorreo = async (filtro = "todos")=>{
    let resp;
    if(filtro == "todos"){
        resp = await axios.get("api/cliente/getAll");
    }else{
        resp = await axios.get(`api/cliente/getCorreo?filtro=${filtro}`);
    }
    return resp.data;
};

const crearCliente = async(cliente)=>{
    let resp = await axios.post("api/cliente/post", cliente, {
        headers:{
            'Content-Type':'application/json'
        }
    });
    return resp.data;
};

const getAll = async ()=>{
    let resp=await axios.get("api/cliente/getAll");

    return resp.data;
}
