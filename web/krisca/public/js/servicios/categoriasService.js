const getCategorias = async()=>{
    let resp;
    resp = await axios.get("api/categoria/get");
    return resp.data;
};

const crearCategoria = async(categoria)=>{
    let resp = await axios.post("api/categoria/crear", categoria, {
        headers: {
            'Content-Type':'application/json'
        }
    });
    return resp.data;
};

const eliminarCategoria = async(id)=>{
    try{
        let resp = await axios.post("api/categoria/eliminar",{id},{
            headers: {
                'Content-Type':'application/json'
            }
        });
        return resp.data;
    }catch(e){
        return false;
    }
};

const actualizarCategoria = async(categoria)=>{
    try{
        let resp = await axios.post("api/categoria/actualizar",categoria,{
            headers: {
                'Content-Type':'application/json'
            }
        });
        return resp.data;
    }catch(e){
        return false;
    }
};