<?php include 'includes/head.php';?>

    <div id="main-wrapper">

        <?php include 'includes/header.php';?>

        <?php include 'includes/aside.php';?>

        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard 1</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">
                                <i class="ti ti-plus"></i> Ajouter
                            </button>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-lg-12">
                        <div class="card">

                            <div class="card-body bg-light">
                                <div class="row">
                                    <div class="col-6">
                                        <h3><?= date("M, Y") ?></h3>
                                        <h5 class="font-light m-t-0">Report for this month</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover no-wrap">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th>DATES</th>
                                            <th>ACTIONS</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="txt-oflo"><?=date("d")?></td>
                                            <td>
                                            <a class="btn btn-xs btn-dark" href="services/operation.php?d=list"><i class="ti ti-eye"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>

        <div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLabel1">New message</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="services/operation.php?d=<?=$_GET['d']?>">
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Transaction:</label>
                                <select name="type">  
                                    <option value="OM">OM</option>
                                    <option value="MOMO">MOMO</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Transaction:</label>
                                <select name="subtype">  
                                    <option value="DEPOT">DEPOT</option>
                                    <option value="RETRAIT">RETRAIT</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Amount:</label>
                                <input name="amount" type="number" class="form-control" id="message-text1"></input>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save transaction</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

<?php include 'includes/footer.php';?>