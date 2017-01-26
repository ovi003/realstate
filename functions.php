<?php 

	function rc_theme_style(){

		wp_register_style('boot', get_template_directory_uri().'/css/bootstrap.min.css');
		wp_register_style('boot1', get_stylesheet_uri(),array('boot'));

		wp_register_style('social', get_template_directory_uri().'/css/bootstrap-social.css');
		wp_register_style('social1', get_stylesheet_uri(),array('social'));

		wp_register_style('font_awesome', get_template_directory_uri().'/font-awesome/css/font-awesome.min.css');
		wp_register_style('font_awesome1', get_stylesheet_uri(),array('font_awesome'));



		wp_enqueue_style('boot1');
		wp_enqueue_style('social');
		wp_enqueue_style('font_awesome1');
	}
	add_action('wp_enqueue_scripts','rc_theme_style');

	require_once 'navwalker.php';

	function rc_theme_setup(){

		add_theme_support('custom-header');

		add_theme_support('custom-background');

		add_theme_support('title-tag');

		add_theme_support('post-thumbnails');

		load_theme_textdomain('real_state',get_template_directory_uri().'/languages');

		register_nav_menus(array(
			'main_menu'=>__('Main Menu','real_state'),
			'footer_menu'=>__('Footer Menu','real_state')
			));

		function details($v){

			$con = explode(" ", get_the_content());
			$lesscon = array_slice($con,0,$v);
			echo implode(" ", $lesscon);
		}

	}
	add_action('after_setup_theme','rc_theme_setup');

	function rc_widgets(){

		register_sidebar(array(

			'name'=>__('Left Sidebar','real_state'),
			'id'=>'left_sidebar',
			'before_widget'=>'',
			'after_widget'=>'',
			'before_title'=>'<h3 class="site_title">',
			'after_title'=>'</h3>'

			));

	}
	add_action('widgets_init','rc_widgets');

	function custom_pagination() {
	    global $wp_query;
	    $big = 999999999;
	    $pages = paginate_links(array(
	        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
	        'format' => '?page=%#%',
	        'current' => max(1, get_query_var('paged')),
	        'total' => $wp_query->max_num_pages,
	        'type' => 'array',
	        'prev_next' => TRUE,
	        'prev_text' => 'PREV',
	        'next_text' => 'NEXT',
	            ));
	    if (is_array($pages)) {
	        $current_page = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
	        echo '<nav><ul class="pagination">';
	        foreach ($pages as $i => $page) {
	            if ($current_page == 1 && $i == 0) {
	                echo "<li class='active'>$page</li>";
	            } else {
	                if ($current_page != 1 && $current_page == $i) {
	                    echo "<li class='active'>$page</li>";
	                } else {
	                    echo "<li>$page</li>";
	                }
	            }
	        }
	        echo '</ul></nav>';
	    }
	}

	function customizer_options($rcvar){

		$rcvar->add_section('rc_customize',array(
			'title'=>__('General options','real_state'),
			'priority'=>'10'
			));

		$rcvar->add_setting('copyright_text',array(
			'default'=>'Copyright Text',
			'transport'=>'refresh'
			));

		$rcvar->add_setting('mobile_no',array(
			'default'=>'+88 01235467894',
			'transport'=>'refresh'
			));
		$rcvar->add_control('mobile_no',array(
			'label'=>__('Phone No.','real_state'),
			'section'=>'rc_customize',
			'type'=>'text'
			));
		
		$rcvar->add_setting('logo_uploader',array(
			'default'=>'',
			'transport'=>'refresh'
			));

		$rcvar->add_control(
			new WP_Customize_image_control($rcvar,'logo_uploader',array(
				'section'=>'rc_customize',
				'label'=>'Logo Upload',
				'setting'=>'logo_uploader'
				))
			);

		$rcvar->add_control('copyright_text',array(
			'label'=>__('Copyright Text','real_state'),
			'section'=>'rc_customize',
			'type'=>'text'
			));

		
	}
	add_action('customize_register','customizer_options');

	function rc_post_type(){
		register_post_type('slide',array(
			'public'=>true,
			'label'=>'slide',
			'labels'=>array(
				'name'=>'Slider',
				'singuler_name'=>'Slide',
				'add_new'=>'Add New Slide'
				),
			'supports'=>array('title','editor','thumbnail','excerpt')
			
			));

		register_post_type('properties',array(
			'public'=>true,
			'label'=>'Properties',
			'labels'=>array(
				'name'=>'Properties',
				'singuler_name'=>'Propertie',
				'add_new'=>'Add New Propertie'
				),
			'supports'=>array('title','editor','thumbnail','excerpt')
			
			));
	}
	add_action('init','rc_post_type');

 ?>