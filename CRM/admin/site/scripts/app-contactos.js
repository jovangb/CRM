formulario.addEventListener('submit',function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos);
    console.log(datos.get('tipo'));
    console.log(datos.get('nombre'));
    console.log(datos.get('correo'));
    console.log(datos.get('calle_uno'));
    console.log(datos.get('calle_dos'));
    console.log(datos.get('ciudad'));
    console.log(datos.get('estado'));
    console.log(datos.get('CP'));
    console.log(datos.get('telefono'));
    console.log(datos.get('celular'));
    
    fetch('../server/post-contactos.php',{
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