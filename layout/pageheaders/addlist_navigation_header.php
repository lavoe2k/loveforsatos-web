<header class="headerNavigation" data-logged="<?=$isUserLogged?>">
<div class="innerNavigation">
    <div class="itemNavElement left">
        <div class="itemNav">
            <ul>
                <?php include_once $ROOT_PATH . '/layout/page_header_menu.php'; ?>

                <li class="navMenuItem" data-menu-id="playlists" onclick="menuSelect(this)">
                    <div class="navItemIcon"><span class="fas fa-list-alt"></span></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="itemNavElement center">
        <h1 class="itemNavTitle"><?=$pageDescription?></h1>
    </div>
    <div class="itemNavElement right">
        <div class="itemNav">
            <ul>
                <li class="navMenuItem" data-menu-id="create" onclick="menuSelect(this)">
                    <div class="navItemIcon"><span class="fas fa-plus-circle"></span></div>
                </li>
                <li class="navMenuItem" data-menu-id="2" data-logged="<?=$isUserLogged?>" onclick="mainNavSelect(this)">
                    <div class="navItemIcon"><span class="fas fa-lock"></span> </div>
                </li>
            </ul>
        </div>
    </div>
</div>
</header>