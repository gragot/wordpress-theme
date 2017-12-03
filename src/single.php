<?php
/**
 * Paguina para visuliza un psot
 */
?>

<!DOCTYPE html>
<html lang="es">

<?php get_header() ?>

<body>

<?php include 'navbar.php' ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-4">
            <?php get_sidebar(); ?>
        </div>
        <div class="col-8">
            <div class="card-deck">
            <?php while ( have_posts() ) { the_post(); ?>

                <div class="tarjeta">
                    <div class="card-body">
                        <a href="<?= get_post_permalink($post->ID) ?>">
                            <h4 class="card-title" style="display: inline;"><?= $post->post_title ?></h4>
                            <a href="<?= get_edit_post_link($post->ID) ?>" class="ajustes-post"><i class="fa fa-cog" aria-hidden="true"></i></a>
                        </a>
                        <hr>
                        <?= the_content() ?>
                    </div>
                    <div class="card-footer" style="background-color: #FFF">
                        <small class="text-muted">Ultima actualizacion: <?= $post->post_modified ?></small>
                    </div>
                </div>

            <?php } ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>

</body>
</html>



