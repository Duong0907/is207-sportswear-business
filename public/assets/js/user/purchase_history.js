// total-money
const totalMoneys = document.querySelectorAll('.total-money');
// console.log(totalMoneys)
totalMoneys.forEach(totalMoney => {
    totalMoney.textContent = formatPrice(totalMoney.textContent);
})

const orderDates = document.querySelectorAll('.order-date');
orderDates.forEach(orderDate => {
    orderDate.textContent = getReadableDateFromSQLDate(orderDate.textContent);
})