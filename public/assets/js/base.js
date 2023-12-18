function showMessage(message) {
    var x = document.getElementById("snackbar");
    x.innerHTML = message;
    x.className = "show";
    setTimeout(function () { x.className = x.className.replace("show", ""); }, 3000);
}

let VND = new Intl.NumberFormat("vi-VN", {
    style: "currency",
    currency: "VND",
});

function formatPrice(price) {
    return VND.format(price);
}


function parsePrice(formattedPrice) {
    // Remove non-numeric characters and parse the string to a float
    const numericValue = parseFloat(formattedPrice.replace(/[^\d.,]/g, '').replace(',', '.'));

    // Check if the parsed value is a valid number
    if (!isNaN(numericValue)) {
        return numericValue;
    } else {
        throw new Error('Invalid formatted price');
    }
}

function getReadableDateFromSQLDate(sqlData) {
    const date = new Date(sqlData);
    return date.toLocaleDateString('vi-VN');
}

function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}