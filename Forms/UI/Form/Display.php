<?php
namespace Creatiff\Forms\UI\Form;

use Creatiff\Forms\Component;
use Creatiff\Forms\Exception\Component as Exception;
use Creatiff\Forms\Property;
/**
 * Class Display
 * @package Creatiff\Forms\UI
 *
 * A display-only text field which is not validated and not submitted. This is useful for when you want to display a
 * value from a form's loaded data but do not want to allow the user to edit or submit that value.
 */
class Display extends Field implements FieldInterface{


}