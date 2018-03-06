<section class="content-header">
      <h1>
       
        <small>@{{nombre}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> adsada</a></li>
        <li class="active">contratistas</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de contratista</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" v-model="nombre" id="nombre" placeholder="Escriba su nombre">
                </div>
                <div class="form-group">
                  <label>Cédula:</label>
                  <input type="text" class="form-control" v-model="cedula" id="cedula" placeholder="Escriba su cédula">
                </div>

                <div class="form-group">
                  <label>Telefono:</label>
                  <input type="text" class="form-control" id="telefono" v-model="telefono" placeholder="Dirección de la empresa">
                </div>

                <div class="form-group">
                  <label>Correo:</label>
                  <input type="text" class="form-control" id="correo" v-model="correo" placeholder="Dirección de la empresa">
                </div>

                
                <!--
                <div class="form-group">
                  <label for="exampleInputFile">Imagen logo</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Logo de la empresa</p>
                </div>-->
                
              </div>
             

              <div class="box-footer">

                <button @click="guardar" type="button" class="btn btn-primary"><span class="fa fa-save"></span>Registrar</button>
              </div>
            </form>
          </div>
          
        </div>
       
      </div>
      <!-- /.row -->
    </section>