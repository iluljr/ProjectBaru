<!-- Include Slidebar -->
<?php include '../template/slidebar_admin_position.php'; ?>
<!-- End Include Slidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        
<!-- Include Topbar -->
<?php include '../template/topbar.php'; ?>
<!-- End Include Topbar -->

<!-- Content -->
<!-- Begin Page Content -->
        <div class="container-fluid">

 <!-- Collapsable Card Example -->
 <div class="row">
 <!-- Morning -->
 <div class="col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Morning</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample">
                  <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th style="text-align: center;"  rowspan="2">Start <br> Time</th>
                      <th style="text-align: center;"  colspan="3">Position</th>
                      <th style="text-align: center;" rowspan="2">SPV</th>
                      <th style="text-align: center;" rowspan="2" colspan="2">Update</th>

                    </tr>
                    <tr>
                      <th style="text-align: center;" >TWR</th>
                      <th style="text-align: center;" >CDU</th>
                      <th style="text-align: center;" >GND</th>
                    </tr>
                  </thead>
                  <tbody>
                      <?php
                      while ($row = mysqli_fetch_array($query))
                      {
                        echo '<tr>';
                        echo "<td hidden>".$row['id_position']."</td>";
                        echo "<td>".$row['time']."</td>";
                        echo "<td>".$row['twr']."</td>";
                        echo "<td>".$row['cdu']."</td>";
                        echo "<td>".$row['gnd']."</td>";
                        echo "<td>".$row['spv']."</td>"; 
                    '</tr>';
                  }?>
                  </tbody>
                  <thead>
                    <tr>
                      <th rowspan="3" style="text-align: center;">Person <br>ON Duty</th>
                    <?php
                      while ($row2 = mysqli_fetch_array($query2))
                      {
                        echo "<th hidden>".$row2['id_person']."</th>";
                        echo "<th>".$row2['ket_person']."</th>";
                    '</tr>';
                  }?>
                  </thead>
                </table>

              </div>
            </div>
                </div>
              </div>
  </div>

<!-- Afternoon -->
 <div class="col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Afternoon</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardExample">
                  <div class="card-body">
                    This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                  </div>
                </div>
              </div>
  </div>

<!-- Night -->
 <div class="col-lg-6">
              <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseCardExample">
                  <h6 class="m-0 font-weight-bold text-primary">Night</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse" id="collapseCardExample">
                  <div class="card-body">
                    This is a collapsable card example using Bootstrap's built in collapse functionality. <strong>Click on the card header</strong> to see the card body collapse and expand!
                  </div>
                </div>
              </div>
  </div>


  </div>
  <!-- End Row -->

        </div>
        <!-- /.container-fluid -->
      </div>
      <!-- End of Main Content -->

<!-- Include Footer -->
<?php include '../template/footer_admin.php'; ?>
<!-- Include End -->