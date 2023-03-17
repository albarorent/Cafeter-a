<div class="pd-30">
  <h4 class="tx-gray-800 mg-b-5">Dashboard</h4>
</div>
<!-- d-flex -->

<div class="br-pagebody mg-t-5 pd-x-30">
  <div class="row row-sm">
    <div class="col-sm-6 col-xl-3">
      <div class="bg-teal rounded overflow-hidden">
        <div class="pd-25 d-flex align-items-center">
          <i class="ion ion-android-contact tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
              Usuarios Registrados
            </p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
              <?php echo $cant_usuarios; ?>
            </p>
            <span class="tx-11 tx-roboto tx-white-6"></span>
          </div>
        </div>
      </div>
    </div>
    <!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-sm-t-0">
      <div class="bg-danger rounded overflow-hidden">
        <div class="pd-25 d-flex align-items-center">
          <i class="ion ion-android-contact tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
              Clientes Registrados
            </p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
              <?php echo  $cant_clientes; ?>
            </p>
            <span class="tx-11 tx-roboto tx-white-6"></span>
          </div>
        </div>
      </div>
    </div>
    <!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
      <div class="bg-primary rounded overflow-hidden">
        <div class="pd-25 d-flex align-items-center">
          <i class="fa-brands fa-product-hunt tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
              Productos Registrados
            </p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
              <?php echo $cant_producto; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- col-3 -->
    <div class="col-sm-6 col-xl-3 mg-t-20 mg-xl-t-0">
      <div class="bg-br-primary rounded overflow-hidden">
        <div class="pd-25 d-flex align-items-center">
          <i class="fa-solid fa-scale-unbalanced tx-60 lh-0 tx-white op-7"></i>
          <div class="mg-l-20">
            <p class="tx-10 tx-spacing-1 tx-mont tx-medium tx-uppercase tx-white-8 mg-b-10">
              Ventas Realizadas
            </p>
            <p class="tx-24 tx-white tx-lato tx-bold mg-b-2 lh-1">
              <?php echo $cant_ventas; ?>
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- col-3 -->
  </div>
  <!-- row -->

  <div class="card bd-0 shadow-base pd-30 mg-t-20">
    <div class="d-flex align-items-center justify-content-between mg-b-30">
      <div>
        <h6 class="tx-13 tx-uppercase tx-inverse tx-semibold tx-spacing-1">
        </h6>
        <p class="mg-b-0">
          <i class="icon ion-calendar mg-r-5"></i>
          <span style="font-weight: bold;">Fecha Actual: </span>
          <?php echo date('d/m/y'); ?>
        </p>
        <p class="mg-b-0">
          <i class="fa-solid fa-clock mg-r-5"></i>
          <span style="font-weight: bold;">Hora Actual: </span>
          <?php echo date('H:m:s'); ?>
        </p>
      </div>
    </div>
    <!-- d-flex -->

    <table class="table table-valign-middle mg-b-0">
      <tbody>
        <?php foreach ($usuario as $row) : ?>
          <?php if ($row['rol'] != 3) : ?>
            <tr>
              <td class="pd-l-0-force">
                <img src="<?php echo base_url() ?>/public/usuarios/<?php echo $row["imagen"]; ?>" class="wd-40 rounded-circle" width="50px">
              </td>
              <td>
                <h6 class="tx-inverse tx-14 mg-b-0"><?php echo $row["nombres"] . " " . $row["apellidos"]; ?></h6>
                <span class="tx-12"><?php echo $row["email_user"]; ?></span>
              </td>
              <td><?php echo $row["telefono"] ?></td>
              <td><span id="sparkline1"><?php echo $row["direccion"] ?></span></td>
              <td class="pd-r-0-force tx-center">
                <span class="tx-gray-600">
                  <?php
                  if ($row["genero"] == 1) {
                    echo 'Masculino';
                  } else if ($row["genero"] == 2) {
                    echo 'Femenino';
                  }
                  ?>
                </span>
              </td>
            </tr>
          <?php endif; ?>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- card -->

  <!-- row -->
</div>
<!-- br-pagebody -->