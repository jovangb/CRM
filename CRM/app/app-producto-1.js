var agregar = document.getElementById("agregar_carrito")
var producto = document.getElementById("clave")
var clave = producto.innerHTML
var carrito = document.getElementById("carrito")
var agregado = document.getElementById("agregado")


agregar.addEventListener('click',function(){
    var datos = new FormData()
    datos.append('clave',clave)
    console.log(datos.get('clave'))

    
    fetch('../server/post-producto-1.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if(data[1] == "success"){
                console.log(data)
                $(agregado).modal('show');
                carrito.innerHTML = `Carrito (` + data[0] + `)`
            }
            
        })
})
