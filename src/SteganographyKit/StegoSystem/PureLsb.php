<?php
/**
 * Stego System of Pure LSB
 * 
 * @link        https://github.com/picamator/SteganographyKit
 * @license     http://opensource.org/licenses/BSD-3-Clause New BSD License
 */

namespace SteganographyKit\StegoSystem;
use SteganographyKit\SecretText\SecretTextInterface;
use SteganographyKit\CoverText\CoverTextInterface;

class PureLsb extends AbstractLsb
{    
    /**
     * {@inheritDoc}
     */
    protected function getNextCoordinate(array $prevCoordinate, $xMax, $yMax) 
    {
        $prevCoordinate['x']++;
        if ($prevCoordinate['x'] > $xMax) {
            $prevCoordinate['x'] = 0;
            $prevCoordinate['y']++;
        } 
        
        if ($prevCoordinate['y'] > $yMax) {
            return false;
        }
        
        return $prevCoordinate;
    }
    
    /**
     * {@inheritDoc}
     */
    protected function validateCapacity(SecretTextInterface $secretText, 
        CoverTextInterface $coverText
    ) {
         $secretSize     = $secretText->getSize();
         $coverCapacity  = $coverText->getCoverCapacity($this->useChannelSize);        
         if ($secretSize > $coverCapacity) {
             throw new Exception('Not enouph room to keep all secretText. CoverText can handle '
                . $coverCapacity . ' bytes but SecretTest has ' . $secretSize . ' bytes');
         }
    }
    
    /**
     * {@inheritDoc}
     */
    protected function getChannel(array $coordinate) 
    {
        return $this->useChannel;
    }
}