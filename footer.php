<?php

$copyrightText = get_theme_mod('venue_copyright_text', wp_kses(
    'Copyright &copy; 2018 Company Name

- Design: <a rel="nofollow" href="http://www.templatemo.com">Template Mo</a>',
    [
        'a' => [
            'href' => []
        ]

    ]
));

?>

<footer>
    <div class="container">
        <div class="row">


            <!-- widget -1 -->

            <?php if (is_active_sidebar('footer_widget_1')): ?>
                <div class="col-md-5">
                    <?php dynamic_sidebar('footer_widget_1'); ?>
                </div>
            <?php endif; ?>

            <!-- widget -2 -->
            <?php if (is_active_sidebar('footer_widget_2')): ?>
                <div class="col-md-4">
                    <?php dynamic_sidebar('footer_widget_2'); ?>
                </div>
            <?php endif; ?>


            <!-- widget -3 -->

            <?php if (is_active_sidebar('footer_widget_3')): ?>
                <div class="col-md-3">
                    <?php dynamic_sidebar('footer_widget_3'); ?>
                </div>
            <?php endif; ?>

        </div>
    </div>
</footer>



<?php if (isset($copyrightText) && !empty($copyrightText)): ?>
    <div class="sub-footer">
        <p><?php echo $copyrightText; ?></p>
    </div>
<?php endif; ?>







<?php wp_footer(); ?>
</body>

</html>