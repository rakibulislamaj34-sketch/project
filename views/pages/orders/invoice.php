

    <style>
        body {
            background-color: #f2f4f8;
        }

        /* Screen view wrapper sizing simulating standard layout */
        .invoice-wrapper {
            max-width: 800px;
        }

        /* Print Override Media Query */
        @media print {
            body {
                background-color: #ffffff !important;
            }
            .no-print {
                display: none !important;
            }
            .invoice-wrapper {
                max-width: 100% !important;
                width: 100% !important;
                padding: 0 !important;
                margin: 0 !important;
                box-shadow: none !important;
                border: none !important;
                border-radius: 0 !important;
            }
            /* Ensures Bootstrap background colors (like primary table headers) show up in prints */
            * {
                -webkit-print-color-adjust: exact !important;
                print-color-adjust: exact !important;
            }
        }
    </style>

    <?php 
    
       $order= Orders::lastOrder();
       $order_details= Orderdetail::all_order_id($order->id);
       $customer= Customers::find( $order->customer_id);
    
    
       //print_r( $order);
    
    ?>


<div class="container my-4 invoice-wrapper" id="invoice">
    <!-- Invoice Main Card Platform Wrapper -->
    <div class="card shadow-sm border-0 rounded-3 p-4 p-md-5 bg-white">
        
        <!-- Header Section -->
        <div class="row align-items-center border-bottom border-primary border-3 pb-3 mb-4">
            <div class="col-md-8 d-flex align-items-center gap-3">
                <!-- Circular Brand Logo Framework Component -->
                <div class="bg-primary text-white rounded-circle d-flex align-items-center justify-content-center fw-bold fs-2 shadow-sm" style="width: 70px; height: 70px;">
                    F
                </div>
                <div>
                    <h2 class="text-primary fw-bold mb-1 tracking-tight">FOODFLOW RESTAURANT</h2>
                    <p class="text-muted small mb-0">
                        House #44, nikunja-2, Dhaka <br>
                        <i class="bi bi-telephone"></i> +8801747345807 | <i class="bi bi-envelope"></i> info@foodflow.com <br>
                        <i class="bi bi-globe"></i> www.foodflow.com
                    </p>
                </div>
            </div>
            <div class="col-md-4 text-md-end mt-3 mt-md-0">
                <h1 class="fw-black text-secondary tracking-wider fs-2 m-0">INVOICE</h1>
            </div>
        </div>

        <!-- Meta Context Details Node Row -->
        <div class="row mb-4 g-3">
            <div class="col-sm-6">
                <table class="table table-sm table-borderless my-0">
                    <tr>
                        <td class="fw-bold p-1 text-secondary" style="width: 35%;">Invoice No</td>
                        <td class="p-1">: INV-2026001</td>
                    </tr>
                    <tr>
                        <td class="fw-bold p-1 text-secondary">Date</td>
                        <td class="p-1">: <?= date("d M Y") ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold p-1 text-secondary">Time</td>
                        <td class="p-1">: <?= date("h:i A") ?></td>
                    </tr>
                    <tr>
                        <td class="fw-bold p-1 text-secondary">Table</td>
                        <td class="p-1">: <span class="badge bg-secondary">T-05</span></td>
                    </tr>
                    <tr>
                        <td class="fw-bold p-1 text-secondary">Cashier</td>
                        <td class="p-1">: Rakib</td>
                    </tr>
                </table>
            </div>
            <div class="col-sm-6 text-sm-end">
                <span class="text-muted small d-block">Customer Details</span>
                <h5 class="fw-bold text-dark mb-0">Walk-in Customer</h5>
            </div>
        </div>

        <!-- Order Items Breakdown Data Array Platform -->
        <div class="table-responsive mb-4">
            <table class="table table-striped table-bordered align-middle my-0">
                <thead class="table-primary text-white">
                    <tr>
                        <th scope="col" class="text-center" style="width: 6%;">#</th>
                        <th scope="col">Food Item</th>
                        <th scope="col" class="text-center" style="width: 12%;">Qty</th>
                        <th scope="col" class="text-end" style="width: 18%;">Price (৳)</th>
                        <th scope="col" class="text-end" style="width: 20%;">Total (৳)</th>
                    </tr>
                </thead>
                <tbody>

                  <?php 
                   
                   foreach ($order_details as $key => $value) {

                   $product_name= Product::find($value->item_id)->name;
                   
                     echo "
                     
                     <tr>
                        <td class='text-center text-muted'>1</td>
                        <td class='fw-semibold'>$product_name</td>
                        <td class='text-center'>2</td>
                        <td class='text-end'>250.00</td>
                        <td class='text-end fw-semibold'>500.00</td>
                    </tr>
                     
                     ";
                   }
                  
                  
                  ?>

                    
                   
                </tbody>
            </table>
        </div>

        <!-- Calculation Breakdowns footer row layout -->
        <div class="row g-4 mb-5">
            <div class="col-md-6">
                <div class="bg-light p-3 rounded-3 border">
                    <h6 class="fw-bold text-secondary mb-3"><i class="bi bi-wallet2 me-2"></i>Payment Details</h6>
                    <div class="d-flex justify-content-between mb-2 small">
                        <span class="text-muted">Payment Method:</span>
                        <span class="fw-bold text-dark">Cash</span>
                    </div>
                    <div class="d-flex justify-content-between mb-2 small">
                        <span class="text-muted">Amount Tendered:</span>
                        <span class="fw-semibold text-dark">1700.00</span>
                    </div>
                    <div class="d-flex justify-content-between pt-2 border-top small">
                        <span class="text-muted">Change Due:</span>
                        <span class="fw-bold text-success">71.00</span>
                    </div>
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-bordered my-0">
                        <tr>
                            <td class="text-muted p-2">Subtotal</td>
                            <td class="text-end p-2 fw-semibold">1580.00</td>
                        </tr>
                        <tr>
                            <td class="text-muted p-2">VAT (5%)</td>
                            <td class="text-end p-2 fw-semibold">79.00</td>
                        </tr>
                        <tr>
                            <td class="text-muted p-2">Discount</td>
                            <td class="text-end p-2 text-danger fw-semibold">-30.00</td>
                        </tr>
                        <tr class="table-primary fw-bold text-white fs-5">
                            <td class="p-2">Grand Total</td>
                            <td class="text-end p-2">1629.00</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <!-- Footer Note and Signature Elements -->
        <div class="text-center pt-4 border-top">
            <h4 class="text-success fw-bold mb-1">Thank You For Visiting</h4>
            <p class="text-muted small mb-5">We hope to serve you again soon.</p>
            
            <div class="d-flex justify-content-center">
                <div class="text-center" style="width: 220px;">
                    <div class="border-top border-dark pt-1 small text-uppercase tracking-wider fw-semibold text-secondary">
                        Authorized Signature
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Fixed trigger container element layout framework node actions -->
<div class="container text-center mb-5 no-print">
    <button class="btn btn-primary btn-lg px-5 shadow-sm rounded-pill fw-bold"  onclick="printInvoice()">
        <i class="bi bi-printer-fill me-2"></i> Print Invoice
    </button>
</div>

<script>
      function printInvoice() {
        alert()
        let content = document.getElementById("invoice").innerHTML;

        let printWindow = window.open("", "", "width=900,height=700");

        printWindow.document.write(`
        <html>
        <head>
            <title>Invoice</title>

            <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

            <style>
                body{
                    padding:20px;
                }

                @media print{
                    .no-print{
                        display:none;
                    }
                }
            </style>
        </head>
        <body>
            ${content}
        </body>
        </html>
    `);

        printWindow.document.close();
        printWindow.focus();

        setTimeout(() => {
            printWindow.print();
            printWindow.close();
        }, 500);
    }

</script>