
<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4>Nuevo Ticket</h4>
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				

			</div>

			<div class="modal-body">
				
               

             <form method="POST" v-on:submit.prevent="createTicket">
             	
			  <div class="form-group">
				<label for="asunto">Asunto</label>
				<input type="text" name="asunto" class="form-control" v-model="newAsunto">
				<small id="ephoneHelp" class="form-text text-muted">¿En que te podemos ayudar? </small>
				
			
			  </div>

			  <div class="form-group">
                <label for="prioridad">Prioridad</label>
                       <select class="form-control" id="exampleFormControlSelect1" name="prioridad" v-model="newPrioridad">
					      <option value="Urgente" class="btn-danger">Urgente</option>
					      <option value="Medio" class="btn-warning">Medio</option>
					      <option value="Bajo" class="btn-primary">Bajo</option>
					    </select>

			  </div>

			  <div class="form-group">
			  	<label for="mensaje">Mensaje</label>
			  	<textarea id="mensaje" type="textarea" class="form-control @error('mensaje') is-invalid @enderror" name="mensaje" required autofocus v-model="newMensaje"></textarea>

                                @error('mensaje')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                @enderror
			  </div>

			  <input type="submit"  class="btn btn-primary" value="Guardar">
			  </form>

			  <hr>

            </div>
			
		</div>
		
	</div>
	
</div>
