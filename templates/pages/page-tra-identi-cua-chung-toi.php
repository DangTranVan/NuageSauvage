<?php /* Template Name: Trang chủ */ ?>

<?php get_header(); ?>
<main class="home">
    <?php get_template_part('templates/block/introduce', 'banner'); ?>
    <section class="section2_introduce">
        <section class="section__breadcrumb" style="margin-bottom: 0;">
            <div class="container">
                <?php the_breadcrumb(); ?>
            </div>
        </section>
        <div class="section2_content">
            <div class="bg">
                <div class="container">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" style="padding: 14px 0;">
                        <li class="nav-item " role="presentation">
                            <button class="nav-link active after" id="pills-introduce-tab" data-bs-toggle="pill" data-bs-target="#pills-introduce" type="button" role="tab" aria-controls="pills-introduce" aria-selected="true">Nos Producteur</button>
                        </li>
                        <li class="nav-item " role="presentation">
                            <button class="nav-link after" id="pills-achievement-tab" data-bs-toggle="pill" data-bs-target="#pills-achievement" type="button" role="tab" aria-controls="pills-achievement" aria-selected="false" style="margin-left: 50px;">Notre Fondatrice</button>
                        </li>
                        <li class="nav-item " role="presentation">
                            <button class="nav-link " id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-active" type="button" role="tab" aria-controls="pills-active" aria-selected="false" style="margin-left: 50px;   ">Notre Salon Tra Art</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <!-- GIỚI THIỆU CHUNG -->
                <div class="tab-pane fade show active" id="pills-introduce" role="tabpanel" aria-labelledby="pills-introduce-tab" tabindex="0">
                    <div class="container">
                        <div class="row auto-padding">
                            <div class="col-12 col-sm-3">
                                <div class="img-nuagesauvage">
                                    <img class="logo" src="https://nuagesauvage.fr/wp-content/uploads/2022/11/logo.png" alt="Nuage Sauvage Image">
                                </div>
                            </div>
                            <div class="col-12 col-sm-9">
                                <div class="content-nuagesauvage">
                                    <h3>Savez-vous qu’il existe de grands théiers, qui vivent en toute liberté, à l’état sauvage ?</h3>
                                    <ul>
                                        <li class="customBullet">Le thé en vrac que nous proposons provient de tels arbres qui se trouvent dans les hautes montagnes de Ha Giang, au Nord du Vietnam. Il ne s’agit pas de théiers cultivés, mais de grands arbres centenaires, sauvages, appelés localement.</li>
                                    </ul>
                                    <ul>
                                        <li class="customBullet">Leurs grandes branches montent et ondulent vers les nuages, dans un ciel libre de toute pollution, de tout pesticide. Leurs racines s’enfoncent profondément dans la terre. À leurs pieds, la faune et la flore luxuriantes poussent et circulent librement. Tout cela crée une belle harmonie, une nature en symbiose.</li>
                                    </ul>
                                    <ul>
                                        <li class="customBullet">Par sa démarche avant tout solidaire et écologique, Nuage Sauvage contribue à vous faire découvrir et apprécier un thé en vrac de première qualité. Nous vous proposons aussi nos propres créations de mélanges exotiques. Ces créations sont inspirées de la gastronomie vietnamienne, sans ajout d’huiles essentielles, ni d’arômes qui dénaturent les saveurs d’origine du thé.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="title-text-box nvt-text-align-none">
                            <span class="text padding-text-0">Notre mission</span>
                            <span class="absolute-text top-50">Mission</span>
                        </div>
                        <div class="content-notremission">
                            <p></p>
                            <ul>
                                <li>Préserver cette beauté et célébrer la richesse culturelle des ethnies minoritaires Dzao et Hmong du Vietnam.</li>
                                <li style="text-align: justify;">Favoriser l’harmonie et la compréhension mutuelle entre l’homme et la nature.</li>
                                <li style="text-align: justify;">Ainsi, nous versons une prime équitable à la coopérative de Ban Lien pour contribuer au financement des projets économiques et sociaux de la commune. C’est le meilleur moyen de sauvegarder cet écosystème unique, menacé par l’industrialisation.</li>
                            </ul>
                            <p></p>
                        </div>
                        <div class="image-grid">
                            <img class="image-grid-col-1 image-grid-row-2" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/mission1.png" alt="img left">
                            <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/galerie5.jpg" alt="img top right">
                            <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/notremission3.jpg" alt="img bottom right">
                        </div>
                        <div class="content-banlien auto-padding">
                            <div class="title-text-box nvt-text-align-none">
                                <span class="text padding-text-0">La coopérative de Ban Lien</span>
                                <span class="absolute-text top-50">Ban Lien</span>
                            </div>
                            <div class="text-banlien">
                                <p></p>
                                <p>Ban Lien est l’un des villages reculés du district de Bac Ha dans la province de Lao Cai, au nord-ouest du Vietnam. Plus de 360 km le sépare de Hanoi, soit 10 heures de voiture, et 75 km de Lao Cai, la capitale de la province. Il est situé à une altitude à plus de 900 m. La plupart des habitants de Ban Lien, presque tous des cultivateurs de thé traditionnel, appartiennent à des groupes ethniques minoritaires Dzao, Hmong, Tay, etc… I<br>
                                    Ils comptent sur la production agricole à petite échelle pour répondre à leurs besoins quotidiens et leur apporter un revenu.La coopérative de thé Ban Lien notre premier direct producteur, soutenue par le Département de l’économie de la province de Lao Cai dans le cadre de son « Programme de développement du thé ». Aujourd’hui, 180 ménages, répartis en 8 sous-groupes, y participent.</p>
                                <p></p>
                            </div>
                            <div class="img-banlien">
                                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/galerie4.jpg" alt="banlien image">
                            </div>
                        </div>
                        <div class="content-caobo">
                            <div class="title-text-box nvt-text-align-none">
                                <span class="text padding-text-0">Le producteur de Cao Bo</span>
                                <span class="absolute-text top-50">Le producteur</span>
                            </div>
                            <div class="text-caobo">
                                <p></p>
                                <p>La production du thé de Cao Bo regroupe 10 villages : Chat Tien, Tham Con, Ban Dang, Khuoi Luong, Thac Tang, Thac Tau, Thac Hung, Tat Khao, Tham Ve et Lung Tao.<br>
                                    Nous sommes en train d’encourager ces villageois à s’allier afin de former une coopérative démocratique qui serait certifiée équitable pour la région.<br>
                                    Ces villages sont situés au Nord du Vietnam dans les montagnes Tay Con Linh, région protégée par l’État pour préserver l’habitat naturel. Cette protection est indispensable pour assurer la prospérité et le développement des théiers anciens.<br>
                                    A ce jour, on compte 645 ménages cueilleurs de thé, souvent de minorité Dzao. Cette année encore, le nombre augmentera en raison de l’agrandissement des familles après les mariages. Les jeunes mariés, malgré leur indépendance administrative, vivent souvent sous le même toit que les parents et les grands-parents.<br>
                                    Les foyers vendront le thé frais directement à l’usine qui recrutera un certain nombre d’artisans et de maitres de thé qualifiés pour assurer la bonne exécution des procédés stricts de production. L’achat direct de thé frais est un moyen d’assurer une meilleure vie aux producteurs locaux. Ce travail représente 70% de revenus des cueilleurs.</p>
                                <p>Cette région est aussi connue pour ses thés Pho Nhi ou, autrement dit, thé Puerh qui signifie thé fermenté. Ce thé naturellement fermenté est composé uniquement de l’ancien thé Shan Neige. Seuls les locaux connaissent les procédés de fabrication du vrai thé Puerh au Vietnam, car ils partagent la frontière de Puerh, ville d’origine de ce thé médicinal. Le Puerh est devenu une boisson commune au VIIè siècle, sous la dynastie chinoise des Tang. A cette époque il n’y avait pas de frontière entre la région de Cao Bo et la région du Yunnan en Chine. Les peuples de ces zones vivaient ensemble et partageaient leur savoir-faire.</p>
                                <p></p>
                            </div>
                            <div class="img-caobo">
                                <div class="image-grid-caobo">
                                    <img class="" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/caobo-scaled.jpg" alt="caobo image">
                                    <img class="" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/caobo2-scaled-1.jpg" alt="caobo image">
                                </div>
                            </div>
                        </div>
                        <div class="content-dzao auto-padding">
                            <div class="title-text-box nvt-text-align-none">
                                <span class="text padding-text-0">M. Menh, maître de thé et combattant pour le peuple Dzao</span>
                                <span class="absolute-text top-50">Pour le peuple Dzao</span>
                            </div>
                            <div class="text-dzao">
                                <p></p>
                                <p>Trieu Van Menh est né en 1982 dans la commune de Thong Nguyen, région de Hoang Su Phi, dans une famille traditionnelle d’artisans producteurs de thé Shan. Depuis sa tendre enfance passée dans la forêt de Shan Neige, il a tout mis en œuvre pour réaliser son rêve : celui de monter sa propre production de thé. Pour lui, le théier Shan qui pousse naturellement au milieu de la forêt, est un don du ciel et de la terre qui doit être préservé de génération en génération Dzao.</p>
                                <p>Poussé par son amour des théiers et le désir d’aider les siens, M. Menh a courageusement monté seul sa petite production de thé noir, thé vert et thé blanc rare et unique. Son secret de fabrication est bien gardé, connu de lui seul, tout comme le lieu de la récolte. Nous savons seulement que sa production est issue des arbres les plus vieux et les plus robustes des montagnes les plus hautes et isolées de Ha Giang.</p>
                                <p>Depuis, il contribue non seulement à préserver l’identité culturelle de sa patrie, mais il apporte aussi un revenu stable et améliore la vie des populations locales.Grâce à ses recettes traditionnelles héritées de sa famille, à son grand talent et à son nez, il produit des thés noirs et blancs rares, de qualité remarquable. La première fois que j’ai rencontré M. Menh, j’ai tout de suite été convaincue par son courage. Caché derrière une timidité typique des Dzao, on découvre une grande volonté de rendre la vie de son village plus aisée, mais aussi de sortir de la dépendance vis-à-vis des grands grossistes chinois qui achètent les récoltes à des prix dérisoires. Je lui ai promis de faire mon maximum pour l’accompagner dans cette démarche.</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- THÀNH TỰU -->
                <div class="tab-pane fade" id="pills-achievement" role="tabpanel" aria-labelledby="pills-achievement-tab" tabindex="0">
                    <div class="container">
                        <div class="profile auto-padding">
                            <div class="backgroundProfile">
                                <div class="row">
                                    <div class="col-12 col-sm-5">
                                        <div class="avatar">
                                            <img src="https://nuagesauvage.fr/wp-content/uploads/2022/11/image.png" alt="">
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-7">
                                        <div class="about">
                                            <h2>Je m'appelle Van</h2>
                                            <h4>Fondatrice</h4>
                                            <p>En vietnamien, cela signifie NUAGE. Mon thé sans pesticide provient des arbres sauvages dont les grandes branches ondulent et s’élèvent vers les NUAGES. Voici l’identi-THÉ de la marque Nuage Sauvage, et plus que ça</p>
                                            <span class="social">
                                                <a href="https://www.facebook.com/NuageSauvage">
                                                    <img src="https://nuagesauvage.fr/wp-content/themes/NUAGE-SAUVAGE/assets/images/nvt/facebookicon.png" alt="Icon">
                                                </a>
                                                <a href="https://www.instagram.com/the.nuagesauvage/">
                                                    <img src="https://nuagesauvage.fr/wp-content/themes/NUAGE-SAUVAGE/assets/images/nvt/instagramicon.png" alt="icon">
                                                </a>
                                                <a href="https://youtube.com/channel/UCGXl-YasPGc81_Y1-qH841A/">
                                                    <img src="https://nuagesauvage.fr/wp-content/themes/NUAGE-SAUVAGE/assets/images/nvt/youtubeicon.png" alt="icon">
                                                </a>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="quiSuisJe">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">Qui suis-je?</span>
                                <span class="absolute-text ">Qui suis-je?</span>
                            </div>
                            <div class="text-quiSuisJe">
                                <p></p>
                                <p>Après avoir terminé mes études de photographie à l’école de l’image des Gobelins à Paris, Je suis rentrée au Vietnam pour chercher des sujets photographiques. Par coïncidence, j’ai découvert une forêt de théiers centenaires dans les montagnes du Nord du Vietnam.</p>
                                <p>Fascinée par cette nature merveilleuse, j’ai décidé de partir à la découverte de cette beauté sauvage, de son côté libre et mystérieux. J’avais de la chance à savourer leurs thés d’exception dépourvu de substances chimiques. Jamais dans ma vie, je n’avais goûté un thé aussi bon, aussi riche en saveur. J’ai tout de suite pensé que cela irait au-delà d’un simple projet de photos.</p>
                                <p></p>
                            </div>
                            <div class="img-quiSuisJe">
                                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/quisuisje.jpg" alt="Image Qui suis je">
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="engagements auto-padding">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">Mes engagements : de la bon-THÉ du cœur</span>
                                <span class="absolute-text ">Mes engagements cœur</span>
                            </div>
                            <div class="text-engagements">
                                <p></p>
                                <p>Créer ma marque de thé n’est pas une motivation suffisante pour me donner la force de surmonter toutes les démarches administratives ! Ma volonté est de devenir une activiste pour promouvoir et protéger cette zone face aux risques d’exploitation irresponsable.</p>
                                <p>Traditionnellement, les Dzao et les Hmong considèrent le « théier-ancêtre » comme un arbre sacré. Mais de nos jours, dans certaines zones, face à l’achat massif de feuilles de thé, et le développement du tourisme de masse, beaucoup de personnes ne respectent plus ce patrimoine.</p>
                                <p>L’objectifs principal de Nuage Sauvage est de vous offrir un thé sans pesticide, un thé pur ou mélangé avec des plantes médicinales , mais pas que !</p>
                                <p></p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="responsable ">
                            <div class="row fcolreverse-mobile">
                                <div class="col-12 col-sm-5">
                                    <ul class="cinq_articles">
                                        <li>L’exploitation Responsable</li>
                                        <li>La Préservation De La Biodiversité</li>
                                        <li>Le Soutien De Communautés Respectueuses De Leur Héritage Écologique</li>
                                        <li>La Célébration Des Richesses Culturelles Des Ethnies Minoritaires Dzao Et Hmong</li>
                                        <li>Et L’inspiration Artistique</li>
                                    </ul>
                                </div>
                                <div class="col-12 col-sm-7">
                                    <div class="img-right">
                                        <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/cinqarticels-scaled-1.jpg" alt="Image Right">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="thes_bg">
                        <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/thumbnail-khach-scaled-1.jpg" alt="image thes">
                        <div class="container h-100 d-flex">
                            <div class="col-12 col-xl-4 h-100">
                                <div class="thes h-100 d-flex align-items-end align-items-xl-center">
                                    <div class="bg-text">
                                        <div class="text-thes">
                                            <p class="text-left"></p>
                                            <p>Ici, l’homme, les animaux et les théiers vivent en parfaite harmonie. Les buffles sont protégés par l’ombre des grands théiers anciens. L’arbre profite de l’engrais naturel grâce à des animaux vivent à leurs pieds.</p>
                                            <p></p>
                                        </div>
                                        <a class="btn-cus-nvt btn__effect--3" href="https://nuagesauvage.fr/notre-identi-the" data-text="Découvre la boutique">
                                            <span class="seemore">
                                                Découvre la boutique
                                            </span>

                                        </a>
                                        <!-- <a class="btn-cus-nvt " href="https://nuagesauvage.fr/the/">
                                            <div><span>Découvre la boutique</span></div>
                                        </a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HOẠT ĐỘNG CÔNG TY -->
                <div class="tab-pane fade" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab" tabindex="0">
                    <div class="tra_art auto-padding">
                        <div class="container">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">Pourquoi Trà-art?</span>
                                <span class="absolute-text ">Pourquoi</span>
                            </div>
                            <div class="text-tra_art">
                                <p></p>
                                <p>T-R-À A-R-T, un jeu de mot et au-delà. Trà /ʨa̤/ qui se prononce Tcha, signifiant « thé » en vietnamien, est le miroir de l’Art. Dans notre culture, l’art se trouve dans le thé et le thé se trouve dans la vie, une forme de l’art.</p>
                                <p>Pour continuer à nourrir notre passion, notre amour du thé, TRÀ-ART 2020 évoluera vers une maison des thés vietnamiens au centre de la ville lumière Paris. Vous y trouverez du thé et plus encore, une harmonie entre la nature et l’art.</p>
                                <p></p>
                            </div>
                            <div class="img-tra_art">
                                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/banner.jpg" alt="Image Qui suis je">
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <div class="img-under-tra-art">
                            <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/Artboard-13x-1.jpg" alt="image_under_pourquooi_tra_art">
                        </div>
                    </div>

                    <div class="tra_art_child auto-padding">
                        <div class="container">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">Trà-art?</span>
                                <span class="absolute-text ">Tra-art</span>
                            </div>
                            <div class="text-tra_art_child">
                                <p></p>
                                <p>Dans notre boutique, TRÀ-ART mettra en avant une gamme de thé qui est non seulement rare et de très grande qualité provenant des théiers sauvages, centenaires du Vietnam, mais aussi absolument écologique et équitable, importé par notre marque Nuage Sauvage.</p>
                                <p>Nous vous y proposerons également une boisson de plus en plus populaire à base de thé, le Bubble Tea ; une boisson gourmande, rafraîchissante et bienfaisante et toujours dans l’esprit 100% nature, bio, authentique qui nous caractérise.</p>
                                <p>TRÀ-ART sera aussi une galerie d’art, au sein de notre salon de thé, pour promouvoir les talents vietnamiens dans le monde artistique. Selon nous, l’art contemporain est le plus beau langage pour illustrer l’image d’un nouveau Vietnam.</p>
                                <p></p>
                            </div>
                        </div>
                        <?php get_template_part('templates/block/component', 'home-section4'); ?>
                    </div>
                    <div class="galerie_tra_art auto-padding">
                        <div class="container">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">GALERIE TRÀ-ART?</span>
                                <span class="absolute-text ">Galerie</span>
                            </div>
                            <div class="text-galerie_tra_art">
                                <p></p>
                                <p style="text-align: left;">Trà Art est une nouvelle galerie d’art à Paris, près du quai de Jemmapes. Ce nouvel endroit, fondé et dirigé par une jeune femme vietnamienne, porte une ambition de soutenir les artistes contemporains du Vietnam ainsi que celles et ceux ayant le lien franco-vietnamien. En effet, cet espace est une représentation de la philosophie asiatique, notamment vietnamienne qui se réunit dans la contemplation et l’évolution. Trà Art représente également une liaison entre le contemporain et l’authenticité dans un espace artistique polyvalent.</p>
                                <p></p>
                            </div>
                            <div class="img-galerie_tra_art">
                                <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/JZRJzGE4-2.jpg" alt="Image trà art">
                            </div>
                        </div>
                    </div>
                    <div class="salon_tra_art auto-padding">
                        <div class="container">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">SALON TRÀ-ART?</span>
                                <span class="absolute-text ">Salon</span>
                            </div>
                            <div class="img-salon_tra_art auto-padding image-grid-salon">
                                <div class="img-grid" style="overflow: hidden;">
                                    <img class="zoom" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/1.jpg" alt="Image salon trà">
                                </div>
                                <div class="img-grid" style="overflow: hidden;">
                                    <img class="zoom" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/2.jpg" alt="Image salon trà">
                                </div>
                                <div class="img-grid" style="overflow: hidden;">
                                    <img class="zoom" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/3-1.jpg" alt="Image salon trà">
                                </div>
                                <div class="img-grid" style="overflow: hidden;">
                                    <img class="zoom" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/4.jpg" alt="Image salon trà">
                                </div>
                                <div class="img-grid" style="overflow: hidden;">
                                    <img class="zoom" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/5.jpg" alt="Image salon trà">
                                </div>
                                <div class="img-grid" style="overflow: hidden;">
                                    <img class="zoom" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/6.jpg" alt="Image salon trà">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="menu_bubble_tea auto-padding">
                        <div class="container">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">MENU BUBBLE TEA DE SALON DE THÉ TRÀ ART</span>
                                <span class="absolute-text ">Menu Bubble</span>
                            </div>
                            <div class="text-menu_bubble_tea">
                                <p></p>
                                <p style="text-align: left;">Trà Art a le plaisir de vous annoncer du nouveau sur sa carte. Située dans le 10ème, cette boutique est à la fois salon de thé, boutique de thé et galerie d’art. L’équipe cherche à valoriser la fierté de la culture du thé vietnamien, concept unique puisqu’il s’agit du premier maison de thé vietnamienne traditionnel et contemporain. Tout en proposant un espace exposition pour promouvoir des artistes contemporains du Vietnam.</p>
                                <p style="text-align: left;">Suite à cette année difficile.</p>
                                <p></p>
                            </div>
                            <div class="img-menu_bubble_tea">
                                <img style="width: 100%;" src="https://nuagesauvage.fr/wp-content/uploads/2022/12/menu.jpg" alt="Image trà art">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>