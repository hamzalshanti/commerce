<?php


namespace PHPMVC\LIB;

class Language
{
	
	private $_dictionary = array();

	public function load($path)
	{
		$defaultLang = DEFAULT_LANG;
		if(isset($_SESSION['lang']))
		{
			$defaultLang = $_SESSION['lang'];
		}
		$langLoad = LANG_PATH  . $defaultLang . DS . $path .'.lang.php';
		if(file_exists($langLoad))
		{
			require_once $langLoad;
			if(is_array($_) && !empty($_))
			{
				foreach ($_ as $key => $value) {
					$this->_dictionary[$key] = $value;
				}
			}

		}
		else
		{
			//trigger_error('Search about methoad');
		}
	}

	

	public function getDictionary()
	{
		return $this->_dictionary;
	}

} 