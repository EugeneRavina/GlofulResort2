// JavaScript Document

$(document).ready(function(){

	/* Data Insert Starts Here */
	$(document).on('submit', '#Add-SaveForm', function() {

	   $.post("CottageUpload.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
				 $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#Add-SaveForm")[0].reset();
		     });
		 });
	     return false;
    });
	/* Data Insert Ends Here */


	/* Data Delete Starts Here */
	$(".delete-link").click(function()
	{
		var id = $(this).attr("id");
		var del_id = id;
		var parent = $(this).parent("td").parent("tr");
		if(confirm('Sure to Delete this?'))
		{
			$.post('CottageDelete.php', {'del_id':del_id}, function(data)
			{
				parent.fadeOut('slow');
			});
		}
		return false;
	});
	/* Data Delete Ends Here */

	/* Get Edit ID for Cottage  */
	$(".edit-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('CottageEdit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	/* Get Edit ID  */

	/* Get Edit ID for Pool  */
	$(".PoolEdit-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('Pool-Edit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	/* Get Edit ID  */

	/* Get Edit ID for User  */
	$(".UsersEdit-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('UsersEdit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	/* Get Edit ID  */

	/* Get Edit ID for FunctionHall  */
	$(".FH-edit-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('FH-Edit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	/* Get Edit ID  */

	/* Get Edit ID for Room  */
	$(".Room-edit-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('RoomEdit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	
	/* Get Edit ID for FunctionHall  */
	$(".Gallery-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('GalleryEdit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	/* Get Edit ID  */
	
	/* Get Edit ID for faq  */
	$(".faqedit-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('faqedit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	/* Get Edit ID for terms and condition  */
	$(".termsedit-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('termsedit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
	
		/* Get Edit ID for terms and condition  */
	$(".ContactEdit-link").click(function()
	{
		var id = $(this).attr("id");

		if(confirm('Sure to Edit this?'))
		{
			$(".content-loader").fadeOut('slow', function()
			 {
				$(".content-loader").fadeIn('slow');
				$(".content-loader").load('ContactEdit.php?id='+id);
				$("#btn-add").hide();
				$("#btn-view").show();
			});
		}
		return false;
	});
});
