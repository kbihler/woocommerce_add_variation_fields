// Add Variation Settings
add_action( 'woocommerce_product_after_variable_attributes', 'variation_settings_fields', 10, 3 );

// Save Variation Settings
add_action( 'woocommerce_save_product_variation', 'save_variation_settings_fields', 10, 2 );

/**
 * Create new fields for variations
 *
 */
function variation_settings_fields( $loop, $variation_data, $variation ) {

    // Text Fields
    woocommerce_wp_text_input(
        array(
            'id'          => '_inside_diameter[' . $variation->ID . ']',
            'label'       => __( 'INSIDE DIAMETER', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_inside_diameter', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_depth[' . $variation->ID . ']',
            'label'       => __( 'DEPTH', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_depth', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_distance_between_wires[' . $variation->ID . ']',
            'label'       => __( 'DISTANCE BETWEEN WIRES', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_distance_between_wires', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_rod_length[' . $variation->ID . ']',
            'label'       => __( 'ROD LENGTHS', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_rod_length', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_max_thickness[' . $variation->ID . ']',
            'label'       => __( 'MAX THICKNESS', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_max_thickness', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_hole_to_center[' . $variation->ID . ']',
            'label'       => __( 'HOLE TO CENTER LINE OF HINGE', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_hole_to_center', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_slot_to_center[' . $variation->ID . ']',
            'label'       => __( 'SLOT TO CENTER', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_slot_to_center', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_base[' . $variation->ID . ']',
            'label'       => __( 'BASE', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_base', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_tapped[' . $variation->ID . ']',
            'label'       => __( 'TAPPED', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_tapped', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_thread_depth[' . $variation->ID . ']',
            'label'       => __( 'THREAD DEPTH', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_thread_depth', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_thread[' . $variation->ID . ']',
            'label'       => __( 'THREAD', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_thread', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_threaded_insert[' . $variation->ID . ']',
            'label'       => __( 'THREADED INSERT', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_threaded_insert', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_pre-drill[' . $variation->ID . ']',
            'label'       => __( 'PRE DRILL', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_pre-drill', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_matches[' . $variation->ID . ']',
            'label'       => __( 'PRE DRILL', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_matches', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_style[' . $variation->ID . ']',
            'label'       => __( 'STYLE', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_style', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_width_b[' . $variation->ID . ']',
            'label'       => __( 'Width', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_width_b', true )
        )
    );

    woocommerce_wp_text_input(
        array(
            'id'          => '_height_b[' . $variation->ID . ']',
            'label'       => __( 'Height', 'woocommerce' ),
            'value'       => get_post_meta( $variation->ID, '_height_b', true )
        )
    );
    
}

/**
 * Save new fields for variations
 *
 */
function save_variation_settings_fields( $post_id ) {

    // Text Fields
    $inside_diameter = $_POST['_inside_diameter'][ $post_id ];
    if( ! empty( $inside_diameter ) ) {
        update_post_meta( $post_id, '_inside_diameter', esc_attr( $inside_diameter ) );
    }

    $depth = $_POST['_depth'][ $post_id ];
    if( ! empty( $depth ) ) {
        update_post_meta( $post_id, '_depth', esc_attr( $depth ) );
    }

    $distance = $_POST['_distance_between_wires'][ $post_id ];
    if( ! empty( $text_field ) ) {
        update_post_meta( $post_id, '_distance_between_wires', esc_attr( $distance ) );
    }

    $rod_length = $_POST['_rod_length'][ $post_id ];
    if( ! empty( $rod_length ) ) {
        update_post_meta( $post_id, '_rod_length', esc_attr( $rod_length ) );
    }

    $max_thickness = $_POST['_max_thickness'][ $post_id ];
    if( ! empty( $max_thickness ) ) {
        update_post_meta( $post_id, '_max_thickness', esc_attr( $max_thickness ) );
    }

    $hole_center = $_POST['_hole_to_center'][ $post_id ];
    if( ! empty( $hole_center ) ) {
        update_post_meta( $post_id, '_hole_to_center', esc_attr( $hole_center ) );
    }

    $slot_center = $_POST['_slot_to_center'][ $post_id ];
    if( ! empty( $slot_center ) ) {
        update_post_meta( $post_id, '_slot_to_center', esc_attr( $slot_center ) );
    }

    $base = $_POST['_base'][ $post_id ];
    if( ! empty( $base ) ) {
        update_post_meta( $post_id, '_base', esc_attr( $base ) );
    }

    $tapped = $_POST['_tapped'][ $post_id ];
    if( ! empty( $tapped ) ) {
        update_post_meta( $post_id, '_tapped', esc_attr( $tapped ) );
    }

    $thread_depth = $_POST['_thread_depth'][ $post_id ];
    if( ! empty( $thread_depth ) ) {
        update_post_meta( $post_id, '_thread_depth', esc_attr( $thread_depth ) );
    }

    $thread = $_POST['_thread'][ $post_id ];
    if( ! empty( $thread ) ) {
        update_post_meta( $post_id, '_thread', esc_attr( $thread ) );
    }

    $threaded_insert = $_POST['_threaded_insert'][ $post_id ];
    if( ! empty( $threaded_insert ) ) {
        update_post_meta( $post_id, '_threaded_insert', esc_attr( $threaded_insert ) );
    }

    $pre_drill = $_POST['_pre-drill'][ $post_id ];
    if( ! empty( $pre_drill ) ) {
        update_post_meta( $post_id, '_pre-drill', esc_attr( $pre_drill ) );
    }

    $matches = $_POST['_matches'][ $post_id ];
    if( ! empty( $matches ) ) {
        update_post_meta( $post_id, '_matches', esc_attr( $matches ) );
    }

    $style = $_POST['_style'][ $post_id ];
    if( ! empty( $style ) ) {
        update_post_meta( $post_id, '_style', esc_attr( $style ) );
    }

    $width = $_POST['_width_b'][ $post_id ];
    if( ! empty( $width ) ) {
        update_post_meta( $post_id, '_width_b', esc_attr( $width ) );
    }

    $height = $_POST['_height_b'][ $post_id ];
    if( ! empty( $height ) ) {
        update_post_meta( $post_id, '_height_b', esc_attr( $height ) );
    }

}
