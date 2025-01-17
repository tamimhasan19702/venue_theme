<?php


function kirki_panel_venue()
{
    if (class_exists('\Kirki\Panel')) {
        new \Kirki\Panel(
            'kirki-panel-venue',
            [
                'priority' => 10,
                'title' => esc_html__('Venue Theme Options', 'venue'),
                'description' => esc_html__('Venue Description.', 'venue'),
            ]
        );
    }
}
add_action('init', 'kirki_panel_venue');


function kirki_section_venue()
{
    if (class_exists('\Kirki\Section')) {
        new \Kirki\Section(
            'kirki-section-venue-header',
            [
                'title' => esc_html__('Venue Header', 'venue'),
                'panel' => 'kirki-panel-venue',
                'priority' => 10,
            ]
        );

        new \Kirki\Field\Image(
            [
                'settings' => 'venue_logo',
                'label' => esc_html__('Venue Logo', 'venue'),
                'description' => esc_html__('The saved value will be the URL.', 'venue'),
                'section' => 'kirki-section-venue-header',
                'default' => '',
            ]
        );
    }

}
add_action('init', 'kirki_section_venue');