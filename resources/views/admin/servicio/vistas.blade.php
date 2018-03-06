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
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" v-model="nombre_tipo" id="nombre_tipo" placeholder="Escriba su nombre">
               </div>
                
              </div>
             

              <div class="box-footer">

                <button @click="guardar_tipo" type="button" class="btn btn-primary"><span class="fa fa-save"></span> Registrar</button>
              </div>
            </form>
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
             

              <div class="box-footer">

                <button @click="guardar" type="button" class="btn btn-primary"><span class="fa fa-save"></span> Registrar</button>
              </div>
            </form>
          </div>
        </div>
         
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>