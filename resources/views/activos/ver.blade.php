<div class="row">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header">
				<div class="box-name">					
					<span>
                    <center> <strong>DESCRIPCIÓN DE ACTIVO</strong></center><br>
					</span>
				</div>
			</div>

              {{ csrf_field() }}                
                    <div class="card-body">
                    <div class="row">
                   
                        <div class="col-md-12">
                            <textarea class="form-control" onkeyup="javascript:this.value=this.value.toUpperCase();" rows="3" cols="66"  name="descripcion"  disabled>{{$activo->descripcion}}</textarea>
                        </div>
                 
                
                  </div>
                  
                  <br>
                </div>

			
		</div>
	</div>
</div>