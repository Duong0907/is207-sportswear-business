// JS của payment lấy từ script của cart
const totalProductPrice = document.querySelector("#total");
const shippingFee = document.querySelector("#shipping-fee");
const totalPay = document.querySelector("#total-pay");
const payButton = document.querySelector(".order-button");


/////////////// PAY //////////////////
function pay() {
    // get order info 
    const firstname = document.querySelector("#first-name").value;
    const lastname = document.querySelector("#last-name").value;
    const address = document.querySelector("#address").value;
    const phoneNumber = document.querySelector("#phone-number").value;
    const note = document.querySelector("#note").value;

    // console.log(firstname, lastname, address, phoneNumber, note);

    // return fetch("http://localhost/sportswear/controllers/payment.php", {
    //     method: "POST",
    //     headers: {
    //         "Content-Type": "application/json",
    //     },
    //     body: JSON.stringify({
    //         firstname: firstname,
    //         lastname: lastname,
    //         address: address,
    //         phonenumber: phoneNumber,
    //         note: note,
    //     }),
    // })
    //     .then((res) => res.json())
}
    
// order
// payButton.onclick = () => {
//     toast({
//         title: 'Thông báo',
//         message: 'Chức năng đang được phát triển',
//         type: 'error',
//         duration: 5000
//     });
// }

// cart-container
const cartContainer = document.querySelector(".cart-container");
function clearProductstList() {
    cartContainer.innerHTML = "<h2>Giỏ hàng của bạn</h2><p>Không có sản phẩm nào trong giỏ hàng</p>"
}


////////////// RENDER CART PRODUCT LIST /////////////
function newCartProductElement(id, image_link, name, color_hex_code, size_name, quantity, price) {
    let html = `
        <div class="cart-product-img">
            <img src="${image_link}" alt="Hình ảnh sản phẩm">
        </div>
        <div class="cart-product-detail">
            <div id="product-name-div">
                <h3 id="product-name">${name}</h3>
            </div>
            <p id="product-size">Kích cỡ: ${size_name}</p>
            <p id="product-quantity">Số lượng: ${quantity}</p>
            <h3 id="product-price" class="money">${price}</h3>
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


async function main() {
    await renderCartProducts();
    formatPrices();
}

main();