<?php 
/**
 * Header tools template. It shows on the top right of the site.
 * 
 * @package Rancak
 */
?>

<div class="header-tools col-lg-2 flex-row justify-content-end">
    <?php if (get_theme_mod('search_button', true)) { ?>
    <a href="#" class="search-btn">
    <svg width="16" height="16" fill="none" viewBox="1 1 23 23">
        <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="#fff" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
    </svg>
    </a>
    <?php } ?>

    <?php if (get_theme_mod('subscribe_button', true)) {  ?>
    <a class="subscribe-btn" href=" <?php echo get_theme_mod('subscribe_link') ?> " target="_blank">
    <svg width="16" height="16" viewBox="0 -1 32 32" fill="#fff">
        <g transform="translate(-206.000000, -310.000000)">
        <path d="M224,330 L227,330 L227,316 L224,316 L224,330 Z M236,310 L229,314.667 L229,331.333 L236,336 C237.104,336 238,335.104 238,334 L238,312 C238,310.896 237.104,310 236,310 L236,310 Z M206,323 C206,326.733 208.561,329.148 212.019,329.81 L212,330 L212,338 C212,339.104 212.896,340 214,340 L217,340 C218.104,340 219,339.104 219,338 L219,330 L222,330 L222,316 L214,316 C209.582,316 206,318.582 206,323 L206,323 Z" id="megaphone" sketch:type="MSShapeGroup"></path>
        </g>
    </svg>
    </a>
    <?php } ?>
</div>


<?php function rancak_search_modal(){ ?>
<div class="search-modal">
    
</div>
<?php } ?>