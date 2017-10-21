<? /* Template Name: Благодарность*/ ?>
<?php get_header(); ?>
    <section class="thanks">
        <div class="container">
            <div class="col-md-5 col-md-offset-6 col-sm-8 col-sm-offset-4">
                <h2 class="title"><? the_field( 'спасибо' ) ?></h2>
                <p><? the_field( 'текст' ) ?></p>
                <a href="<? bloginfo( 'url' ) ?>" class="btn"><? the_field( 'кнопка' ) ?></a>
            </div>
        </div>
    </section>
<?php get_footer(); ?>