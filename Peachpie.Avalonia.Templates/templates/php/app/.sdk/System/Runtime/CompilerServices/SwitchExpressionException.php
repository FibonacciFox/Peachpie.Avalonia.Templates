<?php
namespace System\Runtime\CompilerServices;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait SwitchExpressionExceptionMethodsOverride
{
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_1(){}
	/**
	 * @return \System\Type
	 */
	#[MethodOverride] public  function GetType_2(){}
}
/**
 */
class SwitchExpressionException extends \System\InvalidOperationException implements 
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\String
	 * @field
	 */
	protected $_message;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $UnmatchedValue;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $Message;
	/**
	 * @var \System\Reflection\MethodBase
	 * @property
	 */
	public readonly $TargetSite;
	/**
	 * @var \System\Collections\IDictionary
	 * @property
	 */
	public readonly $Data;
	/**
	 * @var \System\Exception
	 * @property
	 */
	public readonly $InnerException;
	/**
	 * @var \System\String
	 * @property
	 */
	public $HelpLink;
	/**
	 * @var \System\String
	 * @property
	 */
	public $Source;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public $HResult;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $StackTrace;
	/**
	 * @return \System\Object|object
	 */
	public  function get_UnmatchedValue(){}
	/**
	 * @uses SwitchExpressionExceptionMethodsOverride::GetType_1 ()
	 * @uses SwitchExpressionExceptionMethodsOverride::GetType_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetType(mixed ...$args){}
}