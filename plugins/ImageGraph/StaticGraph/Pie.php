<?php
/**
 * Piwik - Open source web analytics
 *
 * @link http://piwik.org
 * @license http://www.gnu.org/licenses/gpl-3.0.html GPL v3 or later
 *
 * @category Piwik_Plugins
 * @package StaticGraph
 */
namespace Piwik\Plugins\ImageGraph\StaticGraph;

use Piwik\Plugins\ImageGraph\StaticGraph\PieGraph;

/**
 *
 * @package StaticGraph
 */
class Pie extends PieGraph
{
    public function renderGraph()
    {
        $this->initPieGraph(false);

        $this->pieChart->draw2DPie(
            $this->xPosition,
            $this->yPosition,
            $this->pieConfig
        );
    }
}
