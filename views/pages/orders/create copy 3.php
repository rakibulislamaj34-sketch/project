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

    /* Print/Invoice Specific Styles */
    #posInvoicePrintout {
        display: none;
    }

    @media print {
        /* Hide the entire screen POS wrapper safely */
        .pos-container {
            display: none !important;
        }

        /* Explicitly render and clean up the print zone */
        #posInvoicePrintout {
            display: block !important;
            width: 80mm; /* Standard POS thermal printer width */
            font-family: 'Courier New', Courier, monospace;
            font-size: 12px;
            color: #f61313;
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
            border-top: 1px dashed #ef2222;
            margin: 8px 0;
        }
    }
</style>

<!-- Main POS Workspace Layout Container -->
<div class="container-fluid pos-container">
    <div class="row">
        <!-- Left Side: Products Area -->
        <div class="col-lg-8 col-md-7 product-section p-4">
            <!-- Header & Search -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-bold m-0 text-dark"><i class="bi bi-shop me-2 text-primary"></i> BistroPOS</h4>
                <div class="w-50">
                    <div class="input-group">
                        <span class="input-group-text bg-white border-end-0"><i class="bi bi-search text-muted"></i></span>
                        <input type="text" class="form-control border-start-0 ps-0" placeholder="Search menu items...">
                    </div>
                </div>
            </div>

            <!-- Categories Tabs -->
            <div class="d-flex gap-2 overflow-x-auto pb-3 mb-4">
                <button class="btn btn-primary category-btn px-4 rounded-pill">All Items</button>
                <button class="btn btn-outline-secondary category-btn px-4 rounded-pill">Burgers</button>
                <button class="btn btn-outline-secondary category-btn px-4 rounded-pill">Pizza</button>
                <button class="btn btn-outline-secondary category-btn px-4 rounded-pill">Drinks</button>
                <button class="btn btn-outline-secondary category-btn px-4 rounded-pill">Desserts</button>
            </div>

            <!-- Products Grid -->
            <div class="row g-3">
                <?php
                $products = Product::all();
                foreach ($products as $key => $value) {
                    echo "
                     <div class='col-xl-3 col-lg-4 col-sm-6'>
                    <div class='card product-card h-100' onclick=\"addToCart('{$value->name}', {$value->sell_price})\">
                        <div class='product-img d-flex align-items-center justify-content-center text-muted'></div>
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

        <!-- Right Side: Order/Cart Receipt Area -->
        <div class="col-lg-4 col-md-5 cart-section p-0">
            <!-- Customer / Order Info Header -->
            <div class="p-3 border-bottom bg-light">
                <div class="d-flex justify-content-between align-items-center mb-2">
                    <span class="fw-bold text-secondary">Current Order #1042</span>
                    <span class="badge bg-primary">Dine-In</span>
                </div>
                <div class="row g-2">
                    <div class="col-6">
                        <select class="form-select form-select-sm">
                        <?php  
                          $table = tables::all();
                          foreach ($table as $key => $value) {
                           echo "<option value='$value->id'>Table No-$value->table_number</option>";
                          }
                        ?>
                         </select>
                    </div>
                    <div class="col-6">
                        <select class="form-select form-select-sm">
                            <?php 
                              $customers = Customers::all();
                              foreach ($customers as $key => $value) {
                                echo " <option value='$value->id'>$value->name</option>";
                              }
                            ?>
                            <option>John Doe</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Cart Items List -->
            <div class="cart-items p-3" id="cartItemsContainer">
                <div class="text-center text-muted my-5 py-5" id="emptyCartMessage">
                    <i class="bi bi-bag-dash fs-1 d-block mb-2"></i>
                    Cart is empty.<br>Click products to add items.
                </div>
            </div>

            <!-- Summary & Checkout Footer -->
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
                    <div class="col-6">
                        <button class="btn btn-outline-danger w-100 py-2 fw-semibold" onclick="clearCart()">
                            <i class="bi bi-trash me-1"></i> Cancel
                        </button>
                    </div>
                    <div class="col-6">
                        <button class="btn btn-success w-100 py-2 fw-semibold" onclick="printInvoice()">
                            <i class="bi bi-credit-card me-1"></i> Pay Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> <!-- .pos-container closes here -->


<!-- CRITICAL FIX: The Print Template is now a direct child of body, outside layout wrappers -->
<div id="posInvoicePrintout">
    <div class="invoice-header">
        <h3 style="margin: 0 0 5px 0; font-weight: bold;">BistroPOS</h3>
        <p style="margin: 0;">123 Culinary Street, Food City</p>
        <p style="margin: 0;">Tel: (555) 019-2834</p>
        <div class="divider"></div>
        <p style="margin: 0; text-align: left;"><strong>Order:</strong> #1042</p>
        <p style="margin: 0; text-align: left;"><strong>Date:</strong> <span id="invoiceDate"></span></p>
        <p style="margin: 0; text-align: left;"><strong>Server:</strong> Walk-in / Cashier</p>
    </div>

    <div class="divider"></div>

    <table class="invoice-table">
        <thead>
            <tr>
                <th style="width: 50%;">Item</th>
                <th style="width: 15%; text-align: center;">Qty</th>
                <th style="width: 35%; text-align: right;">Total</th>
            </tr>
        </thead>
        <tbody id="invoiceItemsBody">
            <!-- Populated dynamically via JS -->
        </tbody>
    </table>

    <div class="divider"></div>

    <div style="display: flex; justify-content: space-between; margin-bottom: 3px;">
        <span>Subtotal:</span>
        <span id="invoiceSubtotal">$0.00</span>
    </div>
    <div style="display: flex; justify-content: space-between; margin-bottom: 3px;">
        <span>Tax (10%):</span>
        <span id="invoiceTax">$0.00</span>
    </div>
    <div style="display: flex; justify-content: space-between; font-weight: bold; margin-top: 5px; font-size: 14px;">
        <span>TOTAL:</span>
        <span id="invoiceTotal">$0.00</span>
    </div>

    <div class="divider"></div>

    <div class="invoice-footer">
        <p style="margin: 5px 0 0 0; font-style: italic;">Thank you for your visit!</p>
        <p style="margin: 3px 0 0 0;">Powered by BistroPOS</p>
    </div>
</div>


<script>
    let cart = [];

    function addToCart(name, price) {
        const existingItem = cart.find(item => item.name === name);
        if (existingItem) {
            existingItem.quantity += 1;
        } else {
            cart.push({ name, price, quantity: 1 });
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

        const itemsBody = document.getElementById('invoiceItemsBody');
        itemsBody.innerHTML = ''; 

        let subtotal = 0;

        cart.forEach(item => {
            const itemTotal = item.price * item.quantity;
            subtotal += itemTotal;

            const row = `
            <tr>
                <td>${item.name}</td>
                <td style="text-align: center;">${item.quantity}</td>
                <td style="text-align: right;">$${itemTotal.toFixed(2)}</td>
            </tr>
        `;
            itemsBody.insertAdjacentHTML('beforeend', row);
        });

        const tax = subtotal * 0.10;
        const total = subtotal + tax;

        document.getElementById('invoiceSubtotal').innerText = `$${subtotal.toFixed(2)}`;
        document.getElementById('invoiceTax').innerText = `$${tax.toFixed(2)}`;
        document.getElementById('invoiceTotal').innerText = `$${total.toFixed(2)}`;

        const currentDateTime = new Date().toLocaleString();
        document.getElementById('invoiceDate').innerText = currentDateTime;

        // Triggers clean window print now that layouts are separated safely
        window.print();
    }
</script>