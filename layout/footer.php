<?php
?>
<div class="footer-wrap">
    <div class="copyright">
        copyright MARK HEIJNEKAMP
    </div>
    <div class="footer-menu">
        <?php
        if (!isset($Menu)) {
            include('lib/Menu.php');
            $Menu = new menu();
        }
        $Menu->ShowMenuFooter();
        ?>

    </div>
</div>
<script src="js/heroimg.js"></script>

</body>

</html> 