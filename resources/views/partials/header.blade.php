<header class="">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12 col-lg-2">
				@if (is_single( ))
					<img class="img-fluid" src="/wp-content/uploads/2021/01/hs-logo-drk.svg" />
				@else
					<img class="img-fluid" src="/wp-content/uploads/2021/01/logo.svg" />
				@endif
			</div>
			<div class="d-flex col-sm-12 col-lg-10 justify-content-end">
			    <nav>
			      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
			        <div class="hamburger-wrapper">
			          <div class="hamburger"></div>
			        </div>
			      </button>
			      {{
			      wp_nav_menu([
			          'menu'            => 'Primary Navigation',
			          'theme_location'  => 'primary_navigation',
			          'container'       => 'div',
			          'container_id'    => 'bs4navbar',
			          'container_class' => 'navbar navbar-expand-lg',
			          'menu_id'         => false,
			          'menu_class'      => 'navbar-nav mr-auto',
			          'depth'           => 2,
			          'fallback_cb'     => 'bs4navwalker::fallback',
			          'walker'          => new bs4navwalker()
			      ])
			      }}
			    </nav>				
			</div>			
		</div><!-- .row -->
	</div><!-- .container -->
</header>