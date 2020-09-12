<?php

namespace Nasa\Interfaces;

interface dbConnector
{
	function getConnection();
	function closeConnection();
}