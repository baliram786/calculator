<?php 

/*interface fun1{
	public function get_name();

}

interface fun2{
	public function get_age();
}*/

class Demo 
{
public $a;
public $b;
public function __construct($a,$b){
	$this->a =$a;
	$this->b = $b;

}
public function intro(){
	echo "The fruit is {$this->a} and the color is {$this->b}.";
}
}
class msg extends Demo{
	public function __construct($fname,$mname,$lname){
		$this->fname= $fname;
		$this->mname = $mname;
		$this->lname = $lname;
	}
	public function intro(){
		echo $this->fname,$this->mname,$this->lname;
	}
}
$obj =  new msg("Harikesh","Kumar","Mishra");
echo $obj->intro();


 ?>