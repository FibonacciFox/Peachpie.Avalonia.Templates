<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum PointerFlags implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case POINTER_FLAG_NONE = 0;
	case POINTER_FLAG_NEW = 1;
	case POINTER_FLAG_INRANGE = 2;
	case POINTER_FLAG_INCONTACT = 4;
	case POINTER_FLAG_FIRSTBUTTON = 16;
	case POINTER_FLAG_SECONDBUTTON = 32;
	case POINTER_FLAG_THIRDBUTTON = 64;
	case POINTER_FLAG_FOURTHBUTTON = 128;
	case POINTER_FLAG_FIFTHBUTTON = 256;
	case POINTER_FLAG_PRIMARY = 1024;
	case POINTER_FLAG_CONFIDENCE = 2048;
	case POINTER_FLAG_CANCELED = 8192;
	case POINTER_FLAG_DOWN = 65536;
	case POINTER_FLAG_UPDATE = 131072;
	case POINTER_FLAG_UP = 262144;
	case POINTER_FLAG_WHEEL = 524288;
	case POINTER_FLAG_HWHEEL = 1048576;
	case POINTER_FLAG_CAPTURECHANGED = 2097152;
	case POINTER_FLAG_HASTRANSFORM = 4194304;
}
