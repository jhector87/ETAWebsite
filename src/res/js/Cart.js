var currentCart = [];
var productElement;

function Cart() {

    this.currentItem; // gets current item
    this.cartItem = document.createElement('cartItem'); // creates an object for the cart

    // Sets the item
    this.setItem = function (src) {
        this.cartItem.src = src;
    }

    this.itemChosen = function () {
        this.cartItem.toString();
    }
}