<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!-- Section: slider -->
<section id="slider">
    <div class="container-fluid home-slider-container">
        <div class="row">

            <!--Show if enabled-->
            <?php
            if ($settings->slider_active == 1) {
                $this->load->view('partials/_slider', $slider_posts);
            }
            ?>

        </div><!-- /.row -->
    </div> <!-- /.container-fluid -->
</section>
<!-- /.Section: slider -->




<!-- Section: main -->
<section id="main" class="margin-top-30">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="content">
                    <!-- posts -->
                    <div class="posts">

                        <!-- printf posts -->
                        <?php
                        foreach ($posts as $item) {
                            $this->load->view('partials/_post_item',['item' => $item]);
                        }
                        ?>

                    </div><!-- /.posts -->


                    <div class="col-sm-12">
                        <div class="row">
                            <?php echo $this->pagination->create_links(); ?>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col-sm-12 col-md-4">
                <!--Sidebar-->
                <?php $this->load->view('partials/_sidebar'); ?>

            </div><!--/col-->

        </div>
    </div>
</section>
<!-- /.Section: main -->