<?php
/**
 * Abstract for Stego Key
 * 
 * @link        https://github.com/picamator/SteganographyKit
 * @license     http://opensource.org/licenses/BSD-3-Clause New BSD License
 */

namespace SteganographyKit\StegoKey;
use SteganographyKit\LogicException;

abstract class AbstractStegoKey implements StegoKeyInterface 
{
    /**
     * SecretKey
     * 
     * @var string|integer 
     */
    protected $secretKey;
    
    /**
     * @param string|integer $secretText
     */
    public function __construct($secretText = null) 
    {
        if (!is_null($secretText)) {
            $this->setSecretKey($secretText);
        }
    }
    
    /**
     * Gets secretKey
     * 
     * @return string|integer
     * @throw SteganographyKit\LogicException
     */
    public function getSecretKey() 
    {
        if (is_null($this->secretKey)) {
            throw new LogicException('Coordinats can not be generated. SecretKey was not set.');
        }
        
        return $this->secretKey;
    }
}
