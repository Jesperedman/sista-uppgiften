 <?php
        if( isset($_POST['clicks']) ) { 
            incrementClickCount();
        }

        function getClickCount()
        {
            return (int)file_get_contents("clickcount.txt");
        }

        function incrementClickCount()
        {
            $count = getClickCount() + 1;
            file_put_contents("clickcount.txt", $count);
        }
    }
    ?>

    <html>

        <head>

           <title>button count</title>

        </head>
        <body>
            <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="submit" value="click me!" name="clicks">
            </form>

        </body>
    </html>