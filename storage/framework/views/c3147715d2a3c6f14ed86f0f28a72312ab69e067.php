<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="icon" href="<?php echo e(asset('assets/bootstrap/favicon.ico')); ?>">

    <title>Fixed Top Navbar Example for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo e(asset('assets/bootstrap/css/bootstrap.min.css')); ?>" rel="stylesheet">

    
    <link href="<?php echo e(asset('assets/datatables/css/dataTables.bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="<?php echo e(asset('assets/bootstrap/css/ie10-viewport-bug-workaround.css')); ?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo e(asset('assets/bootstrap/css/navbar-fixed-top.css')); ?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="<?php echo e(asset('assets/bootstrap/js/ie-emulation-modes-warning.js')); ?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Laravel Ajax</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo e(url('/')); ?>">Home</a></li>
            <li><a href="<?php echo e(url('/contact')); ?>">Contact</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <form method="GET" action="/search" class="form-inline mt-2 mt-md-0" style="padding-top: 8px;">
              <input class="form-control mr-sm-2" type="text" name="search" placeholder="Search" aria-label="Search">
              <button type="submit" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
          </ul>

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Search Result</h4>
                </div>
                <div class="panel-body">
                    <?php if(count($result) > 0 ): ?>
                      <table id="contact-table" class="table table-striped">
                          <thead>
                              <tr>
                                  <th width="30">Name</th>
                                  <th>Email</th>
                                  <th>Password</th>
                                  <th></th>
                              </tr>
                          </thead>
                          <tbody>
                            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e($row->name); ?></td>
                                <td><?php echo e($row->email); ?></td>
                                <td><?php echo e($row->password); ?></td>
                                <td>
                                      <a href="<?php echo e(route('contact.show', $row->id)); ?>" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-eye-open"></i> Show</a> 
                                </td>
                              </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </tbody>
                      </table>
                      <?php else: ?>
                      <p>Tidak ada hasil pencarian</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
      </div>

    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(asset('assets/jquery/jquery-1.12.4.min.js')); ?>"></script>
    <script src="<?php echo e(asset('assets/bootstrap/js/bootstrap.min.js')); ?>"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?php echo e(asset('assets/bootstrap/js/ie10-viewport-bug-workaround.js')); ?>"></script>
  </body>
</html>

<?php /**PATH C:\xampp\htdocs\FYP\laravel\resources\views/result.blade.php ENDPATH**/ ?>