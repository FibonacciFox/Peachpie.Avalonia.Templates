<?php
namespace Avalonia\Native\Interop\Impl;
/**
 */
class SetIsVisibleDelegate extends \System\MulticastDelegate implements 
	\System\ICloneable,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_target;
	/**
	 * @var \System\Object
	 * @field
	 */
	protected $_methodBase;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $_methodPtr;
	/**
	 * @var \System\IntPtr
	 * @field
	 */
	protected $_methodPtrAux;
	/**
	 * @var \System\Object
	 * @property
	 */
	public readonly $Target;
	/**
	 * @var \System\Reflection\MethodInfo
	 * @property
	 */
	public readonly $Method;
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $isVisible
	 * @return \System\Int32|int
	 */
	public  function Invoke($this, $isVisible){}
	/**
	 * @param \System\Void* $this
	 * @param \System\Int32|int $isVisible
	 * @param \System\AsyncCallback $callback
	 * @param \System\Object|object $object
	 * @return \System\IAsyncResult
	 */
	public  function BeginInvoke($this, $isVisible, $callback, $object){}
	/**
	 * @param \System\IAsyncResult $result
	 * @return \System\Int32|int
	 */
	public  function EndInvoke($result){}
	/**
	 * @param \System\Object[] $invocationList
	 * @param \System\Int32|int $invocationCount
	 * @return \System\MulticastDelegate
	 */
	protected  function NewMulticastDelegate($invocationList, $invocationCount){}
}