<nav class="navbar navbar-expand-lg border border-right-0 border-left-0 py-0">

    <button class="navbar-toggler  w-100" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>

    <div class="collapse navbar-collapse w-100" id="navbarSupportedContent">
        <ul class="navbar-nav  d-flex align-items-center justify-content-between w-100">
            <li class="nav-item  col ">
                <a class="nav-link   " href="<?php echo route('index'); ?>">
                    <?php echo __('site.index'); ?>

                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item  col ">
                <a class="nav-link" href="<?php echo route('courses'); ?>">
                    <?php echo __('site.courses'); ?>

                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item  col ">
                <a class="nav-link" href="<?php echo route('faq'); ?>">
                    <?php echo __('site.faq'); ?>

                    <span class="sr-only">(current)</span>
                </a>
            </li>

            <li class="nav-item col">
                <a class="nav-link" href="<?php echo route('index'); ?>#contactUs">
                    <?php echo __('site.contact_us'); ?>

                </a>
            </li>
        </ul>

    </div>
</nav>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/includes/navbar.blade.php ENDPATH**/ ?>