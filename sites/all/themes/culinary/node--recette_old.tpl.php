<?php
// $Id: node.tpl.php,v 1.3.2.1 2010/11/11 13:52:44 danprobo Exp $
?>

<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>
clearfix post"<?php print $attributes; ?>>
    <h2 class="title">
        <a href="#"><?php print $title ?></a>
    </h2>
    <p class="byline">Posté par <?php print $name ?></p>
    <div class="entry">
        <div class="infos">
            <div class="temps">
                <?php print "Temps de préparation : ".$field_temps_preparation[0]
                    ['value']?> min
            </div>

            <div class="prix">
                <?php print "Prix : ".$field_prix[0]['value']?> €
            </div>
        </div>
        <div class="intro">
            <?php print $body[0]['safe_value'] ?>
        </div>
        <h3>Ingrédients</h3>
        <ul class="ingredients">
            <?php foreach ($field_ingredients as $ingredient) : ?>
                <li><?php print $ingredient['safe_value'] ?></li>
            <?php endforeach; ?>
        </ul>
        <h3>Etapes</h3>
        <div class="image">
            <?php



            print render($content['field_images']);

            ?>

        </div>
        <ol class="etapes">
            <?php foreach ($field_etapes as $etapes) : ?>
                <li><?php print $etapes['safe_value'] ?></li>
            <?php endforeach; ?>
        </ol>
    </div>


    <?php print render($content['links']); ?>

    <?php print render($content['comments']); ?>

    <?php print render($content['field_images'])?>

</div>