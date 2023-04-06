
function confirmaEliminar(id_usuario){
    console.log(id_usuario);
    $.confirm({
        title: 'Confirmación',
        content: '¿Desea eliminar el registro?',
        type: 'orange',
        icon: 'glyphicon glyphicon-warning-sign',
        buttons: {
            Eliminar: function () {
               
                var result ="<?php eliminarUsuarios("+id_usuario+"); ?>"
                document.write(result);
                
            },
            Cancelar: function () {
                document.location.href = '#';
            }
        }
    });
}
