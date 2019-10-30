<?php /** @noinspection PhpUnused */

namespace Fhp\Segment\HITANS;

use Fhp\Segment\BaseGeschaeftsvorfallparameter;

/**
 * Class HITANSv5
 * Segment: Zwei-Schritt-TAN-Einreichung, Parameter (Version 5)
 * Parameters for: HKTANv5
 * Bezugssegment: HKVVB
 * Sender: Kreditinstitut
 *
 * @link: https://www.hbci-zka.de/dokumente/spezifikation_deutsch/archiv/FinTS_V3.0_2017-10-06-FV_RM.zip
 * File: FinTS_3.0_Security_Sicherheitsverfahren_PINTAN_2017-10-06_final_version_rm.pdf
 * Section: E.1.5 c)
 *
 * @package Fhp\Segment\HITANS
 */
class HITANSv5 extends BaseGeschaeftsvorfallparameter implements HITANS
{
    /** @var ParameterZweiSchrittTanEinreichungV5 */
    public $parameterZweiSchrittTanEinreichung;

    /** @return ParameterZweiSchrittTanEinreichungV5 */
    public function getParameterZweiSchrittTanEinreichung()
    {
        return $this->parameterZweiSchrittTanEinreichung;
    }
}
