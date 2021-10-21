<?php
    namespace Olamide\MultiStepForm;

    class MultiStepFormClass {
        
        public function __construct(){
            add_action('wp_enqueue_scripts',[$this,'enqueue_scripts_styles']);
            add_shortcode('designed-multi-step-form',[$this,'initialize']);
        }

        public function initialize(){
            include(__DIR__.'/forms/formcode.php');
        }

        public function enqueue_scripts_styles(){
            wp_enqueue_style('multi-step-form',plugin_dir_url(__FILE__).'assets/styles.css');
            wp_enqueue_style('multi-step-form-bootstrap',plugin_dir_url(__FILE__).'assets/bootstrap.css');
            wp_enqueue_style('multi-step-form-icon',plugin_dir_url(__FILE__).'assets/icons/css/all.min.css');
            wp_enqueue_script('multi-step-jquery-form',plugin_dir_url(__FILE__).'assets/js/jquery-3.5.1.min.js');
            wp_enqueue_script('multi-step-js-popper-form',plugin_dir_url(__FILE__).'assets/js/popper.min.js');
            wp_enqueue_script('multi-step-js-bootstrap-form',plugin_dir_url(__FILE__).'assets/js/bootstrap.min.js');
            wp_enqueue_script('multi-step-js-form',plugin_dir_url(__FILE__).'assets/formjs.js');
        }
        
        
    }

    new MultiStepFormClass();
?>
