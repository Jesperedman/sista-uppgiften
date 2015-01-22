<?php
class Ecom_Button
{

	//This is where I call to the location of the file of which the initializeStorage can write the $data.

	public function storagePath()
	{
		$filename = 'Oscars-Dator/Windows(C:)/MAMP/htdocs/Assignments/Last-Assign/dalog.txt';

		if (file_exists($filename)) {
		echo "The file $filename exists";
		} else {
		echo "The file $filename does not exist";
		}
	}

	//If the file exists it will write the following strings of $data.

	public function initializeStorage()
	{
		if (file_exists($this->storagePath)){
			$initialized = true;
		}
		else {
		$data = array();
		}
		

		$data[] = 'options,clicks,views';

		$data[] = 'orange,1,1';
		$data[] = 'red,1,1';
		$data[] = 'green,1,1';

		$initialized = $this->saveData($data);

		return $initialized;
	}	

	//Breaks down the strings into an array and return the strings from the array.
	public function trackClick($option)
	{
		$data = $this->loadData();

		for ($index = 1; $index < count($data); $index++){

			$optionRow = $data[$index];

			$optionData = explode(',', $optionRow);

			if ($option == $optionData[0]) {
				$optionData[1] = $optionData[1] + 1;

				$optionRow = implode(',', $optionData);

				$data[$index] = $optoinRow;

				break;
			}
		}

		$this->saveData($data);
	}

	// -||-
	public function trackView($option)
	{
		$data = $this->loadData();

		for ($index = 1; $index < count($data); $index++){

			$optionRow = $data[$index];

			$optionData = explode(',', $optionRow);

			if ($option == $optionData[0]) {
				$optionData[2] = $optionData[2] + 1;

				$optionRow = implode(',', $optionData);

				$data[$index] = $optoinRow;

				break;
			}
		}

		$this->saveData($data);
	}


	//Choses a percentage of 1-100% an option(colors of the button) based on how many times the button has been clicked.

	public function getOption()
	{
		$percentage = rand(1, 100);
		if ($percentage < 11) {
			$this->getRandomOption();
		}

		else {
			return $this->getRandomOption();
		}
	}

	//When we have a button that has been clicked more than the others it will be a 90% chance that it will appear.
	public function getRandomOption()
	{
		$percentage = rand(1, 100);
		if ($percentage > 89) {
			$this->getRandomOption(); }
		else {
		return $this->getBestConvertingOption();
		}
	}

	//Get info about which button has most clicks.
	public function getBestConvertingOption()
	{
	
	}

	//Loading the data to the file.
	public function loadData()
	{
	}

	//Saving the data to the file with line-breaks.
	public function saveData($data)
	{
		$content = implode($data, "\n");

		$handle = fopen($this->storagePath, "w+");

		if($handle === false){
			return false;
		}

		$result = fwrite($handle, $content);
		fclose($handle);

		if($result !== false){
			return true;
		}

		else{
			return false;
		}
	}
}