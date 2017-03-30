<div class="container">

      <!-- The justified navigation menu is meant for single line per list item.
      Multiple lines will require custom code not provided by Bootstrap. -->
      <div class="masthead">
        <h3 class="text-muted">Project name</h3>
        <nav>
          <ul class="nav nav-justified">
            <li class="active"><a href="#">Actualité</a></li>
            <li><a href="#">Baccalauréat</a></li>
            <li><a href="#">Licence</a></li>
            <li><a href="#">Master</a></li>
            <li><a href="#">Cycle d'ingénieur</a></li>
            <li><a href="#">Exemples des concours</a></li>
          </ul>
        </nav>
      </div>

      <section class="row">
        <div class="col-md-8">
   
     	<?php print render($page['content']); ?>
			
         
        </div>
        <div class="col-md-4">
        </div>
      </section>

    </div>

    <!-- /.row -->

    <!-- Site footer -->
    <footer class="footer">
      <p>&copy; 2016 Company, Inc.</p>
    </footer>

  </div> <!-- /container -->