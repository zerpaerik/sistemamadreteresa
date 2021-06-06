<div class="row">
                  <div class="col-md-12">
                  <label>Seleccionar Profesional</label>
                  <select class="select2"  data-placeholder="Seleccione" style="width: 100%;" name="origen_usuario">
                   @foreach($profesionales as $a)
                   <option value="{{$a->id}}">{{$a->name}} Precio:{{$a->lastname}}</option>
                    @endforeach
                  </select>
                  </div>
                  
                 
                  </div> 