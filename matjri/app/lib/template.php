<?php

namespace PHPMVC\LIB;

class Template
{

	private $_templateParts;
	private $_actionView;
	private $_data;

	public function __construct(array $parts)
	{
		$this->_templateParts = $parts;
	}

	public function setActionView($actionView)
	{
		$this->_actionView = $actionView;
	}

	public function setData($data)
	{
		$this->_data = $data;
	}


	private function renderTemplateHeaderStart()
	{
		if(isset($this->_data))
				extract($this->_data);
		require_once TEMPLATE_PATH . 'templateheaderstart.php';
	}

	private function renderTemplateHeaderEnd()
	{
		if(isset($this->_data))
				extract($this->_data);
		require_once TEMPLATE_PATH . 'templateheaderend.php';
	}

	private function renderTemplateFooter()
	{
		if(isset($this->_data))
				extract($this->_data);
		require_once TEMPLATE_PATH . 'footer.php';
	}

	private function renderBlocks()
	{
		if(!array_key_exists('template', $this->_templateParts))
		{
			echo 'Erorr';
		}
		else
		{
			$parts = $this->_templateParts['template'];
			if(!empty($parts))
			{	
				if(isset($this->_data))
				extract($this->_data);
				foreach ($parts as $key => $value) {
					if($key == ':view')
					{
						require_once $this->_actionView;
					} 
					else{
						require_once $value;
					}
				}
			}
		}
	}

	private function renderHeaderResources()
	{
		if(!array_key_exists('template', $this->_templateParts))
		{
			echo 'Erorr';
		}
		else
		{
			$parts = $this->_templateParts['header_links'];
			$css = $parts['CSS'];
			$outputs = '';
			if(!empty($css))
			{	
				foreach ($css as $key => $value) {
					if($key != 'ar')
					$outputs .= "<link rel='stylesheet' href='" . $value ."' />\n";
					else
					{
						if($_SESSION['lang'] == 'ar')
						$outputs .= "<link rel='stylesheet' href='" . $value ."' />\n";
					}
					
				}
			}
		}
		echo $outputs;
	}

	private function renderFooterResources()
	{
		if(!array_key_exists('template', $this->_templateParts))
		{
			echo 'Erorr';
		}
		else
		{
			$parts = $this->_templateParts['footer_links'];
			$css = $parts['JS'];
			$outputs = '';
			if(!empty($css))
			{	
				foreach ($css as $key => $value) {
					$outputs .= "\n<script src=\"" . $value ."\"></script>";	
					
				}
			}
		}
		echo $outputs;
	}
	public function renderApp()
	{
		$this->renderTemplateHeaderStart();
		$this->renderHeaderResources();
		$this->renderTemplateHeaderEnd();
		$this->renderBlocks();
		$this->renderFooterResources();
		$this->renderTemplateFooter();
	}
	public function renderLogin()
	{
		$this->renderTemplateHeaderStart();
		$this->renderHeaderResources();
		$this->renderTemplateHeaderEnd();
		$path = '/login/default.view.php';
		require_once VIEWS_PATH . $path;
		$this->renderFooterResources();
		echo "<script src='" . JS . '/login.js' ."'></script>\n";
		require_once TEMPLATE_PATH . 'templatend.php';
	}

}