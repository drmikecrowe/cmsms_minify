<?php

if (!isset($gCms))
	exit;

if (! $this->CheckAccess()) {
  return $this->DisplayErrorPage($id, $params, $returnid, $this->Lang('accessdenied'));
}

echo $this->Lang('minify_help');