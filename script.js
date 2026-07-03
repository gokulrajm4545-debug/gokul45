// JavaScript code to handle cart functionality

document.addEventListener('DOMContentLoaded', () => {
    const cartItems = document.getElementById('cart-items');
    const totalElement = document.getElementById('total');
    let total = 0;

    // Get all add-to-cart buttons
    const buttons = document.querySelectorAll('.add-to-cart');
    
    buttons.forEach(button => {
        button.addEventListener('click', () => {
            const itemName = button.getAttribute('data-item');
            const itemPrice = parseFloat(button.getAttribute('data-price'));
            
            // Create a new list item for the cart
            const li = document.createElement('li');
            li.textContent = `${itemName} - ₹${itemPrice}`;
            cartItems.appendChild(li);

            // Update the total
            total += itemPrice;
            totalElement.textContent = total.toFixed(2);
        });
    });
});