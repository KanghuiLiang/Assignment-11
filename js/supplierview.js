$(function(){
	$(".delete_supplier").on("click", function(){
		var sid = $(this).attr("delete");
		$.ajax({
	        type: "POST",
	        url: "delete_supplier.php", 
	        data: {
	        	'sid': sid
	        }, 
	        success: function(result){ 
	          if(result == 1){
	          	location.reload();
	          }else{
	          	alert("Not able to delete!");
	          }
	        }
	    });
	});
	$(".edit_supplier").on("click",function(){
		$("#sid").val($(this).attr("edit"));
		$("#sname").val($(this).attr("sname"));
		$("#semail").val($(this).attr("semail"));
		$("#bankname").val($(this).attr("bankname"));
		$("#account").val($(this).attr("account"));
		$("#address").val($(this).attr("address"));
		$("#phone").val($(this).attr("phone_number"));
		$("#edit_supplier_modal").modal("show");
	});
})