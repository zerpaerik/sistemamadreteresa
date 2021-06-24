
@if(\Auth::user()->rol == 1)

<a href="{{route('home')}}" class="brand-link">
<img src="logo.jpeg" class="img-circle elevation-2" alt="User Image" width="40">
      
      <span class="brand-text font-weight-light">ADMIN MadreTeresa</span>
    </a>

<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-archive"></i>
              <p>
                Archivo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{route('personal.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Personal</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('centros.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Centros</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('profesionales.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profesionales</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('laboratorio.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Laboratorios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('analisis.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Analisis</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('servicios.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Servicios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('paquetes.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Paquetes</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('pacientes.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pacientes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            
              
              
            </ul>
          </li>

          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Movimientos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <li class="nav-item">
                <a href="{{route('atenciones.index')}}" class="nav-link">
                  <i class="fas fa-hand-holding-usd nav-icon"></i>
                  <p>Atenciones</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('cobrar.index')}}" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Cuentas por Cobrar</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('historialc.index')}}" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Historial de Cobros</p>
                </a>
              </li>

            
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Comisiones Por Pagar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <li class="nav-item">
                <a href="{{route('comisiones.index')}}" class="nav-link">
                  <i class="fas fa-hand-holding-usd nav-icon"></i>
                  <p>Personal</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('comisiones.index1')}}" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Profesional</p>
                </a>
              </li>

            
            
              
            </ul>
          </li>

          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Comisiones Pagadas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <li class="nav-item">
                <a href="{{route('comisionesp.index')}}" class="nav-link">
                  <i class="fas fa-hand-holding-usd nav-icon"></i>
                  <p>Personal</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('comisionesp.index1')}}" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Profesional</p>
                </a>
              </li>

            
            
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
               Resultados
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <li class="nav-item">
                <a href="{{route('resultados.index')}}" class="nav-link">
                  <i class="fas fa-hand-holding-usd nav-icon"></i>
                  <p>Pendientes Servicio</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('resultados.index1')}}" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Pendientes Laboratorio</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('resultados.indexg')}}" class="nav-link">
                  <i class="fas fa-hand-holding-usd nav-icon"></i>
                  <p>Guardados Servicio</p>
                </a>
              </li>


              <li class="nav-item">
                <a href="{{route('resultados.indexg1')}}" class="nav-link">
                  <i class="fas fa-cart-arrow-down nav-icon"></i>
                  <p>Guardados Laboratorio</p>
                </a>
              </li>

            
            
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Consultas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <li class="nav-item">
                <a href="{{route('consultas.index')}}" class="nav-link">
                  <i class="fas fa-hand-holding-usd nav-icon"></i>
                  <p>Lista de Consultas</p>
                </a>
              </li>
              
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Métodos Anticonceptivos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">


            <li class="nav-item">
                <a href="{{route('metodos.index')}}" class="nav-link">
                  <i class="fas fa-hand-holding-usd nav-icon"></i>
                  <p>Lista de Métodos</p>
                </a>
              </li>
              
            </ul>
          </li>


        

       
         

        

        

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Administrativo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            <li class="nav-item">
                <a href="{{route('users.password')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modificar Contraseña</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('usuarios.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            
              
            </ul>
          </li>


          
         
          
         
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    @elseif(\Auth::user()->rol == 2)
    <a href="{{route('home')}}" class="brand-link">
<img src="logo.jpeg" class="img-circle elevation-2" alt="User Image" width="40">
      
      <span class="brand-text font-weight-light">ADMIN MadreTeresa</span>
    </a>

<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


         

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Inventario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @if(Session::get('sedeName') == 'PROCERES')

            <li class="nav-item">
                <a href="{{route('productos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productosu.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos Usados</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('ingproductos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ingresos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('central.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen Central</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productos.recepcion')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen Recepción</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productos.obstetra')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen Obstetra</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productos.rayos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen RayosX</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productos.laboratorio')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen Laboratorio</p>
                </a>
              </li>

              @else

              <li class="nav-item">
                <a href="{{route('productosu.index1')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Productos Usados</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productos.almacen')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen de Productos</p>
                </a>
              </li>

              @endif

            </ul>
          </li>

          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Requerimientos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            @if(Session::get('sedeName') == 'PROCERES')

            <li class="nav-item">
                <a href="{{route('requerimientos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enviados</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('requerimientos.index1')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recibidos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('requerimientos.index2')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Procesados</p>
                </a>
              </li>

              @else
              <li class="nav-item">
                <a href="{{route('requerimientos.enviados')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enviados</p>
                </a>
              </li>
              @endif
              
         
            </ul>
          </li>
         
         

        

        

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Administrativo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('users.password')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modificar Contraseña</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{route('usuarios.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('roles.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Roles</p>
                </a>
              </li>
            
              
            </ul>
          </li>


          
         
          
         
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    @else
    <a href="{{route('home')}}" class="brand-link">
<img src="logo.jpeg" class="img-circle elevation-2" alt="User Image" width="40">
      
      <span class="brand-text font-weight-light">ADMIN MadreTeresa</span>
    </a>

<div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


          

         

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Inventario
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            @if(Session::get('sedeName') == 'PROCERES')

           

              <li class="nav-item">
                <a href="{{route('productos.recepcion')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen Recepción</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productos.obstetra')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen Obstetra</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productos.rayos')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen RayosX</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{route('productos.laboratorio')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen Laboratorio</p>
                </a>
              </li>

              @else

           

              <li class="nav-item">
                <a href="{{route('productos.almacen')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Almacen de Productos</p>
                </a>
              </li>

              @endif

            </ul>
          </li>

          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-bars"></i>
              <p>
                Requerimientos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">

            @if(Session::get('sedeName') == 'PROCERES')

            <li class="nav-item">
                <a href="{{route('requerimientos.index')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enviados</p>
                </a>
              </li>

            

              @else
              <li class="nav-item">
                <a href="{{route('requerimientos.enviados')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Enviados</p>
                </a>
              </li>
              @endif
              
         
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Administrativo
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{route('users.password')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modificar Contraseña</p>
                </a>
              </li>
          
            
              
            </ul>
          </li>
         
         

        

        

         

          
         
          
         
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>

    @endif

