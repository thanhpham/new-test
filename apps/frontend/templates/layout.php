<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_javascripts() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
      .sidebar-nav {
        padding: 9px 0;
      }
    </style>
    
  </head>
  <body>
      <div class="row-fluid">
  <div class="span12">
    Level 1 of column
    <div class="row-fluid">
      <div class="span6">Level 2</div>
      <div class="span6">Level 2</div>
    </div>
  </div>
</div>

      
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">Vietnam Social News
          <sup><span class="label label-important ">&#x3d0;eta</span></sup>
          </a>
          
          
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="#">Home</a></li>
              <li><a href="#about">About</a></li>
              <li><a href="#contact">Contact</a></li>
              <li class="pull-right" style=" padding-top: 3px; margin-bottom:-30px">
                <form  >
                    <input type="text" class="input-medium search-query span4" placeholder="http://"/>
                    <button type="submit" class="btn btn-primary" >Submit Your News</button>
                </form>
              </li>
            </ul>
            <p class="navbar-text pull-right">Logged in as <a href="#">username</a></p>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

      
   <div class="container-fluid">
      <div class="row-fluid">

        <div class="span2">
          <div class="well sidebar-nav">
            <ul class="nav nav-list">
              <li class="nav-header">Display</li>
              <li class="active"><a href="#">All</a></li>
              <li><a href="#">Research Type</a></li>
              <li class="nav-header">Source</li>
              <li><a href="#">Bloomberg</a></li>
              <li><a href="#">BusinessWeek</a></li>
              <li><a href="#">ThanhNien</a></li>
              <li class="nav-header">Language</li>
              <li><a href="#">English</a></li>

            </ul>
          </div><!--/.well -->
        </div><!--/span-->



        <div class="span5 row-fluid">

          <?php echo $sf_content ?>
          
        </div><!--/span-->
        <div class="span5 row-fluid">


            <div class="row-fluid">
                
            </div>
        </div><!--/span-->
      </div><!--/row-->
      
      <hr />

      <footer>
        <p>&copy; Company 2012</p>
      </footer>

    </div><!--/.fluid-container-->


      

   
  </body>
  
</html>
