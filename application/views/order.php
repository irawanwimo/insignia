<div class="container">
    <div class="row">
    
        <div class="col-md-6">
            <h1 class="page-title">Orders</h1>
        </div>

        <div class="col-md-6 text-right">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#createModal"><i class="fas fa-plus"></i> Create Order</button>
        </div>

        <?php if($this->session->flashdata('succ_pass_message')){?>
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <?php echo $this->session->flashdata('succ_pass_message') ?>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <?php } ?>

        <div class="col-md-12 all-order">
        
            <div class="content-section">
                <ul class="nav nav-pills" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#allOrder">All Orders</a>
                    </li>
                </ul>
            </div>
            
            <div class="content-section padding-t-b-10">
                <div class="container">
                    <div class="row">

                        <div class="col-md-4">
                            <h5 class="sub-title">Filter</h5>
                            <select id="filterpayment" class="form-select-wm">
                                <option value="">No Filter</option>
                            </select>
                        </div>

                        <div class="col-md-8">
                            <h5 class="sub-title">Search</h5>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <select id="searchOption" class="form-select-wm">
                                        <option value="1">Invoice Number</option>
                                        <option value="3">Username</option>
                                    </select>
                                </div>
                                <input type="text" class="form-control form-text-wm" id="searchInput">
                            </div>
                            <div class="text-right">
                                <p class="clearTable">Clear Search</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="tab-content">
                <div id="allOrder" class="container tab-pane nopadding-l-r active">
            
                    <table id="example" class="table" style="width:100%">
                        <thead>
                            <tr>
                                <th>No. of Order</th>
                                <th>Invoice Number</th>
                                <th>Date</th>
                                <th>Customer</th>
                                <th>Payment</th>
                                <th>Fulfillment Status</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($orders as $or){
                            ?>
                            <tr>
                                <td>#<?php echo $or['id']; ?></td>
                                <td class="text-uppercase"><?php echo $or['invoice_number']; ?></td>
                                <td><?php echo $or['create_date']; ?></td>
                                <td><?php echo $or['customer']; ?></td>
                                <td><?php echo ($or['payment'] == 1) ? 'Fully Paid' : 'Unpaid'; ?></td>
                                <td><?php echo ($or['fulfillment'] == 1) ? 'Fulfilled' : 'Unfulfilled'; ?></td>
                                <td>IDR <?php echo number_format($or['total'],2,',','.'); ?></td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                </div>
                
            </div>

        </div>
    
    </div>
</div>

<div id="createModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Create Order</h4>
      </div>
      <div class="modal-body">
        <form action="<?php echo base_url()?>actions/order/create" method="post">
            <div class="form-group">
                <label>Invoice Number</label>
                <input name="invoice_number" type="text" class="form-control form-text-wm text-uppercase" placeholder="" maxlength="20" required>
            </div>
            <div class="form-group">
                <label>Customer</label>
                <input name="customer" type="text" class="form-control form-text-wm" placeholder="name@example.com" required>
            </div>
            <div class="form-group">
                <label>Payment</label>
                <select class="form-control form-select-wm" name="payment">
                    <option value="1">Fully Paid</option>
                    <option value="0">Unpaid</option>
                </select>
            </div>
            <div class="form-group">
                <label>Fulfillment Status</label>
                <select class="form-control form-select-wm" name="fulfillment">
                    <option value="1">Fulfilled</option>
                    <option value="0">Unfulfilled</option>
                </select>
            </div>
            <div class="form-group">
                <label>Total</label>
                <input id="totalOrder" name="total" type="text" class="form-control form-text-wm" placeholder="" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-clear" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Create</button>
        </form>
      </div>
    </div>

  </div>
</div>

<script src="<?php echo base_url()?>assets/js/page/order.js"></script>