<?php
	function bu($url = null)
	{
	    static $baseUrl;
	    if ($baseUrl === null)
	        $baseUrl = Yii::$app->getRequest()->getBaseUrl();
	    return $url === null ? $baseUrl : $baseUrl . '/' . ltrim($url, '/');
	}
	function prd($variable)
	{
	    echo '<pre>';
	    print_r($variable);
	    echo '</pre>';
	    die;
	}