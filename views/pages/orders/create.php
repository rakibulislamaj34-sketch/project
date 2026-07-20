<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .pos-container {
        height: 100vh;
        overflow: hidden;
    }

    .product-section {
        height: 100vh;
        overflow-y: auto;
        padding-bottom: 60px;
    }

    .cart-section {
        height: 100vh;
        background-color: #ffffff;
        border-left: 1px solid #dee2e6;
        display: flex;
        flex-direction: column;
    }

    .cart-items {
        flex-grow: 1;
        overflow-y: auto;
    }

    .category-btn {
        white-space: nowrap;
    }

    .product-card {
        cursor: pointer;
        transition: transform 0.2s, box-shadow 0.2s;
        border: none;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.05);
    }

    .product-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    }

    .product-img {
        height: 120px;
        object-fit: cover;
        background-color: #e9ecef;
    }

    .cart-item-qty {
        width: 60px;
    }

    /* Screen State hidden layout */
    #posInvoicePrintout {
        display: none;
    }

    /* Print View Overrides */
    @media print {

        /* Completely hide screen components so they don't break page calculation */
        .pos-container {
            display: none !important;
        }

        /* Standardized layout configuration for thermal ticket papers */
        #posInvoicePrintout {
            display: block !important;
            width: 80mm;
            font-family: 'Courier New', Courier, monospace;
            font-size: 12px;
            color: #000;
            padding: 5px;
            margin: 0 auto;
        }

        .invoice-header,
        .invoice-footer {
            text-align: center;
        }

        .invoice-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            margin-bottom: 10px;
        }

        .invoice-table th,
        .invoice-table td {
            text-align: left;
            padding: 4px 0;
        }

        .invoice-table .text-right {
            text-align: right;
        }

        .divider {
            border-top: 1px dashed #000;
            margin: 8px 0;
        }
    }

    .product-card {
    border: none;
    border-radius: 12px;
    overflow: hidden;
    cursor: pointer;
    transition: all .3s ease;
    box-shadow: 0 2px 8px rgba(0,0,0,.08);
}

.product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 20px rgba(0,0,0,.15);
}

.product-img {
    width: 100%;
    height: 180px;
    overflow: hidden;
    background: #f8f9fa;
}

.product-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;   /* Cover the whole area */
    display: block;
    transition: .3s;
}

.product-card:hover .product-img img {
    transform: scale(1.08);
}

.product-card .card-body {
    padding: 15px;
}
</style>

