

 <?php
 register_post_type( 'products', /* カスタム投稿タイプ名 */
		array(
			'labels' => array(
				'name' => __( '過去の作品' ),
				'singular_name' => __( '過去の作品' )
			),
			'public' => true,
			'menu_position' => 5,
			'rewrite'               => array(
				'slug' => 'about_products',
				'with_front' => false,
			),
			'has_archive' => 'about_products',
			'supports' => array( 'title', 'page-attributes', 'editor' )
		)
	);

	/*カスタムタクソノミー*/
	register_taxonomy(
		'products_cat', /* タクソノミーの名前 */
		'products', /* カスタム投稿タイプ名 */
		array(
			'hierarchical' => true, /* 親子関係が必要なければ false */
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',
			'singular_label' => 'カテゴリー',
			'public' => true,
			'show_ui' => true,
			'rewrite' => array( 'slug' => 'about_products/category' )
		)
  );
  

  function my_scripts() {
    wp_enqueue_style( 'style-name', get_template_directory_uri() . '/css/common.css', array(), '1.0.0', 'all' );
    wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
  }
  add_action( 'wp_enqueue_scripts', 'my_scripts' );
?>



