<?php

/**
 * 辞書の基本
 */
// function main($input)
// {
//   $num = array_shift($input);
//   $arr = [];

//   for ($i = 0; $i < $num; $i++) {
//     [$name, $assets] = explode(' ', $input[$i]);
//     $arr[$name] = $assets;
//   }
//   // echo '<pre>';
//   // var_dump($arr);
//   // echo '</pre>';

//   $name = $input[$num];
//   echo $arr[$name];
// }

// main([
//   '2',
//   'Kirishima 1',
//   'Kyoko 2',
//   'Kirishima'
// ]);

//foreach使用
// function main($input)
// {
//   $ans = array_pop($input);

//   $array = [];

//   foreach ($input as $data) {
//     [$name, $asset] = explode(' ', $data);

//     $array[$name] = $asset;
//   }

//   echo $array[$ans];
// }

// main([
//   '2',
//   'Kirishima 1',
//   'Kyoko 2',
//   'Kirishima'
// ]);

/**
 * 辞書データの順序
 */
// function main($input)
// {
//   $num = array_shift($input);
//   $arr = [];

//   for ($i = 0; $i < $num; $i++) {
//     $name = $input[$i];
//     $arr[$name] = 0;
//   }

//   $damageNum = $input[2];

//   for ($i = $damageNum + 1; $i < count($input); $i++) {
//     [$name, $damage] = explode(' ', $input[$i]);
//     $arr[$name] += $damage;
//   }

//   ksort($arr);

//   foreach ($arr as $n => $d) {
//     echo $d . "<br>";
//   }
// }
// main([
//   '2',
//   'MIDORIKAWA',
//   'KIRISHIMA',
//   '2',
//   'KIRISHIMA 1',
//   'KIRISHIMA 2',
// ]);

//foreach使用
// function main($input)
// {
//   $num = array_shift($input);
//   $arr = [];
//   $count = 0;

//   foreach ($input as $name) {
//     if ($count >= 2) {
//       break;
//     }

//     $arr[$name] = 0;
//     $count++;
//   }

//   $dmgNum =  array_splice($input, 0, 3);

//   foreach ($input as $data) {
//     [$name, $dmg] = explode(' ', $data);

//     $arr[$name] += $dmg;
//   }

//   ksort($arr);

//   foreach ($arr as $name => $dmg) {
//     echo $dmg . '</br>';
//   }
// }

// main([
//   '2',
//   'MIDORIKAWA',
//   'KIRISHIMA',
//   '2',
//   'KIRISHIMA 1',
//   'KIRISHIMA 2',
// ]);


/**
 * 重複要素の削除
 */
// function main($input)
// {
// $num = array_shift($input);
// $arr = [];

// for ($i = 0; $i < $num; $i++) {
//   if (in_array($input[$i], (array)$arr) == false) {

//     array_push($arr, $input[$i]);
//   }
// }
// var_dump($arr);
// }

// main(['5', '1', '2', '3', '5', '2']);

//foreach使用
// function main($input)
// {
//   $num = array_shift($input);
//   $array = [];

//   foreach ($input as $num) {
//     if (in_array($num, $array) === false) {
//       array_push($array, $num);
//     }
//   }

//   foreach ($array as $arr) {
//     echo $arr . '<br>';
//   }
// }

// main(['5', '1', '2', '3', '5', '2']);

/**
 *  文字列の重複カウント
 */
// function main($input)
// {
//   $target = array_shift($input);
//   $count = 0;

//   for ($i = 0; $i < mb_strlen($input[0]); $i++) {
//     if (substr($input[0], $i, mb_strlen($target)) === $target) {
//       $count++;
//     }
//   }

//   echo $count;
// }

// main(['AA', 'abdeeAAbAAAbfde']); //3
// main(['el', 'scale']); //0
// main(['Ji', 'JiJiiJiIjiIJjIJi']); //4

//foreach使用
// function main($input)
// {
//   $str = array_shift($input);
//   $chars = str_split($input[0]);
//   $count = 0;
//   $ans = 0;

//   foreach ($chars as $char) {
//     if (substr($input[0], $count, mb_strlen($str)) === $str) {
//       $ans++;
//     }
//     $count++;
//   }

//   echo $ans;
// }

// main(['AA', 'abdeeAAbAAAbfde']); //3
// main(['el', 'scale']); //0
// main(['Ji', 'JiJiiJiIjiIJjIJi']); //4

/**
 *  重複の判定
 */
// function main($input)
// {
//   $count = [];
//   foreach ($input as $val) {
//     if (isset($count[$val])) {
//       $count[$val]++;
//     } else {
//       $count[$val] = 1;
//     }
//   }

//   foreach ($count as $val) {
//     if ($val >= 2) {
//       echo $val;
//     }
//   }
// }

// main(['HND', 'NRT', 'KIX', 'NGO', 'NGO', 'NGO', 'NGO', 'NGO']);

/**
 *  もっとも多く出現する文字列のカウント
 */
// function main($input)
// {
//   $str = str_replace(' ', '', $input);
//   $input_text_array[] = mb_str_split($str, 1);

//   foreach ($input_text_array as $t) {
//     $tt = array_count_values($t);
//   }

//   $max_val[array_search(max($tt), $tt)] = max($tt);
//   var_dump($max_val);
// }

// main('This is a pen. This is an apple. Applepen.');