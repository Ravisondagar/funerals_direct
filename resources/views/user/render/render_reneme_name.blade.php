<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-body">
					<p>What would you like to rename your funeral home to? Type in field below:</p>
					<form class="funeral-home-popup-form" method="post" action="{!! route('funeral-home.update',$funeral_home->id) !!}">
						@csrf
						@method('PATCH')
						<div class="form-group">
							<input type="text" class="form-control" name="name" value="{!! $funeral_home->name !!}">
						</div>
					<div class="add-btn text-right">
						<input type="submit" name="submit" value="Rename" class="green add-btn-link">
						<a href="javascript:;" class="pink-orange add-btn-link" data-dismiss="modal">
							Cancel
						</a>
					</div>
					</form>
				</div>
			</div>
		</div>