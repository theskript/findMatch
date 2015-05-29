<?php
class findMatch
{
	private $MyArray = array('-3','-1','1','3','5');
	
	public function get()
	{		
		foreach($this->MyArray as $key=>$val)
		{
			// If array index equals array integer value, store results for output
			if ($key == $val)
			{
				$output .= $val . '<br />';
			}
		}
		return $output;
	}
}

// Output matching results
$array = new findMatch;
echo $array->get();

?>
