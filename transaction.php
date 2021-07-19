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
                                        <h3>March 2017</h3>
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
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td>
                                            <a class="btn btn-xs btn-dark" href="enregistrement.php"><i class="ti ti-eye"></i></a>
                                                <button class="btn btn-xs btn-info"><i class="ti ti-pencil"></i></button>
                                                <button class="btn btn-xs btn-danger"><i class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td>
                                                <a class="btn btn-xs btn-dark" href="enregistrement.php"><i class="ti ti-eye"></i></a>
                                                <button class="btn btn-xs btn-info"><i class="ti ti-pencil"></i></button>
                                                <button class="btn btn-xs btn-danger"><i class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td>
                                                <button class="btn btn-xs btn-dark"><i class="ti ti-eye"></i></button>
                                                <button class="btn btn-xs btn-info"><i class="ti ti-pencil"></i></button>
                                                <button class="btn btn-xs btn-danger"><i class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td>
                                                <button class="btn btn-xs btn-dark"><i class="ti ti-eye"></i></button>
                                                <button class="btn btn-xs btn-info"><i class="ti ti-pencil"></i></button>
                                                <button class="btn btn-xs btn-danger"><i class="ti ti-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center">1</td>
                                            <td class="txt-oflo">April 18, 2017</td>
                                            <td>
                                                <button class="btn btn-xs btn-dark"><i class="ti ti-eye"></i></button>
                                                <button class="btn btn-xs btn-info"><i class="ti ti-pencil"></i></button>
                                                <button class="btn btn-xs btn-danger"><i class="ti ti-trash"></i></button>
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
                        <form>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Recipient:</label>
                                <input type="text" class="form-control" id="recipient-name1">
                            </div>
                            <div class="form-group">
                                <label for="message-text" class="control-label">Message:</label>
                                <textarea class="form-control" id="message-text1"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Send message</button>
                    </div>
                </div>
            </div>
        </div>

<?php include 'includes/footer.php';?>