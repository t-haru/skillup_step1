<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8" />
		<title>PHPのサンプル</title>
	</head>
	<body>
		<?php
			// 日付を表示
			$date = date("Y/m/d H:i:s");
			print("$date<br />");

			// if文
			$a = 5;
			if($a == 3) {
				print("$a is 3<br />");
			} else {
				print("$a is not 3<br />");
			}

			// for 文
			for($i = 0; $i < 10; $i++) {
				print("$i ");
			}
			print("<br />");

			// 関数
			function double_print($text) {
				print($text . $text);
			}
			double_print("a");
			double_print("bc");
			print("<br />");

			// 配列
			$a1 = array("one", "two", "three");
			$a1[] = "four";
			$a1[0] = "one?";
			print_r($a1);
			print("<br />");

			// 連想配列
			$hash = array("one" => "いち", "two" => "に", "three" => "さん");
			$hash["four"] = "し";
			print_r($hash);
			print("<br />");
			foreach($hash as $key => $val)
				print("$key is $val. ");
			print("<br />");

			// 正規表現
			if(preg_match('/(-?)[0-9]+(\.[0-9]+)?/', 'q-6.83p', $m)) {
				print("match: $m[0] ");
				if($m[1] == "-")
					print("minus! ");
				if(isset($m[2]))
					print("decimal! ");
			} else {
				print("not mutch");
			}
		?>
	</body>
</html>
