<div class="wa__btn_popup ">
    <div class="wa__btn_popup_txt"><?php echo __('site.need_help'); ?> <span><strong><?php echo __('site.contact_us'); ?> !</strong></span></div>
    <div class="wa__btn_popup_icon"></div>
</div>
<div class="wa__popup_chat_box">
    <div class="wa__popup_heading">
        <div class="wa__popup_title"><?php echo __('site.chat_with_us_via_whatsapp'); ?></div>
        <div class="wa__popup_intro">

        </div>
    </div>
    <div class="wa__popup_content wa__popup_content_left">
        <div class="wa__popup_notice"><?php echo __('site.we_will_respond_as_soon_as_possible'); ?></div>
        <div class="wa__popup_content_list">
            <div class="wa__popup_content_item ">
                <a target="_blank" onclick="return <?php echo setting()->site_mobile ? 'true' : 'false'; ?>;"
                    href="https://web.whatsapp.com/send?phone=<?php echo setting()->site_mobile; ?>" class="wa__stt wa__stt_online">
                    <div class="wa__popup_avatar">
                        <div class="wa__cs_img_wrap"
                            style="background: url(<?php echo asset('site/images/15678795.png'); ?>) center center no-repeat; background-size: cover;">
                        </div>
                    </div>
                    <div class="wa__popup_txt">
                        <div class="wa__member_name"><?php echo setting()->{'site_name_' . Lang()}; ?></div>
                        <div class="wa__member_duty"><?php echo __('site.support_team'); ?></div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\bakka\resources\views/site/index/whatsapp.blade.php ENDPATH**/ ?>