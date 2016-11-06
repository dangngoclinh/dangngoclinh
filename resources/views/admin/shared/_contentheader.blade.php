    <section class="content-header">
      <h1>
        <?php echo $pagetitle; ?>
        <?php
          if(isset($pagedescription))
          {
            echo '<small>'.$pagedescription.'</small>';
          }
        ?>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>