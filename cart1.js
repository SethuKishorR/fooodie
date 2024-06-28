// cart item page js


// Function to display the cart items on the cart page
function displayCart() {
    const cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    let total = 0;

    $("#cart-items").empty();
    cartItems.forEach(item => {
        total += item.price * item.quantity;
        $("#cart-items").append(`
<div class="container">
        <div class="card col-md-7" style="border: none;margin-bottom:60px;padding:20px; border-radius:15px;">
            <div class="" style="padding: 10px;">
            <table class="table table-borderless" style="margin-left:20px">
<thead>
<tr>
<th scope="col" style="width:50%;padding:20px 0;">DISH NAME</th>
<td style="width:50%;padding:20px 0;">${item.name}</td>
</tr>

<tr>
<th scope="col" style="width:50%;padding:20px 0;">PRICE</th>
<td style="width:50%;padding:20px 0;">₹${item.price}</td>
</tr>

<tr>
<th scope="col" style="width:50%;padding:20px 0;">QUANTITY</th>
<td style="width:50%;padding:20px 0;">${item.quantity}</td>
</tr>

<tr>
<th scope="col" style="width:50%;padding:20px 0;">ADJUST</th>
<td style="width:50%;padding:20px 0;"> <button class="btn btn-success btn-md increase-quantity" style="height:40px;width:40px;" data-id="${item.id}"> + </button>           
 <button class="btn btn-danger btn-md decrease-quantity" style="margin-left:5px;height:40px;width:40px" data-id="${item.id}"> - </button>

</tr>

</thead>
</table>
            </div>
            </div>
        </div>  


            `); // Displaying individual item with buttons to increase and decrease quantity
    });

    $("#cart-total").text(total.toFixed(2));// Displaying the total price with Rupee symbol
}


// Function to increase the quantity of an item in the cart
function increaseQuantity(id) {
    let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    const item = cartItems.find(item => item.id === id);

    if (item) {
        item.quantity++;
        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        displayCart(); // Refresh the cart display after updating the quantity
    }
}

// Function to decrease the quantity of an item in the cart
function decreaseQuantity(id) {
    let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
    const item = cartItems.find(item => item.id === id);

    if (item) {
        if (item.quantity > 1) {
            item.quantity--;
        } else {
            // Remove the item from the cart if quantity becomes 0
            cartItems = cartItems.filter(item => item.id !== id);
        }

        localStorage.setItem("cartItems", JSON.stringify(cartItems));
        displayCart(); // Refresh the cart display after updating the quantity
    }
}

// Event delegation for increase and decrease buttons
$(document).on("click", ".increase-quantity", function () {
    const id = $(this).data("id");
    increaseQuantity(id);
});

$(document).on("click", ".decrease-quantity", function () {
    const id = $(this).data("id");
    decreaseQuantity(id);
});

// Display the cart items when the page loads
$(document).ready(function () {
    displayCart();
});
















// // Function to remove an item from the cart in local storage
// function removeItemFromCart(productId) {
//     let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
//     cartItems = cartItems.filter(item => item.id !== productId);
//     localStorage.setItem("cartItems", JSON.stringify(cartItems));
//     displayCart(); // Refresh the cart display after removing the item
// }

// // Function to display the cart items on the cart page
// function displayCart() {
//     const cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
//     let total = 0;

//     $("#cart-items").empty();
//     cartItems.forEach(item => {
//         total += item.price * item.quantity;
//         $("#cart-items").append(`
//         <div class="card mb-3">
//             <div class="row g-0">
//                 <div class="col-md-4">
//                     <img src="image_placeholder.png" alt="Product Image" class="img-fluid">
//                 </div>
//                 <div class="col-md-8">
//                     <div class="card-body">
//                         <h5 class="card-title">${item.name}</h5>
//                         <p class="card-text">Price: ₹${item.price}</p>
//                         <p class="card-text">Quantity: ${item.quantity}</p>
//                         <button class="btn btn-danger btn-sm delete-from-cart" data-product-id="${item.id}">Delete</button>
//                     </div>
//                 </div>
//             </div>
//         </div>
//         `);
//     });

//     $("#cart-total").text(total.toFixed(2)); // Displaying the total price with Rupee symbol
// }

// // Function to increase the quantity of an item in the cart
// function increaseQuantity(id) {
//     let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
//     const item = cartItems.find(item => item.id === id);

//     if (item) {
//         item.quantity++;
//         localStorage.setItem("cartItems", JSON.stringify(cartItems));
//         displayCart(); // Refresh the cart display after updating the quantity
//     }
// }

// // Function to decrease the quantity of an item in the cart
// function decreaseQuantity(id) {
//     let cartItems = JSON.parse(localStorage.getItem("cartItems")) || [];
//     const item = cartItems.find(item => item.id === id);

//     if (item) {
//         if (item.quantity > 1) {
//             item.quantity--;
//         } else {
//             // Remove the item from the cart if quantity becomes 0
//             cartItems = cartItems.filter(item => item.id !== id);
//         }

//         localStorage.setItem("cartItems", JSON.stringify(cartItems));
//         displayCart(); // Refresh the cart display after updating the quantity
//     }
// }

// // Event delegation for increase and decrease buttons
// $(document).on("click", ".increase-quantity", function () {
//     const id = $(this).data("product-id");
//     increaseQuantity(id);
// });

// $(document).on("click", ".decrease-quantity", function () {
//     const id = $(this).data("product-id");
//     decreaseQuantity(id);
// });

// // Bind delete button click event
// $(document).on("click", ".delete-from-cart", function () {
//     const productId = $(this).data("product-id");
//     removeItemFromCart(productId);
// });

// // Display the cart items when the page loads
// $(document).ready(function () {
//     displayCart();
// });