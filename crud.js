// JavaScript Document
function loadMain() {
	var t = $(".content-loader");
	//t.fadeOut();
	t.fadeIn('fast', function(){
		t.load('php/main.php', function() {
			$('#example').DataTable({
			  "lengthMenu": [[5, 10, 15, -1], [5, 10, 15, "All"]],
			    "order": [[ 4, "desc" ]]
			});
			$('#example').removeClass( 'display' ).addClass('table table-bordered');
		});
	});
}
function myModal(btn) {
	 var url = btn.data('url');
     var title = btn.data('title');
     var modal = $('#myModal');
	 if (btn.data('id')) url += '?id='+btn.data('id');
	 if (btn.data('confirm') == 'yes') {
		 if (confirm('Sure to Delete?')) {
			modal.modal('show');
			modal.find('.modal-title').text(title);
			
			if (btn.data('type') == 'POST') {
				$.post('php/'+url, $(this).serialize())
				.done(function(data){
					modal.find('.modal-body').html('<div class="alert alert-info">Image has been Deleted</div>');	
				});  
				
			} else 
				modal.find('.modal-body').load('php/'+url);
			
			
		 }
	 } else {
		 modal.modal('show');
		 modal.find('.modal-title').text(title);
		 modal.find('.modal-body').load('php/'+url);
	 }
}
$(document).ready(function(){
	
	loadMain();
	
	/* all modal btn triggers */
	$(document).on('click',".btn-modal",function(){
		myModal($(this));
	});
	
	
	/* trigger page update on modal close */
	$('#myModal').on('hidden.bs.modal', function (e) {
	  loadMain();
	})
	

	
	/* Update Record  */
	$(document).on('submit', '#emp-UpdateForm', function() {
	 
	   $.post("php/update.php", $(this).serialize())
        .done(function(data){
			$("#dis").fadeOut();
			$("#dis").fadeIn('slow', function(){
			     $("#dis").html('<div class="alert alert-info">'+data+'</div>');
			     $("#emp-UpdateForm").hide();
				 			 
		     });	
		});   
	    return false;
    });
	/* Update Record  */
	
	
});
