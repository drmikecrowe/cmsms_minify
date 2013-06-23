<?php

#-------------------------------------------------------------------------
# Module: Minify - Javascript and CSS minifier using https://github.com/mrclay/minify
# Version: 0.9, Mike Crowe
#
#-------------------------------------------------------------------------
# CMS - CMS Made Simple is (c) 2013 by Ted Kulp (wishy@cmsmadesimple.org)
# This project's homepage is: http://www.cmsmadesimple.org
#
# This file originally created by ModuleMaker module, version 0.3.2
# Copyright (c) 2013 by Samuel Goldstein (sjg@cmsmadesimple.org) 
#
#-------------------------------------------------------------------------
# Minify Module:
# Copyright (c) 2013 Mike Crowe <drmikecrowe@gmail.com>
# 
# Minify:
# Copyright (c) 2008 Ryan Grove <ryan@wonko.com>
# Copyright (c) 2008 Steve Clay <steve@mrclay.org>
# All rights reserved.
# 
# Redistribution and use in source and binary forms, with or without
# modification, are permitted provided that the following conditions are met:
# 
#   * Redistributions of source code must retain the above copyright notice,
#     this list of conditions and the following disclaimer.
#   * Redistributions in binary form must reproduce the above copyright notice,
#     this list of conditions and the following disclaimer in the documentation
#     and/or other materials provided with the distribution.
#   * Neither the name of this project nor the names of its contributors may be
#     used to endorse or promote products derived from this software without
#     specific prior written permission.
# 
# THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
# ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
# WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
# DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE LIABLE FOR
# ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
# (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
# LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
# ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
# (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
# SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
#-------------------------------------------------------------------------

class Minify extends CMSModule {

	function GetName() 					{ return 'Minify'; } 
	function GetFriendlyName() 			{ return $this->Lang('friendlyname'); } 
	function GetVersion() 				{ return '0.9.1'; } 
	function GetHelp() 					{ return $this->Lang('help'); } 
	function GetAuthor() 				{ return 'Mike Crowe'; } 
	function GetAuthorEmail() 			{ return 'drmikecrowe@gmail.com'; } 
	function GetChangeLog() 			{ return $this->Lang('changelog'); } 
	function IsPluginModule() 			{ return false; } 
	function HasAdmin() 				{ return true; } 
	function GetAdminSection() 			{ return 'layout'; } 
	function GetAdminDescription() 		{ return $this->Lang('admindescription'); } 
	function VisibleToAdminUser() 		{ return true; } 

	/* ---------------------------------------------------------
	  CheckAccess()
	  This wrapper function will check against the specified permission,
	  and display an error page if the user doesn't have adequate permissions.
	  --------------------------------------------------------- */

	function CheckAccess($perm = 'Modify Stylesheets') {
		return $this->CheckPermission($perm);
	}

	/* ---------------------------------------------------------
	  DisplayErrorPage()
	  This is a simple function for generating error pages.
	  --------------------------------------------------------- */

	function DisplayErrorPage($id, &$params, $return_id, $message = '') {
		$this->smarty->assign('title_error', $this->Lang('error'));
		$this->smarty->assign_by_ref('message', $message);

		// Display the populated template
		echo $this->ProcessTemplate('error.tpl');
	}

	/* ---------------------------------------------------------
	  GetDependencies()
	  Your module may need another module to already be installed
	  before you can install it.
	  This method returns a list of those dependencies and
	  minimum version numbers that this module requires.

	  It should return an hash, eg.
	  return array('somemodule'=>'1.0', 'othermodule'=>'1.1');
	  --------------------------------------------------------- */

	function GetDependencies() {
		return array();
	}

	/* ---------------------------------------------------------
	  MinimumCMSVersion()
	  Your module may require functions or objects from
	  a specific version of CMS Made Simple.
	  Ever since version 0.11, you can specify which minimum
	  CMS MS version is required for your module, which will
	  prevent it from being installed by a version of CMS that
	  can't run it.

	  This method returns a string representing the
	  minimum version that this module requires.
	  --------------------------------------------------------- */

	function MinimumCMSVersion() {
		return "1.11.5";
	}

	/* ---------------------------------------------------------
	  MaximumCMSVersion()
	  You may want to prevent people from using your module in
	  future versions of CMS Made Simple, especially if you
	  think API features you use may change -- after all, you
	  never really know how the CMS MS API could evolve.

	  So, to prevent people from flooding you with bug reports
	  when a new version of CMS MS is released, you can simply
	  restrict the version. Then, of course, the onus is on you
	  to release a new version of your module when a new version
	  of the CMS is released...

	  This method returns a string representing the
	  maximum version that this module supports.
	  --------------------------------------------------------- */

	function MaximumCMSVersion() {
		return "2.0.0";
	}

	/* ---------------------------------------------------------
	  InstallPostMessage()
	  After installation, there may be things you want to
	  communicate to your admin. This function returns a
	  string which will be displayed.
	  --------------------------------------------------------- */

	function InstallPostMessage() {
		return $this->Lang('postinstall');
	}

	/* ---------------------------------------------------------
	  UninstallPostMessage()
	  After removing a module, there may be things you want to
	  communicate to your admin. This function returns a
	  string which will be displayed.
	  --------------------------------------------------------- */

	function UninstallPostMessage() {
		return $this->Lang('postuninstall');
	}

	/**
	 * UninstallPreMessage()
	 * This allows you to display a message along with a Yes/No dialog box. If the user responds
	 * in the affirmative to your message, the uninstall will proceed. If they respond in the
	 * negative, the uninstall will be canceled. Thus, your message should be of the form
	 * "All module data will be deleted. Are you sure you want to uninstall this module?"
	 *
	 * If you don't want the dialog, have this method return a FALSE, which will cause the
	 * module to uninstall immediately if the user clicks the "uninstall" link.
	 */
	function UninstallPreMessage() {
		return $this->Lang('really_uninstall');
	}

	// For future -- integrade our loggging with Minify
	function log($msg, $label) {
		$this->Audit(0, "Minify", "$label: $msg");
	}

}

?>
