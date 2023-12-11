<?php
namespace System;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait OrdinalCaseSensitiveComparerMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_1($x, $y){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function Compare_2($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_1($x, $y){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_2($obj){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function Equals_3($x, $y){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_1($obj){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_2(){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetHashCode_3($obj){}
}
/**
 */
class OrdinalCaseSensitiveComparer extends \System\OrdinalComparer implements 
	\System\Collections\IComparer,
	\System\Collections\IEqualityComparer,
	\System\Collections\Generic\IComparer_1,
	\System\Collections\Generic\IEqualityComparer_1,
	\System\Runtime\Serialization\ISerializable
{
	/**
	 * @var \System\OrdinalCaseSensitiveComparer
	 * @field
	 */
	protected readonly $Instance;
	/**
	 * @uses OrdinalCaseSensitiveComparerMethodsOverride::Compare_1 ($x, $y)
	 * @uses OrdinalCaseSensitiveComparerMethodsOverride::Compare_2 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Compare(mixed ...$args){}
	/**
	 * @uses OrdinalCaseSensitiveComparerMethodsOverride::Equals_1 ($x, $y)
	 * @uses OrdinalCaseSensitiveComparerMethodsOverride::Equals_2 ($obj)
	 * @uses OrdinalCaseSensitiveComparerMethodsOverride::Equals_3 ($x, $y)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function Equals(mixed ...$args){}
	/**
	 * @uses OrdinalCaseSensitiveComparerMethodsOverride::GetHashCode_1 ($obj)
	 * @uses OrdinalCaseSensitiveComparerMethodsOverride::GetHashCode_2 ()
	 * @uses OrdinalCaseSensitiveComparerMethodsOverride::GetHashCode_3 ($obj)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetHashCode(mixed ...$args){}
	/**
	 * @param \System\Runtime\Serialization\SerializationInfo $info
	 * @param \System\Runtime\Serialization\StreamingContext $context
	 * @return \System\Void|void
	 */
	public  function GetObjectData($info, $context){}
}
