<html lang="en"><head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta content="" name="description">
    <meta content="" name="author">
    <link href="../../favicon.ico" rel="icon">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="../bootstrap/css/dashboard.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav role="navigation" class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand">Admistrator Management</a>
        </div>
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" placeholder="Search..." class="form-control">
          </form>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <?php include("incs/sidebar.php"); ?>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <h1 class="page-header">Quản lý bài viết</h1>

          <div class="row placeholders">
            <div class="col-sm-2" align="left"><label class="label label-info">Chọn danh mục :</label></div>
            <div class="col-sm-2">
              <select id="category">
                <option>PHP cơ bản</option>
              </select>
            </div>
            <div class="col-sm-8"></div>
          </div>
          <div class="row placeholders">
            <div class="col-sm-2" align="left"><label class="label label-info">Tiêu đề :</label></div>
            <div class="col-sm-2">
              <input type="text" size="60" id="title" name="title"> 
            </div>
            <div class="col-sm-8"></div>
          </div>
          <div class="row placeholders">
            <div class="col-sm-2" align="left"><label for="short_content" class="label label-info">Nội dung ngắn :</label></div>
            <div class="col-sm-2">
              <textarea id="short_content" name="short_content" cols="60" rows="4" ></textarea>
            </div>
            <div class="col-sm-8"></div>
          </div>
          <h2 class="sub-header">Nội dung bài viết</h2>
          <div class="table-responsive">
            <textarea name="content" id="content" rows="10" cols="80">
                This is my textarea to be replaced with CKEditor.
            </textarea>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/docs.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script src="js/common.js"></script>
    <script type="text/javascript">
      CKEDITOR.replace( 'content' );
    </script>
  </body>
</html>