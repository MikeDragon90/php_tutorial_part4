<style>
	.error {
		color: red;
		padding: 0;
		margin:
	}
</style>

<?php 
function debug($array) {
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
?>

<?php #require_once 'nav.php'; ?>

<?php #include_once 'form.php'; ?>

<?php #require_once 'footer.php';  ?>

<?php 

#properties - variables
#methods - functions
class Car {
	const COLOR = 'Yellow';
	#public can be accessed from everywhere.
	public string $brand;
	#protected can be accessed within the class
	protected string $model;
	#private can be accessed within the class
	private int $year;

	#public, private, protected

	public function __construct($brand, $model, $year) {
		$this->setBrand($brand);
		$this->setModel($model);
		$this->setYear($year);
	}

	public function __destruct() {
		echo 'Done';
	}

	public function setBrand($brand) {
		return $this->brand = $brand;
	}

	public function getBrand() {
		return $this->brand;
	}

	public function setModel($model) {
		return $this->model = $model;
	}

	public function getModel() {
		return $this->model;
	}

	public function setYear($year) {
		return $this->year = $year;
	}

	public function getYear() {
		return $this->year;
	}

}

$honda = new Car('Honda', 'Honda S2000', '2001');

echo $honda::COLOR;
#$toyota = new Car();
debug($honda);