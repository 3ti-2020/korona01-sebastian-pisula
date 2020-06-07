<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <header>
         <h1>Strings in PHP</h1>
    </header>
    <main>

        <?php

        $str1 = 'single\' quotes';

        $str2 = "double \t quotes";

        $str3 = <<<"HEREDOC"
        This string is inside
        a heredoc block.
        $str1
        $str2
HEREDOC;

        $str4 = <<<'NOWDOC'
        This string is 
        inside a
        nowdoc block.
        $str1
        $str2

NOWDOC;

        echo '<p>$str1</p>';
        echo "<p>$str2</p>";
        echo "<p>${str2}</p>";
        echo "<p><pre>$str3</pre></p>";
        echo "<p><pre>$str4</pre></p>";

        ?>
    </main>    
</body>
</html>