formulario.addEventListener('submit',function(e){
    e.preventDefault();

    var datos = new FormData(formulario);
    console.log(datos);
    console.log(datos.get('id_contacto'));
    console.log(datos.get('type'));
    console.log(datos.get('descripcion'));
    console.log(datos.get('quantyty'));
    console.log(datos.get('fecha_cita'));

    fetch('../server/post-citas.php',{
        method: 'POST',
        body: datos
    })
        .then(res => res.text())
        .then(data => {
            console.log(data)
            if(data === 'success'){
                $(exito).modal('show');
            }else{
                console.log('error');
            }
        })

})