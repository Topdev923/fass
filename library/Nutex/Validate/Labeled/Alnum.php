<?php
/**
 * class Nutex_Validate_Labeled_Alnum
 *
 * ラベルつき半角英数字バリデータ
 *
 * @package Nutex
 * @subpackage Nutex_Validate
 */
class Nutex_Validate_Labeled_Alnum extends Nutex_Validate_Alnum implements Nutex_Validate_Labeled_Interface
{
    /**
     * Validation failure message template definitions
     *
     * @var array
     */
    protected $_messageTemplates = array(
        self::INVALID      => "「%label%」が不正な値です",
        self::NOT_ALNUM    => "「%label%」は半角英数字で入力して下さい",
        self::STRING_EMPTY => "「%label%」は空です"
    );

    /**
     * @var array
     */
    protected $_messageVariables = array(
        'label' => '_label',
    );

    /**
     * @var array
     */
    protected $_label = '';

    /**
     * setLabel
     *
     * @param string $label
     * @return $this
     */
    public function setLabel($label)
    {
        $this->_label = (string)$label;
        return $this;
    }

    /**
     * getLabel
     *
     * @param void
     * @return string
     */
    public function getLabel()
    {
        return $this->_label;
    }
}
