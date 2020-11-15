<?php

//
class reDev_customizer{
    public function __construct(){
        add_action('customize_register', array($this, 'register_customize_sections'));
    }

    public function register_customize_sections ($wp_customize){
        $this->reDev_section($wp_customize);
    }

    private function reDev_section($wp_customize){
        
        $wp_customize->add_section('reDev-callout-section', array(
            'title'=>'reDev',
            'priority'=>2,
            'description'=> __('Site Settings')
        ));
        $wp_customize->add_section('reDev-social-section', array(
            'title'=>'reDev Social Links',
            'priority'=>3,
            'description'=> __('Social links')
        ));
        $wp_customize->add_section('reDev-footer-section', array(
            'title'=>'reDev Footer settings',
            'priority'=>4,
            'description'=> __('Footer settings')
        ));

        $wp_customize->add_setting('reDev-twitter',array(
            'default' =>'url',
        ));
        $wp_customize->add_setting('reDev-facebook',array(
            'default' =>'url',
        ));
        $wp_customize->add_setting('reDev-instagram',array(
            'default' =>'url',
        ));

        $wp_customize->add_setting('reDev-callout-text-0',array(
            'default' =>'',
        ));

        $wp_customize->add_setting('reDev-callout-text-1',array(
        ));

        $wp_customize->add_setting('reDev-left-button-callout-text',array(
            'default' =>'Button 1',
        ));
        $wp_customize->add_setting('reDev-left-button-callout-link',array(
            'default' =>'url',
        ));
        $wp_customize->add_setting('reDev-right-button-callout-text',array(
            'default' =>'Button 2',
        ));
        $wp_customize->add_setting('reDev-right-button-callout-link',array(
            'default' =>'url',
        ));
        $wp_customize->add_setting('reDev-intro-callout-picture',array(
            'default' =>'',
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
            
        ));
        $wp_customize->add_setting('reDev-bb-callout-picture',array(
            'default' =>'',
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',  
        ));
        $wp_customize->add_setting('reDev-bb-callout-title',array(
            'default' =>'reDev Placeholder',
        ));
        $wp_customize->add_setting('reDev-bb-callout-text',array(
            'default' =>'reDev Placeholder',
        ));
        $wp_customize->add_setting('reDev-as-callout-title',array(
            'default' =>'Awesome stuff',
        ));
        $wp_customize->add_setting('reDev-as-callout-text',array(
            'default' =>'Awesome text',
        ));

        $setting_number = 5;
        for($i = 0; $i <= $setting_number; $i++) {
          $wp_customize->add_setting('reDev-thumb-text-section-'.$i,array(
                    'default' =>'reDev Placeholder',
                  ) 
          );
          $wp_customize->add_setting('reDev-thumb-title-section-'.$i,array(
            'default' =>'reDev Placeholder',
          ) 
        );
        $wp_customize->add_setting('reDev-thumb-img-'.$i,array(
            'default' =>'',
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
        ));
        }

        $wp_customize->add_setting('reDev-mid-callout-picture',array(
            'default' =>'',
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
            
        ));

        $wp_customize->add_setting('reDev-as-callout-picture',array(
            'default' =>'',
            'type'=>'theme_mod',
            'capability'=>'edit_theme_options',
            
        ));

        $wp_customize->add_setting('reDev-mid-callout-text',array(
            'default' =>'We are here for you',
        ));

        $footer_setting_number = 3;
        for($i = 0; $i <= $footer_setting_number; $i++) {
          $wp_customize->add_setting('reDev-footer-t'.$i.'-title',array(
                    'default' =>'reDev Placeholder',
                  ) 
        );
    }
        $wp_customize->add_setting('reDev-t0-callout-text',array(
            'default' =>'',

        ));
    

        $footer_under_setting_number = 11;
        for($i = 0; $i <= $footer_under_setting_number; $i++) {
          $wp_customize->add_setting('reDev-footer-t'.$i.'-under',array(
                    'default' =>'Placeholder',
                  ) 
        );
    }
    $footer_under_link_setting_number = 7;
        for($i = 0; $i <= $footer_under_link_setting_number; $i++) {
          $wp_customize->add_setting('reDev-footer-t'.$i.'-under-link',array(
                    'default' =>'Placeholder',
                  ) 
        );
    }

    $wp_customize->add_setting('reDev-copyright-text',array(
        'default' =>'',
    ));
 

























        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-twitter-control', array(
            'label'=>'Twitter profile url',
            'section'=>'reDev-social-section',
            'settings'=>'reDev-twitter',
            'type'=>'url'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-facebook-control', array(
            'label'=>'Facebook profile url',
            'section'=>'reDev-social-section',
            'settings'=>'reDev-facebook',
            'type'=>'url'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-instagram-control', array(
            'label'=>'Instagram profile url',
            'section'=>'reDev-social-section',
            'settings'=>'reDev-instagram',
            'type'=>'url'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-callout-control-0', array(
            'label'=>'Intro Title',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-callout-text-0',
            'type'=>'text'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-callout-control-1', array(
            'label'=>'Intro Text',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-callout-text-1',
            'type'=>'textarea'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-left-button-callout-control-0', array(
            'label'=>'Button left text',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-left-button-callout-text',
            'type'=>'text'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-left-button-callout-control-1', array(
            'label'=>'Button left link',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-left-button-callout-link',
            'type'=>'url'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-right-button-callout-control-0', array(
            'label'=>'Button right text',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-right-button-callout-text',
            'type'=>'text'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-right-button-callout-control-1', array(
            'label'=>'Button right link',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-right-button-callout-link',
            'type'=>'url'
        )));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'reDev-intro-callout-picture-control', array(
            'label'=>'Intro splash image',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-intro-callout-picture',
            'flex_width'  => true, 
            'flex_height' => true, 
            'width'       => 1920,
            'height'      => 1080,
        )));
        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'reDev-bb-callout-picture-control', array(
            'label'=>'BB splash image',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-bb-callout-picture',
            'flex_width'  => true, 
            'flex_height' => true, 
            'width'       => 1920,
            'height'      => 1080,
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-bb-callout-title-control', array(
            'label'=>'BB title',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-bb-callout-title',
            'type'=>'text'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-bb-callout-text-control', array(
            'label'=>'BB text',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-bb-callout-text',
            'type'=>'textarea'
        )));
        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-as-callout-title-control', array(
            'label'=>'Awesome title',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-as-callout-title',
            'type'=>'text'
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-as-callout-text-control', array(
            'label'=>'Awesome text',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-as-callout-text',
            'type'=>'textarea'
        )));


        for($i = 0; $i <= $setting_number; $i++) {
          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-thumb-text-section-control-'.$i,array(
            'label'=>'Thumb text '.$i,
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-thumb-text-section-'.$i,
            'type'=>'textarea'
        )));
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-thumb-title-section-control-'.$i,array(
                'label'=>'Thumb title '.$i,
                'section'=>'reDev-callout-section',
                'settings'=>'reDev-thumb-title-section-'.$i,
                'type'=>'text'
            )));
            $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'reDev-thumb-img-setting-'.$i, array(
                'label'=>'Image for thumb '.$i,
                'section'=>'reDev-callout-section',
                'settings'=>'reDev-thumb-img-'.$i,
                'flex_width'  => true, 
                'flex_height' => true, 
                'width'       => 32,
                'height'      => 32,
            )));
        }

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'reDev-as-callout-picture-control', array(
            'label'=>'As center image',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-as-callout-picture',
            'flex_width'  => true, 
            'flex_height' => true, 
            'width'       => 1920,
            'height'      => 1080,
        )));

        $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize,'reDev-mid-callout-picture-control', array(
            'label'=>'Mid scroll image',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-mid-callout-picture',
            'flex_width'  => true, 
            'flex_height' => true, 
            'width'       => 1920,
            'height'      => 1080,
        )));

        $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-mid-callout-text-control',array(
            'label'=>'Mid scroll text ',
            'section'=>'reDev-callout-section',
            'settings'=>'reDev-mid-callout-text',
            'type'=>'text'
        )));

        for($i = 0; $i <= $footer_setting_number; $i++) {
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-footer-t'.$i.'-title-control',array(
              'label'=>'Footer title of Table '.$i,
              'section'=>'reDev-footer-section',
              'settings'=>'reDev-footer-t'.$i.'-title',
              'type'=>'text'
          )));
          }

          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-t0-callout-textcontrol', array(
            'label'=>'Text for table 1',
            'section'=>'reDev-footer-section',
            'settings'=>'reDev-t0-callout-text',
            'type'=>'textarea'
        )));
        for($i = 0; $i <= $footer_under_setting_number; $i++) {
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-footer-under-t'.$i.'-title-control',array(
              'label'=>'Footer under '.$i,
              'section'=>'reDev-footer-section',
              'settings'=>'reDev-footer-t'.$i.'-under',
              'type'=>'text'
          )));
          if( $i<=7){
            $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-footer-under-t'.$i.'-link-control',array(
                'label'=>'Footer under link '.$i,
                'section'=>'reDev-footer-section',
                'settings'=>'reDev-footer-t'.$i.'-under-link',
                'type'=>'text'
            )));}
          }

          $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'reDev-copyright-text-control',array(
            'label'=>'Footer bottom copyright ',
            'section'=>'reDev-footer-section',
            'settings'=>'reDev-copyright-text',
            'type'=>'text'
        )));





    }

    
}