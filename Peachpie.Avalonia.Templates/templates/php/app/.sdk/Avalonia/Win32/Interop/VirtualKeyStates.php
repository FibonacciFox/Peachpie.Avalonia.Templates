<?php
namespace Avalonia\Win32\Interop;
/**
 */
enum VirtualKeyStates implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case VK_LBUTTON = 1;
	case VK_RBUTTON = 2;
	case VK_CANCEL = 3;
	case VK_MBUTTON = 4;
	case VK_XBUTTON1 = 5;
	case VK_XBUTTON2 = 6;
	case VK_BACK = 8;
	case VK_TAB = 9;
	case VK_CLEAR = 12;
	case VK_RETURN = 13;
	case VK_SHIFT = 16;
	case VK_CONTROL = 17;
	case VK_MENU = 18;
	case VK_PAUSE = 19;
	case VK_CAPITAL = 20;
	case VK_KANA = 21;
	case VK_HANGEUL = 21;
	case VK_HANGUL = 21;
	case VK_JUNJA = 23;
	case VK_FINAL = 24;
	case VK_HANJA = 25;
	case VK_KANJI = 25;
	case VK_ESCAPE = 27;
	case VK_CONVERT = 28;
	case VK_NONCONVERT = 29;
	case VK_ACCEPT = 30;
	case VK_MODECHANGE = 31;
	case VK_SPACE = 32;
	case VK_PRIOR = 33;
	case VK_NEXT = 34;
	case VK_END = 35;
	case VK_HOME = 36;
	case VK_LEFT = 37;
	case VK_UP = 38;
	case VK_RIGHT = 39;
	case VK_DOWN = 40;
	case VK_SELECT = 41;
	case VK_PRINT = 42;
	case VK_EXECUTE = 43;
	case VK_SNAPSHOT = 44;
	case VK_INSERT = 45;
	case VK_DELETE = 46;
	case VK_HELP = 47;
	case VK_LWIN = 91;
	case VK_RWIN = 92;
	case VK_APPS = 93;
	case VK_SLEEP = 95;
	case VK_NUMPAD0 = 96;
	case VK_NUMPAD1 = 97;
	case VK_NUMPAD2 = 98;
	case VK_NUMPAD3 = 99;
	case VK_NUMPAD4 = 100;
	case VK_NUMPAD5 = 101;
	case VK_NUMPAD6 = 102;
	case VK_NUMPAD7 = 103;
	case VK_NUMPAD8 = 104;
	case VK_NUMPAD9 = 105;
	case VK_MULTIPLY = 106;
	case VK_ADD = 107;
	case VK_SEPARATOR = 108;
	case VK_SUBTRACT = 109;
	case VK_DECIMAL = 110;
	case VK_DIVIDE = 111;
	case VK_F1 = 112;
	case VK_F2 = 113;
	case VK_F3 = 114;
	case VK_F4 = 115;
	case VK_F5 = 116;
	case VK_F6 = 117;
	case VK_F7 = 118;
	case VK_F8 = 119;
	case VK_F9 = 120;
	case VK_F10 = 121;
	case VK_F11 = 122;
	case VK_F12 = 123;
	case VK_F13 = 124;
	case VK_F14 = 125;
	case VK_F15 = 126;
	case VK_F16 = 127;
	case VK_F17 = 128;
	case VK_F18 = 129;
	case VK_F19 = 130;
	case VK_F20 = 131;
	case VK_F21 = 132;
	case VK_F22 = 133;
	case VK_F23 = 134;
	case VK_F24 = 135;
	case VK_NUMLOCK = 144;
	case VK_SCROLL = 145;
	case VK_OEM_NEC_EQUAL = 146;
	case VK_OEM_FJ_JISHO = 146;
	case VK_OEM_FJ_MASSHOU = 147;
	case VK_OEM_FJ_TOUROKU = 148;
	case VK_OEM_FJ_LOYA = 149;
	case VK_OEM_FJ_ROYA = 150;
	case VK_LSHIFT = 160;
	case VK_RSHIFT = 161;
	case VK_LCONTROL = 162;
	case VK_RCONTROL = 163;
	case VK_LMENU = 164;
	case VK_RMENU = 165;
	case VK_BROWSER_BACK = 166;
	case VK_BROWSER_FORWARD = 167;
	case VK_BROWSER_REFRESH = 168;
	case VK_BROWSER_STOP = 169;
	case VK_BROWSER_SEARCH = 170;
	case VK_BROWSER_FAVORITES = 171;
	case VK_BROWSER_HOME = 172;
	case VK_VOLUME_MUTE = 173;
	case VK_VOLUME_DOWN = 174;
	case VK_VOLUME_UP = 175;
	case VK_MEDIA_NEXT_TRACK = 176;
	case VK_MEDIA_PREV_TRACK = 177;
	case VK_MEDIA_STOP = 178;
	case VK_MEDIA_PLAY_PAUSE = 179;
	case VK_LAUNCH_MAIL = 180;
	case VK_LAUNCH_MEDIA_SELECT = 181;
	case VK_LAUNCH_APP1 = 182;
	case VK_LAUNCH_APP2 = 183;
	case VK_OEM_1 = 186;
	case VK_OEM_PLUS = 187;
	case VK_OEM_COMMA = 188;
	case VK_OEM_MINUS = 189;
	case VK_OEM_PERIOD = 190;
	case VK_OEM_2 = 191;
	case VK_OEM_3 = 192;
	case VK_OEM_4 = 219;
	case VK_OEM_5 = 220;
	case VK_OEM_6 = 221;
	case VK_OEM_7 = 222;
	case VK_OEM_8 = 223;
	case VK_OEM_AX = 225;
	case VK_OEM_102 = 226;
	case VK_ICO_HELP = 227;
	case VK_ICO_00 = 228;
	case VK_PROCESSKEY = 229;
	case VK_ICO_CLEAR = 230;
	case VK_PACKET = 231;
	case VK_OEM_RESET = 233;
	case VK_OEM_JUMP = 234;
	case VK_OEM_PA1 = 235;
	case VK_OEM_PA2 = 236;
	case VK_OEM_PA3 = 237;
	case VK_OEM_WSCTRL = 238;
	case VK_OEM_CUSEL = 239;
	case VK_OEM_ATTN = 240;
	case VK_OEM_FINISH = 241;
	case VK_OEM_COPY = 242;
	case VK_OEM_AUTO = 243;
	case VK_OEM_ENLW = 244;
	case VK_OEM_BACKTAB = 245;
	case VK_ATTN = 246;
	case VK_CRSEL = 247;
	case VK_EXSEL = 248;
	case VK_EREOF = 249;
	case VK_PLAY = 250;
	case VK_ZOOM = 251;
	case VK_NONAME = 252;
	case VK_PA1 = 253;
	case VK_OEM_CLEAR = 254;
}