@extends('user.master')
@section('content')

<style>
    
.billing-details {
  margin-bottom: 30px;
}

.shiping-details {
  margin-bottom: 30px;
}

.order-details {
  position: relative;
  padding: 0px 30px 30px;
  border-right: 1px solid #E4E7ED;
  border-left: 1px solid #E4E7ED;
  border-bottom: 1px solid #E4E7ED;
}

.order-details:before {
  content: "";
  position: absolute;
  left: -1px;
  right: -1px;
  top: -15px;
  height: 30px;
  border-top: 1px solid #E4E7ED;
  border-left: 1px solid #E4E7ED;
  border-right: 1px solid #E4E7ED;
}

.order-summary {
  margin: 15px 0px;
}

.order-summary .order-col {
  display: table;
  width: 100%;
}

.order-summary .order-col:after {
  content: "";
  display: block;
  clear: both;
}

.order-summary .order-col>div {
  display: table-cell;
  padding: 10px 0px;
}

.order-summary .order-col>div:first-child {
  width: calc(100% - 150px);
}

.order-summary .order-col>div:last-child {
  width: 150px;
  text-align: right;
}

.order-summary .order-col .order-total {
  font-size: 24px;
  color: #D10024;
}

.order-details .payment-method {
  margin: 30px 0px;
}

.order-details .order-submit {
  display: block;
  margin-top: 30px;
}
</style>
	<!-- Order Details -->
    <div class="container">
      
    <div style=" margin-top:50px; margin-bottom:50px;" class="col-md-6 mx-auto order-details">
        <div class="section-title text-center">
            <h3 class="title">Your Order</h3>
        </div>
        <div class="order-summary">
            <div class="order-col">
                <div><strong>PRODUCT</strong></div>
                <div><strong>TOTAL</strong></div>
            </div>
            <div class="order-products">
                <div class="order-col">
                    <div>1x Product Name Goes Here</div>
                    <div>$980.00</div>
                </div>
                <div class="order-col">
                    <div>2x Product Name Goes Here</div>
                    <div>$980.00</div>
                </div>
            </div>
            <div class="order-col">
                <div>Shiping</div>
                <div><strong>FREE</strong></div>
            </div>
            <div class="order-col">
                <div><strong>TOTAL</strong></div>
                <div><strong class="order-total">$2940.00</strong></div>
            </div>
        </div>
        <div class="payment-method">
            <div class="input-radio">
                <input type="radio" name="payment" id="payment-1">
                <label for="payment-1">
                    <span></span>
                    Direct Bank Transfer
                </label>
                <div class="caption">
                    <p></p>
                </div>
            </div>
            <div class="input-radio">
                <input type="radio" name="payment" id="payment-2">
                <label for="payment-2">
                    <span></span>
                   Bkash
                </label>
                <div class="caption">
                    <p></p>
                </div>
            </div>
            <div class="input-radio">
                <input type="radio" name="payment" id="payment-3">
                <label for="payment-3">
                    <span></span>
                    Paypal System
                </label>
                <div class="caption">
                    <p></p>
                </div>
            </div>
        </div>
        <div class="input-checkbox">
            <input type="checkbox" id="terms">
            <label for="terms">
                <span></span>
                I've read and accept the <a href="#">terms & conditions</a>
            </label>
        </div>
        <a style="color :white;background-color: #D10024;" href="#" class="btn col-md-12">Place order</a>
    </div>
    
    </div>
   
    <!-- /Order Details -->

@endsection