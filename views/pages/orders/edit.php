<?php
// print_r($order);
?>

<div class="container mt-4">

    <div class="card">
        <div class="card-header">
            <h3>Edit Order</h3>
        </div>

        <div class="card-body">

            <form action="<?php echo $base_url; ?>/orders/update" method="post">

                <input type="hidden" name="id" value="<?php echo $order->id; ?>">

                <div class="mb-3">
                    <label class="form-label">Customer ID</label>
                    <input type="number"
                           name="customer_id"
                           class="form-control"
                           value="<?php echo $order->customer_id; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Table ID</label>
                    <input type="number"
                           name="table_id"
                           class="form-control"
                           value="<?php echo $order->table_id; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">User ID</label>
                    <input type="number"
                           name="user_id"
                           class="form-control"
                           value="<?php echo $order->user_id; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Cost Price</label>
                    <input type="number"
                           step="0.01"
                           name="cost_price"
                           class="form-control"
                           value="<?php echo $order->cost_price; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Order Date</label>
                    <input type="date"
                           name="order_date"
                           class="form-control"
                           value="<?php echo $order->order_date; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Total Amount</label>
                    <input type="number"
                           step="0.01"
                           name="total_amount"
                           class="form-control"
                           value="<?php echo $order->total_amount; ?>"
                           required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Order Status</label>

                    <select name="order_status" class="form-control">

                        <option value="Pending"
                            <?php if($order->order_status=="Pending") echo "selected"; ?>>
                            Pending
                        </option>

                        <option value="Processing"
                            <?php if($order->order_status=="Processing") echo "selected"; ?>>
                            Processing
                        </option>

                        <option value="Completed"
                            <?php if($order->order_status=="Completed") echo "selected"; ?>>
                            Completed
                        </option>

                        <option value="Cancelled"
                            <?php if($order->order_status=="Cancelled") echo "selected"; ?>>
                            Cancelled
                        </option>

                    </select>

                </div>

                <button type="submit"
                        name="btn_update"
                        class="btn btn-primary">
                    Update
                </button>

                <a href="<?php echo $base_url; ?>/orders"
                   class="btn btn-secondary">
                    Cancel
                </a>

            </form>

        </div>

    </div>

</div>