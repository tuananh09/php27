<?php include('views/header.php'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Trang chủ</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"> </a>
        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                User</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($users) ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Category</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($categories) ?></div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Post
                                </div>
                                <div class="row no-gutters align-items-center">
                                    <div class="col-auto">
                                        <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= count($posts) ?></div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-8 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                   <table class="table">
                    <h4 style="color: #38c8ff; font-weight: bold; text-align: center; padding-top: 10px;">USER</h4>
                     <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">avatar</th>
                          <th scope="col">Name</th>
                          <th scope="col">Email</th>
                        </tr>
                        <?php 
                            $i=0;
                            foreach ($users as $user) {$i++;
                         ?>
                        <tr>
                          <th scope="row"><?= $i?></th>
                          <td>
                            <img style="border-radius: 50%" src="public/img/avatar/<?= $user['avatar'] ?>" width="50px" height="50px">
                            </td>
                          <td><?= $user['name']?></td>
                          <td><?= $user['email']?></td>
                          
                        </tr>
                        <?php } ?>
                    </thead>    
                </table>
        <!-- Card Body -->
                </div>
            </div>

        <!-- Pie Chart -->
            <div class="col-xl-4 col-lg-5">
                <div class="card shadow mb-4">
                    <table class="table">
                    <h4 style="color: #38c8ff; font-weight: bold; text-align: center; padding-top: 10px;">CATEGORY</h4>
                     <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Name</th>
                        </tr>
                        <?php 
                            $i=0;
                            foreach ($categories as $cate) {$i++;
                         ?>
                        <tr>
                          <th scope="row"><?= $i?></th>
                          <td><?= $cate['name']?></td>
                        </tr>
                        <?php } ?>
                    </thead>    
                </table>
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Revenue Sources</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                    aria-labelledby="dropdownMenuLink">
                    <div class="dropdown-header">Dropdown Header:</div>
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="chart-pie pt-4 pb-2">
            <canvas id="myPieChart"></canvas>
        </div>
        <div class="mt-4 text-center small">
            <span class="mr-2">
                <i class="fas fa-circle text-primary"></i> Direct
            </span>
            <span class="mr-2">
                <i class="fas fa-circle text-success"></i> Social
            </span>
            <span class="mr-2">
                <i class="fas fa-circle text-info"></i> Referral
            </span>
        </div>
    </div>
</div>
</div>
</div>

<!-- Content Row -->
<div class="row">

    <!-- Content Column -->
    <div class="col-lg-6 mb-4">
        <!-- Project Card Example -->

    </div>
    <!-- /.container-fluid -->
</div>

<?php include('views/footer.php'); ?>