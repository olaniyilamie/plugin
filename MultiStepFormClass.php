<?php
    namespace Olamide\MultiStepForm;

    class MultiStepFormClass {
        
        public function __construct(){
            add_action('wp_enqueue_scripts',[$this,'enqueue_scripts_styles']);
            add_shortcode('designed-multi-step-form',[$this,'initialize']);
        }

        public function initialize(){
            $html  ='<section id="multi-step-form">';
            $html .= '<p style="color:red">TEXT</p>';
            $html .='</section>';

            return $html;
        }

        public function enqueue_scripts_styles(){
            wp_enqueue_style('multi-step-form',plugin_dir_url(__FILE__).'assets/styles.css');
            wp_enqueue_script('multi-step-js-form',plugin_dir_url(__FILE__).'assets/formjs.js');
        }
        
        
    }

    new MultiStepFormClass();
?>
