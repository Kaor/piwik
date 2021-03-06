<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik
 * @package Piwik
 */
namespace Piwik\Console;

use Piwik\Common;
use Symfony\Component\Console\Command\Command as SymfonyCommand;

class Command extends SymfonyCommand
{
    public function __construct($name = null)
    {
        if (!Common::isPhpCliMode()) {
            throw new \RuntimeException('Only executable in CLI mode');
        }

        parent::__construct($name);
    }
}
