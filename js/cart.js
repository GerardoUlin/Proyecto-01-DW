//localStorage.removeItem('myCart');
//let carrito = document.getElementById('tmpBTN');
let valCarrito = document.getElementById('inputCar');

//carrito.addEventListener('click', irCarrito);

var my_cart = (localStorage.getItem('myCart') === null) ? [] : JSON.parse(localStorage.getItem('myCart'));
valCarrito.value = JSON.stringify(my_cart);
console.log(my_cart);

function agregarProducto(e){

    let res = {
        id : e,
        cantidad : 1
    }
    console.log("Dentro de la funcion...");
    let found = false;

    for(let i = 0; i < my_cart.length; i++){
        if (my_cart[i].id == e){
            console.log("Elemento encontrado.");
            console.log(my_cart[i].cantidad);
            found = true;
            my_cart[i].cantidad = my_cart[i].cantidad + 1;
        }
    }
   
    if(!found) my_cart.push(res);
    
    valCarrito.value = JSON.stringify(my_cart);
    localStorage.setItem('myCart', JSON.stringify(my_cart));
    /*console.log(valCarrito.value);
    my_cart.push(e);
    valCarrito.value = JSON.stringify(my_cart);
    localStorage.setItem('myCart', JSON.stringify(my_cart));*/

    //localStorage.setItem('miGato','Titi');
}

/*function irCarrito(){
    console.log('Dentro de la funcion del carrito.');
    console.log(my_cart);

    let data = new FormData();

    data.append('products', my_cart);

    let params = {
        "method": "POST",
        "body": data
     }
    
    fetch('cart.php', params);
}*/