<?php 
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        require_once ("C:/xampp/htdocs/pp/Model/Comment.php");
        require_once ("C:/xampp/htdocs/pp/Controller/CommentC.php");
    if (isset($_GET['comment'])) {
        $commentC = new CommentC();
        $commentC->deleteComment($_GET['comment']);
    }
    header('Location: front.php');
}
?>