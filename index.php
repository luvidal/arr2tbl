
/**
 * Created on : 15September2016
 * Created By : LuVidal
 * Created for : Collab Issue no #686
 * Edited On : 
 * Edited By : 
 * Edited for : 
 * arr2tbl(array) recives recordset and outputs the HTML table for debbuging purposes (instead of var_dump).
 **/

function arr2tbl($array) 
{
    $html = '<table border=1 cellpadding=3 cellspacing=0>';
    $html .= '<tr>';
    foreach($array[0] as $key=>$value) $html .= '<th>' . $key . '</th>';
    $html .= '</tr>';
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2) $html .= '<td>' . $value2 . '</td>';
        $html .= '</tr>';
    }
    $html .= '</table>';
    return $html;
}