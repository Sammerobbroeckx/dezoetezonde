</div>
		
		<div class="navbar navbar-default navbar-fixed-bottom">
			<div class="container">
				<p class="navbar-text">Deze site is gemaakt door Conner Maes & Samme Robbroeckx</p>
			</div>
		</div>
		
		<div class="modal fade" id="contact" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3>Contacteer de beste leefgroep!</h3>
					</div>
					<div class="modal-body">
						<form action="php/mail.php" method="POST">
							<input class="form-control" type="text" name="naam" placeholder="Naam" required></input>
							<input class="form-control" type="text" name="email" placeholder="E-mail adres" required></input>
							<textArea class="form-control" type="text" name="message" placeholder="je bericht" required></textArea>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Verstuur!</button>
						<button class="btn btn-danger" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<div class="modal fade" id="login" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3>Admin Login</h3>
					</div>
					<div class="modal-body">
						<form action="?pagina=login" method="POST">
							<input class="form-control" type="text" name="mail" placeholder="E-mail adres" required></input>
							<input class="form-control" type="password" name="paswoord" placeholder="je paswoord" required></input>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Login!</button>
						<button class="btn btn-danger" data-dismiss="modal">Close</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/angularjs/1.0.4/angular.js"></script>
		<script src="js/bootstrap.js"></script>
	</body>
</html>