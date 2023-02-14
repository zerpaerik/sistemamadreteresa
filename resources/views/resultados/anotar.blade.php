<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">					
					<span>
                    <center> <strong>ACOTACIONES PARA PACIENTE</strong></center><br>
					</span>
				</div>
			</div>
            <form role="form" method="post" action="resultados/anotar">

              {{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                   
                  <div class="col-md-12">
                  <label for="exampleInputEmail1">Instrucciones</label>
                  <textarea class="form-control" name="instru" id="textAreaExample2" rows="8"></textarea>
                  </div>
                    <div class="col-md-12">
                    <label for="exampleInputEmail1">Fecha</label>
                    <input type="date" class="form-control" name="fecha" value="">
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