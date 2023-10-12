<?= $this->extend('layouts') ?>
<?= $this->section('content') ?>
<div class="container">
    <div class="col-xl-12 col-xxl-12">
        <div class="connections-page">
            <div class="heading-area">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <h4 class="text-body text-xtrabold text-md-left text-center">Latest airdrops added to Airdrop King</h4>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <?php foreach ($airdrops as $list) : ?>
                    <div class="col-xxl-4 col-md-6">
                        <div class="connection-box">
                            <div class="item-img">
                                <img src="<?= base_url('public/uploads/'. $list['image']); ?>" alt="Thumb">
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"><?= $list['name_project']; ?></h3>
                                <div class="item-designation">Approx value</div>
                                <div class="item-company">$<?= $list['value']; ?></div>
                                <div class="social-area">
                                    <div class="social-icon">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                        <a href="#"><i class="fab fa-pinterest-p"></i></a>
                                    </div>
                                    <div class="btn-wrap">
                                        <a href="<?= site_url('airdrop-detail/' . $list['slug']); ?>" class="item-btn">Read more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>