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

      <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Marketing stuff!</h1>
        <p class="lead">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet.</p>
        <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>
      </div>
      <section class="row">
        <div class="col-md-8">
        
            <?php 
            
            
            	$query = new EntityFieldQuery();
            	$entities = $query->entityCondition('entity_type', 'node')
            	->propertyCondition('type', 'Article')
            	->propertyCondition('status', 1)
            	->execute();
            	
            	if (!empty($entities['node'])) {
            		foreach ($entities['node'] as $node){
            			$nodes = node_load($node->nid);
            			
            			//var_dump($nodes);
            			?>
				         <div class="row">
				            <div class="col-md-4">
				              <a href="#">
				                <img class="img-responsive" src="<?php print file_create_url($nodes->field_image['und'][0]['uri']); ?>" alt="">
				              </a>
				            </div>
				            <div class="col-md-8">
				              <h3><?php print $nodes->title; ?></h3>
				              <h4>Subheading</h4>
				              <?php print $nodes->body['und'][0]['value'];?>
				              <a class="btn btn-primary" href="http://localhost/drupal/node/<?php print $node->vid; ?>">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
				            </div>
				          </div>
				          <?php 
            		}
            		
            	}
            
            ?>
			
         
        </div>
        <div class="col-md-4">
        <?php print render($page['sidebar_first']); ?>
        </div>
      </section>

    </div>

    <!-- /.row -->

    <!-- Site footer -->
    <footer class="footer">
      <p>&copy; 2016 Company, Inc.</p>
    </footer>

  </div> <!-- /container -->