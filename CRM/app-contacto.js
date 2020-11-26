var cerrar_sesion = document.getElementById("cerrar_sesion");
var salir = document.getElementById("salir");
var exito = document.getElementById("exito");
var aceptar = document.getElementById("aceptar")
var formulario = document.getElementById("formulario");

function comprobarSesion(){
    fetch('server/sesion.php')
    .then(res => res.json())
    .then(data => {
        console.log(data)
        if(data === 'sesion'){
            location.href = '#';
        }else{
            location.href = 'index.html';
        }
    })
}

document.onload = comprobarSesion()

cerrar_sesion.addEventListener('click',function(){
    console.log("Saliiiiir")
    $(salir).modal('show');
})

aceptar.addEventListener('click',function(){
    fetch('server/cerrar_sesion.php') 
    .then(res => res.json())
    .then(data => {
        if(data === 'cerrado'){
            location.href = "index.html"
        }
    })
})

formulario.addEventListener('submit',function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos);
    console.log(datos.get('nombre'));
    console.log(datos.get('telefono'));
    console.log(datos.get('correo'));
    console.log(datos.get('estado'));

    fetch('server/post-contacto.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if(data === 'success'){
                $(exito).modal('show');
            }else{
                console.log('error');
            }
        })

})