//start when document gets ready
if(document.readyState == "loading"){
    document.addEventListener('DOMContentLoaded',start);
}else{
    start();
}

//================= Start ================
function start(){
    addEvents();

}

//=========== Update and Rerender =========
function update(){
    addEvents();
    updateTotal();
}

//=========== Add events ==============
function addEvents(){
    //remove items 
    let cartRemove_btns = document.querySelectorAll(".cart__itm__remove");
    console.log(cartRemove_btns);
    cartRemove_btns.forEach((btn)=>{
        btn.addEventListener("click",handle_removeCartItem);
    });
}

function handle_removeCartItem(){
    this.parentElement.remove();
    update();
}

function updateTotal(){
    let cartBoxes = document.querySelectorAll(".cart__content");
    const cart = document.querySelector(".cart__container");
    const totalElement = cart.querySelectorAll(".total__price");
    console.log(totalElement)
    let total = 0;
    cartBoxes.forEach((cartBox)=>{
        let priceElement = cartBox.querySelector(".cart__price");
        let price = parseFloat(priceElement.innerHTML.replace("$",""));
        let quantity = cartBox.querySelector(".cart__quantity").value;
        console.log(quantity)
        total += price*quantity;
    })
    console.log("total is",total);

    totalElement.innerHTML = "$" + total;
    console.log(totalElement)
}
