<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">					
					<span>
                    <center> <strong>APLICACIÓN DE MÉTODO ANTICONCEPTIVO</strong></center><br>
                    <center>PRODUCTO: </center>
					</span>
				</div>
			</div>

            <form method="post" action="metodos/aplicar">					
              {{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                   
                  <div class="col-md-6">
                    <label for="exampleInputEmail1">Peso</label>
                    <input type="float"  class="form-control" name="peso" placeholder="Peso Actual">
                  </div>
                    <div class="col-md-6">
                    <label for="exampleInputEmail1">Talla</label>
                    <input type="float" class="form-control"  name="talla" placeholder="Talla">
                  </div>
                
                  </div>
                  <div class="row">
                   
                  <div class="col-md-12">
                    <label for="exampleInputEmail1">Observaciones</label>
                    <input type="text" class="form-control"  name="observacion" placeholder="Observaciones">
                  </div>
                  </div>
                  <br>
                </div>

                <input type="hidden" name="id" value="{{$metodo->id}}">


                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Procesar</button>
                </div>
              </form>
				

               
               				
		</div>
	</div>
</div>