<div class="show-game-form">

	<!-- <form id="w0" action="/advanced2/backend/web/index.php?r=show-game%2Fcreate" method="post"> -->
	<form id="w0" action="/advanced2/backend/web/index.php?r=tt%2Fcreate" method="post">
		<input type="hidden" name="_csrf" value="WjR6OS1LQXM7cABvGHo2LA9BIlZoPgcnHHkKVxw9LhcUTT5aSyUCBw==">
		<div class="form-group field-showgame-gamename required">
			<label class="control-label" for="showgame-gamename">Game Name</label>
			<textarea id="showgame-gamename" class="form-control" name="ShowGame[gameName]" rows="6"></textarea>

			<div class="help-block"></div>
		</div>
		<div class="form-group field-showgame-gametype">
			<label class="control-label" for="showgame-gametype">Game Type</label>
			<textarea id="showgame-gametype" class="form-control" name="ShowGame[gameType]" rows="6"></textarea>

			<div class="help-block"></div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Create</button>
		</div>

	</form>
</div>

<div class="show-movie-form">

	<form id="w0" action="/advanced2/backend/web/index.php?r=show-movie%2Fcreate" method="post">
		<input type="hidden" name="_csrf" value="V3FPbFNBS3A2NTU6ZnA8LwIEFwMWNA0kETw/AmI3JBQZCAsPNS8IBA==">
		<div class="form-group field-showmovie-moviename required">
			<label class="control-label" for="showmovie-moviename">Movie Name</label>
			<textarea id="showmovie-moviename" class="form-control" name="ShowMovie[movieName]" rows="6"></textarea>

			<div class="help-block"></div>
		</div>
		<div class="form-group field-showmovie-moviedirector">
			<label class="control-label" for="showmovie-moviedirector">Movie Director</label>
			<textarea id="showmovie-moviedirector" class="form-control" name="ShowMovie[movieDirector]" rows="6"></textarea>

			<div class="help-block"></div>
		</div>
		<div class="form-group field-showmovie-movietype">
			<label class="control-label" for="showmovie-movietype">Movie Type</label>
			<textarea id="showmovie-movietype" class="form-control" name="ShowMovie[movieType]" rows="6"></textarea>

			<div class="help-block"></div>
		</div>
		<div class="form-group">
			<button type="submit" class="btn btn-success">Create</button> 
		</div>
	</form>
</div>