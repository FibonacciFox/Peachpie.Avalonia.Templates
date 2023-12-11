<?php
namespace System\Text;
/**
 * @deprecated this element should not be used by you because it will break your program
 */
trait UnicodeEncodingMethodsOverride
{
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_1($chars, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_2($s){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_3($chars, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCount_4($chars, $count, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_5($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_6($s, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetByteCount_7($chars){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_1($s, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_2($chars, $charIndex, $charCount, $bytes, $byteIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_3($chars, $charCount, $bytes, $byteCount){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytes_4($chars, $charCount, $bytes, $byteCount, $encoder){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_5($chars){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_6($chars, $index, $count){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_7($s){}
	/**
	 * @return \System\Byte[]
	 */
	#[MethodOverride] public  function GetBytes_8($s, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetBytes_9($chars, $bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_1($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_2($bytes, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharCount_3($bytes, $count, $baseDecoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_4($bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetCharCount_5($bytes){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_1($bytes, $byteIndex, $byteCount, $chars, $charIndex){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_2($bytes, $byteCount, $chars, $charCount){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetChars_3($bytes, $byteCount, $chars, $charCount, $baseDecoder){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function GetChars_4($bytes){}
	/**
	 * @return \System\Char[]
	 */
	#[MethodOverride] public  function GetChars_5($bytes, $index, $count){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] public  function GetChars_6($bytes, $chars){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_1($bytes, $index, $count){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_2($bytes, $byteCount){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_3($bytes){}
	/**
	 * @return \System\String|string
	 */
	#[MethodOverride] public  function GetString_4($bytes){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAlwaysNormalized_1(){}
	/**
	 * @return \System\Boolean
	 */
	#[MethodOverride] public  function IsAlwaysNormalized_2($form){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ThrowBytesOverflow_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ThrowBytesOverflow_2($encoder, $nothingEncoded){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ThrowCharsOverflow_1(){}
	/**
	 * @return \System\Void|void
	 */
	#[MethodOverride] protected  function ThrowCharsOverflow_2($decoder, $nothingDecoded){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCountWithFallback_1($pCharsOriginal, $originalCharCount, $charsConsumedSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetByteCountWithFallback_2($chars, $originalCharsLength, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytesWithFallback_1($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetBytesWithFallback_2($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_1($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_2($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder){}
	/**
	 * @return \System\Int32|int
	 */
	#[MethodOverride] protected  function GetCharsWithFallback_3($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder){}
}
/**
 */
class UnicodeEncoding extends \System\Text\Encoding implements 
	\System\ICloneable
{
	/**
	 * @var \System\Text\UnicodeEncoding
	 * @field
	 */
	protected readonly $s_bigEndianDefault;
	/**
	 * @var \System\Text\UnicodeEncoding
	 * @field
	 */
	protected readonly $s_littleEndianDefault;
	/**
	 * @var \System\Int32
	 * @field
	 */
	public $CharSize;
	/**
	 * @var \System\Int32
	 * @field
	 */
	protected $_codePage;
	/**
	 * @var \System\Text\CodePageDataItem
	 * @field
	 */
	protected $_dataItem;
	/**
	 * @var \System\Text\EncoderFallback
	 * @field
	 */
	protected $encoderFallback;
	/**
	 * @var \System\Text\DecoderFallback
	 * @field
	 */
	protected $decoderFallback;
	/**
	 * @var \System\ReadOnlySpan_1[System\Byte]
	 * @property
	 */
	public readonly $Preamble;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $BodyName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $EncodingName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $HeaderName;
	/**
	 * @var \System\String
	 * @property
	 */
	public readonly $WebName;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $WindowsCodePage;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsBrowserDisplay;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsBrowserSave;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMailNewsDisplay;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsMailNewsSave;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public readonly $IsSingleByte;
	/**
	 * @var \System\Text\EncoderFallback
	 * @property
	 */
	public $EncoderFallback;
	/**
	 * @var \System\Text\DecoderFallback
	 * @property
	 */
	public $DecoderFallback;
	/**
	 * @var \System\Boolean
	 * @property
	 */
	public $IsReadOnly;
	/**
	 * @var \System\Int32
	 * @property
	 */
	public readonly $CodePage;
	/**
	 * @uses UnicodeEncodingMethodsOverride::GetByteCount_1 ($chars, $index, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetByteCount_2 ($s)
	 * @uses UnicodeEncodingMethodsOverride::GetByteCount_3 ($chars, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetByteCount_4 ($chars, $count, $encoder)
	 * @uses UnicodeEncodingMethodsOverride::GetByteCount_5 ($chars)
	 * @uses UnicodeEncodingMethodsOverride::GetByteCount_6 ($s, $index, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetByteCount_7 ($chars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCount(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_1 ($s, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_2 ($chars, $charIndex, $charCount, $bytes, $byteIndex)
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_3 ($chars, $charCount, $bytes, $byteCount)
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_4 ($chars, $charCount, $bytes, $byteCount, $encoder)
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_5 ($chars)
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_6 ($chars, $index, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_7 ($s)
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_8 ($s, $index, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetBytes_9 ($chars, $bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytes(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::GetCharCount_1 ($bytes, $index, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetCharCount_2 ($bytes, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetCharCount_3 ($bytes, $count, $baseDecoder)
	 * @uses UnicodeEncodingMethodsOverride::GetCharCount_4 ($bytes)
	 * @uses UnicodeEncodingMethodsOverride::GetCharCount_5 ($bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharCount(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::GetChars_1 ($bytes, $byteIndex, $byteCount, $chars, $charIndex)
	 * @uses UnicodeEncodingMethodsOverride::GetChars_2 ($bytes, $byteCount, $chars, $charCount)
	 * @uses UnicodeEncodingMethodsOverride::GetChars_3 ($bytes, $byteCount, $chars, $charCount, $baseDecoder)
	 * @uses UnicodeEncodingMethodsOverride::GetChars_4 ($bytes)
	 * @uses UnicodeEncodingMethodsOverride::GetChars_5 ($bytes, $index, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetChars_6 ($bytes, $chars)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetChars(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::GetString_1 ($bytes, $index, $count)
	 * @uses UnicodeEncodingMethodsOverride::GetString_2 ($bytes, $byteCount)
	 * @uses UnicodeEncodingMethodsOverride::GetString_3 ($bytes)
	 * @uses UnicodeEncodingMethodsOverride::GetString_4 ($bytes)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetString(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::IsAlwaysNormalized_1 ()
	 * @uses UnicodeEncodingMethodsOverride::IsAlwaysNormalized_2 ($form)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function IsAlwaysNormalized(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::ThrowBytesOverflow_1 ()
	 * @uses UnicodeEncodingMethodsOverride::ThrowBytesOverflow_2 ($encoder, $nothingEncoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowBytesOverflow(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::ThrowCharsOverflow_1 ()
	 * @uses UnicodeEncodingMethodsOverride::ThrowCharsOverflow_2 ($decoder, $nothingDecoded)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function ThrowCharsOverflow(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::GetByteCountWithFallback_1 ($pCharsOriginal, $originalCharCount, $charsConsumedSoFar)
	 * @uses UnicodeEncodingMethodsOverride::GetByteCountWithFallback_2 ($chars, $originalCharsLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetByteCountWithFallback(mixed ...$args){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::GetBytesWithFallback_1 ($pOriginalChars, $originalCharCount, $pOriginalBytes, $originalByteCount, $charsConsumedSoFar, $bytesWrittenSoFar)
	 * @uses UnicodeEncodingMethodsOverride::GetBytesWithFallback_2 ($chars, $originalCharsLength, $bytes, $originalBytesLength, $encoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetBytesWithFallback(mixed ...$args){}
	/**
	 * @param \System\Byte* $pBytesOriginal
	 * @param \System\Int32|int $originalByteCount
	 * @param \System\Int32|int $bytesConsumedSoFar
	 * @return \System\Int32|int
	 */
	protected  function GetCharCountWithFallback($pBytesOriginal, $originalByteCount, $bytesConsumedSoFar){}
	/**
	 * @uses UnicodeEncodingMethodsOverride::GetCharsWithFallback_1 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar)
	 * @uses UnicodeEncodingMethodsOverride::GetCharsWithFallback_2 ($pOriginalBytes, $originalByteCount, $pOriginalChars, $originalCharCount, $bytesConsumedSoFar, $charsWrittenSoFar, $decoder)
	 * @uses UnicodeEncodingMethodsOverride::GetCharsWithFallback_3 ($bytes, $originalBytesLength, $chars, $originalCharsLength, $decoder)
	 * @return mixed|@override
	 */
	#[MethodOverride]  function GetCharsWithFallback(mixed ...$args){}
}
