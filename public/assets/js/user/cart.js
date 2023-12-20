function newCartProductElement(id, image_link, name, color_hex_code, size_name, quantity, price) {
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
    cartProduct.setAttribute('data-product-id', id);
    cartProduct.setAttribute('data-size-name', size_name);
    cartProduct.setAttribute('data-color-hex-code', color_hex_code);
    cartProduct.innerHTML = html;
    return cartProduct;
}

async function getProductInfoFromId(id) {
    return await fetch(`/api/product/${id}`)
        .then(response => response.json())
        .then(response => response)
}

async function readProductsFromLocalStorage() {
    // let cart = localStorage.getItem('cart');
    let cart = getCookie('cart');
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
        let cartProduct = newCartProductElement(cartItem.id, cartItem.image_link, cartItem.name, cartItem.color_hex_code, cartItem.size_name, cartItem.quantity, cartItem.price);
        cartProductsContainer.appendChild(cartProduct);
        totalPrice += cartItem.price * cartItem.quantity;
    }

    if (cart.length == 0) {
        document.querySelector('.cart-product-list').innerHTML = '<h2>Không có sản phẩm nào trong giỏ hàng</h2>';
    }

    const shippingFee = 0;
    document.getElementById('total').innerHTML = totalPrice;
    document.getElementById('shipping-fee').innerHTML = shippingFee;
    document.getElementById('total-pay').innerHTML = totalPrice + shippingFee;

}

function formatPrices() {
    const moneyElements = document.querySelectorAll('.money');
    // console.log(moneyElements);
    for (let moneyElement of moneyElements) {
        moneyElement.textContent = formatPrice(moneyElement.textContent);
    }
}


function removeProductFromCart(product_id, color_hex_code, size_name) {
    // let cart = localStorage.getItem('cart');
    let cart = getCookie('cart');
    cart = cart ? JSON.parse(cart) : [];
    let productIndex = cart.findIndex(item => item.id == product_id && item.color_hex_code == color_hex_code && item.size_name == size_name);
    if (productIndex != -1) {
        cart.splice(productIndex, 1);
    }
    // localStorage.setItem('cart', JSON.stringify(cart));
    setCookie('cart', JSON.stringify(cart), 30);
}

async function main() {
    await renderCartProducts();
    formatPrices();

    // Remove product from cart
    const removeButtons = document.querySelectorAll('.cart-product-delete p');
    removeButtons.forEach(removeButton => {
        removeButton.onclick = (event) => {
            const product_id = event.target.parentElement.parentElement.getAttribute('data-product-id');
            const color_hex_code = event.target.parentElement.parentElement.getAttribute('data-color-hex-code');
            const size_name = event.target.parentElement.parentElement.getAttribute('data-size-name');

            removeProductFromCart(product_id, color_hex_code, size_name);
            const cartProductItem = event.target.parentElement.parentElement;
            cartProductItem.parentNode.removeChild(cartProductItem);
            if (document.querySelectorAll('.cart-product-container').length == 0) {
                document.querySelector('.cart-product-list').innerHTML = '<h2>Không có sản phẩm nào trong giỏ hàng</h2>';
            }

            renderCartNumber();

            toast({
                title: 'Thành công',
                message: 'Xóa sản phẩm khỏi giỏ hàng thành công',
                type: 'success',
                duration: 5000
            });
        }
    });
}

main();
