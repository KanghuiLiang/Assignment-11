
$(document).ready(function(){

  $('#moreProduct').click(function() {
    $('tr').append('<tr><td width="25%"><input type="text" placeholder="Product ID" class="form-control"  name="pid[]"></td><td width="25%"><input type="text" placeholder="Product Name" class="form-control"  name="pname[]"></td><td width="25%"><input type="text"  placeholder="Product price" class="form-control"  name="price[]"></td></tr>'); //add input box

  });

})