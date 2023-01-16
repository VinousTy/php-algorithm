<?php

/**
 * 辞書の基本
 * 
 * n人の人に関して、それぞれの人の名前と財産が与えられます。
 * その後に人名 S が与えられるので、 S の財産を表す整数を出力してください。
 * 
 * 入力例1
 * 2
 * Kirishima 1
 * Kyoko 2
 * Kirishima
 * 
 * 
 * 出力例1
 * 1
 */
// function main($input)
// {
// }

// main([
//   '2',
//   'Kirishima 1',
//   'Kyoko 2',
//   'Kirishima'
// ]);

/**
 * 辞書データの順序
 * 
 * n 人の人の名前 s_1, ..., s_n が与えられたのち、m 回の「攻撃」に関する情報が与えられます。
 * 攻撃に関する情報は「ダメージを受けた人の名前」「受けたダメージ数」を空白区切りで与えられます。
 * 
 * 
 * それぞれの人が受けた合計ダメージを、人の名前のアルファベットの辞書順に出力してください。
 * なお、一度もダメージを受けていない人の合計ダメージは 0 とします。  
 * 
 * 
 * 入力例1
 * 2
 * MIDORIKAWA
 * KIRISHIMA
 * 2
 * KIRISHIMA 1
 * KIRISHIMA 2
 * 
 * 
 * 出力例1
 * 3
 * 0
 */
// function main($input)
// {
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
 * 
 * 要素数Nと配列Aの各要素 A_1, A_2, ..., A_N が与えられるので、同じ値の要素が 2 つ以上含まれないように A を加工した新たな配列を作成してください。
 * array_uniqueは使用せず、ループ処理を用いて実装してください。
 * 
 * 
 * それぞれの人が受けた合計ダメージを、人の名前のアルファベットの辞書順に出力してください。
 * なお、一度もダメージを受けていない人の合計ダメージは 0 とします。  
 * 
 * 
 * 入力例1
 * 5
 * 1
 * 2
 * 3
 * 5
 * 2
 * 
 * 出力例1
 * 1
 * 2
 * 3
 * 5
 */
// function main($input)
// {
// }

// main(['5', '1', '2', '3', '5', '2']);

/**
 * 文字列の重複カウント
 * 
 * 1行目で文字列 s、2行目で文字列 t が入力されます。 s が t の中で何回出現するかカウントして出力してください。
 * 
 * 
 * 入力例1
 * AA
 * abdeeAAbAAAbfde
 * 
 * 出力例1
 * 3
 */
// function main($input)
// {
// }

// main(['AA', 'abdeeAAbAAAbfde']); //3
// main(['el', 'scale']); //0
// main(['Ji', 'JiJiiJiIjiIJjIJi']); //4


/**
 * 重複の判定
 * 
 * 指定された配列（リスト）の定義の中で、同じ要素の数をカウントして、その数を出力してください。
 * 
 * 
 * 入力例1
 * ['HND', 'NRT', 'KIX', 'NGO', 'NGO', 'NGO', 'NGO', 'NGO']
 * 
 * 出力例1
 * 5
 */


// function main($input)
// {

// }

// main(['HND', 'NRT', 'KIX', 'NGO', 'NGO', 'NGO', 'NGO', 'NGO']);


/**
 * もっとも多く出現する文字列のカウント
 * 
 * 指定された文字列の定義の中で、もっとも多く出現する文字列をカウントして連想配列として出力してください。
 * また、スペースが出力されないようにしてください。
 * 
 * 
 * 入力例1
 * 'This is a pen. This is an apple. Applepen.'
 * 
 * 出力例1
 * p => 6
 */
// function main($input)
// {

// }

// main('This is a pen. This is an apple. Applepen.');
?>
<form action="./get.php" method="POST">
  <input type="text" name="username">
  <input type="password" name="pwd">
  <button type="submit">送信</button>
  <a href="./get.php">移動</a>
</form>