<?php
require_once(dirname(__FILE__, 3) . "/config/main_config.php");

class Header
{
    private $data;

    //constructor with array parameter
    public function __construct( )
    {
        $this->data = array(
            'lang' => 'es',
            'charset' => 'UTF-8',
            'title' => PROJECT_NAME
        );
    }

    // getter
    public function get_data()
    {
        return $this->data;
    }
    public function get_( $property )
    {
        if ( property_exists( $data, $property ) ) 
        {
            return $this->$property;
        }
    }

    // setter
    public function set_data( $data )
    {
        $this->data = $data;
    }
    public function set_( $property, $value )
    {
        if ( property_exists( $data, $property ) ) 
        {
            $this->$property = $value;
        }
        return $this;
    }
    public function append_data( $data )
    {
        $this->data = array_merge( $this->data, $data );
    }

    public function print_data()
    {
        // bootstrap
        if ( isset( $this->data['bootstrap']) && $this->data['bootstrap'] == true  ) 
        {
            echo '<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">';
            echo '<script src="assets/bootstrap/js/bootstrap.min.js"></script>';
        }
        // ajax jquery
        if ( isset( $this->data['ajax_jquery']) && $this->data['ajax_jquery'] == true  ) 
        {
            echo '<script src="assets/jquery/jquery.min.js"></script>';
        }
        // alertify
        if ( isset( $this->data['alertify']) && $this->data['alertify'] == true  ) 
        {
            echo '<script src="assets/alertify/alertify.min.js"></script>';
            echo '<link rel="stylesheet" href="assets/alertify/alertify.min.css">';
        }

        if ( isset( $this->data['css_file'] ) ) 
        {
            echo '<!-- include css file -->';
            echo '<link rel="stylesheet" href="resources/css/' . $this->data['css_file'] . '">';
        }
        if ( isset( $this->data['js_file'] ) ) 
        {
            echo '<!-- include js file -->';
            echo '<script src="resources/js/' . $this->data['js_file'] . '"></script>';
        }
        if ( isset( $this->data['icon_file'] ) ) 
        {
            echo '<!-- include icon file -->';
            echo '<link rel="icon" href="resources/images/' . $this->data['icon_file'] . '">';
        }
    }

    public function print()
    {
        // Very important data to print
        echo '<!DOCTYPE html>';
        echo '<html lang="' . $this->data['lang'] . '">';
        echo '<head>';
        echo '<meta charset="' . $this->data['charset'] . '">';
        echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
        echo '<title>' . $this->data['title'] .'</title>';

        // Optional data to print
        $this->print_data();
        
        echo '</head>';
    }

    
}