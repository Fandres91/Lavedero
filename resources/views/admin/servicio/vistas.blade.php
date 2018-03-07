<section class="content-header">
      <h1>
       
        <small>@{{nombre}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> adsada</a></li>
        <li class="active">Servicios</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Registro tipo de servicio</h3>
            </div>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-servicio">
               Registrar tipo
              </button>

              <template>
                <b-table striped hover :items="items"></b-table>
              </template>




        <!-- Item Listing -->
    <table class="table table-bordered">
      <tr>
        <th>Nombre:</th>
        
      </tr>
      <tr v-for="tipo in tipo_servicio">
        <td>@{{ tipo.nombre_servicio }}</td>
       <td></td>
        <td>  
            <button class="btn btn-primary" @click.prevent="editItem(item)">Edit</button>
            <button class="btn btn-danger" @click.prevent="deleteItem(item)">Delete</button>
        </td>
      </tr>
    </table>









              
          <!--modal -->
          <div class="modal fade" id="modal-servicio">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Registro</h4>
              </div>
              <div class="modal-body">
                <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" v-model="nombre_tipo" id="nombre_tipo" placeholder="Escriba su nombre">
               </div>
                
              </div>
             

            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cerrar</button>
                <button @click="guardar_tipo"  type="button" class="btn btn-primary">Guardar</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



           
          </div>
          
        </div>

        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de servicio</h3>
            </div>
            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-tipo">
               Registrar tipo
            </button>
            <!--..............................modal....................-->
            <div class="modal fade" id="modal-tipo">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Default Modal</h4>
              </div>
              <div class="modal-body">
                <form role="form">
              <div class="box-body">
                <!--
                <div class="form-group">
                <label>Servicio</label>
                <select class="form-control select2" id="select_servicio" style="width: 100%;">
                  <option selected="selected">Lavado de Auto</option>
                  <option>Lavado de Moto</option>
                  <option>Engrasado</option>
                  <option>Cambio de llantas</option>
                  
                </select>
              </div>-->
              <div class="form-group">
                  <label>id_tipo_servicio:</label>
                  <input type="text" class="form-control" v-model="id_tipo_servicio" id="id_tipo_servicio" placeholder="Escriba el tipo de servicio">
               </div>

                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" v-model="nombre_servicio" id="nombre_servicio" placeholder="Escriba el servicio">
               </div>
              
               <div class="form-group">
                  <label>Valor:</label>
                  <input type="text" class="form-control" v-model="valor" id="valor" placeholder="Valor del servicio">
               </div>
                
              </div>
             

              
            </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                <button @click="guardar" type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->



            
          </div>
        </div>
         
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>
    <script type="text/javascript">
      
    </script>
