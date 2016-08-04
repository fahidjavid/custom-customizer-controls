<?php

/**
 * Class Custom_Dropdown_Control
 *
 * Custom dropdown control
 */
if( class_exists( 'WP_Customize_Control' ) && ! class_exists( 'Custom_Dropdown_Control' ) ) :
    class Custom_Dropdown_Control extends WP_Customize_Control {

        /**
         * Declare the control type.
         * @var string
         */
        public $type = 'custom-dropdown';

        public function render_content() {

            if ( empty( $this->choices ) ){ return; }
            $options = $this->choices;
            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <select <?php $this->link(); ?>>
                    <?php
                    foreach( $options as $key => $value ) {
                        echo "<option " . selected( $this->value(), $key ) . " value='". $key ."'>". $value ."</option>";
                    }
                    ?>
                </select>
            </label>
            <?php
        }
    }
endif;