// $(document).ready(function(){
// 	$(".updatecart").click(function(){
// 		var rowId = $(this).attr('id');
// 		var qty = $(this).parent().parent().find(".qty").val();
// 		var token = $("input[name='_token']").val();
// 		$.ajax({
// 			url:'cap-nhap/'+rowId+'/'+qty,
// 			type:'GET',
// 			cache:false,
// 			data:{"_token":token,"id":rowId,"qty":qty},
// 			success:function(data){
// 				if(data == "oke")
// 				{
// 					// alert("yes");
// 					window.location = "gio-hang"
// 				}
// 			}
// 		});

// 	});
// });

$(document).ready( function(){
        $(".updatecart").click(function (){
        	//var rowid = $(this).attr("id");
        	//var qty = $(this).parent().find(".qty").val();
        	//var token = $("input[name='_token']").val();
        	alert(111);
        });
    });