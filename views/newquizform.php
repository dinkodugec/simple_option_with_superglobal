<?php
//complete code for views/quizform.php
$info = "<form method='post' action='indexnewquiz.php?page=newquiz'>
        <p>Is it hard fun to learn PHP?</p>
        <select name='answer'>
            <option value='yes'>Yes, it is</option>
            <option value='no'>No, not really</option>
        </select>
      

      
        <p>Rate how hard is PHP?</p>
        <select name='hard'>
        <option value='2'>it is 2</option>
        <option value='3'>it is 3</option>
        <option value='4'>it is 4</option>
        <option value='5'>it is 5</option>
    </select>
        <input type='submit' name='quiz-submitted' value='post' />
    </form>";

  
?>