<style>
    .bb-header-mobile {
        display: flex;
        justify-content: space-between;
        background: #2d2d2d;
    }

    .bb-header-mobile #site-logo #site-logo-inner {
        height: 40px;
    }

    .ocs-trigger {
        display: block;
        padding: 14px 20px;
        background-color: #222;
    }

    .ocs-trigger:hover {
        background-color: #0075b2;
    }

    .bb-menu-icon-line {
        width: 10px;
        height: 2px;
        background-color: #fff;
        margin: 2px 0;
    }

    .bb-header-mobile a {
        display: block;
    }
</style>

<div class="bb-header-mobile">
    <div class="ocs-trigger ocs-toggle ocs-toggle-left">
        <div class="bb-menu-icon-line"></div>
        <div class="bb-menu-icon-line"></div>
        <div class="bb-menu-icon-line"></div>
    </div>

    <?php get_template_part('partials/header/logo');?>

    <div class="ocs-trigger ocs-toggle ocs-toggle-right">
        <div class="bb-menu-icon-line"></div>
        <div class="bb-menu-icon-line"></div>
        <div class="bb-menu-icon-line"></div>
    </div>
</div>


