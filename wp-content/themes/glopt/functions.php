<?php 
add_action('wp_enqueue_scripts', 'glopt_style');
add_action('wp_enqueue_scripts', 'glopt_scripts');

function glopt_style() {
    wp_enqueue_style('normalize', get_template_directory_uri() . '/assets/css/normalize.css');
    wp_enqueue_style('glopt-font', get_template_directory_uri() . '/assets/css/font.css');
    wp_enqueue_style('glopt-slick', get_template_directory_uri() . '/assets/css/slick.css');
    wp_enqueue_style('glopt-animate', get_template_directory_uri() . '/assets/css/animate.css');
    wp_enqueue_style('glopt-style', get_stylesheet_uri());

};
function glopt_scripts() {
    wp_deregister_script( 'jquery' );
    wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js');
    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'glopt-maskedinput', get_template_directory_uri() . '/assets/js/jquery.maskedinput.min.js', array(jquery), null, true);
    wp_enqueue_script( 'glopt-validate', get_template_directory_uri() . '/assets/js/jquery.validate.min.js', array(jquery), null, true);
    wp_enqueue_script( 'glopt-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array(jquery), null, true);
    wp_enqueue_script( 'glopt-script', get_template_directory_uri() . '/assets/js/script.js', array(jquery), null, true);
};

add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'menus' );

add_filter( 'get_custom_logo', 'change_logo_class' );


/*Меняем классы вывода логотипа WP на свои*/ 
function change_logo_class( $html ) {

    $html = str_replace( 'custom-logo-link', 'logo', $html );
    $html = str_replace( 'custom-logo', 'logo__img', $html );


    return $html;
};



/* class MyWalker extends Walker_Nav_Menu {
    // я опустил использование стандартных фильтров из оригинального класса, чтобы донести суть. 
    // Пожалуйста ознакомьтесь с wp-includes/class-walker-nav-menu.php !!!
    public function start_el (&$output, $item, $depth, $args = array()) {

      // генерация css классов
      $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args, $depth ) );
      $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

      // генерация html ID
      $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args, $depth );
      $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

      // набор HTML атрибутов для ссылок
      $atts = array();
      $atts['title']  = ! empty( $item->attr_title ) ? $item->attr_title : '';
      $atts['target'] = ! empty( $item->target )     ? $item->target     : '';
      $atts['rel']    = ! empty( $item->xfn )        ? $item->xfn        : '';
      $atts['href']   = ! empty( $item->url )        ? $item->url        : '';

      $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args, $depth );

      // превращаем набор атрибутов в строку
      $attributes = '';
      foreach ( $atts as $attr => $value ) {
          if ( ! empty( $value ) ) {
              $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
              $attributes .= ' ' . $attr . '="' . $value . '"';
          }
      }

      // текст ссылки
      $title = apply_filters( 'the_title', $item->title, $item->ID );

      // те самые before, link_before, link_after и after, о которых мы говорили в
      // прошлой статье.
      $item_output = $args->before;
      $item_output .= '<a' . $id . $class_names . $attributes .'>';
      $item_output .= $args->link_before . $title . $args->link_after;
      $item_output .= '</a>';
      $item_output .= $args->after;

      $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    }

    // в нашем случае пустая функция, чтобы запретить вывод </li>
    public function end_el (&$output, $item, $depth, $args = array()) {}
  } */




class Description_Walker extends Walker_Nav_Menu
{
    function start_el(&$output, $item, $depth, $args)
    {
        $classes = empty($item->classes) ? array () : (array) $item->classes;
        $class_names = join(' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
        !empty ( $class_names ) and $class_names = ' class="'. esc_attr( $class_names ) . '"';
        /* $output .= "<div id='menu-item-$item->ID' $class_names>"; */
        // link attributes
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$attributes .= ' class="header__link ' /* . ( $depth > 0 ? 'sub-menu-link' : 'main-menu-link' ) */ . '"';
        
        $title = apply_filters( 'the_title', $item->title, $item->ID );
        
        $item_output = $args->before
        . "<a $attributes >"
        . $args->link_before
        . $title
        . '</a>'
        . $args->link_after
        . $args->after;
        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
    
    }
    // в нашем случае пустая функция, чтобы запретить вывод </li>
    public function end_el (&$output, $item, $depth, $args = array()) {}

};

?>
