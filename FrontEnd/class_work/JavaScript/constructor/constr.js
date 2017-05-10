function Hello(name, price, quantity) {
    this.name = name;
    this.price = price;
    this.quantity = quantity;

}

Hello.prototype.buy = function () {
    if (this.quantity = 0) {
        this.quantity--;

    } else {
        alert('Продукт'+Hello.name+'закончился');
}
}
var hey = new Hello();
