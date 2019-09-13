<!-- Ad Space -->
<?php if(trim($ads->home_728) != '') :?>
<section id="ad-space" class="ads-index ad-block-728">
    <div class="ads-728">
        <?php echo $ads->home_728; ?>
    </div>
</section>
<?php endif;?>

<?php if(trim($ads->home_468) != ''):?>
<section id="ad-space" class="ads-index ad-block-468">
    <div class="ads-468">
        <?php echo $ads->home_468; ?>
    </div>
</section>
<?php endif;?>

<?php if(trim($ads->home_234) != ''):?>
<section id="ad-space" class="ads-index ad-block-234">
    <div class="ads-234">
        <?php echo $ads->home_234; ?>
    </div>
</section>
<?php endif;?>
<!-- /.Ad Space -->