<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function ebook_view($username, $password, $db_name, $title_text, $table_header, $query) {
    $db = mysql_connect('localhost', $username, $password) or die('‘Unable to connect. Check your connection parameters.');
    mysql_select_db($db_name, $db) or die(mysql_error($db));
    $result = mysql_query($query, $db) or die(mysql_error($db)); 
   // $load =   mysql_query($find_link, $db) or die(mysql_error($db)); 
    $total_no_rows = mysql_num_rows($result);
  //  $load_rows = mysql_num_rows($load);
    mysql_close($db);


    $output = <<<HEREDOC_1
        <div id="table_container">
HEREDOC_1;

    $output.='<h2 align="center">' . $title_text . '</h2>';

    $output .=<<<HEREDOC_2
        <table>
            <tr class="header">
HEREDOC_2;
    for ($i = 0; $i < count($table_header); ++$i) {
        $output.='<th>' . $table_header[$i] . '</th>';
    }

    $output.='</tr>';

    $current_row = 0;
    while ($row = mysql_fetch_assoc($result) ) {
        extract($row);
        if ($current_row % 2 == 0)
            $output .='<tr class="even">';
        else
            $output .='<tr class="odd">';
        foreach ($row as $value) {
            $output.='<td align="center">' . $value . '</td>';
        }
        //  $output.='<td><a href=" ">'.$load_rows.'</td>';
        /*$output.=<<<HEREDOC
                <td><a href="">..</a></td>
                </tr>
HEREDOC;*/
        ++$current_row;
    }

    $output.=<<<HEREDOC_4
            </table>
             <br/>
            <b>Total Rows Fetched=$total_no_rows</b>
        </div>
HEREDOC_4;

    return $output;
}

?>
