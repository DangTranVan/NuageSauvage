<?php /* Template Name: Trang chủ */ ?>

<?php get_header(); ?>
<main class="home">
    <section class="section1_banner">
        <img src="https://nuagesauvage.fr/wp-content/uploads/2022/12/banner-chinh-1-scaled-e166988727-1.jpg" alt="" onerror="this.src='https://ciat.cgiar.org/wp-content/uploads/image-not-found.png';">
        <div class="overlay"></div>
        <div class="path">
            <h2 class="breadcrumb">
                <span class="notranslate"> NUAGE SAUVAGE /</span>
                <span class="ms-2">
                    XƯỞNG RIÊNG (ĐƯỢC ĐẶT TRƯỚC)
                </span>
            </h2>
        </div>
    </section>
    <section class="section2_introduce">
        <div class="section2_breadcrumb">
            <div class="container">
                <div class="breadcrumbs">
                    <a class="aaa" href="">
                        Trang chủ
                    </a>
                    <span> > </span>
                    <a href="#" rel="nofollow">
                        Xưởng riêng (đặt trước)
                    </a>
                </div>
            </div>
        </div>
        <div class="section2_content">
            <div class="bg">
                <div class="container">
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" style="padding: 14px 0;">
                        <li class="nav-item " role="presentation">
                            <button class="nav-link active after" id="pills-introduce-tab" data-bs-toggle="pill" data-bs-target="#pills-introduce" type="button" role="tab" aria-controls="pills-introduce" aria-selected="true">Hội thảo đang diễn <br> ra/sắp diễn ra</button>
                        </li>
                        <li class="nav-item " role="presentation">
                            <button class="nav-link after" id="pills-achievement-tab" data-bs-toggle="pill" data-bs-target="#pills-achievement" type="button" role="tab" aria-controls="pills-achievement" aria-selected="false" style="margin-left: 50px;">Hội thảo trước đây</button>
                        </li>
                        <li class="nav-item " role="presentation">
                            <button class="nav-link " id="pills-active-tab" data-bs-toggle="pill" data-bs-target="#pills-active" type="button" role="tab" aria-controls="pills-active" aria-selected="false" style="margin-left: 50px;   ">Xưởng riêng (được đặt <br> trước)</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content" id="pills-tabContent">
                <!-- GIỚI THIỆU CHUNG -->
                <div class="tab-pane fade show active" id="pills-introduce" role="tabpanel" aria-labelledby="pills-introduce-tab" tabindex="0">
                    <div class="container">
                        <div style="text-align: center;" class="content-dzao auto-padding">
                            <div class="title-text-box nvt-text-align-none">
                                <span class="text padding-text-0">Hội thảo đang diễn ra/sắp diễn ra</span>
                                <span class="absolute-text top-50">Xưởng</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- THÀNH TỰU -->
                <div style="padding: 80px 0;" class="tab-pane fade" id="pills-achievement" role="tabpanel" aria-labelledby="pills-achievement-tab" tabindex="0">
                    <div class="container">
                        <div class="quiSuisJe">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">Hội thảo trước đây</span>
                                <span style="top: -35px !important;" class="absolute-text ">Xưởng</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- HOẠT ĐỘNG CÔNG TY -->
                <div style="padding: 80px 0;" class="tab-pane fade" id="pills-active" role="tabpanel" aria-labelledby="pills-active-tab" tabindex="0">
                    <div class="container">
                        <div class="quiSuisJe">
                            <div class="title-text-box d-block">
                                <span class="text padding-text-0">Xưởng riêng (được đặt trước)</span>
                                <span style="top: -35px !important;" class="absolute-text ">Xưởng</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>