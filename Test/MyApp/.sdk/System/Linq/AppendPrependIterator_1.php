<?php
namespace System\Linq;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait AppendPrependIterator_1MethodsOverride
{
	/**
	 * @return \System\Linq\TSource
	 */
	#[MethodOverride] public  function get_Current_1(){}
	/**
	 * @return \System\Object|object
	 */
	#[MethodOverride] private  function get_Current_2(){}
	/**
	 * @return \System\Collections\Generic\IEnumerator_1
	 */
	#[MethodOverride] public  function GetEnumerator_1(){}
	/**
	 * @return \System\Collections\IEnumerator
	 */
	#[MethodOverride] private  function GetEnumerator_2(){}
}
/**
 * @deprecated this element should not be used by you because it will break your program
 */
class AppendPrependIterator_1 extends \System\Linq\Iterator_1 implements 
	\System\Collections\Generic\IEnumerable_1,
	\System\Collections\IEnumerable,
	\System\Collections\Generic\IEnumerator_1,
	\System\IDisposable,
	\System\Collections\IEnumerator,
	\System\Linq\IIListProvider_1
{
	/**
	 * @var \System\Collections\Generic\IEnumerable_1[TSource]
	 * @field
	 */
	protected readonly $_source;
	/**
	 * @var \System\Collections\Generic\IEnumerator_1[TSource]
	 * @field
	 */
	protected $_enumerator;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_state;
	/**
	 * @var \TSource
	 * @field
	 */
	protected $_current;
	/**
	 * @var \TSource
	 * @property
	 */
	public readonly $Current;
	/**
	 * @return \System\Linq\TSource[]
	 */
	public  function ToArray(){}
	/**
	 * @return \System\Collections\Generic\List_1
	 */
	public  function ToList(){}
	/**
	 * @param \System\Boolean $onlyIfCheap
	 * @return \System\Int32|int
	 */
	public  function GetCount($onlyIfCheap){}
	/**
	 * @return \System\Void|void
	 */
	protected  function GetSourceEnumerator(){}
	/**
	 * @param \System\Linq\TSource $item
	 * @return \System\Linq\AppendPrependIterator_1
	 */
	public  function Append($item){}
	/**
	 * @param \System\Linq\TSource $item
	 * @return \System\Linq\AppendPrependIterator_1
	 */
	public  function Prepend($item){}
	/**
	 * @return \System\Boolean
	 */
	protected  function LoadFromEnumerator(){}
	/**
	 * @uses AppendPrependIterator_1MethodsOverride::get_Current_1 ()
	 * @uses AppendPrependIterator_1MethodsOverride::get_Current_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function get_Current(mixed ...$args){}
	/**
	 * @uses AppendPrependIterator_1MethodsOverride::GetEnumerator_1 ()
	 * @uses AppendPrependIterator_1MethodsOverride::GetEnumerator_2 ()
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetEnumerator(mixed ...$args){}
	/**
	 * @deprecated this element should not be used by you because it will break your program
	 * @return @deprecated
	 */
	#[MethodPrivate]  function Reset(){}
}
