var agregar = document.getElementById("agregar_carrito")
var producto = document.getElementById("clave")
var clave = producto.innerHTML


agregar.addEventListener('click',function(){
    var datos = new FormData()
    datos.append('clave',clave)
    console.log(datos.get('clave'))

    
    fetch('post-producto-1.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
        })
})
