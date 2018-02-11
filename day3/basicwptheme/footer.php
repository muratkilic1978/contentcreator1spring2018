<hr>
    <footer class="site-footer">
        <!-- the bloginfo('name') function in WordPress displays the site-title  -->   <!-- the date() function in PHP returns the year as for digits  -->
        <p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?> </p>
    </footer>
<!-- the wp_footer() function in WordPress is used for outputting data or doing background actions that run just before closing body tag. eg. loading js-script-->
<?php wp_footer(); ?>

</body>
</html>