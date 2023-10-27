<?php
$logo = get_field("logo", "options");
$slogan = get_field("slogan", "options");
$description = get_field("ft_description", "options");
$social = get_field("social", "options");
?>

<footer id="site-footer" class="main-footer">
    <div class="main-footer__widget">
        <div class="container">
            <div class="main-footer__widget-logo">
                <?php if ($logo) { ?>
                    <img src="<?= $logo ?>" alt="Poison Cafe" />
                <?php } ?>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <h4>Thông tin liên hệ</h4>
                </div>
                <div class="col-md-6 text-center main-footer__widget-center">
                    <?php if ($slogan) { ?>
                        <h5><?= $slogan ?></h5>
                    <?php } ?>
                    <?php if ($description) { ?>
                        <p><?= $description ?></p>
                    <?php } ?>

                    <?php if ($social) { ?>
                        <ul class="main-footer__widget-social">
                            <?php if ($social['facebook']) { ?>
                                <li><a href="<?= $social['facebook'] ?>" target="_blank" rel="nofollow"><?php echo poison_svg_icon('facebook') ?></a></li>
                            <?php } ?>
                            <?php if ($social['messenger']) { ?>
                                <li><a href="<?= $social['messenger'] ?>" target="_blank" rel="nofollow"><?php echo poison_svg_icon('messenger') ?></a></li>
                            <?php } ?>
                            <?php if ($social['instagram']) { ?>
                                <li><a href="<?= $social['instagram'] ?>" target="_blank" rel="nofollow"><?php echo poison_svg_icon('instagram') ?></a></li>
                            <?php } ?>
                            <?php if ($social['youtube']) { ?>
                                <li><a href="<?= $social['youtube'] ?>" target="_blank" rel="nofollow"><?php echo poison_svg_icon('youtube') ?></a></li>
                            <?php } ?>
                        </ul>
                    <?php } ?>
                </div>
                <div class="col-md-3">
                    <h4>Liên kết hữu ích</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="main-footer__socket">
        <div class="container">
            <?php if (get_field('copyright', 'option')) { ?>
                <p class="main-footer__socket-copyright"><?php echo str_replace('{{YEAR}}', date("Y"), get_field('copyright', 'option')); ?></p>
            <?php } ?>
        </div>
    </div>
</footer>