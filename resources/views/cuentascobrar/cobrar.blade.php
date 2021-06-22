<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">					
					<span>
                    <center> <strong>COBRO DE DEUDA</strong></center><br>
					</span>
				</div>
			</div>

            <form method="post" action="cobrar/procesar">					
              {{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Monto Total</label>
                    <input type="text" disabled class="form-control"  value="{{$cobrar->monto}}" name="cantidad" placeholder="cantidad">
                  </div>
                  <div class="col-md-4">
                    <label for="exampleInputEmail1">Monto Restante</label>
                    <input type="text" disabled class="form-control"  value="{{$cobrar->resta}}" placeholder="cantidad">
                  </div>
                    <div class="col-md-4">
                    <label for="exampleInputEmail1">Monto Pagar</label>
                    <input type="number" class="form-control"  name="pagar" placeholder="Pagar">
                  </div>
                  </div>
                  <br>
                </div>

                <input type="hidden" name="id" value="{{$cobrar->id}}">

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Procesar</button>
                </div>
              </form>
				

               
               				
		</div>
	</div>
</div>