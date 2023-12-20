const sizeButtons = document.querySelectorAll('.radio-button-size input');
const colorButtons = document.querySelectorAll('.radio-button-color');
const quantityButtons = document.querySelectorAll('.product-quantity-option button');
const quantityDisplay = document.getElementById('product-quantity');
const addToCartButton = document.querySelector('.add-to-cart');
const productPrice = document.querySelector('#product-price');

// console.log(colorButtons)
// console.log(sizeButtons);

addToCartButton.innerHTML = `Thêm vào giỏ hàng - ${formatPrice(productPrice.getAttribute('product-price'))} `

// Format price
productPrice.textContent = formatPrice(productPrice.textContent);

// Format date
const dates = document.querySelectorAll('.date');
dates.forEach(element => {
    element.textContent = getReadableDateFromSQLDate(element.textContent);
})

const handleQuantityButtonClick = (calculaton) => {
    let val = parseInt(quantityDisplay.value);
    let price = parseInt(productPrice.getAttribute('product-price'));
    val = (calculaton === '-') ? val - 1 : val + 1;
    val = (val < 1) ? 1 : val;
    quantityDisplay.value = val;
    // console.log(price, val);
    // console.log(quantityDisplay.value)
    
    price *= val;
    addToCartButton.innerHTML = `Thêm vào giỏ hàng - ${formatPrice(price)} `;
    // console.log(quantityDisplay.value)
}

const quantityBtns = document.querySelectorAll('.quantity-btn');
quantityBtns.forEach(element => {
    element.addEventListener('click', () => {
        let calculation = element.innerText;
        handleQuantityButtonClick(calculation);
    })
})


const handleQuantity = () => {
    let val = parseInt(quantityDisplay.value);
    let price = parseInt(productPrice.getAttribute('product-price'));
    price *= val;
    addToCartButton.innerHTML = `Thêm vào giỏ hàng - ${formatPrice(price)} `;
}


sizeButtons.forEach(element => {
    element.addEventListener('click', () => {
        for (let sizeButton of sizeButtons) {
            sizeButton.parentElement.style.borderColor = '#b7b7b7';
            
        }
        element.parentElement.style.borderColor = '#000000';
    })
});

colorButtons.forEach(element => {
    element.addEventListener('click', () => {
        for (let colorButton of colorButtons) {
            colorButton.style.borderColor = '#b7b7b7';
            element.setAttribute('data-checked', 'false');
        }
        element.style.borderColor = '#000000';
        element.setAttribute('data-checked', 'true');
    })
});

//Generate review counter
const reviewLeftDiv = document.querySelector('.review-left');
const reviewCounter = document.querySelector('#reviews-counter');
const reviewCounterArray = [0, 1, 2, 4, 9];
const total = reviewCounterArray.reduce((ans, number) => {
    return ans + number;
}, 0)



// CART FEATURE
function handleAddToCartButton() {
    addProductToCartLocalStorage();
}

// Add to cart in local storage
function getProductInfo() {
    let url = window.location.href;
    url = new URL(url);
    let urlArry = url.pathname.split('/');
    var product_id = urlArry[urlArry.length - 1];

    var color_hex_code = null;
    for (let colorButton of colorButtons) {
        if (colorButton.getAttribute('data-checked') == "true") {
            color_hex_code = colorButton.getAttribute('value');
            break;
        }
    }
    
    var size_name = null;

    for (let sizeButton of sizeButtons) {
        if (sizeButton.checked) {
            size_name = sizeButton.value;
            break;
        }
    }

    let product = {
        id: product_id,
        quantity: quantityDisplay.value,
        color_hex_code: color_hex_code,
        size_name: size_name
    }
    return product;
}

function addProductToCartLocalStorage() {
    let product = getProductInfo();
    if (!product.color_hex_code) {
        toast({
            title: 'Lỗi',
            message: 'Vui lòng chọn màu sắc',
            type: 'error',
            duration: 5000
        });
        return;
    } else if (!product.size_name) {
        toast({
            title: 'Lỗi',
            message: 'Vui lòng chọn kích thước',
            type: 'error',
            duration: 5000
        });
        return;
    }

    // let cart = localStorage.getItem('cart');
    let cart = getCookie('cart');
    cart = cart ? JSON.parse(cart) : [];
    let productIndex = cart.findIndex(item => item.id == product.id && item.color_hex_code == product.color_hex_code && item.size_name == product.size_name);
    if (productIndex != -1) {
        cart[productIndex].quantity = parseInt(cart[productIndex].quantity) + parseInt(product.quantity);
    } else {
        cart.push(product);
    }

    // localStorage.setItem('cart', JSON.stringify(cart));
    setCookie('cart', JSON.stringify(cart), 30);

    window.location.href = '/cart';
}



// ADD RATING STARS
const ratings = document.querySelectorAll('.rating');
const addReviewStar = (element, num) => {
    for (let i = 0; i < num; i++) {
        let star = document.createElement('img');
        star.src = "/assets/images/star.svg";
        star.alt = "star-img";
        element.appendChild(star);
    }
}

// addReviewStar(5);
ratings.forEach(rating => {
    let starNum = rating.getAttribute('rating');
    addReviewStar(rating, starNum);
})


const voteYes = document.getElementById('vote-yes');
const voteNo = document.getElementById('vote-no');
const upvoteButtons = document.querySelectorAll('.upvote a');
for (let upvote of upvoteButtons) {
    upvote.addEventListener('click', () => {
        if (upvote.id === 'yes') {
            let val = parseInt(voteYes.innerText.match(/\d+/g)[0]);
            voteYes.innerText = `(${val + 1})`;
        }
        else {
            let val = parseInt(voteNo.innerText.match(/\d+/g)[0]);
            voteNo.innerText = `(${val + 1})`;
        }
    })
}