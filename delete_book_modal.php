	<div id="delete_book<?php echo $id; ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-body">
			<div class="alert alert-danger">Are you sure you want to delete this?</div>

		</div>
		<div class="modal-footer">
			<button class="btn btn-danger" data-dismiss="modal" aria-hidden="true"><i class="icon-remove icon-large"></i>&nbsp;Cancel</button>
			<a class="btn btn-success" href="delete_books.php<?php echo '?id='.$id; ?>">Yes</a>
		</div>
    </div>
	
