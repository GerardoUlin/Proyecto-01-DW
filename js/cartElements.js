let cantidad = document.querySelectorAll('.inputCantidad');
let carrito = document.querySelector('.CartContainer tbody');
console.log(carrito);

cantidad.forEach((element)=>{
    element.addEventListener('keyup',(e)=>{
        let tmp_id = e.target.getAttribute('prodIdCant');
        let tmp_val = parseFloat(document.querySelector(`input[prodIdVal="${tmp_id}"]`).value);
        let resultado = document.querySelector(`input[prodIdSub="${tmp_id}"]`);
        console.log(parseFloat(e.target.value) > 0);
        if( parseFloat(e.target.value) > 0){
            
            console.log(resultado);
            resultado.value = tmp_val * parseFloat(e.target.value);
        } else {
            resultado.value = 0;
        }
    })
});

function eliminarProducto(e){
    let tmp_row = document.querySelector(`tr[filaProducto="${e}"]`);
    carrito.removeChild(tmp_row);
}