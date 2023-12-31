<?php
namespace System\Drawing\Printing;
/**
 */
enum PaperKind implements 
	\System\IComparable,
	\System\IFormattable,
	\System\IConvertible
{
	case Custom = 0;
	case Letter = 1;
	case LetterSmall = 2;
	case Tabloid = 3;
	case Ledger = 4;
	case Legal = 5;
	case Statement = 6;
	case Executive = 7;
	case A3 = 8;
	case A4 = 9;
	case A4Small = 10;
	case A5 = 11;
	case B4 = 12;
	case B5 = 13;
	case Folio = 14;
	case Quarto = 15;
	case Standard10x14 = 16;
	case Standard11x17 = 17;
	case Note = 18;
	case Number9Envelope = 19;
	case Number10Envelope = 20;
	case Number11Envelope = 21;
	case Number12Envelope = 22;
	case Number14Envelope = 23;
	case CSheet = 24;
	case DSheet = 25;
	case ESheet = 26;
	case DLEnvelope = 27;
	case C5Envelope = 28;
	case C3Envelope = 29;
	case C4Envelope = 30;
	case C6Envelope = 31;
	case C65Envelope = 32;
	case B4Envelope = 33;
	case B5Envelope = 34;
	case B6Envelope = 35;
	case ItalyEnvelope = 36;
	case MonarchEnvelope = 37;
	case PersonalEnvelope = 38;
	case USStandardFanfold = 39;
	case GermanStandardFanfold = 40;
	case GermanLegalFanfold = 41;
	case IsoB4 = 42;
	case JapanesePostcard = 43;
	case Standard9x11 = 44;
	case Standard10x11 = 45;
	case Standard15x11 = 46;
	case InviteEnvelope = 47;
	case LetterExtra = 50;
	case LegalExtra = 51;
	case TabloidExtra = 52;
	case A4Extra = 53;
	case LetterTransverse = 54;
	case A4Transverse = 55;
	case LetterExtraTransverse = 56;
	case APlus = 57;
	case BPlus = 58;
	case LetterPlus = 59;
	case A4Plus = 60;
	case A5Transverse = 61;
	case B5Transverse = 62;
	case A3Extra = 63;
	case A5Extra = 64;
	case B5Extra = 65;
	case A2 = 66;
	case A3Transverse = 67;
	case A3ExtraTransverse = 68;
	case JapaneseDoublePostcard = 69;
	case A6 = 70;
	case JapaneseEnvelopeKakuNumber2 = 71;
	case JapaneseEnvelopeKakuNumber3 = 72;
	case JapaneseEnvelopeChouNumber3 = 73;
	case JapaneseEnvelopeChouNumber4 = 74;
	case LetterRotated = 75;
	case A3Rotated = 76;
	case A4Rotated = 77;
	case A5Rotated = 78;
	case B4JisRotated = 79;
	case B5JisRotated = 80;
	case JapanesePostcardRotated = 81;
	case JapaneseDoublePostcardRotated = 82;
	case A6Rotated = 83;
	case JapaneseEnvelopeKakuNumber2Rotated = 84;
	case JapaneseEnvelopeKakuNumber3Rotated = 85;
	case JapaneseEnvelopeChouNumber3Rotated = 86;
	case JapaneseEnvelopeChouNumber4Rotated = 87;
	case B6Jis = 88;
	case B6JisRotated = 89;
	case Standard12x11 = 90;
	case JapaneseEnvelopeYouNumber4 = 91;
	case JapaneseEnvelopeYouNumber4Rotated = 92;
	case Prc16K = 93;
	case Prc32K = 94;
	case Prc32KBig = 95;
	case PrcEnvelopeNumber1 = 96;
	case PrcEnvelopeNumber2 = 97;
	case PrcEnvelopeNumber3 = 98;
	case PrcEnvelopeNumber4 = 99;
	case PrcEnvelopeNumber5 = 100;
	case PrcEnvelopeNumber6 = 101;
	case PrcEnvelopeNumber7 = 102;
	case PrcEnvelopeNumber8 = 103;
	case PrcEnvelopeNumber9 = 104;
	case PrcEnvelopeNumber10 = 105;
	case Prc16KRotated = 106;
	case Prc32KRotated = 107;
	case Prc32KBigRotated = 108;
	case PrcEnvelopeNumber1Rotated = 109;
	case PrcEnvelopeNumber2Rotated = 110;
	case PrcEnvelopeNumber3Rotated = 111;
	case PrcEnvelopeNumber4Rotated = 112;
	case PrcEnvelopeNumber5Rotated = 113;
	case PrcEnvelopeNumber6Rotated = 114;
	case PrcEnvelopeNumber7Rotated = 115;
	case PrcEnvelopeNumber8Rotated = 116;
	case PrcEnvelopeNumber9Rotated = 117;
	case PrcEnvelopeNumber10Rotated = 118;
}
