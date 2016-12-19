<?php
/**
 * Interface for Stego Key
 * 
 * @link        https://github.com/picamator/SteganographyKit
 * @license     http://opensource.org/licenses/BSD-3-Clause New BSD License
 */

namespace Picamator\SteganographyKit\StegoKey;

interface StegoKeyInterface 
{
    /**
     * @param string|integer $secretText
     */
    public function __construct($secretText = null);
    
    /**
     * Sets secretKey
     * 
     * @param string|integer $secretKey
     * @return self
     * @throw InvalidArgumentException
     */
    public function setSecretKey($secretKey);
    
    /**
     * Gets secretKey
     * 
     * @return string|integer
     * @throw LogicException
     */
    public function getSecretKey();
    
    /**
     * Generate secretKey
     * 
     * @param boolean $autoSet - true auto set property secretKey, false only return value
     * @return string|integer
     */
    public function generateSecretKey($autoSet = false);
}