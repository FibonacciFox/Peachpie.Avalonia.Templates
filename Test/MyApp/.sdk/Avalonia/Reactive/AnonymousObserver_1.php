<?php
namespace Avalonia\Reactive;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AnonymousObserver_1 extends \System\Object implements 
	\System\IObserver_1
{
	/**
	 * @return \System\Void|void
	 */
	public  function OnCompleted(){}
	/**
	 * @param \System\Exception $error
	 * @return \System\Void|void
	 */
	public  function OnError($error){}
	/**
	 * @param \Avalonia\Reactive\T $value
	 * @return \System\Void|void
	 */
	public  function OnNext($value){}
	/**
	 * @param \System\Object|object $obj
	 * @return \System\Boolean
	 */
	public  function Equals($obj){}
}
