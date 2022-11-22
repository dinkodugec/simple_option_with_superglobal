<?php
//add a new variable and an if statement
$quizIsSubmitted = isset( $_POST['quiz-submitted'] );
if ( $quizIsSubmitted ){
    $answer = $_POST['answer'];
    $hard = $_POST['hard'];
    $info = showQuizResponse( $answer, $hard); 
} else {
    include_once "views/newquizform.php";
}
//keep the return statement as it was
//return $output;
//declare a new function
function showQuizResponse( $answer, $hard ){
    $response = "<p>You clicked $answer</p>";
    $response .= "<p>You clicked $hard</p>";
    $response .= "<p>
        <a href='indexnewquiz.php?page=newquiz'>Try quiz again?</a>
    </p>";
    return $response;
}

/* var_dump($_POST); */




?>