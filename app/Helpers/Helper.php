<?php
// if (!function_exists('formatDate')) {
//     function formatDate($date, string $format = 'Y/m/d')
//     {
//         if ($date instanceof \Carbon\Carbon) {
//             return $date->format($format);
//         }

//         return $date;
//     }
// }

function helperConvertAttribute($allAttributes, $attributeKey)
{
    $temp = "";
    foreach ($allAttributes as $attribute) {
        $temp .= $attribute->{$attributeKey} . ", ";
    }
    $temp = substr($temp, 0, -2);
    return $temp;
}
function helperConvertPrice($price)
{
    return number_format($price, 0, ',', '.') . "đ";
}
