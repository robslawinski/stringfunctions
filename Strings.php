<html>
<?php
class strings
{
	
	//Done, but could pass the string into the function
	function count_chars_example($str)
	{
		
		foreach(count_chars($str,1) as $i => $val)
		{
			return '<p>'. 'there were '. $val . 'instances of' . chr($i) . 'in the string' .'</p>';
		}
		
	}
	
	//need to work on it
	function chunk_split_example($str)
	{
		$newstring = chunk_split(base64_decode($str));
	}
	
	//Done, but could pass string into the function
	function explode_example()
	{
		$str = "I love to sing-a About the moon-a and the June-a and the spring-a";
		$song = explode("-a", $str);
		foreach($song as $verse)
		{
			echo $verse;
		}
	}
	
	//Need to figure out how this works and how to use it
	function htmlentities_example()
	{
		
	}
	
	//Done
	function htmlspecialchars_decode_example()
	{
		$str = "<p>this -&gt; &quot;</p>";
		echo htmlspecialchars_decode($str);
	}
	
	//Done
	function htmlspecialchars_example()
	{
		$str = htmlspecialchars("<a href = 'test'>Test</a>",ENT_QUOTES);
		echo $str;
	}
	
	
	//done with this, but could pass string into function
	function lcfirst_example()
	{
		$str = "This sentence is all lowercase";
		$str = lcfirst($str);
		echo $str;
	}
	
	//know how this works got to get the others
	function implode_example()
	{
		$str = array("a","b","c");
		echo implode(' : ', $str);
	}
	
	//need to know how to get this to work
	function ltrim_example()
	{
		$example = "\t\texample string";
		$text = "\x09Example String\x0A";
		$hello = "hello world";
		var_dump($example,$text,$hello);
		
		
		$trimmed = rtrim($example);
		var_dump($trimmed);
		
		$trimmed = rtrim($text);
		var_dump($trimmed);
		
		$trimmed = rtrim($text);
		var_dump($trimmed);
	}
	
	//converts a string to a hash
	function md5_example($str)
	{
		
		$hashcode = md5($str);
		return $hashcode;
	}
	
	//strips string from end of string
	function rtrim_example($str)
	{
		$example = "\t\texample string";
		$text = "\x09Example String\x0A";
		$hello = "hello world";
		var_dump($example,$text,$hello);
		
		
		$trimmed = rtrim($example);
		var_dump($trimmed);
		
		$trimmed = rtrim($text);
		var_dump($trimmed);
		
		$trimmed = rtrim($text);
		var_dump($trimmed);
	}
	
	//Done with this
	function str_replace_example($voweledWord)
	{
		$vowels = array('a','e','i','o','u','A','E','I','O','U');
		$onlyconsonants = str_replace($vowels, "", $voweledWord);
		return $onlyconsonants;
	}
	
	//
	function str_split_example($str)
	{
		$letters = str_split($str);
		$splitphrase = $str_split($str,3);
		return $letters;
	}
	
	//
	function stripos_example($haystack, $needle)
	{
		$position = stripos($haystack, $needle);
		if($position === true)
		{
			echo 'we found'. $needle.'in the string '. $haystack . 'at position'.$position;
		}
		else 
		{
			echo 'we did not find '. $needle. 'in the string'.$haystack;
		}
	}
	//
	function strtolower_example($yelling)
	{
		$whispering = strtolower($yelling);
		return $whispering;
	}
}

class arrays
{
	function array_keys_example()
	{
		$list = array('red','green','blue');
		 print_r(array_key_exists($list,'blue'));
	}
	
	function array_search_example()
	{
		$haystack = array('red','green','blue');
		$key = array_search('green', $haystack);
		print_r(key);
	}
	
	//help
	function array_walk_example()
	{
		$fruits = array('apples','oranges','bananas');
		array_walk($fruits, $callback);
	}
	
	//
	function array_pop_example()
	{
		$array = array("orange","banana","apple","pear");
		$fruit =array_pop($array);
		echo $array;
		echo $fruit;
	}
	
		
	function array_push_example()
	{
		$stack = array("apples","oranges");
		array_push($stack, "bananas","pears");
		print_r($stack);
	}
	
	function array_combine_example()
	{
		$a = array("they're","gonna");
		$b = array("combine","!");
		$c = array($a,$b);
		
		print_r(c);
	}
	
	function explode_example()
	{
		$str = "I love to sing-a About the moon-a and the June-a and the spring-a";
		$song = explode("-a", $str);
		foreach($song as $verse)
		{
			echo $verse;
		}
	}
	
	function implode_example()
	{
		$str = array("a","b","c");
		echo implode(' : ', $str);
	}
	
	function array_intersect_example()
	{
		$array1 = array("green","red","blue");
		$array2 = array("green","yellow","red");
		$result = array_intersect($array1,$array2);
		print_r($result);
	}
	
	function array_fill_example()
	{
		$a = array_fill(5,5, 'foo');
		$b = array_fill(-1,3,'bar');
		print_r($a);
		print_r($b);
	}
	
	function array_merge_example()
	{
		$beg = array(1 => "foo");
		$end = array(1 => "bar");
		$result = array_merge($beg,$end);
	}
	
	function array_reverse_example()
	{
		$alphabet = array('a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
		$lebahpla = array_reverse(alphabet);
		print_r($lebahpla);
	}
	
	function array_sum_example()
	{
		$a = array(2,3,4,5);
		echo "the sum of a is ". array_sum($a) . "\n";
		
		$b = array(1.1,3.14,22);
		echo "the sum of b is". array_sum($b) ."\n";
	}
	
	function asort_example()
	{
		$froot = array("pear","orange","banana","apple");
		asort($froot);
		foreach($froot as $key => $val)
		{
			echo "$key = $val\n";
		}
	}
}
?>
</html>