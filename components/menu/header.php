<?php
    $campo = get_info_sedes();
	$menu_global = PaThemeHelpers::getGlobalMenu('global-header');
?>

<header class="pa-menu" id="topo">
    <div class="pa-menu-desktop container d-none d-xl-block">
        <div class="row g-0 h-100">
        <?php get_template_part( 'components/menu/header-logo', 'logo', ['campo' => $campo] ); ?>
            <div class="col d-flex flex-column justify-content-between">
				<nav class="pa-menu-global navbar navbar-expand-lg justify-content-end">
					<ul class="navbar-nav">
						<?php if(!empty($menu_global) && property_exists($menu_global, 'itens') && !empty($menu_global->itens)): ?>
							<?php foreach($menu_global->itens as $item): ?>
								<li class="nav-item">
									<a class="nav-link" href="<?= $item->url ?>" title="<?= $item->title ?>" target="<?= !empty($item->target) ? $item->target : '_self' ?>"><?= $item->title ?></a>
								</li>
							<?php endforeach; ?>
                <li class="nav-item">
                    <a class="nav-link pa-search" href="<?= get_home_url(); ?>/busca" title="<?php esc_attr_e('Search', 'iasd'); ?>"><i class="fas fa-search me-1"></i><?php esc_attr_e('Search', 'iasd'); ?></a>
                </li>
						<?php endif; ?>
						
						<li class="nav-item dropdown pa-menu-lang">
							<a class="nav-link dropdown-toggle pa-search" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="pt me-2" aria-hidden="true"></i>
								PT
							</a>
							<ul class="dropdown-menu p-0">
								<li class=""><a class="dropdown-item" href="/pt"><i class="pt me-2" aria-hidden="true"></i> PT</a></li>
								<li class=""><a class="dropdown-item" href="/es"><i class="es me-2" aria-hidden="true"></i> ES</a></li>
							</ul>
						</li>

            

					</ul>
				</nav>

                <?php
                    wp_nav_menu(
                        array (
                            'theme_location'    => 'pa-menu-default',
                            'container_class'   => 'pa-menu-default',
                            'container'         => 'nav',
                            'container_id'      => false,
                            'menu_class'        => 'nav justify-content-end',
                            'menu_id'           => false,
                            'depth'             => 0,
                            'walker'            => new PaMenuWalker()
                        )
                    );
                    ?>
            </div>
        </div>
    </div>

    <!-- div Mobile -->
    <div class="pa-menu-mobile container-fluid d-xl-none">

        <div class="row g-0 pt-3 pb-3">
            <?php if(!empty($campo)): ?>
              <div class="col-6">
                  <img src="<?= get_template_directory_uri() . "/assets/sedes/" . LANG . "/" . $campo->slug . ".svg" ?>" alt="<?= $campo->name ?>" title="<?= $campo->name ?>" class="">
              </div>
            <?php endif; ?>

            <div class="col-auto ms-auto d-flex flex-row-reverse align-items-center">
                <i class="fa fa-bars fa-2x" aria-hidden="true" onclick="window.Menus.pa_action_menu()" ></i>
            </div>

            <div class="menu" id="pa_menu">
                <ul class="menu_sub">
                    <li class="pa-dropdown">
                        <a href="#pt" class="pt">PT</a>
                        <div class="pa-sub-dropdown">
                            <ul>
                                <li><a href="#es" class="es">ES</a></li>
                            </ul>
                        </div>
                    </li>
                    <li><img src="<?= get_template_directory_uri() . "/assets/imgs/close.svg" ?>" alt="" onclick="window.Menus.pa_action_menu()">
                    </li>
                </ul>
                <?php
                    $PA_Menu_Mobile = new PaMenuMobile('pa-menu-default');
                ?>
            </div>
            <div class="mask"></div>
    </div>
</header>
