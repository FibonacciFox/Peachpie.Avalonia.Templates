<?php
namespace System;
/**
 */
enum ConsoleKey implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Backspace = 8;
	case Tab = 9;
	case Clear = 12;
	case Enter = 13;
	case Pause = 19;
	case Escape = 27;
	case Spacebar = 32;
	case PageUp = 33;
	case PageDown = 34;
	case End = 35;
	case Home = 36;
	case LeftArrow = 37;
	case UpArrow = 38;
	case RightArrow = 39;
	case DownArrow = 40;
	case Select = 41;
	case Print = 42;
	case Execute = 43;
	case PrintScreen = 44;
	case Insert = 45;
	case Delete = 46;
	case Help = 47;
	case D0 = 48;
	case D1 = 49;
	case D2 = 50;
	case D3 = 51;
	case D4 = 52;
	case D5 = 53;
	case D6 = 54;
	case D7 = 55;
	case D8 = 56;
	case D9 = 57;
	case A = 65;
	case B = 66;
	case C = 67;
	case D = 68;
	case E = 69;
	case F = 70;
	case G = 71;
	case H = 72;
	case I = 73;
	case J = 74;
	case K = 75;
	case L = 76;
	case M = 77;
	case N = 78;
	case O = 79;
	case P = 80;
	case Q = 81;
	case R = 82;
	case S = 83;
	case T = 84;
	case U = 85;
	case V = 86;
	case W = 87;
	case X = 88;
	case Y = 89;
	case Z = 90;
	case LeftWindows = 91;
	case RightWindows = 92;
	case Applications = 93;
	case Sleep = 95;
	case NumPad0 = 96;
	case NumPad1 = 97;
	case NumPad2 = 98;
	case NumPad3 = 99;
	case NumPad4 = 100;
	case NumPad5 = 101;
	case NumPad6 = 102;
	case NumPad7 = 103;
	case NumPad8 = 104;
	case NumPad9 = 105;
	case Multiply = 106;
	case Add = 107;
	case Separator = 108;
	case Subtract = 109;
	case Decimal = 110;
	case Divide = 111;
	case F1 = 112;
	case F2 = 113;
	case F3 = 114;
	case F4 = 115;
	case F5 = 116;
	case F6 = 117;
	case F7 = 118;
	case F8 = 119;
	case F9 = 120;
	case F10 = 121;
	case F11 = 122;
	case F12 = 123;
	case F13 = 124;
	case F14 = 125;
	case F15 = 126;
	case F16 = 127;
	case F17 = 128;
	case F18 = 129;
	case F19 = 130;
	case F20 = 131;
	case F21 = 132;
	case F22 = 133;
	case F23 = 134;
	case F24 = 135;
	case BrowserBack = 166;
	case BrowserForward = 167;
	case BrowserRefresh = 168;
	case BrowserStop = 169;
	case BrowserSearch = 170;
	case BrowserFavorites = 171;
	case BrowserHome = 172;
	case VolumeMute = 173;
	case VolumeDown = 174;
	case VolumeUp = 175;
	case MediaNext = 176;
	case MediaPrevious = 177;
	case MediaStop = 178;
	case MediaPlay = 179;
	case LaunchMail = 180;
	case LaunchMediaSelect = 181;
	case LaunchApp1 = 182;
	case LaunchApp2 = 183;
	case Oem1 = 186;
	case OemPlus = 187;
	case OemComma = 188;
	case OemMinus = 189;
	case OemPeriod = 190;
	case Oem2 = 191;
	case Oem3 = 192;
	case Oem4 = 219;
	case Oem5 = 220;
	case Oem6 = 221;
	case Oem7 = 222;
	case Oem8 = 223;
	case Oem102 = 226;
	case Process = 229;
	case Packet = 231;
	case Attention = 246;
	case CrSel = 247;
	case ExSel = 248;
	case EraseEndOfFile = 249;
	case Play = 250;
	case Zoom = 251;
	case NoName = 252;
	case Pa1 = 253;
	case OemClear = 254;
}