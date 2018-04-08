<?php

class WeatherController extends Controller{
	
	public function index(){
		$this->set(result,false);
        
	}
        public function getresults() {
        $xml = simplexml_load_file("http://api.worldweatheronline.com/premium/v1/weather.ashx?key=1491bb4dfc8d4e438ca01504171211&q=%22".$_POST['zip']."%22&format=xml&num_of_days=2");
        $this->set('result', true);
        $this->set('weather', $xml);
        }
		
}

?>