<html>
    <head>
        <link rel="stylesheet" href="../style.css">
    </head>
    <body>
        <nav>
            <a class="nav" href="../index.html">Home</a> |
        </nav>
        <h2>Quiz Results</h2>
        <?php
            error_reporting(E_ALL);
            ini_set("display_errors", 1);
            
            $my_Que     = array("Mutually beneficial relationship in which one organism lives within another","How many states are in the United States?","Change over time; process in which modern organisms descended from ancient organisms?","evolution of one or more closely related species into different species","Accumalation of differences between groups");
            $Ans = array("Endosymbiosis", "50", "Evolution" ,"Divergence", "Divergent evolution");
            $input  = array("","","","","");
            $grade = 0;
            if (!empty($_POST["Mutually beneficial"]))
            {
                $input[0] = $_POST["Mutually beneficial"]; 
            }
            if (!empty($_POST["states"]))
            {
                $input[1] = $_POST["states"];
            }
            if (!empty($_POST["from ancient organisms"]))
            {
                $input[2] = $_POST["from ancient organisms"];
            }
            if (!empty($_POST["elated species "]))
            {
                $input[3] = $_POST["elated species "];
            }
            if (!empty($_POST["Accumalation"]))
            {
                $input[4] = $_POST["Accumalation"];
            }

            echo "<hr>";
            for ($i=0; $i<count($my_Que); $i++)
            {
                if ($input[$i] == $Ans[$i])
                {
                    $grade++;
                }
                echo "<div><b>Question " . ($i+1) . ": </b><i>" . $my_Que[$i] . "</i><br><div class='inp'> You Answered: " . $input[$i] . "<br>Correct Answer: " . $Ans[$i] . "</div></div><br><br><hr>";
            }
            echo "Score: <b>" . $grade . "/" . count($my_Que) . "</b> (<b>" . (($grade/count($my_Que))*100) . "%</b>)<br><a href='quiz.html'>Try Again</a><br>";
            
        ?>
    </body>
</html>