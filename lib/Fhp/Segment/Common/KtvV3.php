<?php /** @noinspection PhpUnused */

namespace Fhp\Segment\Common;

use Fhp\Model\SEPAAccount;
use Fhp\Segment\BaseDeg;

/**
 * Data Element Group: Kontoverbindung (Version 3)
 *
 * @link https://www.hbci-zka.de/dokumente/spezifikation_deutsch/fintsv3/FinTS_3.0_Messages_Geschaeftsvorfaelle_2015-08-07_final_version.pdf
 * Section: B.3.1
 *
 * @link https://www.hbci-zka.de/dokumente/spezifikation_deutsch/archiv/HBCI_V2.x_FV.zip
 * File: HBCI22 Final.pdf
 * Section: II.5.3.3
 * Note that this older specification document contains no version number and has the Kik inlined, which is equivalent.
 */
class KtvV3 extends BaseDeg
{
    /** @var string */
    public $kontonummer;
    /** @var string|null */
    public $unterkontomerkmal;
    /** @var Kik */
    public $kik;

    /**
     * @param string $kontonummer
     * @param string|null $unterkontomerkmal
     * @param Kik $kik
     * @return KtvV3
     */
    public static function create($kontonummer, $unterkontomerkmal, $kik)
    {
        $result = new KtvV3();
        $result->kontonummer = $kontonummer;
        $result->unterkontomerkmal = $unterkontomerkmal;
        $result->kik = $kik;
        return $result;
    }

    /**
     * @param SEPAAccount $account
     * @return KtvV3
     */
    public static function fromAccount($account)
    {
        return static::create($account->getAccountNumber(), $account->getSubAccount(), Kik::create($account->getBlz()));
    }
}
