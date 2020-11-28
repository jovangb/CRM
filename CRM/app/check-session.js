var cerrar_sesion = document.getElementById("cerrar_sesion");
var salir = document.getElementById("salir");
var exito = document.getElementById("exito");
var aceptar = document.getElementById("aceptar")
var carrito = document.getElementById("carrito")



cerrar_sesion.addEventListener('click',function(){
    console.log("Saliiiiir")
    $(salir).modal('show');
})

aceptar.addEventListener('click',function(){
    fetch('../server/cerrar_sesion.php') 
    .then(res => res.json())
    .then(data => {
        if(data === 'cerrado'){
            location.href = "index.html"
        }
    })
})

function comprobarSesion(){
    fetch('../server/sesion.php')
    .then(res => res.json())
    .then(data => {
        console.log(data)
        if(data[1] === 'sesion'){
            location.href = '#';
            carrito.innerHTML = `Carrito (` + data[0] + `)`
        }else{
            location.href = 'index.html';
        }
    })
}

document.onload = comprobarSesion()