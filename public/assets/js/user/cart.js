function newCartProductElement(image_link, name, size_name, quantity, price) {
    let html = `
        <div class="cart-product-img">
            <img src="${image_link}"
                alt="Hình ảnh sản phẩm">
        </div>
        <div class="cart-product-detail">
            <div id="product-name-div">
                <h3 id="product-name">${name}</h3>
            </div>
            <p id="product-size">Kích cỡ: ${size_name}</p>
            <p id="product-quantity">Số lượng: ${quantity}</p>
            <h3 id="product-price" class="money">${price}</h3>
        </div>
        <div class="cart-product-delete">
            <p>Loại bỏ</p>
            <div class="under-line"></div>
        </div>
    `;

    let cartProduct = document.createElement('div');
    cartProduct.classList.add('cart-product-container');
    cartProduct.innerHTML = html;
    return cartProduct;
}

async function getProductInfoFromId(id) {
    return await fetch(`/api/product/${id}`)
        .then(response => response.json())
        .then(response => response)
}

async function readProductsFromLocalStorage() {
    let cart = localStorage.getItem('cart');
    if (!cart) {
        return [];
    }

    cart = JSON.parse(cart);
    let products = [];
    for (let cartItem of cart) {
        let productInfo = await getProductInfoFromId(cartItem.id);
        let product = {
            id: cartItem.id,
            name: productInfo.product_name,
            image_link: productInfo.image_link,
            quantity: cartItem.quantity,
            color_hex_code: cartItem.color_hex_code,
            size_name: cartItem.size_name,
            price: productInfo.product_price
        }
        products.push(product); 
    }
    return products;
}

async function renderCartProducts() {
    let cart = await readProductsFromLocalStorage();
    let cartProductsContainer = document.querySelector('.cart-product-list');
    let totalPrice = 0;
    for (let cartItem of cart) {
        let cartProduct = newCartProductElement(cartItem.image_link, cartItem.name, cartItem.size_name, cartItem.quantity, cartItem.price);
        cartProductsContainer.appendChild(cartProduct);
        totalPrice += cartItem.price * cartItem.quantity;
    }

    const shippingFee = 0;
    document.getElementById('total').innerHTML = totalPrice;
    document.getElementById('shipping-fee').innerHTML = shippingFee;
    document.getElementById('total-pay').innerHTML = totalPrice + shippingFee;

}

function formatPrices() {
    const moneyElements = document.querySelectorAll('.money');
    console.log(moneyElements);
    for (let moneyElement of moneyElements) {
        moneyElement.textContent = formatPrice(moneyElement.textContent);
    }
}

async function main() {
    await renderCartProducts();
    formatPrices();
}

main();