<?php
function renderFooter(){
    ob_start();
?>

<footer>
    <ul>
        <li>footer</li>
    </ul>
</footer>
</body>
</html>

<?php
    return ob_get_clean();
}
?>