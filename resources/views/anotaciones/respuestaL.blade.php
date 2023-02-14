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

              {{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                   
                  <div class="col-md-12">
                  <label for="exampleInputEmail1">Respuesta de Paciente</label>
                  <textarea id="w3review" name="w3review" rows="6" cols="50">{{$anotacion->respuesta}}</textarea>
                  </div>
                    
                  </div>



                

            
                  <br>
                </div>
              </form>


			
		</div>
	</div>
</div>