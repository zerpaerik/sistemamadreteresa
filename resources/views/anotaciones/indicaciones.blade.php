<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">					
					<span>
                    <center> <strong>INDICACIONES DE MEDICO</strong></center><br>
					</span>
				</div>
			</div>

              {{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                   
                  <div class="col-md-12">
                  <label for="exampleInputEmail1">Indicaciones</label>
                  <textarea id="w3review" name="w3review" rows="6" cols="50">{{$anotacion->texto}}</textarea>
                  </div>
                    
                  </div>



                

            
                  <br>
                </div>
              </form>


			
		</div>
	</div>
</div>