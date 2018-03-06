<section class="content-header">
      <h1>
      
        <small>@{{nombre}}</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> adsada</a></li>
        <li class="active">adasdas</li>
      </ol>
    </section>


    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Registro de empresa</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label>Nombre:</label>
                  <input type="text" class="form-control" v-model="nombre" id="nombre" placeholder="Nombre del empresa">
                </div>
                <div class="form-group">
                  <label>Nit:</label>
                  <input type="text" class="form-control" v-model="nit" id="nit" placeholder="Nit de la empresa">
                </div>

                <div class="form-group">
                  <label>Razon Social:</label>
                  <input type="text" class="form-control" v-model="razon_social" id="razon_social" placeholder="Nombre del empresa">
                </div>

                <div class="form-group">
                  <label>Dirección:</label>
                  <input type="text" class="form-control" id="direccion" v-model="direccion" placeholder="Dirección de la empresa">
                </div>

                <div class="form-group">
                  <label>Telefono:</label>
                  <input type="text" class="form-control" id="telefono" v-model="telefono" placeholder="Dirección de la empresa">
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
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Factura de Pago</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <img src="/template/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            <table class="table">
              <p> @{{ nombre }}</p>
              <p> @{{ nit }}</p>
              <p> @{{ telefono }}</p>
               
              <p>Factura N°: 234325</p>
            
              <p>Fecha de Emisión:  ####</p>
                
           
            </table>
          </div>
        </div>
         
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>