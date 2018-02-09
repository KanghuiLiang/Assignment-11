<?php
include_once('header.php');
?>

      <div class="row">
      <div class="col-md-1">
      </div>
      <div class="col-md-7">
      <form action="suppiler_action.php" method="post">
         <fieldset>
            <legend>Add New Supplier</legend>
            <br />
            <fieldset>
               <legend>Supplier ID</legend>
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Supplier ID:">Supplier ID:</div>
                  <input name="sid" placeholder="Supplier ID no" title="Supplier ID:" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Supplier Name:">Supplier Name:</div>
                  <input name="sname" placeholder="Supplier Name" title="Supplier Name:" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="E-mail:">Supplier E-mail:</div>
                  <input name="semail" placeholder="yourname@domain" title="Supplier E-mail" class="form-control" type="email" maxlength="25" />
               </div>
               <br />
            </fieldset>
            <br />
            <br />
            <fieldset>
               <legend>Supplier Bank Information</legend>
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Bank Name:">Bank Name:</div>
                  <input name="bankname" title="Bank Name" placeholder="Should not more than 25  charectar" class="form-control" type="text" maxlength="25" />
               </div>
               <br />
               
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Account No:">Account No:</div>
                  <input type="text" class="form-control" title="Account No" name="account">
               </div>
               <br>
            </fieldset>
            <br />
            <fieldset>
               <legend>Address</legend>
               <div class="form-group">
               <div class="input-group">
                  <div class="input-group-addon" title="Address:">Address:</div>
                  <input name="address" placeholder="Address such as House no" class="form-control" type="text" maxlength="50" />
               </div>
               <br />
            </fieldset>
            <br />
            <fieldset>
            <legend>Phone No</legend>
            Contact No:
            <div class="input_fields_wrap2">
            <div><input type="text"  placeholder='phone number' class="form-control"  name="phone"></div>
            </div>
            </fieldset>
            <br />
            <div id="product">
            <fieldset>
            <legend>Product Information</legend>
        <h4 style="color: #FF0004">Do not add too many products once.</h4>
        
        <table>
          <tr>
            <th width="25%">Product ID</th>
            <th width="25%">Product Name</th>
            <th width="25%">Cost Per Unit</th>
          </tr>
          <tr>
            <td width="25%"><input type="text"  placeholder='Product ID' class="form-control"  name="pid[]"></td>
            <td width="25%"><input type="text"  placeholder='Product Name' class="form-control"  name="pname[]"></td>
            <td width="25%"><input type="text"  placeholder='Product price' class="form-control"  name="price[]"></td>
          </tr>
        
        </table>
        <br>
           <button id="moreProduct" class="btn btn-warning add_product_button" ><i class="fas fa-plus"></i> Add More Product</button>

            </fieldset>
          </div>
         </fieldset>
         <br />
         <input name="submit" type="submit" class="btn btn-success" id="register" value="Register" />
      </form>
      </div>
      
      <script src="js/suppiler.js"></script>
 
      <?php
         include_once('footer.php')
         
         
         ?>