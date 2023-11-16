<?php 
$_SESSION['id']=$id;  // 사용자 id
$_SESSION['is_admin']=$is_admin; // 사용자 권한 정보

if($_SESSION['is_admin']){
    echo '<a href="write_board.php">게시글 작성</a>';
}
?>