//CLIENTE
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

//USUARIO
const crearUsuario = async(usuario)=>{
    let resp = await axios.post("api/usuarios/post", usuario, {
        headers:{
            'Content-Type':'application/json'
        }
    });
    return resp.data;
};

const eliminarUsuario = async(id)=>{
    let resp = await axios.post("api/usuarios/eliminar", {id}, {
        headers:{
            'Content-Type':'application/json'
        }
    });
    return resp.data;
}

const getUsuarioCorreo = async (filtro = "todos")=>{
    let resp;
    resp = await axios.get(`api/usuarios/getCorreo?correo=${filtro}`);
    return resp.data;
};
const getUsuariosAll = async()=>{
    let resp = await axios.get("api/usuarios/getAll");
    return resp.data;
}