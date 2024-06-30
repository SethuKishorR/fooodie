let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];

function updateCartCounter() {
  const cartCounter = document.getElementById("floating-cart-counter");
  cartCounter.textContent = cartItems.length;
}

function addToCart(id, name, price) {
  const existingItem = cartItems.find(item => item.id === id);

  if (existingItem) {
    showAlert("Item already added!", 3000);
  } else {
    cartItems.push({
      id: id,
      name: name,
      price: price,
      quantity: 1
    });
    localStorage.setItem("cartItems", JSON.stringify(cartItems));
    showAlert("Item added!", 3000);
    updateCartCounter(); // Update the cart counter after adding the item to the cart
  }
}

function redirectToCart() {
  window.location.href = "cart.php"; // Replace "cart.php" with your actual cart page URL
}

document.getElementById("floating-cart-counter").addEventListener("click", redirectToCart);

// Display initial cart counter on page load
updateCartCounter();

// Add your other JavaScript code here
$(document).ready(function () {
  // Add to cart button click event
  $(".add-to-cart").on("click", function () {
    const productId = $(this).data("id");
    const productName = $(this).data("name");
    const productPrice = $(this).data("price");

    addToCart(productId, productName, productPrice);
    updateCartCounter();
  });















  // Function to add an item to the cart
  function addToCart(id, name, price) {
    let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    const existingItem = cartItems.find(item => item.id === id);

    if (existingItem) {
      alert("Item already added!");
    } else {
      cartItems.push({
        id: id,
        name: name,
        price: price,
        quantity: 1
      });
      localStorage.setItem("cartItems", JSON.stringify(cartItems));
      alert("Item added!");
      // window.location.href = ".html"
    }
  }
});

function updateCartCounter() {
  const cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
  const cartCounter = document.getElementById("floating-cart-counter");
  cartCounter.textContent = cartItems.length;
}

// Display the initial cart counter on page load
updateCartCounter();

// Stop event propagation when clicking inside the alert
$("#alert-toast").on("click", function (e) {
  e.stopPropagation();
});

function removeFromCart(productId) {
  cartItems = cartItems.filter(item => item.id !== productId);
  updateCartDisplay();
}
// Bind delete button click event
$('.delete-from-cart').click(function () {
  const productId = $(this).data('product-id');
  removeFromCart(productId);
});
updateCartDisplay();