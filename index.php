
<?php
    $censorWord = $_GET["censor"];
    $textData = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, quod nesciunt? Ab et distinctio optio laboriosam eos libero? Sunt soluta vero odio, reiciendis est voluptatibus! Animi accusamus nesciunt ipsam velit.';
    $censuredText = str_replace($censorWord,"***",$textData);
    echo '<p>'.$textData.'</p>';
    echo '<h1> The length of the paragraph is: '.strlen($textData).'</h1>';
    echo '<h1> Censured Text: </h1>';
    echo '<p>'.$censuredText.'<p>'
?>