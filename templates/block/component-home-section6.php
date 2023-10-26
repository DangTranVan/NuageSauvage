<section class="home_section6">
    <div class="container">
        <div class="row  gy-md-0 gy-3">
            <?php if (have_rows('section6_home', 2)) : ?>
                <?php while (have_rows('section6_home', 2)) : the_row();
                    $image_user  = get_sub_field('image');
                    $content = get_sub_field('content');
                ?>
                    <div class="commit-items col-4 col-md-2 text-center text-capitalize">
                        <img src="<?php echo $image_user['url']; ?>" alt="Livraison offert<br />des 59e">
                        <p class="text pt-2">
                            <?php echo $content; ?>
                        </p>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
            <!-- <div class="commit-items col-4 col-md-2 text-center text-capitalize">
                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/icon05.png" alt="Livraison offert<br />des 59e">
                <p class="text pt-2">
                    Livraison offert<br>
                    des 59e </p>
            </div>
            <div class="commit-items col-4 col-md-2 text-center text-capitalize">
                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/icon02.png" alt="Service client<br />01 73 70 05 55">
                <p class="text pt-2">
                    Service client<br>
                    01 73 70 05 55 </p>
            </div>
            <div class="commit-items col-4 col-md-2 text-center text-capitalize">
                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/icon06.png" alt="Click et<br />collect gratuit">
                <p class="text pt-2">
                    Click et<br>
                    collect gratuit </p>
            </div>
            <div class="commit-items col-4 col-md-2 text-center text-capitalize">
                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/icon03.png" alt="Paiement sécurisé">
                <p class="text pt-2">
                    Paiement <br> sécurisé </p>
            </div>
            <div class="commit-items col-4 col-md-2 text-center text-capitalize">
                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/icon04.png" alt="Producteur direct">
                <p class="text pt-2">
                    Producteur <br> direct </p>
            </div>
            <div class="commit-items col-4 col-md-2 text-center text-capitalize">
                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/icon01.png" alt="Éthique et<br />Qualité">
                <p class="text pt-2">
                    Éthique et<br>
                    Qualité </p>
            </div> -->
        </div>
    </div>
</section>