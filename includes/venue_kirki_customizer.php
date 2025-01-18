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
                'default' => get_template_directory_uri() . '/img/logo.png',
            ]
        );
    }


    if (class_exists('\Kirki\Section')) {

        new \Kirki\Section(
            'kirki-section-venue-Footer',
            [
                'title' => esc_html__('Venue Footer', 'venue'),
                'panel' => 'kirki-panel-venue',
                'priority' => 12,
            ]
        );


        new \Kirki\Field\Text(
            [
                'settings' => 'venue_copyright_text',
                'label' => esc_html__('Copyright Text', 'venue'),
                'description' => esc_html__('The saved value will be the URL.', 'venue'),
                'section' => 'kirki-section-venue-Footer',
                'default' => wp_kses(
                    'Copyright &copy; 2018 Company Name

        - Design: <a rel="nofollow" href="http://www.templatemo.com">Template Mo</a>',
                    [
                        'a' => [
                            'href' => []
                        ]

                    ]
                ),
                'default' => 'Copyright  &copy; 2018 Venue',
            ]
        );


    }

}
add_action('init', 'kirki_section_venue');