<!-- Primary Screen Workspace Platform Layout -->
<div class="container-fluid pos-container">
    <div class="row">
        <!-- Left Side: Interactive catalog menu -->
        <div class="col-lg-8 col-md-7 product-section p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold m-0 text-dark"><i class="bi bi-shop me-2 text-primary"></i> BistroPOS</h4>
                <div class="w-50">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Search menu items...">
                    </div>
                </div>
            </div>

            <div class="d-flex gap-2 overflow-x-auto pb-3 mb-4">
                <button class="btn btn-primary category-btn px-4 rounded-pill">All Items</button>
                <button class="btn btn-outline-secondary category-btn px-4 rounded-pill">Burgers</button>
                <button class="btn btn-outline-secondary category-btn px-4 rounded-pill">Pizza</button>
                <button class="btn btn-outline-secondary category-btn px-4 rounded-pill">Drinks</button>
                <button class="btn btn-outline-secondary category-btn px-4 rounded-pill">Desserts</button>
            </div>

            <div class="row g-3">
                <?php
                $products = Product::all();
                foreach ($products as $key => $value) {
                    echo "
                <div class='col-xl-3 col-lg-4 col-sm-6'>
                    <div class='card product-card h-100' onclick=\"addToCart('{$value->id}','{$value->name}', {$value->sell_price})\">
                        <div class='product-img d-flex align-items-center justify-content-center text-muted'>
                           <img  src='$base_url/img/$value->photo'     />
                        </div>
                        <div class='card-body p-3'>
                            <h6 class='card-title fw-bold text-dark m-0'>$value->name</h6>
                            <p class='small text-muted mb-2'>$value->category_id</p>
                            <div class='d-flex justify-content-between align-items-center'>
                                <span class='fw-bold text-primary'>$$value->sell_price</span>
                                <span class='badge bg-light text-success border border-success-subtle'>Available</span>
                            </div>
                        </div>
                    </div>
                </div>";
                }
                ?>
            </div>
        </div>

        <!-- Right Side: Order Panel Drawer -->
        <div class="col-lg-4 col-md-5 cart-section p-0">
            <div class="p-3 border-bottom bg-light">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="fw-bold text-secondary">Current Order #1042</span>
                    <span class="badge bg-primary">Dine-In</span>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <select class="form-select form-select-sm table_id">
                            <?php
                            $table = Tables::all();
                            foreach ($table as $key => $value) {
                                echo "<option value='$value->id'>Table No-$value->table_number</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-6">
                        <select class="form-select form-select-sm customer_id">
                            <?php
                            $customers = Customers::all();
                            foreach ($customers as $key => $value) {
                                echo " <option value='$value->id'>$value->name</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Scrollable Selected Nodes Wrapper -->
            <div class="cart-items p-3" id="cartItemsContainer">
                <div class="text-center text-muted my-5 py-5" id="emptyCartMessage">
                    <i class="bi bi-bag-dash fs-1 d-block mb-2"></i>
                    Cart is empty.<br>Click products to add items.
                </div>
            </div>

            <!-- Checkout Actions Base Container -->
            <div class="p-3 border-top bg-light mt-auto">
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Subtotal</span>
                    <span class="fw-semibold" id="summarySubtotal">$0.00</span>
                </div>
                <div class="d-flex justify-content-between mb-2">
                    <span class="text-muted">Tax (10%)</span>
                    <span class="fw-semibold" id="summaryTax">$0.00</span>
                </div>
                <hr class="my-2">
                <div class="d-flex justify-content-between mb-4">
                    <span class="fw-bold text-dark fs-5">Total</span>
                    <span class="fw-bold text-primary fs-5" id="summaryTotal">$0.00</span>
                </div>

                <div class="row g-2">
                    <div class="col-4">
                        <button class="btn btn-outline-danger w-100 py-2 fw-semibold" onclick="clearCart()">
                            <i class="bi bi-trash me-1"></i> Cancel
                        </button>
                    </div>
                    <div class="col-4">
                        <button class="btn btn-success w-100 py-2 fw-semibold" onclick="printInvoice()">
                            <i class="bi bi-credit-card me-1"></i> Pay Now
                        </button>
                    </div>
                     <div class="col-4">
                        <a href="<?php echo $base_url?>/orders/invoice" class="btn btn-info w-100 py-2 fw-semibold">
                            <i class="bi bi-credit-card me-1"></i> Invoice
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .pos-container closes safely before layout rendering leaves -->


<!-- FIXED PLACEMENT: Independent DOM segment ready exclusively for target system stream output -->



<script>
    let cart = [];

    function addToCart(id,name, price) {
        const existingItem = cart.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({
                id,
                name,
                price,
                quantity: 1
            });
        }
        updateCartUI();
    }

    function changeQuantity(name, amount) {
        const item = cart.find(item => item.name === name);
        if (item) {
            item.quantity += amount;
            if (item.quantity <= 0) {
                cart = cart.filter(i => i.name !== name);
            }
        }
        updateCartUI();
    }

    function clearCart() {
        cart = [];
        updateCartUI();
    }

    function updateCartUI() {
        const container = document.getElementById('cartItemsContainer');
        const emptyMsg = document.getElementById('emptyCartMessage');

        if (cart.length === 0) {
            container.innerHTML = '';
            container.appendChild(emptyMsg);
            emptyMsg.classList.remove('d-none');

            document.getElementById('summarySubtotal').innerText = '$0.00';
            document.getElementById('summaryTax').innerText = '$0.00';
            document.getElementById('summaryTotal').innerText = '$0.00';
            return;
        }
        if (emptyMsg) {
            emptyMsg.classList.add('d-none');
        }

        container.innerHTML = '';
        let subtotal = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;

            const itemHtml = `
                <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
                    <div>
                        <h6 class="mb-0 fw-bold text-dark small">${item.name}</h6>
                        <small class="text-muted">$${item.price.toFixed(2)} each</small>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <div class="input-group input-group-sm">
                            <button class="btn btn-outline-secondary px-2" onclick="changeQuantity('${item.name}', -1)">-</button>
                            <span class="input-group-text bg-white px-3 fw-semibold small">${item.quantity}</span>
                            <button class="btn btn-outline-secondary px-2" onclick="changeQuantity('${item.name}', 1)">+</button>
                        </div>
                        <span class="fw-bold text-dark ms-2 small" style="min-width: 60px; text-align: right;">$${itemTotal.toFixed(2)}</span>
                    </div>
                </div>
            `;
            container.insertAdjacentHTML('beforeend', itemHtml);
        });

        const tax = subtotal * 0.10;
        const total = subtotal + tax;

        document.getElementById('summarySubtotal').innerText = `$${subtotal.toFixed(2)}`;
        document.getElementById('summaryTax').innerText = `$${tax.toFixed(2)}`;
        document.getElementById('summaryTotal').innerText = `$${total.toFixed(2)}`;
    }


    function printInvoice() {
        if (cart.length === 0) {
            alert("Your cart is empty!");
            return;
        }

        // 1. Prepare data payload to send to the server
        const orderData = {
            table_id: document.querySelector('.table_id').value,
            customer_id: document.querySelector('.customer_id').value,
            items: cart,
            subtotal: parseFloat(document.getElementById('summarySubtotal').innerText.replace('$', '')),
            tax: parseFloat(document.getElementById('summaryTax').innerText.replace('$', '')),
            total: parseFloat(document.getElementById('summaryTotal').innerText.replace('$', ''))
        };

        // console.log(orderData);
        

        // 2. Send the data to your backend API via Fetch POST
        fetch('<?php echo $base_url?>/api/order/store', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    // If you are using Laravel, uncomment the line below to include your CSRF token:
                    // 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify(orderData)
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response encountered a problem.');
                }
                return response.json();
            })
            .then(data => {
               

              
                clearCart();
            })
            .catch(error => {
                console.error('Error saving order:', error);
                alert('Could not save the order. Print canceled to prevent data discrepancy.');
            });
    }
</script>