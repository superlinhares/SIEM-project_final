<?php 
    include_once('../../config/init.php');
    include_once($BASE_DIR . 'database/.php');

    // Verify if the user is logged in
    if (!$_POST['username']) {
        $_SESSION['error_messages'] = 'Not allowed!';
        header("Location: $BASE_URL");
        exit;
    }

    // Verify if comment has any data
    if (!$_POST['comment']) {
        $_SESSION['error_messages'][] = 'Tens de escrever algo';
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }

    $username = $_SESSION['username'];
    $comment = $_SESSION['comment'];

    try {
        createComment($username, strip_tags($comment));
    } catch (PDOException $e) {
        $_SESSION['error_messages'] = 'Erro ao carregar comentário';

        $_SESSION['form_values'] = $_POST;
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit;
    }
    $_SESSION['success_messages'][] = "Comentário enviado com sucesso";
    header("Location: " . $_SERVER['HTTP_REFERER']);
?>