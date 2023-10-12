<?= $this->extend('layouts') ?>
<?= $this->section('content') ?>
<div class="breadcrumbs-wrap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm-4 col-12">
                <div class="breadcrumbs-area">
                    <h1>Preview</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!--=====================================-->
<!--=         	Details  Project      	=-->
<!--=====================================-->
<div class="container">
    <div class="col-lg-12">
        <div class="card email-table">
            <div class="card-body">
                <div class="single-email">
                    <div class="mail-details">
                        <h4 class="text-xtrabold text-body text-center mb-3"><?= $detail['name_project']; ?></h4>
                        <p>
                            <?= $detail['description']; ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 pb-5">
        <div class="card sales-chart email-table">
            <div class="card-body">
                <div class="item-heading">
                    <h3 class="text-xtrabold text-body mb-1">Step-by-Step Guide:</h3>
                    <div class="text-gray text-15">Follow step by step to get rewarded</div>
                </div>
                <div class="single-email">
                    <div class="mail-details">
                        <div class="mg-b-40">
                            <div class="row">
                                <div class="col-10">
                                    <h6 class="text-body text-15 text-bold mb-1">Step #1</h6>
                                    <div class="text-gray text-15">Register on Koinpark by October 27th, and get 100,000 $SHIB as a warm welcome bonus.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-b-40">
                            <div class="row">
                                <div class="col-10">
                                    <h6 class="text-body text-15 text-bold mb-1">Step #2</h6>
                                    <div class="text-gray text-15">Participate in the Koinpark Mega Airdrop to secure Mystery Boxes containing rewards ranging from $0.1 to $10 in $BTC, $KPK tokens, and more.</div>
                                </div>
                            </div>
                        </div>
                        <div class="mg-b-40">
                            <div class="row">
                                <div class="col-10">
                                    <h6 class="text-body text-15 text-bold mb-1">Step #3</h6>
                                    <div class="text-gray text-15">Refer friends and earn an additional 25,000 $SHIB for each successful referral.</div>
                                </div>
                            </div>
                        </div>
                        <div class="item-number text-15 mb-5">Disclaimer: This content is not intended to be financial advice. Investors should take the time to research any given product before depositing or investing their funds. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>