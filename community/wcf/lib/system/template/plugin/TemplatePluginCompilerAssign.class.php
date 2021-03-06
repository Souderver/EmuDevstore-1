<?php
// wcf imports
if (!defined('NO_IMPORTS')) {
	require_once(WCF_DIR.'lib/system/template/TemplatePluginCompiler.class.php');
}

/**
 * The 'assign' compiler function calls the assign function on the template object.
 * 
 * Usage:
 * {assign var=name value="foo"}
 *
 * @author 	Marcel Werk
 * @copyright	2001-2009 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.template.plugin
 * @category 	Community Framework
 */
class TemplatePluginCompilerAssign implements TemplatePluginCompiler {
	/**
	 * @see TemplatePluginCompiler::executeStart()
	 */
	public function executeStart($tagArgs, TemplateScriptingCompiler $compiler) {
		if (!isset($tagArgs['var'])) {
			throw new SystemException($compiler->formatSyntaxError("missing 'var' argument in assign tag", $compiler->getCurrentIdentifier(), $compiler->getCurrentLineNo()), 12001);
		}
		if (!isset($tagArgs['value'])) {
			throw new SystemException($compiler->formatSyntaxError("missing 'value' argument in assign tag", $compiler->getCurrentIdentifier(), $compiler->getCurrentLineNo()), 12001);
		}
				
		return "<?php \$this->assign(".$tagArgs['var'].", ".$tagArgs['value']."); ?>";
	}
	
	/**
	 * @see TemplatePluginCompiler::executeEnd()
	 */
	public function executeEnd(TemplateScriptingCompiler $compiler) {
		throw new SystemException($compiler->formatSyntaxError("unknown tag {/assign}", $compiler->getCurrentIdentifier(), $compiler->getCurrentLineNo()), 12003);
	}
}
?>