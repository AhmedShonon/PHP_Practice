<!-- 
        <table border="1">
            <tr>
                <td>S.N</td>
                <td>Name</td>
                <td>Email</td>
            </tr>
            <tr>
                <td>1</td>
                <td>Shonon</td>
                <td>sabbir@gmail.com</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Rahim</td>
                <td>rahim@gmail.com</td>
            </tr>
        </table> -->

        <?php
        $users= [
            [1,"Sabbir","sabbir@gmail.com"],
            [2,"Rahim","rahim@gmail.com"],
            [3,"domi","domi@gmail.com"],
            [4,"fabiha","fabiha@gmail.com"]
        ];
        echo "<table border=1>";
        for($i=0;$i<count($users);$i++){
            echo "<tr>";
            for($j=0;$j<count($users[$i]);$j++){
                echo "<td>";
                echo $users[$i][$j];
                echo "</td>";

            }
            echo "</tr>";
        }
        echo "<table>";
        ?>
