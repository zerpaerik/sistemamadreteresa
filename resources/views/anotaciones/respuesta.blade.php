<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">					
					<span>
                    <center> <strong>RESPUESTA DE LLAMADA</strong></center><br>
					</span>
				</div>
			</div>
            <form role="form" method="post" action="anotaciones/registrar">

              {{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                   
                  <div class="col-md-12">
                  <label for="exampleInputEmail1">Respuesta de Paciente</label>
                  <textarea class="form-control" name="resp" id="textAreaExample2" rows="6" cols="50"></textarea>
                  </div>
                    
                  </div>

                  <input type="hidden" name="id" value="{{$id}}">


                  <div class="" style="margin-top: 10px;">
                  <button type="submit" class="btn btn-primary">Guardar</button>
                  </div>

            
                  <br>
                </div>
              </form>


			
		</div>
	</div>
</div>