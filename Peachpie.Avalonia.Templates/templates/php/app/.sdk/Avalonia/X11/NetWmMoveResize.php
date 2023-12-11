<?php
namespace Avalonia\X11;
/**
 */
enum NetWmMoveResize implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case _NET_WM_MOVERESIZE_SIZE_TOPLEFT = 0;
	case _NET_WM_MOVERESIZE_SIZE_TOP = 1;
	case _NET_WM_MOVERESIZE_SIZE_TOPRIGHT = 2;
	case _NET_WM_MOVERESIZE_SIZE_RIGHT = 3;
	case _NET_WM_MOVERESIZE_SIZE_BOTTOMRIGHT = 4;
	case _NET_WM_MOVERESIZE_SIZE_BOTTOM = 5;
	case _NET_WM_MOVERESIZE_SIZE_BOTTOMLEFT = 6;
	case _NET_WM_MOVERESIZE_SIZE_LEFT = 7;
	case _NET_WM_MOVERESIZE_MOVE = 8;
	case _NET_WM_MOVERESIZE_SIZE_KEYBOARD = 9;
	case _NET_WM_MOVERESIZE_MOVE_KEYBOARD = 10;
	case _NET_WM_MOVERESIZE_CANCEL = 11;
}
