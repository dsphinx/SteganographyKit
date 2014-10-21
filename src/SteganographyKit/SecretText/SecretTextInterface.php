<?php
/**
 * Interface for Secret Text
 * 
 * @link        https://github.com/picamator/SteganographyKit
 * @license     http://opensource.org/licenses/BSD-3-Clause New BSD License
 */

namespace SteganographyKit\SecretText;

interface SecretTextInterface 
{ 
    /**
     * Gets decretText from binary data
     * 
     * @param string    $binaryData - raw secretText with endMark
     * @param integer   $endMarkPos - position of endMark
     * @return string
     */
    public function getFromBinaryData($binaryData, $endMarkPos);
    
    /**
     * @param array $options
     */
    public function __construct(array $options = array());
    
    /**
     * Gets converted data to binary format
     * 
     * @return string binary representation of secret data
     */
    public function getBinaryData();
    
    /**
     * Gets size data in bit
     * 
     * @return integer
     */
    public function getSize();
    
    /** 
     * Gets position of end mark
     * 
     * @param string $secretText
     * @return integer|false
     */
    public function getEndMarkPos($secretText);
}
