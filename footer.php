<?php wp_footer();?>        
        <footer class="footer">
            <?php if(is_active_sidebar('footer')): ?>
            
                <?php dynamic_sidebar('footer');?>
            
            <?php endif;?>
        </footer>
    </body>
</html>