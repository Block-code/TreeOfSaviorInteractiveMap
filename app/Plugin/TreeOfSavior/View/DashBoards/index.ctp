<div ng-controller="DashboardsController">
	<div class="map">
		<img data-target="#myModal" src="/img/map.jpg">
	</div>

	<div class="modal fade" id="myModal" role="dialog">
		<div class="modal-dialog">

			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Cadastro</h4>
				</div>
				<div class="modal-body">
					<p id="posX"></p>
					<p id="posY"></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					<button type="button" class="btn btn-success" data-dismiss="modal">Done</button>
				</div>
			</div>
		</div>
	</div>

	<div class="draggable" ng-dblclick="showModal($event)"></div>
</div>
