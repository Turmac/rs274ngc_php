<?php

/************************************************************************

Copyright 2015 Qinbo Li

This file is part of RS274NGC_PHP.

This is a National Science Foundation project . Any opinions, findings, 
and conclusions or recommendations expressed in this material are those 
of the author and do not necessarily reflect the views of the National 
Science Foundation.

This project is based on the National Institute of Standards and 
Technology (NIST) RS274NGC software.

License: GNU Public License http://www.gnu.org

*************************************************************************/


/******************* below belongs to Canon ***********************/
define("CANON_PLANE_XY", 1);
define("CANON_PLANE_YZ", 2);
define("CANON_PLANE_XZ", 3);

define("CANON_UNITS_INCHES", 1);
define("CANON_UNITS_MM", 2);
define("CANON_UNITS_CM", 3);

define("CANON_EXACT_STOP", 1);
define("CANON_EXACT_PATH", 2);
define("CANON_CONTINUOUS", 3);

define("CANON_SYNCHED", 1);
define("CANON_INDEPENDENT", 2);

define("CANON_STOPPED", 1);
define("CANON_CLOCKWISE", 2);
define("CANON_COUNTERCLOCKWISE", 3);

define("CANON_WORKPIECE", 1);
define("CANON_XYZ", 2);

define("CANON_SIDE_RIGHT", 1);
define("CANON_SIDE_LEFT", 2);
define("CANON_SIDE_OFF", 3);

define("CANON_AXIS_X", 1);
define("CANON_AXIS_Y", 2);
define("CANON_AXIS_Z", 3);
define("CANON_AXIS_A", 4);
define("CANON_AXIS_B", 5);
define("CANON_AXIS_C", 6);


class CANON_VECTOR
{
	public $x, $y, $z;
	function __construct() {}
	function __construct3(double $_x, double $_y, double $_z)
	{
		$this->x = $_x;
		$this->y = $_y;
		$this->z = $_z;
	}
}

class CANON_POSITION
{
	//function __construct() {}
	function __construct( double $_x, double $_y, double $_z )
	{
		$this->x = $_x;
		$this->y = $_y;
		$this->z = $_z;
	}
	public $x, $y, $z;
}

define("CANON_TOOL_MAX", 128);
define("CANON_TOOL_ENTRY_LEN", 256);

class CANON_TOOL_TABLE
{
	public $id, $length, $diameter;
}
/************************** Canon ended ********************************/


/***************** below belongs to rs274ngc_return ********************/
define("RS274NGC_OK", 0);
define("RS274NGC_EXIT", 1);
define("RS274NGC_EXECUTE_FINISH", 2);
define("RS274NGC_ENDFILE", 3);
define("NCE_A_FILE_IS_ALREADY_OPEN", 4);
define("NCE_ALL_AXES_MISSING_WITH_G92", 5);
define("NCE_ALL_AXES_MISSING_WITH_MOTION_CODE", 6);
define("NCE_ARC_RADIUS_TOO_SMALL_TO_REACH_END_POINT", 7);
define("NCE_ARGUMENT_TO_ACOS_OUT_OF_RANGE", 8);
define("NCE_ARGUMENT_TO_ASIN_OUT_OF_RANGE", 9);
define("NCE_ATTEMPT_TO_DIVIDE_BY_ZERO", 10);
define("NCE_ATTEMPT_TO_RAISE_NEGATIVE_TO_NON_INTEGER_POWER", 11);
define("NCE_BAD_CHARACTER_USED", 12);
define("NCE_BAD_FORMAT_UNSIGNED_INTEGER", 13);
define("NCE_BAD_NUMBER_FORMAT", 14);
define("NCE_BUG_BAD_G_CODE_MODAL_GROUP_0", 15);
define("NCE_BUG_CODE_NOT_G0_OR_G1", 16);
define("NCE_BUG_CODE_NOT_G17_G18_OR_G19", 17);
define("NCE_BUG_CODE_NOT_G20_OR_G21", 18);
define("NCE_BUG_CODE_NOT_G28_OR_G30", 19);
define("NCE_BUG_CODE_NOT_G2_OR_G3", 20);
define("NCE_BUG_CODE_NOT_G40_G41_OR_G42", 21);
define("NCE_BUG_CODE_NOT_G43_OR_G49", 22);
define("NCE_BUG_CODE_NOT_G4_G10_G28_G30_G53_OR_G92_SERIES", 23);
define("NCE_BUG_CODE_NOT_G61_G61_1_OR_G64", 24);
define("NCE_BUG_CODE_NOT_G90_OR_G91", 25);
define("NCE_BUG_CODE_NOT_G93_OR_G94", 26);
define("NCE_BUG_CODE_NOT_G98_OR_G99", 27);
define("NCE_BUG_CODE_NOT_IN_G92_SERIES", 28);
define("NCE_BUG_CODE_NOT_IN_RANGE_G54_TO_G593", 29);
define("NCE_BUG_CODE_NOT_M0_M1_M2_M30_M60", 30);
define("NCE_BUG_DISTANCE_MODE_NOT_G90_OR_G91", 31);
define("NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED", 32);
define("NCE_BUG_IN_TOOL_RADIUS_COMP", 33);
define("NCE_BUG_PLANE_NOT_XY_YZ_OR_XZ", 34);
define("NCE_BUG_SIDE_NOT_RIGHT_OR_LEFT", 35);
define("NCE_BUG_UNKNOWN_MOTION_CODE", 36);
define("NCE_BUG_UNKNOWN_OPERATION", 37);
define("NCE_CANNOT_CHANGE_AXIS_OFFSETS_WITH_CUTTER_RADIUS_COMP", 38);
define("NCE_CANNOT_CHANGE_UNITS_WITH_CUTTER_RADIUS_COMP", 39);
define("NCE_CANNOT_CREATE_BACKUP_FILE", 40);
define("NCE_CANNOT_DO_G1_WITH_ZERO_FEED_RATE", 41);
define("NCE_CANNOT_DO_ZERO_REPEATS_OF_CYCLE", 42);
define("NCE_CANNOT_MAKE_ARC_WITH_ZERO_FEED_RATE", 43);
define("NCE_CANNOT_MOVE_ROTARY_AXES_DURING_PROBING", 44);
define("NCE_CANNOT_OPEN_BACKUP_FILE", 45);
define("NCE_CANNOT_OPEN_VARIABLE_FILE", 46);
define("NCE_CANNOT_PROBE_IN_INVERSE_TIME_FEED_MODE", 47);
define("NCE_CANNOT_PROBE_WITH_CUTTER_RADIUS_COMP_ON", 48);
define("NCE_CANNOT_PROBE_WITH_ZERO_FEED_RATE", 49);
define("NCE_CANNOT_PUT_A_B_IN_CANNED_CYCLE", 50);
define("NCE_CANNOT_PUT_A_C_IN_CANNED_CYCLE", 51);
define("NCE_CANNOT_PUT_AN_A_IN_CANNED_CYCLE", 52);
define("NCE_CANNOT_TURN_CUTTER_RADIUS_COMP_ON_OUT_OF_XY_PLANE", 53);
define("NCE_CANNOT_TURN_CUTTER_RADIUS_COMP_ON_WHEN_ON", 54);
define("NCE_CANNOT_USE_A_WORD", 55);
define("NCE_CANNOT_USE_AXIS_VALUES_WITH_G80", 56);
define("NCE_CANNOT_USE_AXIS_VALUES_WITHOUT_A_G_CODE_THAT_USES_THEM", 57);
define("NCE_CANNOT_USE_B_WORD", 58);
define("NCE_CANNOT_USE_C_WORD", 59);
define("NCE_CANNOT_USE_G28_OR_G30_WITH_CUTTER_RADIUS_COMP", 60);
define("NCE_CANNOT_USE_G53_INCREMENTAL", 61);
define("NCE_CANNOT_USE_G53_WITH_CUTTER_RADIUS_COMP", 62);
define("NCE_CANNOT_USE_TWO_G_CODES_THAT_BOTH_USE_AXIS_VALUES", 63);
define("NCE_CANNOT_USE_XZ_PLANE_WITH_CUTTER_RADIUS_COMP", 64);
define("NCE_CANNOT_USE_YZ_PLANE_WITH_CUTTER_RADIUS_COMP", 65);
define("NCE_COMMAND_TOO_LONG", 66);
define("NCE_CONCAVE_CORNER_WITH_CUTTER_RADIUS_COMP", 67);
define("NCE_COORDINATE_SYSTEM_INDEX_PARAMETER_5220_OUT_OF_RANGE", 68);
define("NCE_CURRENT_POINT_SAME_AS_END_POINT_OF_ARC", 69);
define("NCE_CUTTER_GOUGING_WITH_CUTTER_RADIUS_COMP", 70);
define("NCE_D_WORD_WITH_NO_G41_OR_G42", 71);
define("NCE_DWELL_TIME_MISSING_WITH_G4", 72);
define("NCE_DWELL_TIME_P_WORD_MISSING_WITH_G82", 73);
define("NCE_DWELL_TIME_P_WORD_MISSING_WITH_G86", 74);
define("NCE_DWELL_TIME_P_WORD_MISSING_WITH_G88", 75);
define("NCE_DWELL_TIME_P_WORD_MISSING_WITH_G89", 76);
define("NCE_EQUAL_SIGN_MISSING_IN_PARAMETER_SETTING", 77);
define("NCE_F_WORD_MISSING_WITH_INVERSE_TIME_ARC_MOVE", 78);
define("NCE_F_WORD_MISSING_WITH_INVERSE_TIME_G1_MOVE", 79);
define("NCE_FILE_ENDED_WITH_NO_PERCENT_SIGN", 80);
define("NCE_FILE_ENDED_WITH_NO_PERCENT_SIGN_OR_PROGRAM_END", 81);
define("NCE_FILE_NAME_TOO_LONG", 82);
define("NCE_FILE_NOT_OPEN", 83);
define("NCE_G_CODE_OUT_OF_RANGE", 84);
define("NCE_H_WORD_WITH_NO_G43", 85);
define("NCE_I_WORD_GIVEN_FOR_ARC_IN_YZ_PLANE", 86);
define("NCE_I_WORD_MISSING_WITH_G87", 87);
define("NCE_I_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT", 88);
define("NCE_J_WORD_GIVEN_FOR_ARC_IN_XZ_PLANE", 89);
define("NCE_J_WORD_MISSING_WITH_G87", 90);
define("NCE_J_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT", 91);
define("NCE_K_WORD_GIVEN_FOR_ARC_IN_XY_PLANE", 92);
define("NCE_K_WORD_MISSING_WITH_G87", 93);
define("NCE_K_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT", 94);
define("NCE_L_WORD_WITH_NO_CANNED_CYCLE_OR_G10", 95);
define("NCE_LEFT_BRACKET_MISSING_AFTER_SLASH_WITH_ATAN", 96);
define("NCE_LEFT_BRACKET_MISSING_AFTER_UNARY_OPERATION_NAME", 97);
define("NCE_LINE_NUMBER_GREATER_THAN_99999", 98);
define("NCE_LINE_WITH_G10_DOES_NOT_HAVE_L2", 99);
define("NCE_M_CODE_GREATER_THAN_99", 100);
define("NCE_MIXED_RADIUS_IJK_FORMAT_FOR_ARC", 101);
define("NCE_MULTIPLE_A_WORDS_ON_ONE_LINE", 102);
define("NCE_MULTIPLE_B_WORDS_ON_ONE_LINE", 103);
define("NCE_MULTIPLE_C_WORDS_ON_ONE_LINE", 104);
define("NCE_MULTIPLE_D_WORDS_ON_ONE_LINE", 105);
define("NCE_MULTIPLE_F_WORDS_ON_ONE_LINE", 106);
define("NCE_MULTIPLE_H_WORDS_ON_ONE_LINE", 107);
define("NCE_MULTIPLE_I_WORDS_ON_ONE_LINE", 108);
define("NCE_MULTIPLE_J_WORDS_ON_ONE_LINE", 109);
define("NCE_MULTIPLE_K_WORDS_ON_ONE_LINE", 110);
define("NCE_MULTIPLE_L_WORDS_ON_ONE_LINE", 111);
define("NCE_MULTIPLE_P_WORDS_ON_ONE_LINE", 112);
define("NCE_MULTIPLE_Q_WORDS_ON_ONE_LINE", 113);
define("NCE_MULTIPLE_R_WORDS_ON_ONE_LINE", 114);
define("NCE_MULTIPLE_S_WORDS_ON_ONE_LINE", 115);
define("NCE_MULTIPLE_T_WORDS_ON_ONE_LINE", 116);
define("NCE_MULTIPLE_X_WORDS_ON_ONE_LINE", 117);
define("NCE_MULTIPLE_Y_WORDS_ON_ONE_LINE", 118);
define("NCE_MULTIPLE_Z_WORDS_ON_ONE_LINE", 119);
define("NCE_MUST_USE_G0_OR_G1_WITH_G53", 120);
define("NCE_NEGATIVE_ARGUMENT_TO_SQRT", 121);
define("NCE_NEGATIVE_D_WORD_TOOL_RADIUS_INDEX_USED", 122);
define("NCE_NEGATIVE_F_WORD_USED", 123);
define("NCE_NEGATIVE_G_CODE_USED", 124);
define("NCE_NEGATIVE_H_WORD_TOOL_LENGTH_OFFSET_INDEX_USED", 125);
define("NCE_NEGATIVE_L_WORD_USED", 126);
define("NCE_NEGATIVE_M_CODE_USED", 127);
define("NCE_NEGATIVE_OR_ZERO_Q_VALUE_USED", 128);
define("NCE_NEGATIVE_P_WORD_USED", 129);
define("NCE_NEGATIVE_SPINDLE_SPEED_USED", 130);
define("NCE_NEGATIVE_TOOL_ID_USED", 131);
define("NCE_NESTED_COMMENT_FOUND", 132);
define("NCE_NO_CHARACTERS_FOUND_IN_READING_REAL_VALUE", 133);
define("NCE_NO_DIGITS_FOUND_WHERE_REAL_NUMBER_SHOULD_BE", 134);
define("NCE_NON_INTEGER_VALUE_FOR_INTEGER", 135);
define("NCE_NULL_MISSING_AFTER_NEWLINE", 136);
define("NCE_OFFSET_INDEX_MISSING", 137);
define("NCE_P_VALUE_NOT_AN_INTEGER_WITH_G10_L2", 138);
define("NCE_P_VALUE_OUT_OF_RANGE_WITH_G10_L2", 139);
define("NCE_P_WORD_WITH_NO_G4_G10_G82_G86_G88_G89", 140);
define("NCE_PARAMETER_FILE_OUT_OF_ORDER", 141);
define("NCE_PARAMETER_NUMBER_OUT_OF_RANGE", 142);
define("NCE_Q_WORD_MISSING_WITH_G83", 143);
define("NCE_Q_WORD_WITH_NO_G83", 144);
define("NCE_QUEUE_IS_NOT_EMPTY_AFTER_PROBING", 145);
define("NCE_R_CLEARANCE_PLANE_UNSPECIFIED_IN_CYCLE", 146);
define("NCE_R_I_J_K_WORDS_ALL_MISSING_FOR_ARC", 147);
define("NCE_R_LESS_THAN_X_IN_CYCLE_IN_YZ_PLANE", 148);
define("NCE_R_LESS_THAN_Y_IN_CYCLE_IN_XZ_PLANE", 149);
define("NCE_R_LESS_THAN_Z_IN_CYCLE_IN_XY_PLANE", 150);
define("NCE_R_WORD_WITH_NO_G_CODE_THAT_USES_IT", 151);
define("NCE_RADIUS_TO_END_OF_ARC_DIFFERS_FROM_RADIUS_TO_START", 152);
define("NCE_RADIUS_TOO_SMALL_TO_REACH_END_POINT", 153);
define("NCE_REQUIRED_PARAMETER_MISSING", 154);
define("NCE_SELECTED_TOOL_SLOT_NUMBER_TOO_LARGE", 155);
define("NCE_SLASH_MISSING_AFTER_FIRST_ATAN_ARGUMENT", 156);
define("NCE_SPINDLE_NOT_TURNING_CLOCKWISE_IN_G84", 157);
define("NCE_SPINDLE_NOT_TURNING_IN_G86", 158);
define("NCE_SPINDLE_NOT_TURNING_IN_G87", 159);
define("NCE_SPINDLE_NOT_TURNING_IN_G88", 160);
define("NCE_SSCANF_FAILED", 161);
define("NCE_START_POINT_TOO_CLOSE_TO_PROBE_POINT", 162);
define("NCE_TOO_MANY_M_CODES_ON_LINE", 163);
define("NCE_TOOL_LENGTH_OFFSET_INDEX_TOO_BIG", 164);
define("NCE_TOOL_MAX_TOO_LARGE", 165);
define("NCE_TOOL_RADIUS_INDEX_TOO_BIG", 166);
define("NCE_TOOL_RADIUS_NOT_LESS_THAN_ARC_RADIUS_WITH_COMP", 167);
define("NCE_TWO_G_CODES_USED_FROM_SAME_MODAL_GROUP", 168);
define("NCE_TWO_M_CODES_USED_FROM_SAME_MODAL_GROUP", 169);
define("NCE_UNABLE_TO_OPEN_FILE", 170);
define("NCE_UNCLOSED_COMMENT_FOUND", 171);
define("NCE_UNCLOSED_EXPRESSION", 172);
define("NCE_UNKNOWN_G_CODE_USED", 173);
define("NCE_UNKNOWN_M_CODE_USED", 174);
define("NCE_UNKNOWN_OPERATION", 175);
define("NCE_UNKNOWN_OPERATION_NAME_STARTING_WITH_A", 176);
define("NCE_UNKNOWN_OPERATION_NAME_STARTING_WITH_M", 177);
define("NCE_UNKNOWN_OPERATION_NAME_STARTING_WITH_O", 178);
define("NCE_UNKNOWN_OPERATION_NAME_STARTING_WITH_X", 179);
define("NCE_UNKNOWN_WORD_STARTING_WITH_A", 180);
define("NCE_UNKNOWN_WORD_STARTING_WITH_C", 181);
define("NCE_UNKNOWN_WORD_STARTING_WITH_E", 182);
define("NCE_UNKNOWN_WORD_STARTING_WITH_F", 183);
define("NCE_UNKNOWN_WORD_STARTING_WITH_L", 184);
define("NCE_UNKNOWN_WORD_STARTING_WITH_R", 185);
define("NCE_UNKNOWN_WORD_STARTING_WITH_S", 186);
define("NCE_UNKNOWN_WORD_STARTING_WITH_T", 187);
define("NCE_UNKNOWN_WORD_WHERE_UNARY_OPERATION_COULD_BE", 188);
define("NCE_X_AND_Y_WORDS_MISSING_FOR_ARC_IN_XY_PLANE", 189);
define("NCE_X_AND_Z_WORDS_MISSING_FOR_ARC_IN_XZ_PLANE", 190);
define("NCE_X_VALUE_UNSPECIFIED_IN_YZ_PLANE_CANNED_CYCLE", 191);
define("NCE_X_Y_AND_Z_WORDS_ALL_MISSING_WITH_G38_2", 192);
define("NCE_Y_AND_Z_WORDS_MISSING_FOR_ARC_IN_YZ_PLANE", 193);
define("NCE_Y_VALUE_UNSPECIFIED_IN_XZ_PLANE_CANNED_CYCLE", 194);
define("NCE_Z_VALUE_UNSPECIFIED_IN_XY_PLANE_CANNED_CYCLE", 195);
define("NCE_ZERO_OR_NEGATIVE_ARGUMENT_TO_LN", 196);
define("NCE_ZERO_RADIUS_ARC", 197);

define("RS274NGC_MIN_ERROR", 3);
define("RS274NGC_MAX_ERROR", 197);
/*********************** rs274ngc_return ended *************************/

/******************** below belongs to rs274ngc ************************/
define("RS274NGC_TEXT_SIZE", 256);


define("TOLERANCE_INCH", 0.0002);
define("TOLERANCE_MM", 0.002);
define("TOLERANCE_CONCAVE_CORNER", 0.01);

define("TINY", 0.00000001);
define("UNKNOWN",0.0000000001);

define("RS274NGC_ACTIVE_G_CODES", 12);
define("RS274NGC_ACTIVE_M_CODES", 7);
define("RS274NGC_ACTIVE_SETTINGS", 3);

define("MAX_EMS", 4);

define("MM_PER_INCH", 25.4);
define("INCH_PER_MM", 0.039370078740157477);

define("OFF", 0);
define("ON", 1);

define("UNITS_PER_MINUTE", 0);
define("INVERSE_TIME", 1);

define("RIGHT", 1);
define("LEFT", 2);

define("RS274NGC_MAX_PARAMETERS", 5400);

define("ABS", 1);
define("ACOS", 2);
define("ASIN", 3);
define("ATAN", 4);
define("COS", 5);
define("EXP", 6);
define("FIX", 7);
define("FUP", 8);
define("LN", 9);
define("ROUND", 10);
define("SIN", 11);
define("SQRT", 12);
define("TAN", 13);

define("NO_OPERATION", 0);
define("DIVIDED_BY",1 );
define("MODULO", 2);
define("POWER", 3);
define("TIMES", 4);
define("AND2", 5);
define("EXCLUSIVE_OR", 6);
define("MINUS", 7);
define("NON_EXCLUSIVE_OR", 8);
define("PLUS", 9);
define("RIGHT_BRACKET", 10);

define("G_0",      0);
define("G_1",     10);
define("G_2",     20);
define("G_3",     30);
define("G_4",     40);
define("G_10",   100);
define("G_17",   170);
define("G_18",   180);
define("G_19",   190);
define("G_20",   200);
define("G_21",   210);
define("G_28",   280);
define("G_30",   300);
define("G_38_2", 382);
define("G_40",   400);
define("G_41",   410);
define("G_42",   420);
define("G_43",   430);
define("G_49",   490);
define("G_53",   530);
define("G_54",   540);
define("G_55",   550);
define("G_56",   560);
define("G_57",   570);
define("G_58",   580);
define("G_59",   590);
define("G_59_1", 591);
define("G_59_2", 592);
define("G_59_3", 593);
define("G_61",   610);
define("G_61_1", 611);
define("G_64",   640);
define("G_80",   800);
define("G_81",   810);
define("G_82",   820);
define("G_83",   830);
define("G_84",   840);
define("G_85",   850);
define("G_86",   860);
define("G_87",   870);
define("G_88",   880);
define("G_89",   890);
define("G_90",   900);
define("G_91",   910);
define("G_92",   920);
define("G_92_1", 921);
define("G_92_2", 922);
define("G_92_3", 923);
define("G_93",   930);
define("G_94",   940);
define("G_98",   980);
define("G_99",   990);

define("MODE_ABSOLUTE", 0);
define("MODE_INCREMENTAL", 1);

define("R_PLANE", 0);
define("OLD_Z", 1);

define("G83_RAPID_DELTA", 0.01);

class block
{
	public $comment;
	public $d_number;
	public $f_number;
	public $g_modes = Array();
	public $h_number;
	public $i_flag;
	public $i_number;
	public $j_flag;
	public $j_number;
	public $k_flag;
	public $k_number;
	public $l_number;
	public $line_number;
	public $motion_to_be;
	public $m_count;
	public $m_modes = Array();
	public $p_number;
	public $q_number;
	public $r_flag;
	public $r_number;
	public $s_number;
	public $t_number;
	public $x_flag;
	public $x_number;
	public $y_flag;
	public $y_number;
	public $Z_flag;
	public $Z_number;
}

class setup
{
	public function __construct()
	{
		$this->block1 = new block();
	}
	
	public function show_status()
	{
		echo "Block info:<br/>";
		echo "	Line_number:".$this->block1->line_number."<br/>";
		echo "	Comment:".$this->block1->comment."<br/>";
		echo "	d_number:".$this->block1->d_number."<br/>";
		echo "	f_number:".$this->block1->f_number."<br/>";
		echo "	g_modes:";
		for( $i = 0; $i < 14; $i++ )
			echo " ".$this->block1->g_modes[$i];
		echo "<br/>";
		echo "	h_number:".$this->block1->h_number."<br/>";
		echo "	i_flag:".$this->block1->i_flag."<br/>";
		echo "	j_flag:".$this->block1->j_flag."<br/>";
		echo "	k_flag:".$this->block1->k_flag."<br/>";
		echo "	l_number:".$this->block1->l_number."<br/>";
		echo "	motion_to_be:".$this->block1->motion_to_be."<br/>";
		echo "	m_count:".$this->block1->m_count."<br/>";
		echo "m_modes:";
		for( $i = 0; $i < 10; $i++ )
			echo " ".$this->block1->m_modes[$i];
		echo "<br/>";
		echo "	p_number:".$this->block1->p_number."<br/>";
		echo "	q_number:".$this->block1->q_number."<br/>";
		echo "	r_flag:".$this->block1->r_flag."<br/>";
		echo "	s_number:".$this->block1->s_number."<br/>";
		echo "	t_number:".$this->block1->t_number."<br/>";
		echo "	x_flag:".$this->block1->x_flag."<br/>";
		if( $this->block1->x_flag == 1 )
			echo "	x_number:".$this->block1->x_number."<br/>";
		echo "	y_flag:".$this->block1->y_flag."<br/>";
		if( $this->block1->y_flag == 1 )
			echo "	y_number:".$this->block1->y_number."<br/>";
		echo "	z_flag:".$this->block1->z_flag."<br/>";
		if( $this->block1->z_flag == 1 )
			echo "	z_number:".$this->block1->z_number."<br/>";
		echo "<br/><br/>";
	}
	
	public function tostring()
	{
		$ret = "line_number:".$this->block1->line_number.";";
		if( $this->length_units == CANON_UNITS_MM ) {
			$ret = $ret."x:".($this->current_x/25.4).";";
			$ret = $ret."y:".($this->current_y/25.4).";";
			$ret = $ret."z:".($this->current_z/25.4).";";
		}
		else {
			$ret = $ret."x:".$this->current_x.";";
			$ret = $ret."y:".$this->current_y.";";
			$ret = $ret."z:".$this->current_z.";";
		}
		$ret = $ret."distance:".$this->distance_mode.";";
		$ret = $ret."length_units:".$this->length_units.";";
		$ret = $ret."feed_mode:".$this->feed_mode.";";
		$ret = $ret."feed_rate:".$this->feed_rate.";";
		$ret = $ret."motion_mode:".$this->motion_mode.";";
		$ret = $ret."speed:".$this->speed.";";
		$ret = $ret."spindle:".$this->spindle_turning.";";
		$ret = $ret."coolant:".$this->mist.";";
		$ret = $ret."tool:".$this->selected_tool_slot.";#";
		return $ret;
	}
	
	public $active_g_codes = Array();
	public $active_m_codes = Array();
	public $active_settings = Array();

	public $xis_offset_x;                                // X-axis g92 offset
    public $axis_offset_y;                               // Y-axis g92 offset
    public $axis_offset_z;                               // Z-axis g92 offset
    public $block1;                                      // parsed next block
    public $blocktext;                                   // linetext downcased, white space gone
    public $control_mode;                                // exact path or cutting mode
    public $current_slot;                                // carousel slot number of current tool
    public $current_x;                                   // current X-axis position
    public $current_y;                                   // current Y-axis position
    public $current_z;                                   // current Z-axis position
    public $cutter_comp_radius;                          // current cutter compensation radius
    public $cutter_comp_side;                            // current cutter compensation side
    public $cycle_cc;                                    // cc-value (normal) for canned cycles
    public $cycle_i;                                     // i-value for canned cycles
    public $cycle_j;                                     // j-value for canned cycles
    public $cycle_k;                                     // k-value for canned cycles
    public $cycle_l;                                     // l-value for canned cycles
    public $cycle_p;                                     // p-value (dwell) for canned cycles
    public $cycle_q;                                     // q-value for canned cycles
    public $cycle_r;                                     // r-value for canned cycles
    public $distance_mode;                               // absolute or incremental
    public $feed_mode;                                   // G_93 (inverse time) or G_94 units/min
    public $feed_override;                               // whether feed override is enabled
    public $feed_rate;                                   // feed rate in current units/min
    //$filename;                                  // name of currently open NC code file
    //$file_pointer;                              // file pointer for open NC code file
    public $flood;                                       // whether flood coolant is on
    public $length_offset_index;                         // for use with tool length offsets
    public $length_units;                                // millimeters or inches
    public $line_length;                                 // length of line last read
    public $linetext;                                    // text of most recent line read
    public $mist;                                        // whether mist coolant is on
    public $motion_mode;                                 // active G-code for motion
    public $origin_index;                                // active origin (1=G54 to 9=G59.3)
    public $origin_offset_x;                             // origin offset x
    public $origin_offset_y;                             // origin offset y
    public $origin_offset_z;                             // origin offset z
    public $parameters = Array();                        // system parameters
    public $parameter_occurrence;                        // parameter buffer index
    public $parameter_numbers = Array();                 // parameter number buffer
    public $parameter_values = Array();                  // parameter value buffer
    public $percent_flag;                                // ON means first line was percent sign
    public $plane;                                       // active plane, XY-, YZ-, or XZ-plane
    public $probe_flag;                                  // flag indicating probing done
    public $program_x;                                   // program x, used when cutter comp on
    public $program_y;                                   // program y, used when cutter comp on
    public $retract_mode;                                // for cycles, old_z or r_plane
    public $selected_tool_slot;                          // tool slot selected but not active
    public $sequence_number;                             // sequence number of line last read
    public $speed;                                       // current spindle speed in rpm
    public $speed_feed_mode;                             // independent or synched
    public $speed_override;                              // whether speed override is enabled
    public $spindle_turning;                             // direction spindle is turning
    public $stack = Array();                             // stack of calls for error reporting
    public $stack_index;                                 // index into the stack
    public $tool_length_offset;                          // current tool length offset
    public $tool_max;                                    // highest number tool slot in carousel
    public $tool_table = Array();                        // index is slot number
    public $tool_table_index;                            // tool index used with cutter comp
    public $traverse_rate;                               // rate for traverse motions
}
/*************************** rs274ngc ended ****************************/


class Rs274ngcModel extends CI_Model
{
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
		
		// initialize variable of CANON
		$this->_active_plane = CANON_PLANE_XY;
		$this->_active_slot = 1;
		$this->_feed_rate = 0.0;
		$this->_flood = 0;
		$this->_length_unit_factor = 1; /* 1 for MM 25.4 for inch */
		$this->_length_unit_type = CANON_UNITS_MM;
		$this->_line_number = 1;
		$this->_mist = 0;
		$this->_motion_mode = CANON_CONTINUOUS; /*Not static.Driver writes*/
		$this->_parameter_file_name = "";

		$this->_probe_position_x = 0;
		$this->_probe_position_y = 0;
		$this->_probe_position_z = 0;

		$this->_program_origin_x = 0;
		$this->_program_origin_y = 0;
		$this->_program_origin_z = 0;

		$this->_program_position_x = 0;
		$this->_program_position_y = 0;
		$this->_program_position_z = 0;
		$this->_spindle_speed = 0;
		$this->_spindle_turning = 0;
		$this->_tool_max = 68;          /*Not static. Driver reads  */
		$this->_tools = Array();  /*Not static. Driver writes */
		for( $i = 0; $i <= $this->_tool_max; $i++ )
		{
			$this->_tools[$i] = new CANON_TOOL_TABLE();
			$this->_tools[$i]->id = $i;
			$this->_tools[$i]->length = 0;
			$this->_tools[$i]->diameter = 0;
		}
		$this->_traverse_rate = 0;
		// end of initializing variable of CANON
		
		// initialize variable of rs274ngc
		$this->_setup = new setup();
		$this->rs274ngc_init();
		// end of initializing variable of rs274ngc
		
		$this->return_msg = "interpreter start<br/>";
		$this->trajectory = Array(
			Array(0,0,0,0),
		);
    }
	
	function interpret( $code_arr )
	{
		for( $i=0; $i<count($code_arr); $i++ )
		{
			$this->return_msg = $this->return_msg.$code_arr[$i]."<br/>";
			$status = $this->rs274ngc_read($code_arr[$i]);
			if ( $status == RS274NGC_EXECUTE_FINISH );
			else if( $status != RS274NGC_EXECUTE_FINISH && $status != RS274NGC_OK )
			{
				$this->return_msg =  $this->return_msg."Error! Code: ".$this->_rs274ngc_errors[$status]."<br/>";
				for( $i = 0; $i < $this->_setup->stack_index; $i++ )
				{
					$this->return_msg =  $this->return_msg."->".$this->_setup->stack[$i];
				}
				$this->return_msg =  $this->return_msg."<br/>";
				return  Array($this->return_msg,$this->trajectory,$status,$this->machine_state,$this->_rs274ngc_errors[$status]);
			}
			else
			{
				$x = $this->_setup->current_x;
				$y = $this->_setup->current_y;
				$z = $this->_setup->current_z;
				$status = $this->rs274ngc_execute();
				$x2 = $this->_setup->current_x;
				$y2 = $this->_setup->current_y;
				$z2 = $this->_setup->current_z;
				$flag = 0;
				$torlance = 0.001;
				if( abs($x-$x2) > $torlance 
				|| abs($y-$y2) > $torlance
				|| ( !($z>=0&&$z2>=0) && (abs($z-$z2)>$torlance) ) )
					$flag = 1;
				if( $flag == 1 
				|| $this->_setup->motion_mode == 10 
				|| $this->_setup->motion_mode == 20 
				|| $this->_setup->motion_mode == 30 
				|| $this->_setup->motion_mode == 830
				|| $status == RS274NGC_EXIT	) {
					$machine_state_index = count( $this->machine_state );
					$this->machine_state[$machine_state_index] = $this->_setup->tostring();
				}
				//$this->machine_state[$machine_state_index]->show_status();
				if( $status == RS274NGC_EXIT )
					break;
				else if( $status == RS274NGC_EXECUTE_FINISH );
				else if( $status != RS274NGC_OK )
				{
					$this->return_msg =  $this->return_msg."Error! Code: ".$this->_rs274ngc_errors[$status]."<br/>";
					for( $i = 0; $i < $this->_setup->stack_index; $i++ )
					{
						$this->return_msg =  $this->return_msg."->".$this->_setup->stack[$i];
					}
					$this->return_msg =  $this->return_msg."<br/>";
					return  Array($this->return_msg,$this->trajectory,$status,$this->machine_state,$this->_rs274ngc_errors[$status]);
				}
			}
			//$this->return_msg = $this->return_msg."<br/>";
		}
		
		$this->return_msg = $this->return_msg."exit with status ".$status."<br/>";
		
		return Array($this->return_msg,$this->trajectory,$status,$this->machine_state);
	}

/********************** functions of rs274ngc **************************/
	/*	report error
		This function is called whenever an error found. (i.e. this function is the source of the error.)
	*/
	private function report_error($function_name)
	{
		$this->_setup->stack_index = 0;
		$this->_setup->stack[$this->_setup->stack_index] = $function_name;
		$this->_setup->stack_index = $this->_setup->stack_index+1;
		$this->_setup->stack[$this->_setup->stack_index] = 0;
	}

	/*	pass_error
		When a function call another function and get an error, this function pass the error. (i.e. this function is not the source of the error.)
	*/
	private function pass_error($function_name)
	{
		if( $this->_setup->stack_index < 49 )
		{
			$this->_setup->stack[$this->_setup->stack_index] = $function_name;
			$this->_setup->stack_index = $this->_setup->stack_index + 1;
			$this->_setup->stack[$this->_setup->stack_index] = 0;
		}
	}
	
	private function rs274ngc_init()
	{
		$function_name = "rs274ngc_init";
		$status = 0;
		
		$this->_setup->length_units = CANON_UNITS_MM;
		for( $k = 0; $k < RS274NGC_MAX_PARAMETERS; $k++ )
		{
			$this->_setup->parameter[$k] = 0;
		}
		$this->_setup->parameter[5220] = 1;
		
		$this->_setup->origin_index = (int)($this->_setup->parameter[5220]+0.0001);
		if( $this->_setup->origin_index < 1 || $this->_setup->origin_index > 9 )
		{
			$this->report_error($function_name);
			return NCE_COORDINATE_SYSTEM_INDEX_PARAMETER_5220_OUT_OF_RANGE;
		}
		
		$k = (5200 + $this->_setup->origin_index*20);
		////SET_ORIGIN_OFFSETS( $_setup->parameter[$k+1]+$_setup->parameter[5211],
		////					$_setup->parameter[$k+2]+$_setup->parameter[5212],
		////					$_setup->parameter[$k+3]+$_setup->parameter[5213] );
		
		////SET_FEED_REFERENCE(CANON_XYZ);
		
		$this->_setup->axis_offset_x = $this->_setup->parameter[5211];
		$this->_setup->axis_offset_y = $this->_setup->parameter[5212];
		$this->_setup->axis_offset_z = $this->_setup->parameter[5213];
		
		$this->_setup->cutter_comp_side = 0;
		//_setup->cycle values do not need initialization
		$this->_setup->distance_mode = MODE_ABSOLUTE;
		$this->_setup->feed_mode = UNITS_PER_MINUTE;
		$this->_setup->feed_override = 1;
		//_setup->feed_rate set in rs274ngc_synch
		//$_setup->filename = 0;
		//$_setup->file_pointer = NULL;
		//_setup->flood set in rs274ngc_synch
		$this->_setup->length_offset_index = 1;
		//_setup->length_units set in rs274ngc_synch
		$this->_setup->line_length = 0;
		$this->_setup->linetext = "";
		//_setup->mist set in rs274ngc_synch
		$this->_setup->motion_mode = G_80;
		//_setup.origin_index set above
		$this->_setup->origin_offset_x = $this->_setup->parameter[$k + 1];
		$this->_setup->origin_offset_y = $this->_setup->parameter[$k + 2];
		$this->_setup->origin_offset_z = $this->_setup->parameter[$k + 3];
		//_setup.parameters set above
		//_setup.parameter_occurrence does not need initialization
		//_setup.parameter_numbers does not need initialization
		//_setup.parameter_values does not need initialization
		//_setup.percent_flag does not need initialization
		//_setup.plane set in rs274ngc_synch
		$this->_setup->probe_flag = 0;
		$this->_setup->program_x = UNKNOWN;          /* for cutter comp */
		$this->_setup->program_y = UNKNOWN;          /* for cutter comp */
		//_setup.retract_mode does not need initialization
		//_setup.selected_tool_slot set in rs274ngc_synch
		$this->_setup->sequence_number = 0;          /*DOES THIS NEED TO BE AT TOP? */
		//_setup.speed set in rs274ngc_synch
		$this->_setup->speed_feed_mode = CANON_INDEPENDENT;
		$this->_setup->speed_override = 1;
		//_setup.spindle_turning set in rs274ngc_synch
		//_setup.stack does not need initialization
		//_setup.stack_index does not need initialization
		$this->_setup->tool_length_offset = 0.0;
		//_setup.tool_max set in rs274ngc_synch
		//_setup.tool_table set in rs274ngc_synch
		$this->_setup->tool_table_index = 1;
		//_setup.traverse_rate set in rs274ngc_synch

		//write_g_codes((block_pointer)NULL, &_setup);
		//write_m_codes((block_pointer)NULL, &_setup);
		//write_settings(&_setup);

		// Synch rest of settings to external world
		$this->rs274ngc_synch(); //need to be done

		return RS274NGC_OK;
	}
	
	function rs274ngc_load_tool_table()
	{
		$function_name = "rs274ngc_load_tool_table";
		
		if( $this->_setup->tool_max > CANON_TOOL_MAX )
		{
			$this->report_error( $function_name );
			return NCE_TOOL_MAX_TOO_LARGE;
		}
		
		for( $n = 0; $n <= $this->_setup->tool_max; $n++ )
		{
			$this->_setup->tool_table[$n] = $this->GET_EXTERNAL_TOOL_TABLE($n);
		}
		for( ; $n <= CANON_TOOL_MAX; $n++ )
		{
			$this->_setup->tool_table[$n] = new CANON_TOOL_TABLE();
			$this->_setup->tool_table[$n]->id = 0;
			$this->_setup->tool_table[$n]->length = 0;
			$this->_setup->tool_table[$n]->diameter = 0;
		}
		
		return RS274NGC_OK;
	}


	function rs274ngc_synch()
	{	
		$this->_setup->control_mode = $this->GET_EXTERNAL_MOTION_CONTROL_MODE();

		$this->_setup->current_slot = $this->GET_EXTERNAL_TOOL_SLOT();
		$this->_setup->current_x = $this->GET_EXTERNAL_POSITION_X();
		$this->_setup->current_y = $this->GET_EXTERNAL_POSITION_Y();
		$this->_setup->current_z = $this->GET_EXTERNAL_POSITION_Z();
		$this->_setup->feed_rate = $this->GET_EXTERNAL_FEED_RATE();
		$this->_setup->flood = ($this->GET_EXTERNAL_FLOOD() != 0) ? 1 : 0;
		$this->_setup->length_units = $this->GET_EXTERNAL_LENGTH_UNIT_TYPE();
		$this->_setup->mist = ($this->GET_EXTERNAL_MIST() != 0) ? 1 : 0;
		$this->_setup->plane = $this->GET_EXTERNAL_PLANE();
		$this->_setup->selected_tool_slot = $this->GET_EXTERNAL_TOOL_SLOT();
		$this->_setup->speed = $this->GET_EXTERNAL_SPEED();
		$this->_setup->spindle_turning = $this->GET_EXTERNAL_SPINDLE();
		$this->_setup->tool_max = $this->GET_EXTERNAL_TOOL_MAX();
		$this->_setup->traverse_rate = $this->GET_EXTERNAL_TRAVERSE_RATE();

		$this->rs274ngc_load_tool_table();               //  must set  _setup.tool_max first

		return RS274NGC_OK;
	}


	/*	check_closed
		If any errors occur, this returns the error code.
		Otherwise, it returns RS274NGC_OK.
		Errors:
			1. A left parenthesis is found inside a comment: NCE_NESTED_COMMENT_FOUND
			2. The line ends before an open comment is closed: NCE_UNCLOSED_COMMENT_FOUND
			
		Called by: read_text
		
		Comments are left unchanged in place. Comments are anything
		enclosed in parentheses. Nested comments, indicated by a left
		parenthesis inside a comment, are illegal.

		Although this software system detects and rejects all illegal characters
		and illegal syntax, this particular function does not detect problems
		with anything but comments.
	*/
	function check_closed($command)
	{
		$comment = 0;
		$function_name = "check_closed";
		
		for( $i = 0; $i < strlen($command); $i++ )
		{
			if( $comment == 1 )
			{
				if( strcmp($command[$i],'(') == 0 )
				{
					$this->report_error($function_name);
					return NCE_NESTED_COMMENT_FOUND;
				}
				else if( strcmp($command[$i],')') == 0 )
					$comment = 0;
			}
			else if( strcmp($command[$i],'(') == 0 )
				$comment = 1;
		}
		
		if( $comment == 1 )
		{
			$this->report_error($function_name);
			return NCE_UNCLOSED_COMMENT_FOUND;
		}
		
		return RS274NGC_OK;
	}

	/*	remove_comment
		This function removes comment in the line of code.
		
		Assumption: Check if the comment if closed has been done.
		Called by: read_text
		Side effects: the comment in the code is removed.
	*/
	function remove_comment($command)
	{
		$comment = 0;
		$newCommand = Array();
		for( $i = 0, $j = 0; $i < strlen($command); $i++ )
		{
			if( $comment == 1 ) {
				if( strcmp($command[$i],')') == 0 )
					$comment = 0;
			}
			else if( strcmp($command[$i],'(') == 0 ) {
				$comment = 1;
			}
			else {
				$newCommand[$j] = $command[$i];
				$j = $j + 1;
			}
		}
		$command = implode( "", $newCommand );
		return $command;
	}

	/*	remove_space
		This function removes space in the line of code.
		Called by: read_text
		Side effects: the space in the code is removed.
	*/
	function remove_space( $command )
	{
		$command = str_replace( " ", "", $command );
		return $command;
	}


	/*	read_text
		If close_and_downcase returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code.
		Otherwise, this returns:
			a. RS274NGC_EXECUTE_FINISH if the first character of the close_and_downcase line is a slash, and
			b. RS274NGC_OK otherwise.
		
		Called by: rs274ngc_read

	*/
	function read_text( &$command )
	{
		$command = trim($command);
		$command = strtolower($command);
		$function_name = "read_text";
		
		if( strlen($command) >= RS274NGC_TEXT_SIZE )
		{
			$this->report_error( $function_name );
			return NCE_COMMAND_TOO_LONG;
		}
			
		$status = $this->check_closed($command);
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		$command = $this->remove_comment($command);
		$command = $this->remove_space($command);
		
		$this->_setup->linetext = $command;
		$this->_setup->blocktext = $command;
		$this->_setup->sequence_number = $this->_setup->sequence_number+1;
		$this->_setup->parameter_occurrence = 0;     /* initialize parameter buffer */
		
		if( strlen( $command ) == 0 )
		{
			$this->_setup->line_length = 0;
			return RS274NGC_EXECUTE_FINISH;
		}
		else if( strcmp($command[0],'/')==0 )
		{
			$this->_setup->line_length = 0;
			return RS274NGC_EXECUTE_FINISH;
		}
		else
			$this->_setup->line_length = strlen($command);
		
		return RS274NGC_OK;
	}


	/*	init_block
		Values in the block are reset as described below.
		Called by: parse_line
		
		The block is re-initialized before each new line of NC code is read.
		The block contains many slots for values which may or may not be present
		on a line of NC code. For some of these slots, there is a flag which
		is turned on (at the time time value of the slot is read) if the item
		is present.  For slots whose values are to be read which do not have a
		flag, there is always some excluded range of values. Setting the
		initial value of these slot to some number in the excluded range
		serves to show that a value for that slot has not been read.

		The rules for the indicators for slots whose values may be read are:
		1. If the value may be an arbitrary real number (which is always stored
		internally as a double), a flag is needed to indicate if a value has
		been read. All such flags are initialized to OFF.
		Note that the value itself is not initialized; there is no point in it.
		2. If the value must be a non-negative real number (which is always stored
		internally as a double), a value of -1.0 indicates the item is not present.
		3. If the value must be an unsigned integer (which is always stored
		internally as an int), a value of -1 indicates the item is not present.
		(RS274/NGC does not use any negative integers.)
		4. If the value is a character string (only the comment slot is one), the
		first character is set to 0 (NULL).
	*/
	function init_block()
	{		
		$this->_setup->block1->comment = "";
		$this->_setup->block1->d_number = -1;
		$this->_setup->block1->f_number = -1.0;
		for( $i = 0; $i < 14; $i++ )
			$this->_setup->block1->g_modes[$i] = -1;
		$this->_setup->block1->h_number = -1;
		$this->_setup->block1->i_flag = 0;
		$this->_setup->block1->j_flag = 0;
		$this->_setup->block1->k_flag = 0;
		$this->_setup->block1->l_number = -1;
		$this->_setup->block1->motion_to_be = -1;
		$this->_setup->block1->m_count = 0;
		for( $i = 0; $i < 10; $i++ )
			$this->_setup->block1->m_modes[$i] = -1;
		$this->_setup->block1->p_number = -1.0;
		$this->_setup->block1->q_number = -1.0;
		$this->_setup->block1->r_flag = 0;
		$this->_setup->block1->s_number = -1.0;
		$this->_setup->block1->t_number = -1;
		$this->_setup->block1->x_flag = 0;
		$this->_setup->block1->y_flag = 0;
		$this->_setup->block1->z_flag = 0;
		
		
		return RS274NGC_OK;
	}


	/*	read_real_number
		If any of the following errors occur, this returns the error shown.
	   Otherwise, it returns RS274NGC_OK.
	   1. The first character is not "+", "-", "." or a digit:
	   NCE_BAD_NUMBER_FORMAT
	   2. No digits are found after the first character and before the
	   end of the line or the next character that cannot be part of a real:
	   NCE_NO_DIGITS_FOUND_WHERE_REAL_NUMBER_SHOULD_BE

	   Side effects:
	   The number read from the line is put into what double_ptr points at.
	   The counter is reset to point to the first character after the real.

	   Called by:  read_real_value

	   This attempts to read a number out of the line, starting at the index
	   given by the counter. It stops when the first character that cannot
	   be part of the number is found.

	   The first character may be a digit, "+", "-", or "."
	   Every following character must be a digit or "." up to anything
	   that is not a digit or "." (a second "." terminates reading).

	   This function is not called if the first character is NULL, so it is
	   not necessary to check that.

	   The temporary insertion of a NULL character on the line is to avoid
	   making a format string like "%3lf" which the LynxOS compiler cannot
	   handle.
	*/
	function read_real_number( $line, &$counter, &$value )
	{
		$function_name = "read_real_number";
		$flag_point = 0;
		$flag_negative = 0;
		$i = $counter;
		$value_tmp = 0.0;
		
		$c = $line[$i];
		if( ord($c) == 43 ) // +
		{
			$counter = $counter + 1;
			$i = $i + 1;
		}
		else if( ord($c) == 45 ) // -
		{
			$flag_negative = 1;
			$i = $i + 1;
		}
		else if( ord($c)!=46 && ( ord($c)<48 || ord($c)>57 ) )
		{
			$this->report_error($function_name);
			return NCE_BAD_NUMBER_FORMAT;
		}
		
		$start = $i;
		$digit_factor = 0.0;
		for( ; $i < strlen($line); $i++ )
		{
			$c = $line[$i];
			if( 47 < ord($c) && ord($c) < 58 )
			{
				if( $flag_point == 0 )
				{
					$value_tmp = 10.0*$value_tmp;
					$value_tmp = $value_tmp + ord($c) - 48;
				}
				else
				{
					$value_tmp = $value_tmp + $digit_factor*( ord($c)-48 );
					$digit_factor = 0.1*$digit_factor;
				}
			}
			else if( ord($c) == 46 )
			{
				if( $flag_point == 0 )
				{
					$flag_point = 1;
					$digit_factor = 0.1;
				}
				else // two decimal points, error appears on reading next item 
					break;
			}
			else
				break;
		}
		
		if( $i == $start )
		{
			$this->report_error($function_name);
			return NCE_NO_DIGITS_FOUND_WHERE_REAL_NUMBER_SHOULD_BE;
		}
		
		$value = $value_tmp;
		if( $flag_negative == 1 )
			$value = -$value;
		$counter = $i;
		
		return RS274NGC_OK;
	}

	function read_real_expression($line, &$counter, &$value )
	{
	}

	function read_parameter($line, &$counter, &$value)
	{
	}

	function read_unary($line, &$counter, &$value)
	{
	}

	/*	read_real_value
		If one of the following functions returns an error code, this returns that code.
		read_real_expression
		read_parameter
		read_unary
		read_real_number
		If no characters are found before the end of the line, this returns NCE_NO_CHARACTERS_FOUND_IN_READING_REAL_VALUE. Otherwise, this returns RS274NGC_OK.
		
		Side effects:
		The value read from the line is put into $value. The counter is reset to point to the first character after the characters which make up the value.
		
		Called by:
	   read_a
	   read_b
	   read_c
	   read_f
	   read_g
	   read_i
	   read_integer_value
	   read_j
	   read_k
	   read_p
	   read_parameter_setting
	   read_q
	   read_r
	   read_real_expression
	   read_s
	   read_x
	   read_y
	   read_z

	   This attempts to read a real value out of the line, starting at the
	   index given by the counter. The value may be a number, a parameter
	   value, a unary function, or an expression. It calls one of four
	   other readers, depending upon the first character.
	*/
	function read_real_value( $line, &$counter, &$value )
	{
		$function_name = "read_real_value";
		$status = 0;
		
		if( !isset($line[$counter]) ) {
			$this->report_error($function_name);
			return NCE_NO_CHARACTERS_FOUND_IN_READING_REAL_VALUE;
		}
		
		$c = $line[$counter];
		
		if( ord($c)==91 )
		{
			$status = $this->read_real_expression($line, $counter, $value );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		else if( ord($c)==35 )  //#
		{
			$status = $this->read_parameter($line, $counter, $value);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		else if( ord($c)>=97 && ord($c)<=122 )
		{
			$status = $this->read_unary($line, $counter, $value);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		else
		{
			$status = $this->read_real_number($line, $counter, $value);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		
		return RS274NGC_OK;
	}


	/*	read_integer_unsigned
		If any of the following errors occur, this returns the error shown.
		Otherwise, RS274NGC_OK is returned.
		1. The first character is not a digit: NCE_BAD_FORMAT_UNSIGNED_INTEGER
		
		Called by: read_line_number

		This reads an explicit unsigned (positive) integer from a string,
		starting from the position given by *counter. It expects to find one
		or more digits. Any character other than a digit terminates reading
		the integer. Note that if the first character is a sign (+ or -),
		an error will be reported (since a sign is not a digit).
	*/
	function read_integer_unsigned( $line, &$counter, &$value )
	{
		$function_name = "read_integer_unsigned";
		
		for( $i = $counter; $i < strlen($line); $i++ )
		{
			$c = $line[$i];
			if( ord($c) < 48 || ord($c) > 57 )
				break;
		}
		if( $i == $counter )
		{
			$this->report_error($function_name);
			return NCE_BAD_FORMAT_UNSIGNED_INTEGER;
		}
		
		$start = $counter;
		$length = $i - $counter;
		$number = substr( $line, $start, $length );
		$value = (int)$number;
		$counter = $i;
		
		return RS274NGC_OK;
	}

	/*	read_integer_value
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The returned value is not close to an integer:
		NCE_NON_INTEGER_VALUE_FOR_INTEGER

		Side effects:
		The number read from the line is put into what integer_ptr points at.

		Called by:
		read_d
		read_l
		read_h
		read_m
		read_parameter
		read_parameter_setting
		read_t

		This reads an integer (positive, negative or zero) from a string,
		starting from the position given by *counter. The value being
		read may be written with a decimal point or it may be an expression
		involving non-integers, as long as the result comes out within 0.0001
		of an integer.

		This proceeds by calling read_real_value and checking that it is
		close to an integer, then returning the integer it is close to.
	*/
	function read_integer_value( $line, &$counter, &$value )
	{
		$status = $this->read_integer_unsigned($line, $counter, $value); // temp
		return $status;
	}


	/*	read_line_number
		If read_integer_unsigned returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not n:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. The line number is too large (more than 99999):
		NCE_LINE_NUMBER_GREATER_THAN_99999

		Side effects:
		counter is reset to the character following the line number.
		A line number is inserted in the block.

		Called by: read_items

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'n', indicating a line number.
		The function reads characters which give the (integer) value of the
		line number.

		Note that extra initial zeros in a line number will not cause the
		line number to be too large.
	*/
	function read_line_number( $line, &$counter )
	{
		$function_name = "read_line_number";
		$value = 0;
		$status = 0;
		
		if( strcmp($line[0], 'n') != 0 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		
		$counter = $counter+1;
		$status = $this->read_integer_unsigned( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $value > 99999 )
		{
			$this->report_error($function_name);
			return NCE_LINE_NUMBER_GREATER_THAN_99999;
		}
		
		$this->_setup->block1->line_number = $value;
		
		return RS274NGC_OK;
	}




	function read_parameter_setting( $line, &$counter )
	{
	}

	/*	read_comment
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not '(' ,
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED

		Side effects:
		The counter is reset to point to the character following the comment.
		The comment string, without parentheses, is copied into the comment
		area of the block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character '(', indicating a comment is
		beginning. The function reads characters of the comment, up to and
		including the comment closer ')'.

		It is expected that the format of a comment will have been checked (by
		read_text or read_keyboard_line) and bad format comments will
		have prevented the system from getting this far, so that this function
		can assume a close parenthesis will be found when an open parenthesis
		has been found, and that comments are not nested.
	*/
	function read_comment( $line, &$counter )
	{
		$function_name = "read_comment";
		
		if( ord($line[$counter]) != 40 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter++;
		$i = $counter;
		for( ; strcmp($line[$i],')')!=0; $i++ );
		$length = $i - $counter;
		$this->_setup->block1->comment = substr( $line, $counter, $length );
		$counter = $i+1;
		
		return RS274NGC_OK;
	}

	/*	read_a CURRENTLY NOT SUPPORTED
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not a:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. An a_coordinate has already been inserted in the block:
		NCE_MULTIPLE_A_WORDS_ON_ONE_LINE.
		3. A values are not allowed: NCE_CANNOT_USE_A_WORD.
		
		Side effects:
		counter is reset.
		The a_flag in the block is turned on.
		An a_number is inserted in the block.
		
		Called by: read_one_item
		
		When this function is called, counter is pointing at an item on the
		line that starts with the character 'a', indicating an a_coordinate
		setting. The function reads characters which tell how to set the
		coordinate, up to the start of the next item or the end of the line.
		The counter is then set to point to the character following.

		The value may be a real number or something that evaluates to a
		real number, so read_real_value is used to read it. Parameters
		may be involved.
	*/
	function read_a( $line, &$counter )
	{
		$function_name = "read_a";
		$this->report_error($function_name);
		return NCE_BAD_CHARACTER_USED;
	}

	function read_b( $line, &$counter )
	{
		$function_name = "read_b";
		$this->report_error($function_name);
		return NCE_BAD_CHARACTER_USED;
	}

	function read_c( $line, &$counter )
	{
		$function_name = "read_b";
		$this->report_error($function_name);
		return NCE_BAD_CHARACTER_USED;
	}

	function read_d( $line, &$counter )
	{
		$function_name = "read_d";
		$status = 0;
		$value = -1;
		
		if( ord($line[$counter]) != 100 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		
		$counter = $counter+1;
		if( $this->_setup->block1->d_number > -1 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_D_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_integer_value( $line, $counter, $value );
		
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $value < 0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_D_WORD_TOOL_RADIUS_INDEX_USED;
		}
		if( $value > $this->_setup->tool_max )
		{
			$this->report_error($function_name);
			return NCE_TOOL_RADIUS_INDEX_TOO_BIG;
		}
		
		$this->_setup->block1->d_number = $value;
		
		return RS274NGC_OK;
	}

	/*	read_f
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not f:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. An f_number has already been inserted in the block:
		NCE_MULTIPLE_F_WORDS_ON_ONE_LINE
		3. The f_number is negative: NCE_NEGATIVE_F_WORD_USED

		Side effects:
		counter is reset to point to the first character following the f_number.
		The f_number is inserted in block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'f'. The function reads characters
		which tell how to set the f_number, up to the start of the next item
		or the end of the line. This information is inserted in the block.

		The value may be a real number or something that evaluates to a real
		number, so read_real_value is used to read it. Parameters may be
		involved, so the parameters argument is required. The value is always
		a feed rate.
	*/
	function read_f( $line, &$counter )
	{
		$function_name = "read_f";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 102 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		
		$counter = $counter+1;
		if( $this->_setup->block1->f_number > -1.0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_F_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $value < 0.0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_F_WORD_USED;
		}
		
		$this->_setup->block1->f_number = $value;
		
		return RS274NGC_OK;
	}


	/*	read_g
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not g:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. The value is negative: NCE_NEGATIVE_G_CODE_USED
		3. The value differs from a number ending in an even tenth by more
		than 0.0001: NCE_G_CODE_OUT_OF_RANGE
		4. The value is greater than 99.9: NCE_G_CODE_OUT_OF_RANGE
		5. The value is not the number of a valid g code: NCE_UNKNOWN_G_CODE_USED
		6. Another g code from the same modal group has already been
		inserted in the block: NCE_TWO_G_CODES_USED_FROM_SAME_MODAL_GROUP

		Side effects:
		counter is reset to the character following the end of the g_code.
		A g code is inserted as the value of the appropriate mode in the
		g_modes array in the block.
		The g code counter in the block is increased by 1.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'g', indicating a g_code.  The
		function reads characters which tell how to set the g_code.

		The RS274/NGC manual [NCMS, page 51] allows g_codes to be represented
		by expressions and provide [NCMS, 71 - 73] that a g_code must evaluate
		to to a number of the form XX.X (59.1, for example). The manual does not
		say how close an expression must come to one of the allowed values for
		it to be legitimate. Is 59.099999 allowed to mean 59.1, for example?
		In the interpreter, we adopt the convention that the evaluated number
		for the g_code must be within 0.0001 of a value of the form XX.X

		To simplify the handling of g_codes, we convert them to integers by
		multiplying by 10 and rounding down or up if within 0.001 of an
		integer. Other functions that deal with g_codes handle them
		symbolically, however. The symbols are defined in rs274NGC.hh
		where G_1 is 10, G_83 is 830, etc.

		This allows any number of g_codes on one line, provided that no two
		are in the same modal group.
	*/
	function read_g( $line, &$counter )
	{
		$function_name = "read_g";
		$status = 0;
		$mode = 0;
		$value_read = 0.0;
		$value = 0;
		
		if( ord($line[$counter]) != 103 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		
		$counter = $counter + 1;
		$status = $this->read_real_value($line, $counter, $value_read);
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		$value_read = 10.0 * $value_read; // * 10 to handle the G92.X and so on.
		$value = (int)floor($value_read);
		if( $value_read-$value > 0.999 )
			$value = (int)ceil($value_read);
		else if( $value_read - $value > 0.001 || $value > 999 )
		{
			$this->report_error($function_name);
			return NCE_G_CODE_OUT_OF_RANGE;
		}
		else if( $value < 0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_G_CODE_USED;
		}
		
		$mode = $this->_gees[$value];
		if( $mode == -1 )
		{
			$this->report_error($function_name);
			return NCE_UNKNOWN_G_CODE_USED;
		}
		if( $this->_setup->block1->g_modes[$mode] != -1 )
		{
			$this->report_error($function_name);
			return NCE_TWO_G_CODES_USED_FROM_SAME_MODAL_GROUP;
		}
		
		$this->_setup->block1->g_modes[$mode] = $value;
		
		return RS274NGC_OK;
	}

	/*	read_h
		If read_integer_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not h:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. An h_number has already been inserted in the block:
		NCE_MULTIPLE_H_WORDS_ON_ONE_LINE
		3. The value is negative: NCE_NEGATIVE_H_WORD_TOOL_LENGTH_OFFSET_INDEX_USED
		4. The value is greater than _setup.tool_max:
		NCE_TOOL_LENGTH_OFFSET_INDEX_TOO_BIG

		Side effects:
		counter is reset to the character following the h_number.
		An h_number is inserted in the block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'h', indicating a tool length
		offset index.  The function reads characters which give the (integer)
		value of the tool length offset index (not the actual distance of the
		offset).	
	*/
	function read_h( $line, &$counter )
	{
		$function_name = "read_h";
		$status = 0;
		$value = 0;
		
		if( ord($line[$counter]) != 104 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->h_number > -1 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_H_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_integer_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		if( $value < 0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_H_WORD_TOOL_LENGTH_OFFSET_INDEX_USED;
		}
		else if( $value > $this->_setup->tool_max )
		{
			$this->report_error($function_name);
			return NCE_TOOL_LENGTH_OFFSET_INDEX_TOO_BIG;
		}
		
		$this->_setup->block1->h_number = $value;
		
		return RS274NGC_OK;
	}

	/*	read_i
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not i:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. An i_coordinate has already been inserted in the block:
		NCE_MULTIPLE_I_WORDS_ON_ONE_LINE

		Side effects:
		counter is reset.
		The i_flag in the block is turned on.
		An i_coordinate setting is inserted in the block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'i', indicating a i_coordinate
		setting. The function reads characters which tell how to set the
		coordinate, up to the start of the next item or the end of the line.
		This information is inserted in the block. The counter is then set to
		point to the character following.

		The value may be a real number or something that evaluates to a
		real number, so read_real_value is used to read it. Parameters
		may be involved.
	*/
	function read_i( $line, &$counter )
	{
		$function_name = "read_i";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 105 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->i_flag != 0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_I_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value($line, $counter, $value);
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$this->_setup->block1->i_flag = 1;
		$this->_setup->block1->i_number = $value;
		
		return RS274NGC_OK;
	}

	/*	read_j
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not j:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. A j_coordinate has already been inserted in the block.
		NCE_MULTIPLE_J_WORDS_ON_ONE_LINE

		Side effects:
		counter is reset.
		The j_flag in the block is turned on.
		A j_coordinate setting is inserted in the block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'j', indicating a j_coordinate
		setting. The function reads characters which tell how to set the
		coordinate, up to the start of the next item or the end of the line.
		This information is inserted in the block. The counter is then set to
		point to the character following.

		The value may be a real number or something that evaluates to a real
		number, so read_real_value is used to read it. Parameters may be
		involved.
	*/
	function read_j( $line, &$counter )
	{
		$function_name = "read_j";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 106 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->j_flag != 0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_J_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$this->_setup->block1->j_flag = 1;
		$this->_setup->block1->j_number = $value;
		
		return RS274NGC_OK;
	}

	/*	read_k
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not k:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. A k_coordinate has already been inserted in the block:
		NCE_MULTIPLE_K_WORDS_ON_ONE_LINE

		Side effects:
		counter is reset.
		The k_flag in the block is turned on.
		A k_coordinate setting is inserted in the block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'k', indicating a k_coordinate
		setting. The function reads characters which tell how to set the
		coordinate, up to the start of the next item or the end of the line.
		This information is inserted in the block. The counter is then set to
		point to the character following.

		The value may be a real number or something that evaluates to a real
		number, so read_real_value is used to read it. Parameters may be
		involved.
	*/
	function read_k( $line, &$counter )
	{
		$function_name = "read_k";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 107 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->k_flag != 0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_K_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$this->_setup->block1->k_flag = 1;
		$this->_setup->block1->k_number = value;
		
		return RS274NGC_OK;
	}

	/*	read_l
		If read_integer_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not l:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. An l_number has already been inserted in the block:
		NCE_MULTIPLE_L_WORDS_ON_ONE_LINE
		3. the l_number is negative: NCE_NEGATIVE_L_WORD_USED

		Side effects:
		counter is reset to the character following the l number.
		An l code is inserted in the block as the value of l.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'l', indicating an L code.
		The function reads characters which give the (integer) value of the
		L code.

		L codes are used for:
		1. the number of times a canned cycle should be repeated.
		2. a key with G10.
	*/
	function read_l( $line, &$counter )
	{
		$function_name = "read_l";
		$status = 0;
		$value = 0;
		
		if( ord($line[$counter]) != 108 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->l_number > -1 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_L_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_integer_value($line, $counter, $value);
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $value < 0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_L_WORD_USED;
		}
		
		$this->_setup->block1->l_number = $value;
		
		return RS274NGC_OK;
	}

	/*	read_m
		If read_integer_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not m:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. The value is negative: NCE_NEGATIVE_M_CODE_USED
		3. The value is greater than 99: NCE_M_CODE_GREATER_THAN_99
		4. The m code is not known to the system: NCE_UNKNOWN_M_CODE_USED
		5. Another m code in the same modal group has already been read:
		NCE_TWO_M_CODES_USED_FROM_SAME_MODAL_GROUP

		Side effects:
		counter is reset to the character following the m number.
		An m code is inserted as the value of the appropriate mode in the
		m_modes array in the block.
		The m code counter in the block is increased by 1.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'm', indicating an m code.
		The function reads characters which give the (integer) value of the
		m code.

		read_integer_value allows a minus sign, so a check for a negative value
		is needed here, and the parameters argument is also needed.
	*/
	function read_m( $line, &$counter )
	{
		$function_name = "read_m";
		$status = 0;
		$value = 0;
		
		if( ord($line[$counter]) != 109 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		$status = $this->read_integer_value($line, $counter, $value);
		if( $status != RS274NGC_OK )
		{
			pass_error($function_name);
			return $status;
		}
		if( $value < 0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_M_CODE_USED;
		}
		if( $value > 99 )
		{
			$this->report_error($function_name);
			return NCE_M_CODE_GREATER_THAN_99;
		}
		
		$mode = $this->_ems[$value];
		if( $mode == -1 )
		{
			$this->report_error($function_name);
			return NCE_UNKNOWN_M_CODE_USED;
		}
		if( $this->_setup->block1->m_modes[$mode] != -1 )
		{
			$this->report_error($function_name);
			return NCE_TWO_M_CODES_USED_FROM_SAME_MODAL_GROUP;
		}
		
		$this->_setup->block1->m_modes[$mode] = $value;
		$this->_setup->block1->m_count++;
		
		return RS274NGC_OK;
	}

	/*	read_p
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not p:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. A p value has already been inserted in the block:
		NCE_MULTIPLE_P_WORDS_ON_ONE_LINE
		3. The p value is negative: NCE_NEGATIVE_P_WORD_USED

		Side effects:
		counter is reset to point to the first character following the p value.
		The p value setting is inserted in block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'p', indicating a p value
		setting. The function reads characters which tell how to set the p
		value, up to the start of the next item or the end of the line. This
		information is inserted in the block.

		P codes are used for:
		1. Dwell time in canned cycles g82, G86, G88, G89 [NCMS pages 98 - 100].
		2. A key with G10 [NCMS, pages 9, 10].
	*/
	function read_p( $line, &$counter )
	{
		$function_name = "read_p";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 112 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->p_number > -1.0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_P_WORDS_ON_ONE_LINE;
		}
		
		$status = read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $value < 0.0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_P_WORD_USED;
		}
		
		$this->_setup->block1->p_number = $value;
		
		return RS274NGC_OK;
	}

	/*	read_q
		If read_real_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not q:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. A q value has already been inserted in the block:
		NCE_MULTIPLE_Q_WORDS_ON_ONE_LINE
		3. The q value is negative or zero: NCE_NEGATIVE_OR_ZERO_Q_VALUE_USED

		Side effects:
		counter is reset to point to the first character following the q value.
		The q value setting is inserted in block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 'q', indicating a q value
		setting. The function reads characters which tell how to set the q
		value, up to the start of the next item or the end of the line. This
		information is inserted in the block.

		Q is used only in the G87 canned cycle [NCMS, page 98], where it must be positive.
	*/
	function read_q( $line, &$counter )
	{
		$function_name = "read_q";
		$status = 0;
		$value = 0;
		
		if( ord($line[$counter]) != 113 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->q_number > -1.0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_Q_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $value <= 0.0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_OR_ZERO_Q_VALUE_USED;
		}
		
		$this->_setup->block1->q_number = $value;
		
		return RS274NGC_OK;
	}

	/*	read_r
	
	*/
	function read_r( $line, &$counter )
	{
		$function_name = "read_r";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 114 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->r_flag != 0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_R_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$this->_setup->block1->r_flag = 1;
		$this->_setup->block1->r_number = $value;
		
		return RS274NGC_OK;
	}

	function read_s( $line, &$counter )
	{
		$function_name = "read_s";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 115 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter + 1;
		
		if( $this->_setup->block1->s_number > -1.0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_S_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $value < 0.0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_SPINDLE_SPEED_USED;
		}
		
		$this->_setup->block1->s_number = $value;
		
		return RS274NGC_OK;
	}

	/*	read_t
		If read_integer_value returns an error code, this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The first character read is not t:
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED
		2. A t_number has already been inserted in the block:
		NCE_MULTIPLE_T_WORDS_ON_ONE_LINE
		3. The t_number is negative: NCE_NEGATIVE_TOOL_ID_USED

		Side effects:
		counter is reset to the character following the t_number.
		A t_number is inserted in the block.

		Called by: read_one_item

		When this function is called, counter is pointing at an item on the
		line that starts with the character 't', indicating a tool.
		The function reads characters which give the (integer) value of the
		tool code.

		The value must be an integer or something that evaluates to a
		real number, so read_integer_value is used to read it. Parameters
		may be involved.
	*/
	function read_t( $line, &$counter )
	{
		$function_name = "read_t";
		$status = 0;
		$value = 0;
		
		if( ord($line[$counter]) != 116 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter+1;
		
		if( $this->_setup->block1->t_number != -1 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		
		$status = $this->read_integer_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $value < 0 )
		{
			$this->report_error($function_name);
			return NCE_NEGATIVE_TOOL_ID_USED;
		}
		
		$this->_setup->block1->t_number = $value;
		
		return RS274NGC_OK;
	}

	function read_x( $line, &$counter )
	{
		$function_name = "read_x";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 120 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter + 1;
		
		if( $this->_setup->block1->x_flag != 0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_X_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$this->_setup->block1->x_flag = 1;
		$this->_setup->block1->x_number = $value;
		
		return RS274NGC_OK;
	}

	function read_y( $line, &$counter )
	{
		$function_name = "read_y";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 121 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter + 1;
		
		if( $this->_setup->block1->y_flag != 0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_Y_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$this->_setup->block1->y_flag = 1;
		$this->_setup->block1->y_number = $value;
		
		return RS274NGC_OK;
	}

	function read_z( $line, &$counter )
	{
		$function_name = "read_z";
		$status = 0;
		$value = 0.0;
		
		if( ord($line[$counter]) != 122 )
		{
			$this->report_error($function_name);
			return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		$counter = $counter + 1;
		
		if( $this->_setup->block1->z_flag != 0 )
		{
			$this->report_error($function_name);
			return NCE_MULTIPLE_Z_WORDS_ON_ONE_LINE;
		}
		
		$status = $this->read_real_value( $line, $counter, $value );
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$this->_setup->block1->z_flag = 1;
		$this->_setup->block1->z_number = $value;
		
		return RS274NGC_OK;
	}




	/*	read_one_item
		If any of the following errors occur, this returns the error code.
		If a reader function is called and returns an error code, this returns the error code.
		Otherwise, it returns RS274NGC_OK.
		1. the first character read is not a known character for starting a word: NCE_BAD_CHARACTER_USED.
		
		Side effects:
		This function reads one item from a line of RS274/NGC code and inserts the information in a block.
		
		Called by: read_items.
		
		When this function is called, the counter is set so that the position
		being considered is the first position of a word. The character at
		that position must be one known to the system.  In this version those
		characters are: a,b,c,d,f,g,h,i,j,k,l,m,n,p,q,r,s,t,x,y,z,(,#.
		However, read_items calls read_line_number directly if the first word
		begins with n, so no read function is included in the "_readers" array
		for the letter n. Thus, if an n word is encountered in the middle of
		a line, this function reports NCE_BAD_CHARACTER_USED.

		The function looks for a letter or special character and calls a
		selected function according to what the letter or character is.  The
		selected function will be responsible to consider all the characters
		that comprise the remainder of the item, and reset the pointer so that
		it points to the next character after the end of the item (which may be
		the end of the line or the first character of another item).

		After an item is read, the counter is set at the index of the
		next unread character. The item data is stored in the block.

		It is expected that the format of a comment will have been checked;
		this is being done by close_and_downcase. Bad format comments will
		have prevented the system from getting this far, so that this function
		can assume a close parenthesis will be found when an open parenthesis
		has been found, and that comments are not nested.
	*/
	function read_one_item( $line, &$counter )
	{
		$function_name = "read_one_item";
		$status = 0;
		$letter = $line[$counter];
		$index = ord($letter);
		
		if( $index == 35 ) // '#'
		{
			$status = $this->read_parameter_setting( $line, $counter );
		}
		else if( $index == 40 ) // '(', actually comment should have been removed
		{
			$status = $this->read_comment( $line, $counter );
		}
		else if( $index == 97 ) // 'a'
		{
			$status = $this->read_a( $line, $counter );
		}
		else if( $index == 98 )
		{
			$status = $this->read_b( $line, $counter );
		}
		else if( $index == 99 )
		{
			$status = $this->read_c( $line, $counter );
		}
		else if( $index == 100 )
		{
			$status = $this->read_d( $line, $counter );
		}
		else if( $index == 102 )
		{
			$status = $this->read_f( $line, $counter );
		}
		else if( $index == 103 )
		{
			$status = $this->read_g( $line, $counter );
		}
		else if( $index == 104 )
		{
			$status = $this->read_h( $line, $counter );
		}
		else if( $index == 105 )
		{
			$status = $this->read_i( $line, $counter );
		}
		else if( $index == 106 )
		{
			$status = $this->read_j( $line, $counter );
		}
		else if( $index == 107 )
		{
			$status = $this->read_k( $line, $counter );
		}
		else if( $index == 108 )
		{
			$status = $this->read_l( $line, $counter ); 
		}
		else if( $index == 109 )
		{
			$status = $this->read_m( $line, $counter );
		}
		else if( $index == 112 )
		{
			$status = $this->read_p( $line, $counter );
		}
		else if( $index == 113 )
		{
			$status = $this->read_q( $line, $counter );
		}
		else if( $index == 114 )
		{
			$status = $this->read_r( $line, $counter );
		}
		else if( $index == 115 )
		{
			$status = $this->read_s( $line, $counter );
		}
		else if( $index == 116 )
		{
			$status = $this->read_t( $line, $counter );
		}
		else if( $index == 120 )
		{
			$status = $this->read_x( $line, $counter );
		}
		else if( $index == 121 )
		{
			$status = $this->read_y( $line, $counter );
		}
		else if( $index == 122 )
		{
			$status = $this->read_z( $line, $counter );
		}
		else
		{
			$this->report_error($function_name);
			return NCE_BAD_CHARACTER_USED;
		}
		
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		return RS274NGC_OK;
	}

	/*	read_items
		If read_line_number or read_one_item returns an error code,
		this returns that code.
		Otherwise, it returns RS274NGC_OK.

		Side effects:
		One line of RS274 code is read and data inserted into a block.
		The counter which is passed around among the readers is initialized.
		
		Called by: parse_line
	*/
	function read_items()
	{
		$function_name = "read_items";
		$line = trim($this->_setup->blocktext);
		$length = strlen( $line );
		$counter = 0;
		$status = 0;
		
		if( strcmp($line[$counter],'/')==0 )
			$counter++;
		if( strcmp($line[$counter],'n')==0 )
		{
			$status = $this->read_line_number( $line, $counter );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		
		for( ; $counter < $length; )
		{
			if( ord($line[$counter])==9 || ord($line[$counter])==32 || ord($line[$counter])==59 )
			{
				$counter++;
				continue;
			}
			$status = $this->read_one_item( $line, $counter );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		
		return RS274NGC_OK;
	}

	/*	enhance_block
		If any of the following errors occur, this returns the error shown.
		Otherwise, it returns RS274NGC_OK.
		1. A g80 is in the block, no modal group 0 code that uses axes
		is in the block, and one or more axis values is given:
		NCE_CANNOT_USE_AXIS_VALUES_WITH_G80
		2. A g92 is in the block and no axis value is given:
		NCE_ALL_AXES_MISSING_WITH_G92
		3. One g-code from group 1 and one from group 0, both of which can use
		axis values, are in the block:
		NCE_CANNOT_USE_TWO_G_CODES_THAT_BOTH_USE_AXIS_VALUES
		4. A g-code from group 1 which can use axis values is in the block,
		but no axis value is given: NCE_ALL_AXES_MISSING_WITH_MOTION_CODE
		5. Axis values are given, but there is neither a g-code in the block
		nor an active previously given modal g-code that uses axis values:
		NCE_CANNOT_USE_AXIS_VALUES_WITHOUT_A_G_CODE_THAT_USES_THEM

		Side effects:
		The value of motion_to_be in the block is set.

		Called by: parse_line

		If there is a g-code for motion in the block (in g_modes[1]),
		set motion_to_be to that. Otherwise, if there is an axis value in the
		block and no g-code to use it (any such would be from group 0 in
		g_modes[0]), set motion_to_be to be the last motion saved (in
		settings->motion mode).

		This also make the checks described above.
	*/
	function enhance_block()
	{
		$function_name = "enhance_block";
		$axis_flag = 0;
		$mode_zero_covets_axes = 0;
		
		if( $this->_setup->block1->x_flag == 1 ||
			$this->_setup->block1->y_flag == 1 ||
			$this->_setup->block1->z_flag == 1 )
			$axis_flag = 1;
		
		if( $this->_setup->block1->g_modes[0] == G_10 ||
			$this->_setup->block1->g_modes[0] == G_28 ||
			$this->_setup->block1->g_modes[0] == G_30 ||
			$this->_setup->block1->g_modes[0] == G_92 )
			$mode_zero_covets_axes = 1;
		
		if( $this->_setup->block1->g_modes[1] != -1 )
		{
			if( $this->_setup->block1->g_modes[1] == G_80 )
			{
				if( $axis_flag==1 && $mode_zero_covets_axes==0 )
				{
					$this->report_error($function_name);
					return NCE_CANNOT_USE_AXIS_VALUES_WITH_G80;
				}
				if( $axis_flag==0 && $this->_setup->block1->g_modes[0]==G_92 )
				{
					$this->report_error($function_name);
					return NCE_ALL_AXES_MISSING_WITH_G92;
				}
			}
			else
			{
				if( $mode_zero_covets_axes == 1 )
				{
					$this->report_error($function_name);
					return NCE_CANNOT_USE_TWO_G_CODES_THAT_BOTH_USE_AXIS_VALUES;
				}
				if( $axis_flag == 0 )
				{
					$this->report_error($function_name);
					return NCE_ALL_AXES_MISSING_WITH_MOTION_CODE;
				}
			}
			$this->_setup->block1->motion_to_be = $this->_setup->block1->g_modes[1];
		}
		else if( $mode_zero_covets_axes == 1 ) // other 3 can get by without axes but not G92
		{
			if( $axis_flag==0 && $this->_setup->block1->g_modes[0]==G_92 )
			{
				$this->report_error($function_name);
				return NCE_ALL_AXES_MISSING_WITH_G92;
			}
		}
		else if( $axis_flag == 1 )
		{
			if( $this->_setup->motion_mode == -1 || $this->_setup->motion_mode == G_80 )
			{
				$this->report_error($function_name);
				return NCE_CANNOT_USE_AXIS_VALUES_WITHOUT_A_G_CODE_THAT_USES_THEM;
			}
			$this->_setup->block1->motion_to_be = $this->_setup->motion_mode;
		}
		
		return RS274NGC_OK;
	}

	/*	check_g_codes
		If any of the following errors occur, this returns the error shown.
		Otherwise, it returns RS274NGC_OK.
		1. NCE_DWELL_TIME_MISSING_WITH_G4
		2. NCE_MUST_USE_G0_OR_G1_WITH_G53
		3. NCE_CANNOT_USE_G53_INCREMENTAL
		4. NCE_LINE_WITH_G10_DOES_NOT_HAVE_L2
		5. NCE_P_VALUE_NOT_AN_INTEGER_WITH_G10_L2
		6. NCE_P_VALUE_OUT_OF_RANGE_WITH_G10_L2
		7. NCE_BUG_BAD_G_CODE_MODAL_GROUP_0

		Side effects: none

		Called by: check_items

		This runs checks on g_codes from a block of RS274/NGC instructions.
		Currently, all checks are on g_codes in modal group 0.

		The read_g function checks for errors which would foul up the reading.
		The enhance_block function checks for logical errors in the use of
		axis values by g-codes in modal groups 0 and 1.
		This function checks for additional logical errors in g_codes.

		[Fanuc, page 45, note 4] says there is no maximum for how many g_codes
		may be put on the same line, [NCMS] says nothing one way or the other,
		so the test for that is not used.

		We are suspending any implicit motion g_code when a g_code from our
		group 0 is used.  The implicit motion g_code takes effect again
		automatically after the line on which the group 0 g_code occurs.  It
		is not clear what the intent of [Fanuc] is in this regard. The
		alternative is to require that any implicit motion be explicitly
		cancelled.

		Not all checks on g_codes are included here. Those checks that are
		sensitive to whether other g_codes on the same line have been executed
		yet are made by the functions called by convert_g.

		Our reference sources differ regarding what codes may be used for
		dwell time.  [Fanuc, page 58] says use "p" or "x". [NCMS, page 23] says
		use "p", "x", or "u". We are allowing "p" only, since it is consistent
		with both sources and "x" would be confusing. However, "p" is also used
		with G10, where it must be an integer, so reading "p" values is a bit
		more trouble than would be nice.
	*/
	function check_g_codes()
	{
		$function_name = "check_g_codes";
		$mode0 = 0;
		$p_int = 0;
		
		$mode0 = $this->_setup->block1->g_modes[0];
		
		if( $mode0 == -1 ) {}
		else if( $mode0 == G_4 )
		{
			if( $this->_setup->block1->p_number == -1 )
			{
				$this->report_error($function_name);
				return NCE_DWELL_TIME_MISSING_WITH_G4;
			}
		}
		else if( $mode0 == G_10 )
		{
			$p_int = (int)($_setup->block1->p_number + 0.0001);
			if( $this->_setup->block1->l_number != 2 )
			{
				$this->report_error($function_name);
				return NCE_LINE_WITH_G10_DOES_NOT_HAVE_L2;
			}
			
			if( ($_setup->block1->p_number+0.0001) - $p_int > 0.0002 )
			{
				$this->report_error($function_name);
				return NCE_P_VALUE_NOT_AN_INTEGER_WITH_G10_L2;
			}
			
			if( $p_int<1 || $p_int>9 )
			{
				$this->report_error($function_name);
				return NCE_P_VALUE_OUT_OF_RANGE_WITH_G10_L2;
			}
		}
		else if( $mode0 == G_28 ) {}
		else if( $mode0 == G_30 ) {}
		else if( $mode0 == G_53 )
		{
			if( $this->_setup->block1->motion_to_be != G_0 && $this->_setup->motion_to_be != G_1 )
			{
				$this->report_error($function_name);
				return NCE_MUST_USE_G0_OR_G1_WITH_G53;
			}
			if( $this->_setup->block1->g_modes[3] == G_91 ||
				( $this->_setup->block1->g_modes[3] != G_90 && $this->_setup->distance_mode == MODE_INCREMENTAL ) )
			{
				$this->report_error($function_name);
				return NCE_CANNOT_USE_G53_INCREMENTAL;
			}
		}
		else if( $mode0 == G_92 ) {}
		else if( $mode0 == G_92_1 || $mode0 == G_92_2 || $mode0 == G_92_3 ) {}
		else
		{
			$this->report_error($function_name);
			return NCE_BUG_BAD_G_CODE_MODAL_GROUP_0;
		}
		
		return RS274NGC_OK;
	}

	/*	check_m_codes
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. There are too many m codes in the block: NCE_TOO_MANY_M_CODES_ON_LINE

		Side effects: none

		Called by: check_items

		This runs checks on m_codes from a block of RS274/NGC instructions.

		The read_m function checks for errors which would foul up the
		reading. This function checks for additional errors in m_codes.
	*/
	function check_m_codes()
	{
		$function_name = "check_m_codes";
		
		if( $this->_setup->block1->m_count > MAX_EMS )
		{
			$this->report_error($function_name);
			return NCE_TOO_MANY_M_CODES_ON_LINE;
		}
		
		return RS274NGC_OK;
	}

	/*	check_other_codes
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. An A-axis value is given with a canned cycle (g80 to g89):
		NCE_CANNOT_PUT_AN_A_IN_CANNED_CYCLE
		2. A B-axis value is given with a canned cycle (g80 to g89):
		NCE_CANNOT_PUT_A_B_IN_CANNED_CYCLE
		3. A C-axis value is given with a canned cycle (g80 to g89):
		NCE_CANNOT_PUT_A_C_IN_CANNED_CYCLE
		4. A d word is in a block with no cutter_radius_compensation_on command:
		NCE_D_WORD_WITH_NO_G41_OR_G42
		5. An h_number is in a block with no tool length offset setting:
		NCE_H_WORD_WITH_NO_G43
		6. An i_number is in a block with no G code that uses it:
		NCE_I_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT
		7. A j_number is in a block with no G code that uses it:
		NCE_J_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT
		8. A k_number is in a block with no G code that uses it:
		NCE_K_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT
		9. A l_number is in a block with no G code that uses it:
		NCE_L_WORD_WITH_NO_CANNED_CYCLE_OR_G10
		10. A p_number is in a block with no G code that uses it:
		NCE_P_WORD_WITH_NO_G4_G10_G82_G86_G88_G89
		11. A q_number is in a block with no G code that uses it:
		NCE_Q_WORD_WITH_NO_G83
		12. An r_number is in a block with no G code that uses it:
		NCE_R_WORD_WITH_NO_G_CODE_THAT_USES_IT

		Side effects: none

		Called by: check_items

		This runs checks on codes from a block of RS274/NGC code which are
		not m or g codes.

		The functions named read_XXXX check for errors which would foul up the
		reading. This function checks for additional logical errors in codes.
	*/
	function check_other_codes()
	{
		$function_name = "check_other_codes";
		$motion = $this->_setup->block1->motion_to_be;
		
		if( $this->_setup->block1->d_number != -1 )
		{
			if( $this->_setup->block1->g_modes[7] != G_41 && $this->_setup->block1->g_modes[7] != G_42 )
			{
				$this->report_error($function_name);
				return NCE_D_WORD_WITH_NO_G41_OR_G42;
			}
		}
		
		if( $this->_setup->block1->h_number != -1 )
		{
			if( $this->_setup->block1->g_modes[8] != G_43 )
			{
				$this->report_error($function_name);
				return NCE_H_WORD_WITH_NO_G43;
			}
		}
		
		if( $this->_setup->block1->i_flag == 1 )
		{
			if( ($motion != G_2) && ($motion!=G_3) && ($motion!=G_87) )
			{
				$this->report_error($function_name);
				return NCE_I_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT;
			}
		}
		
		if( $this->_setup->block1->j_flag == 1 )
		{
			if( ($motion != G_2) && ($motion!=G_3) && ($motion!=G_87) )
			{
				$this->report_error($function_name);
				return NCE_J_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT;
			}
		}
		
		if( $this->_setup->block1->k_flag == 1 )
		{
			if( ($motion != G_2) && ($motion!=G_3) && ($motion!=G_87) )
			{
				$this->report_error($function_name);
				return NCE_K_WORD_WITH_NO_G2_OR_G3_OR_G87_TO_USE_IT;
			}
		}
		
		if( $this->_setup->block1->l_number != -1 )
		{
			if( ( $motion<G_81 || $motion>G_89 ) && ($_setup->block1->g_modes[0]!=G_10 ) )
			{
				$this->report_error($function_name);
				return NCE_L_WORD_WITH_NO_CANNED_CYCLE_OR_G10;
			}
		}
		
		if( $this->_setup->block1->p_number != -1 )
		{
			if( $this->_setup->block1->g_modes[0] != G_10 &&
				$this->_setup->block1->g_modes[0] != G_4 &&
				$motion != G_82 && $motion != G_86 &&
				$motion != G_88 && $motion != G_89 )
			{
				$this->report_error($function_name);
				return NCE_P_WORD_WITH_NO_G4_G10_G82_G86_G88_G89;
			}
		}
		
		if( $this->_setup->block1->q_number != -1 )
		{
			if( $motion != G_83 )
			{
				$this->report_error($function_name);
				return NCE_Q_WORD_WITH_NO_G83;
			}
		}
		
		if( $this->_setup->block1->r_flag == 1 )
		{
			if( ($motion!=G_2 && $motion!=G_3) && ($motion<G_81 || $motion>G_89) )
			{
				$this->report_error($function_name);
				return NCE_R_WORD_WITH_NO_G_CODE_THAT_USES_IT;
			}
		}
		
		return RS274NGC_OK;
	}

	/*	check_items
		If any one of check_g_codes, check_m_codes, and check_other_codes
		returns an error code, this returns that code.
		Otherwise, it returns RS274NGC_OK.

		Side effects: none

		Called by: parse_line

		This runs checks on a block of RS274 code.

		The functions named read_XXXX check for errors which would foul up the
		reading. This function checks for additional logical errors.

		A block has an array of g_codes, which are initialized to -1
		(meaning no code). This calls check_g_codes to check the g_codes.

		A block has an array of m_codes, which are initialized to -1
		(meaning no code). This calls check_m_codes to check the m_codes.

		Items in the block which are not m or g codes are checked by
		check_other_codes.
	*/
	function check_items()
	{
		$function_name = "check_items";
		$status = 0;
		
		$status = $this->check_g_codes();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$status = $this->check_m_codes();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$status = $this->check_other_codes();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		return RS274NGC_OK;
	}


	/*	parse_line
		If any of the following functions returns an error code, this returns that code.
			init_block
			read_items
			enhance_block
			check_items
		Otherwise, it returns RS274NGC_OK
		
		One RS274 line is read into a block and the block is checked for errors. System parameters may be reset.

		Called by:  rs274ngc_read
	*/
	function parse_line()
	{
		$function_name = "parse_line";
		
		$status = $this->init_block();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$status = $this->read_items();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$status = $this->enhance_block();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		$status = $this->check_items();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		
		return RS274NGC_OK;
	}



	/*	rs274ngc_read
		Return value: read_status
		If any error occur, it returns the error code.
		Otherwise, it returns:
		a. RS274_EXECUTE_FINISH if the first character of the close_and_downcased line is a slash, or
		b. RS274NGC_OK otherwise.
		
		Effects:
			_setup.sequence_number is incremented.
			_setup.block1 is filled with data.
			
		Called by:
			external programs.

		This reads a line of NC code from the command string. The _setup.line_length will be set by read_text. This will be zero if the line is blank or consists of nothing but a slash. If the length is not zero, this parses the line into the _setup.block1.
	*/
	function rs274ngc_read( $command )
	{
		$function_name = "rs274ngc_read";
		$read_status = $this->read_text( $command );
		
		if( $read_status == RS274NGC_EXECUTE_FINISH || $read_status == RS274NGC_OK )
		{
			if( $this->_setup->line_length != 0 )
			{
				$status = $this->parse_line();
				if( $status != RS274NGC_OK )
				{
					$this->pass_error($function_name);
					return $status;
				}
			}
		}
		else
		{
			$this->pass_error($function_name);
			return $read_status;
		}
		
		//$this->_setup->show_status(); // test
		
		return $read_status;
	}

	function convert_comment()
	{
		echo $this->_setup->block1->comment."<br/>";
	}

	/*	convert_feed_mode
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1.  g_code isn't G_93 or G_94: NCE_BUG_CODE_NOT_G93_OR_G94

		Side effects:
		The interpreter switches the machine settings to indicate the current
		feed mode (UNITS_PER_MINUTE or INVERSE_TIME).

		The canonical machine to which commands are being sent does not have
		a feed mode, so no command setting the distance mode is generated in
		this function. A comment function call is made (conditionally)
		explaining the change in mode, however.

		Called by: execute_block.
	*/
	function convert_feed_mode()
	{
		$function_name = "convert_feed_mode";
		$g_code = $this->_setup->block1->g_modes[5];
		
		if( $g_code == G_93 )
		{
			$this->return_msg =  $this->return_msg."interpreter: feed mode set to inverse time<br/>";
			$this->_setup->feed_mode = INVERSE_TIME;
		}
		else if( $g_code == G_94 )
		{
			$this->return_msg =  $this->return_msg."interpreter: feed mode set to units per minute<br/>";
			$this->_setup->feed_mode = UNITS_PER_MINUTE;
		}
		else
		{
			$this->report_error($function_name);
			return NCE_BUG_CODE_NOT_G93_OR_G94;
		}
		
		return RS274NGC_OK;
	}

	function convert_feed_rate()
	{
		$this->SET_FEED_RATE( $this->_setup->block1->f_number );
		$this->_setup->feed_rate = $this->_setup->block1->f_number;
		return RS274NGC_OK;
	}

	function convert_speed()
	{
		$this->SET_SPINDLE_SPEED($this->_setup->block1->s_number);
		$this->_setup->speed = $this->_setup->block1->s_number;
		return RS274NGC_OK;
	}

	function convert_tool_select()
	{
		$function_name = "convert_tool_select";
		
		if( $this->_setup->block1->t_number > $this->_setup->tool_max )
		{
			$this->report_error($function_name);
			return NCE_SELECTED_TOOL_SLOT_NUMBER_TOO_LARGE;
		}
		$this->SELECT_TOOL( $this->_setup->block1->t_number );
		$this->_setup->selected_tool_slot = $this->_setup->block1->t_number;
		return RS274NGC_OK;
	}

	function convert_tool_change()
	{
		$function_name = "convert_tool_change";
		
		$this->CHANGE_TOOL($this->_setup->selected_tool_slot);
		$this->_setup->current_slot = $this->_setup->selected_tool_slot;
		$this->_setup->spindle_turning = CANON_STOPPED;
		
		return RS274NGC_OK;
	}

	/*	convert_m
		If convert_tool_change returns an error code, this returns that code.
		Otherwise, it returns RS274NGC_OK.

		Side effects:
		m_codes in the block are executed. For each m_code
		this consists of making a function call(s) to a canonical machining
		function(s) and setting the machine model.

		Called by: execute_block.

		This handles four separate types of activity in order:
		1. changing the tool (m6) - which also retracts and stops the spindle.
		2. Turning the spindle on or off (m3, m4, and m5)
		3. Turning coolant on and off (m7, m8, and m9)
		4. turning a-axis clamping on and off (m26, m27) - commented out.
		5. enabling or disabling feed and speed overrides (m49, m49).
		Within each group, only the first code encountered will be executed.

		This does nothing with m0, m1, m2, m30, or m60 (which are handled in
		convert_stop).
	*/
	function convert_m()
	{
		$function_name = "convert_m";
		$status = 0;
		
		if( $this->_setup->block1->m_modes[6] != -1 )
		{
			$status = $this->convert_tool_change();
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->m_modes[7] == 3 )
		{
			$this->START_SPINDLE_CLOCKWISE();
			$this->_setup->spindle_turning = CANON_CLOCKWISE;
		}
		else if( $this->_setup->block1->m_modes[7] == 4 )
		{
			$this->START_SPINDLE_COUNTERCLOCKWISE();
			$this->_setup->block1->spindle_turning = CANON_COUNTERCLOCKWISE;
		}
		else if( $this->_setup->block1->m_modes[7] == 5 )
		{
			$this->STOP_SPINDLE_TURNING();
			$this->_setup->spindle_turning = CANON_STOPPED;
		}
		
		if( $this->_setup->block1->m_modes[8] == 7 )
		{
			$this->MIST_ON();
			$this->_setup->mist = 1;
		}
		else if( $this->_setup->block1->m_modes[8] == 8 )
		{
			$this->FLOOD_ON();
			$this->_setup->flood = 1;
		}
		else if( $this->_setup->block1->m_modes[8] == 9 )
		{
			$this->MIST_OFF();
			$this->_setup->mist == 0;
			$this->FLOOD_OFF();
			$this->_setup->flood = 0;
		}
		
		if( $this->_setup->block1->m_modes[9] == 48 )
		{
			$this->ENABLE_FEED_OVERRIDE();
			$this->ENABLE_SPEED_OVERRIDE();
			$this->_setup->feed_override = 1;
			$this->_setup->speed_override = 1;
		}
		else if( $this->_setup->block1->m_modes[9] == 49 )
		{
			$this->DISABLE_FEED_OVERRIDE();
			$this->ISABLE_SPEED_OVERRIDE();
			$this->_setup->feed_override = 0;
			$this->_setup->speed_override = 0;
		}
		
		return RS274NGC_OK;
	}

	function convert_dwell( $time )
	{
		$this->Dwell($time);
		return RS274NGC_OK;
	}

	function convert_length_units( $g_code )
	{
		$function_name = "convert_length_units";
		$status = 0;
		
		if( $this->_setup->cutter_comp_side != 0 )
		{
			$this->report_error($function_name);
			return NCE_CANNOT_CHANGE_UNITS_WITH_CUTTER_RADIUS_COMP;
		}
		if( $g_code == G_20 )
		{
			$this->USE_LENGTH_UNITS(CANON_UNITS_INCHES);
			if( $this->_setup->length_units != CANON_UNITS_INCHES )
			{
				$this->_setup->length_units = CANON_UNITS_INCHES;
				$this->_setup->current_x = ($this->_setup->current_x*INCH_PER_MM);
				$this->_setup->current_y = ($this->_setup->current_y*INCH_PER_MM);
				$this->_setup->current_x = ($this->_setup->current_x*INCH_PER_MM);
				$this->_setup->axis_offset_x = ($this->_setup->axis_offset_x*INCH_PER_MM);
				$this->_setup->axis_offset_y = ($this->_setup->axis_offset_y*INCH_PER_MM);
				$this->_setup->axis_offset_z = ($this->_setup->axis_offset_z*INCH_PER_MM);
				$this->_setup->origin_offset_x = ($this->_setup->origin_offset_x*INCH_PER_MM);
				$this->_setup->origin_offset_y = ($this->_setup->origin_offset_y*INCH_PER_MM);
				$this->_setup->origin_offset_z = ($this->_setup->origin_offset_z*INCH_PER_MM);
			}
		}
		else if( $g_code == G_21 )
		{
			$this->USE_LENGTH_UNITS(CANON_UNITS_MM);
			if( $this->_setup->length_units != CANON_UNITS_MM )
			{
				$this->_setup->length_units = CANON_UNITS_MM;
				$this->_setup->current_x = ($this->_setup->current_x*MM_PER_INCH);
				$this->_setup->current_y = ($this->_setup->current_y*MM_PER_INCH);
				$this->_setup->current_x = ($_setup->current_x*MM_PER_INCH);
				$this->_setup->axis_offset_x = ($this->_setup->axis_offset_x*MM_PER_INCH);
				$this->_setup->axis_offset_y = ($this->_setup->axis_offset_y*MM_PER_INCH);
				$this->_setup->axis_offset_z = ($this->_setup->axis_offset_z*MM_PER_INCH);
				$this->_setup->origin_offset_x = ($this->_setup->origin_offset_x*MM_PER_INCH);
				$this->_setup->origin_offset_y = ($this->_setup->origin_offset_y*MM_PER_INCH);
				$this->_setup->origin_offset_z = ($this->_setup->origin_offset_z*MM_PER_INCH);
			}
		}
		else
		{
			$this->report_error($function_name);
			return NCE_BUG_CODE_NOT_G20_OR_G21;
		}
		
		return RS274NGC_OK;
	}

	function convert_set_plane() // TBD
	{
	}

	function convert_cutter_compensation() // TBD
	{
	}

	function convert_tool_length_offset() // TBD
	{
	}

	function convert_coordinate_system() // TBD
	{
	}

	function convert_control_mode() // TBD
	{
	}

	function convert_distance_mode( $g_code )
	{
		$function_name = "convert_distance_mode";
		
		if( $g_code == G_90 )
		{
			if( $this->_setup->distance_mode != MODE_ABSOLUTE )
			{
				$this->return_msg =  $this->return_msg."interpreter: distance mode changed to absolute<br/>";
				$this->_setup->distance_mode = MODE_ABSOLUTE;
			}
		}
		else if( $g_code == G_91 )
		{
			if( $this->_setup->distance_mode != MODE_INCREMENTAL )
			{
				$this->return_msg =  $this->return_msg."interpreter: distance mode changed to incremental<br/>";
				$this->_setup->distance_mode = MODE_INCREMENTAL;
			}
		}
		else 
		{
			$this->report_error($function_name);
			return NCE_BUG_CODE_NOT_G90_OR_G91;
		}
		
		return RS274NGC_OK;
	}

	function convert_retract_mode() // TBD
	{
	}

	function convert_modal_0()  // TBD
	{
	}

	/*	find_ends
		Side effects:
		The values of px, py, pz are set

		Called by:
		convert_arc
		convert_home
		convert_probe
		convert_straight

		This finds the coordinates of a point, "end", in the currently
		active coordinate system, and sets the values of the pointers to the
		coordinates (which are the arguments to the function).

		In all cases, if no value for the coodinate is given in the block, the
		current value for the coordinate is used. When cutter radius
		compensation is on, this function is called before compensation
		calculations are performed, so the current value of the programmed
		point is used, not the current value of the actual current_point.

		There are three cases for when the coordinate is included in the block:

		1. G_53 is active. This means to interpret the coordinates as machine
		coordinates. That is accomplished by adding the two offsets to the
		coordinate given in the block.

		2. Absolute coordinate mode is in effect. The coordinate in the block
		is used.

		3. Incremental coordinate mode is in effect. The coordinate in the
		block plus either (i) the programmed current position - when cutter
		radius compensation is in progress, or (2) the actual current position.
	*/
	function find_ends( &$px, &$py, &$pz )
	{
		$mode = $this->_setup->distance_mode;
		$middle = ($this->_setup->program_x != UNKNOWN);
		$comp = ($this->_setup->cutter_comp_side != 0);
		
		if( $this->_setup->block1->g_modes[0] == G_53 )
		{
			// tbd
		}
		else if( $mode == MODE_ABSOLUTE )
		{
			if( $this->_setup->block1->x_flag == 1 )
				$px = $this->_setup->block1->x_number;
			else if( $comp && $middle )
				$px = $this->_setup->program_x;
			else
				$px = $this->_setup->current_x;
				
			if( $this->_setup->block1->y_flag == 1 )
				$py = $this->_setup->block1->y_number;
			else if( $comp && $middle )
				$py = $this->_setup->program_y;
			else
				$py = $this->_setup->current_y;
			
			if( $this->_setup->block1->z_flag == 1 )
				$pz = $this->_setup->block1->z_number;
			else if( $comp && $middle )
				$pz = $this->_setup->program_z;
			else
				$pz = $this->_setup->current_z;
		}
		else /* mode is MODE_INCREMENTAL */
		{
			if( $this->_setup->block1->x_flag == 1 )
			{
				if( $comp && $middle )
					$px = $this->_setup->block1->x_number + $this->_setup->program_x;
				else
					$px = $this->_setup->block1->x_number + $this->_setup->current_x;
			}
			else
			{
				if( $comp && $middle )
					$px = $this->_setup->program_x;
				else
					$px = $this->_setup->current_x;
			}
			
			if( $this->_setup->block1->y_flag == 1 )
			{
				if( $comp && $middle )
					$py = $this->_setup->block1->y_number + $this->_setup->program_y;
				else
					$py = $this->_setup->block1->y_number + $this->_setup->current_y;
			}
			else
			{
				if( $comp && $middle )
					$py = $this->_setup->program_y;
				else
					$py = $this->_setup->current_y;
			}
			
			if( $this->_setup->block1->z_flag == 1 )
			{
				if( $comp && $middle )
					$pz = $this->_setup->block1->z_number + $this->_setup->program_z;
				else
					$pz = $this->_setup->block1->z_number + $this->_setup->current_z;
			}
			else
			{
				if( $comp && $middle )
					$pz = $this->_setup->program_z;
				else
					$pz = $this->_setup->current_z;
			}
		}
	}

	/*	convert_straight
		If convert_straight_comp1 or convert_straight_comp2 is called
		and returns an error code, this returns that code.
		If any of the following errors occur, this returns the error shown.
		Otherwise, it returns RS274NGC_OK.
		1. x, y, z, a, b, and c are all missing from the block:
		NCE_ALL_AXES_MISSING_WITH_G0_OR_G1
		2. The value of move is not G_0 or G_1:
		NCE_BUG_CODE_NOT_G0_OR_G1
		3. A straight feed (g1) move is called with feed rate set to 0:
		NCE_CANNOT_DO_G1_WITH_ZERO_FEED_RATE
		4. A straight feed (g1) move is called with inverse time feed in effect
		but no f word (feed time) is provided:
		NCE_F_WORD_MISSING_WITH_INVERSE_TIME_G1_MOVE
		5. A move is called with G53 and cutter radius compensation on:
		NCE_CANNOT_USE_G53_WITH_CUTTER_RADIUS_COMP

		Side effects:
		This executes a STRAIGHT_FEED command at cutting feed rate
		(if move is G_1) or a STRAIGHT_TRAVERSE command (if move is G_0).
		It also updates the setting of the position of the tool point to the
		end point of the move. If cutter radius compensation is on, it may
		also generate an arc before the straight move. Also, in INVERSE_TIME
		feed mode, SET_FEED_RATE will be called the feed rate setting changed.

		Called by: convert_motion.

		The approach to operating in incremental distance mode (g91) is to
		put the the absolute position values into the block before using the
		block to generate a move.

		In inverse time feed mode, a lower bound of 0.1 is placed on the feed
		rate so that the feed rate is never set to zero. If the destination
		point is the same as the current point, the feed rate would be
		calculated as zero otherwise.
	*/
	function convert_straight( $motion )
	{
		$function_name = "convert_straight";
		$status = 0;
		
		$end_x = 0;
		$end_y = 0;
		$end_z = 0;
		
		if( $motion == G_1 )
		{
			if( $this->_setup->feed_mode == UNITS_PER_MINUTE )
			{
				if( $this->_setup->feed_rate == 0 )
				{
					$this->report_error($function_name);
					return NCE_CANNOT_DO_G1_WITH_ZERO_FEED_RATE;
				}
			}
			else if( $this->_setup->feed_mode == INVERSE_TIME )
			{
				if( $this->_setup->block1->f_number == -1 )
				{
					$this->report_error($function_name);
					return NCE_F_WORD_MISSING_WITH_INVERSE_TIME_G1_MOVE;
				}
			}
		}
		
		$this->_setup->motion_mode = $motion;
		$this->find_ends( $end_x, $end_y, $end_z ); // tbd
		
		if( $this->_setup->cutter_comp_side != 0 && $this->_setup->cutter_comp_radius > 0 )
		{
			if( $this->_setup->block1->g_modes[0] == G_53 )
			{
				$this->report_error($function_name);
				return NCE_CANNOT_USE_G53_WITH_CUTTER_RADIUS_COMP;
			}
			
			if( $this->_setup->program_x == UNKNOWN )
			{
				$status = convert_straight_comp1( $motion, $end_x, $end_y, $end_z ); // tbd
				if( $status != RS274NGC_OK )
				{
					$this->pass_error($function_name);
					return $status;
				}
			}
			else
			{
				$status = $this->convert_straight_comp2( $motion, $end_x, $end_y, $end_z ); // tbd
				if( $status != RS274NGC_OK )
				{
					$this->pass_error($function_name);
					return $status;
				}
			}
		}
		else if( $motion == G_0 )
		{	
			$this->STRAIGHT_TRAVERSE($end_x, $end_y, $end_z);
			$this->_setup->current_x = $end_x;
			$this->_setup->current_y = $end_y;
			
			$index = count($this->trajectory);
			if( $this->_setup->length_units == CANON_UNITS_MM )
				$this->trajectory[$index] = Array(0,$end_x/25.4,$end_y/25.4,$end_z/25.4);
			else
				$this->trajectory[$index] = Array(0,$end_x,$end_y,$end_z);
		}
		else if( $motion == G_1 )
		{
			if( $this->_setup->feed_mode == INVERSE_TIME )
				$this->inverse_time_rate_straight( $end_x, $end_y, $end_z ); // tbd
			$this->STRAIGHT_FEED($end_x, $end_y, $end_z);
			$this->_setup->current_x = $end_x;
			$this->_setup->current_y = $end_y;
			
			$index = count($this->trajectory);
			if( $this->_setup->length_units == CANON_UNITS_MM )
				$this->trajectory[$index] = Array(1,$end_x/25.4,$end_y/25.4,$end_z/25.4);
			else
				$this->trajectory[$index] = Array(1,$end_x,$end_y,$end_z);
		}
		else
		{
			$this->report_error($function_name);
			return NCE_BUG_CODE_NOT_G0_OR_G1;
		}
		
		$this->_setup->current_z = $end_z;
		
		return RS274NGC_OK;
	}

	/*	arc_data_ijk
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The two calculable values of the radius differ by more than
		tolerance: NCE_RADIUS_TO_END_OF_ARC_DIFFERS_FROM_RADIUS_TO_START
		2. The move code is not G_2 or G_3: NCE_BUG_CODE_NOT_G2_OR_G3
		3. Either of the two calculable values of the radius is zero:
		NCE_ZERO_RADIUS_ARC

		Side effects:
		This finds and sets the values of center_x, center_y, and turn.

		Called by:
		convert_arc2
		convert_arc_comp2

		This finds the center coordinates and number of full or partial turns
		counterclockwise of a helical or circular arc in ijk-format. This
		function is used by convert_arc2 for all three planes, so "x" and
		"y" really mean "first_coordinate" and "second_coordinate" wherever
		they are used here as suffixes of variable names. The i and j prefixes
		are handled similarly.
	*/
	function arc_data_ijk( $motion, $current_x, $current_y, $end_x, $end_y, $i_number, $j_number, &$center_x, &$center_y, &$turn, $tolerance )
	{
		$function_name = "arc_data_ijk";
		$radius = 0.0;
		$radius2 = 0.0;
		
		$center_x = ( $current_x + $i_number );
		$center_y = ( $current_y + $j_number );
		
		$radius = hypot( ($center_x - $current_x), ($center_y - $current_y) );
		$radius2 = hypot( ($center_x - $end_x), ($center_y - $end_y) );
		
		if( $radius == 0 && $radius2 == 0 )
		{
			$this->report_error($function_name);
			return NCE_ZERO_RADIUS_ARC;
		}
		if( abs($radius-$radius2) > $tolerance )
		{
			$this->report_error($function_name);
			return NCE_RADIUS_TO_END_OF_ARC_DIFFERS_FROM_RADIUS_TO_START;
		}
		
		if( $motion == G_2 )
			$turn = -1;
		else if( $motion == G_3 )
			$turn = 1;
		else
		{
			$this->report_error($function_name);
			return NCE_BUG_CODE_NOT_G2_OR_G3;
		}
		
		return RS274NGC_OK;
	}

	function convert_arc2( $motion, &$current1, &$current2, &$current3, $end1, $end2, $end3, $offset1, $offset2 )
	{
		$function_name = "convert_arc2";
		$status = 0;
		$center1 = 0;
		$center2 = 0;
		$turn = 0;
		$tolerance = TOLERANCE_MM;
		if( $this->_setup->length_units == CANON_UNITS_INCHES )
			$tolerance = TOLERANCE_INCH;
		
		if( $this->_setup->block1->r_flag )
		{/*
			$status = arc_data_r($motion, $current1, $current2, $end1, $end2, $this->_setup->r_number, $center1, $center2, $turn);
			if( $status != RS274NGC_OK )
			{
				pass_error($function_name);
				return $status;
			}*/
		}
		else
		{
			$status = $this->arc_data_ijk($motion, $current1, $current2, $end1, $end2, $offset1, $offset2, $center1, $center2, $turn, $tolerance);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		/*
		if( $this->_setup->feed_mode == INVERSE_TIME )
			inverse_time_rate_arc();*/
			
		$this->ARC_FEED( $end1, $end2, $center1, $center2, $turn, $end3 );
		
		$current1 = $end1;
		$current2 = $end2;
		$current3 = $end3;
		
		return RS274NGC_OK;
	}

	/*	convert_arc
		If one of the following functions returns an error code,
		this returns that error code.
		convert_arc_comp1
		convert_arc_comp2
		convert_arc2
		If any of the following errors occur, this returns the error code shown.
		Otherwise, this returns RS274NGC_OK.
		1. The block has neither an r value nor any i,j,k values:
		NCE_R_I_J_K_WORDS_ALL_MISSING_FOR_ARC
		2. The block has both an r value and one or more i,j,k values:
		NCE_MIXED_RADIUS_IJK_FORMAT_FOR_ARC
		3. In the ijk format the XY-plane is selected and
		the block has a k value: NCE_K_WORD_GIVEN_FOR_ARC_IN_XY_PLANE
		4. In the ijk format the YZ-plane is selected and
		the block has an i value: NCE_I_WORD_GIVEN_FOR_ARC_IN_YZ_PLANE
		5. In the ijk format the XZ-plane is selected and
		the block has a j value: NCE_J_WORD_GIVEN_FOR_ARC_IN_XZ_PLANE
		6. In either format any of the following occurs.
		a. The XY-plane is selected and the block has no x or y value:
		NCE_X_AND_Y_WORDS_MISSING_FOR_ARC_IN_XY_PLANE
		b. The YZ-plane is selected and the block has no y or z value:
		NCE_Y_AND_Z_WORDS_MISSING_FOR_ARC_IN_YZ_PLANE
		c. The ZX-plane is selected and the block has no z or x value:
		NCE_X_AND_Z_WORDS_MISSING_FOR_ARC_IN_XZ_PLANE
		7. The selected plane is an unknown plane:
		NCE_BUG_PLANE_NOT_XY_YZ__OR_XZ
		8. The feed rate mode is UNITS_PER_MINUTE and feed rate is zero:
		NCE_CANNOT_MAKE_ARC_WITH_ZERO_FEED_RATE
		9. The feed rate mode is INVERSE_TIME and the block has no f word:
		NCE_F_WORD_MISSING_WITH_INVERSE_TIME_ARC_MOVE

		Side effects:
		This generates and executes an arc command at feed rate
		(and, possibly a second arc command). It also updates the setting
		of the position of the tool point to the end point of the move.

		Called by: convert_motion.

		This converts a helical or circular arc.  The function calls:
		convert_arc2 (when cutter radius compensation is off) or
		convert_arc_comp1 (when cutter comp is on and this is the first move) or
		convert_arc_comp2 (when cutter comp is on and this is not the first move).

		If the ijk format is used, at least one of the offsets in the current
		plane must be given in the block; it is common but not required to
		give both offsets. The offsets are always incremental [NCMS, page 21].
	*/
	function convert_arc( $motion )
	{
		$function_name = "convert_arc";
		$status = 0;
		$first = 0;
		if( $this->_setup->program_x == UNKNOWN )
			$first = 1;
		$ijk_flag = 0;
		if( $this->_setup->block1->i_flag || $this->_setup->block1->j_flag || $this->_setup->block1->k_flag )
			$ijk_flag = 1;
		$end_x = 0;
		$end_y = 0;
		$end_z = 0;
		
		if( $this->_setup->block1->r_flag != 1 && $ijk_flag != 1 )
		{
			$this->report_error($function_name);
			return NCE_R_I_J_K_WORDS_ALL_MISSING_FOR_ARC;
		}
		if( $this->_setup->block1->r_flag == 1 && $ijk_flag == 1 )
		{
			$this->report_error($function_name);
			return NCE_MIXED_RADIUS_IJK_FORMAT_FOR_ARC;
		}
		
		if( $this->_setup->feed_mode == UNITS_PER_MINUTE )
		{
			if( $this->_setup->feed_rate == 0 )
			{
				$this->report_error($function_name);
				return NCE_CANNOT_MAKE_ARC_WITH_ZERO_FEED_RATE;
			}
		}
		else if( $this->_setup->feed_mode == INVERSE_TIME )
		{
			if( $this->_setup->block1->f_number == -1 )
			{
				$this->report_error($function_name);
				return NCE_F_WORD_MISSING_WITH_INVERSE_TIME_ARC_MOVE;
			}
		}
		
		if( $ijk_flag )
		{
			if( $this->_setup->plane == CANON_PLANE_XY )
			{
				if( $this->_setup->block1->k_flag )
				{
					$this->report_error($function_name);
					return NCE_K_WORD_GIVEN_FOR_ARC_IN_XY_PLANE;
				}
				if( $this->_setup->block1->i_flag == 0 )
					$this->_setup->block1->i_number = 0.0;
				else if( $this->_setup->block1->j_flag == 0 )
					$this->_setup->block1->j_number = 0.0;
			}
			else if( $this->_setup->plane == CANON_PLANE_YZ )
			{
				if( $this->_setup->block1->i_flag )
				{
					$this->report_error($function_name);
					return NCE_I_WORD_GIVEN_FOR_ARC_IN_YZ_PLANE;
				}
				if( $this->_setup->block1->j_flag == 0 )
					$this->_setup->block1->j_number = 0.0;
				else if( $this->_setup->k_flag == 0 )
					$this->_setup->block1->k_number = 0.0;
			}
			else if( $this->_setup->plane == CANON_PLANE_XZ )
			{
				if( $this->_setup->block1->j_flag )
				{
					$this->report_error($function_name);
					return NCE_J_WORD_GIVEN_FOR_ARC_IN_XZ_PLANE;
				}
				if( $this->_setup->block1->i_flag == 0 )
					$this->_setup->block1->i_number = 0.0;
				else if( $this->_setup->k_flag == 0 )
					$this->_setup->block1->k_number = 0.0;
			}
			else
			{
				$this->report_error($function_name);
				return NCE_BUG_PLANE_NOT_XY_YZ_OR_XZ;
			}
		}
		else; /* r format arc; no other checks needed specific to this format */
		
		if( $this->_setup->plane == CANON_PLANE_XY )
		{
			if( ($this->_setup->block1->x_flag==0) && ($this->_setup->block1->y_flag==0) )
			{
				$this->report_error($function_name);
				return NCE_X_AND_Y_WORDS_MISSING_FOR_ARC_IN_XY_PLANE;
			}
		}
		else if( $this->_setup->plane == CANON_PLANE_YZ )
		{
			if( ($this->_setup->block1->y_flag==0) && ($this->_setup->block1->z_flag==0) )
			{
				$this->report_error($function_name);
				return NCE_Y_AND_Z_WORDS_MISSING_FOR_ARC_IN_YZ_PLANE;
			}
		}
		else if( $this->_setup->plane == CANON_PLANE_XZ )
		{
			if( ($this->_setup->block1->x_flag==0) && ($this->_setup->block1->z_flag==0) )
			{
				$this->report_error($function_name);
				return NCE_X_AND_Z_WORDS_MISSING_FOR_ARC_IN_XZ_PLANE;
			}
		}
		
		$this->find_ends( $end_x, $end_y, $end_z );
		
		$this->_setup->motion_mode = $motion;
		
		if( $this->_setup->plane == CANON_PLANE_XY )
		{
			if( $this->_setup->cutter_comp_side == 0 || $this->_setup->cutter_comp_radius == 0 )
			{
				$status = $this->convert_arc2( $motion, $this->_setup->current_x, $this->_setup->current_y, $this->_setup->current_z, $end_x, $end_y, $end_z, $this->_setup->block1->i_number, $this->_setup->block1->j_number );
				if( $status != RS274NGC_OK )
				{
					$this->pass_error($function_name);
					return $status;
				}
			}
			else if($first) // tbd
			{
				
			}
			else // tbd
			{
			}
		}
		else if( $this->_setup->plane == CANON_PLANE_XZ )
		{
			$status = $this->convert_arc2( $motion, $this->_setup->current_z, $this->_setup->current_x, $this->_setup->current_y, $end_z, $end_x, $end_y, $this->_setup->block1->k_number, $this->_setup->block1->i_number );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		else if( $this->_setup->plane == CANON_PLANE_YZ )
		{
			$status = $this->convert_arc2( $motion, $this->_setup->current_y, $this->_setup->current_z, $this->_setup->current_x, $end_y, $end_z, $end_x, $this->_setup->j_number, $this->_setup->k_number );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		else
		{
			$this->report_error($function_name);
			return NCE_BUG_PLANE_NOT_XY_YZ_OR_XZ;
		}
		
		return RS274NGC_OK;
	}
	
	function cycle_feed( $plane, $end1, $end2, $end3 )
	{
		$function_name = "cycle_feed";
		
		if( $plane == CANON_PLANE_XY )
			$this->STRAIGHT_FEED( $end1, $end2, $end3 );
		else if( $plane == CANON_PLANE_YZ )
			$this->STRAIGHT_FEED( $end3, $end1, $end2 );
		else 
			$this->STRAIGHT_FEED( $end2, $end3, $end1 );
		
		return RS274NGC_OK;
	}
	
	function cycle_traverse( $plane, $end1, $end2, $end3 )
	{
		$function_name = "cycle_traverse";
		
		if( $plane == CANON_PLANE_XY )
			$this->STRAIGHT_TRAVERSE( $end1, $end2, $end3 );
		else if( $plane == CANON_PLANE_YZ )
			$this->STRAIGHT_TRAVERSE( $end3, $end1, $end2 );
		else 
			$this->STRAIGHT_TRAVERSE( $end2, $end3, $end1 );
		
		return RS274NGC_OK;
	}
	
	/*	convert_cycle_g81
		Called by:
		convert_cycle_xy
		convert_cycle_yz
		convert_cycle_zx

		For the XY plane, this implements the following RS274/NGC cycle, which is usually drilling:
		1. Move the z-axis only at the current feed rate to the specified bottom_z.
		2. Retract the z-axis at traverse rate to clear_z.

		See [NCMS, page 99].

		CYCLE_MACRO has positioned the tool at (x, y, r, a, b, c) when this starts.

		For the XZ and YZ planes, this makes analogous motions.
	*/
	function convert_cycle_g81( $plane, $x, $y, $clear_z, $bottom_z )
	{
		$function_name = "convert_cycle_g81";
		
		//$this->return_msg = $this->return_msg."interpreter: simple drill:($x, $y, $bottom_z)<br/>";
		
		$this->cycle_feed( $plane, $x, $y, $bottom_z );
		$this->cycle_traverse( $plane, $x, $y, $clear_z );
		
		$index = count($this->trajectory);
		$this->trajectory[$index] = Array(0,$x,$y,$clear_z);
		$index = count($this->trajectory);
		$this->trajectory[$index] = Array(81,$x,$y,$bottom_z);
		
		return RS274NGC_OK;
	}
	
	function convert_cycle_g83( $plane, $x, $y, $r, $clear_z, $bottom_z, $delta )
	{
		$function_name = "convert_cycle_g83";
		$current_depth = 0.0;
		$rapid_delta = 0.0;
		
		$rapid_delta = G83_RAPID_DELTA;
		if( $this->_setup->length_units == CANON_UNITS_MM )
			$rapid_delta = ( $rapid_delta * 25.4 );
			
		for( $current_depth=($r-$delta); $current_depth>$bottom_z; $current_depth=($current_depth-$delta) )
		{
			$this->cycle_feed( $plane, $x, $y, $current_depth );
			$this->cycle_traverse( $plane, $x, $y, $clear_z );
			$this->cycle_traverse( $plane, $x, $y, $current_depth+$rapid_delta );
		}
		
		$this->cycle_feed( $plane, $x, $y, $bottom_z );
		$this->cycle_traverse( $plane, $x, $y, $clear_z );
		
		$index = count($this->trajectory);
		$this->trajectory[$index] = Array(0,$x,$y,$clear_z);
		$index = count($this->trajectory);
		$this->trajectory[$index] = Array(83,$x,$y,$bottom_z,$delta);
		
		return RS274NGC_OK;
	}
	
	/*	convert_cycle_xy
		If any of the specific functions called returns an error code,
		this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The z-value is not given the first time this code is called after
		some other motion mode has been in effect:
		NCE_Z_VALUE_UNSPECIFIED_IN_XY_PLANE_CANNED_CYCLE
		2. The r clearance plane is below the bottom_z:
		NCE_R_LESS_THAN_Z_IN_CYCLE_IN_XY_PLANE
		3. the distance mode is neither absolute or incremental:
		NCE_BUG_DISTANCE_MODE_NOT_G90_OR_G91
		4. G82, G86, G88, or G89 is called when it is not already in effect,
		and no p number is in the block:
		NCE_DWELL_TIME_P_WORD_MISSING_WITH_G82
		NCE_DWELL_TIME_P_WORD_MISSING_WITH_G86
		NCE_DWELL_TIME_P_WORD_MISSING_WITH_G88
		NCE_DWELL_TIME_P_WORD_MISSING_WITH_G89
		5. G83 is called when it is not already in effect,
		and no q number is in the block: NCE_Q_WORD_MISSING_WITH_G83
		6. G87 is called when it is not already in effect,
		and any of the i number, j number, or k number is missing:
		NCE_I_WORD_MISSING_WITH_G87
		NCE_J_WORD_MISSING_WITH_G87
		NCE_K_WORD_MISSING_WITH_G87
		7. the G code is not between G_81 and G_89.
		NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED

		Side effects:
		A number of moves are made to execute the g-code

		Called by: convert_cycle

		The function does not require that any of x,y,z, or r be specified in
		the block, except that if the last motion mode command executed was
		not the same as this one, the r-value and z-value must be specified.

		This function is handling the repeat feature of RS274/NGC, wherein
		the L word represents the number of repeats [NCMS, page 99]. We are
		not allowing L=0, contrary to the manual. We are allowing L > 1
		in absolute distance mode to mean "do the same thing in the same
		place several times", as provided in the manual, although this seems
		abnormal.

		In incremental distance mode, x, y, and r values are treated as
		increments to the current position and z as an increment from r.  In
		absolute distance mode, x, y, r, and z are absolute. In g87, i and j
		will always be increments, regardless of the distance mode setting, as
		implied in [NCMS, page 98], but k (z-value of top of counterbore) will
		be an absolute z-value in absolute distance mode, and an increment
		(from bottom z) in incremental distance mode.

		If the r position of a cycle is above the current_z position, this
		retracts the z-axis to the r position before moving parallel to the
		XY plane.

		In the code for this function, there is a nearly identical "for" loop
		in every case of the switch. The loop is the done with a compiler
		macro, "CYCLE_MACRO" so that the code is easy to read, automatically
		kept identical from case to case and, and much shorter than it would
		be without the macro. The loop could be put outside the switch, but
		then the switch would run every time around the loop, not just once,
		as it does here. The loop could also be placed in the called
		functions, but then it would not be clear that all the loops are the
		same, and it would be hard to keep them the same when the code is
		modified.  The macro would be very awkward as a regular function
		because it would have to be passed all of the arguments used by any of
		the specific cycles, and, if another switch in the function is to be
		avoided, it would have to passed a function pointer, but the different
		cycle functions have different arguments so the type of the pointer
		could not be declared unless the cycle functions were re-written to
		take the same arguments (in which case most of them would have several
		unused arguments).

		The motions within the CYCLE_MACRO (but outside a specific cycle) are
		a straight traverse parallel to the selected plane to the given
		position in the plane and a straight traverse of the third axis only
		(if needed) to the r position.

		The CYCLE_MACRO is defined here but is also used in convert_cycle_yz
		and convert_cycle_zx. The variables aa, bb, and cc are used in
		CYCLE_MACRO and in the other two functions just mentioned. Those
		variables represent the first axis of the selected plane, the second
		axis of the selected plane, and third axis which is perpendicular to
		the selected plane.  In this function aa represents x, bb represents
		y, and cc represents z. This usage makes it possible to have only one
		version of each of the cycle functions.  The cycle_traverse and
		cycle_feed functions help accomplish this.

		The height of the retract move at the end of each repeat of a cycle is
		determined by the setting of the retract_mode: either to the r
		position (if the retract_mode is R_PLANE) or to the original
		z-position (if that is above the r position and the retract_mode is
		not R_PLANE). This is a slight departure from [NCMS, page 98], which
		does not require checking that the original z-position is above r.

		The rotary axes may not move during a canned cycle.
	*/
	function convert_cycle_xy($motion)
	{
		$function_name = "convert_cycle_xy";
		$status = 0;
		$plane = CANON_PLANE_XY;
		$aa = 0;
		$aa_increment = 0;
		$bb = 0;
		$bb_increment = 0;
		$cc = 0;
		$clear_cc = 0;
		$i = 0;
		$j = 0;
		$k = 0;
		$old_cc = 0;
		$r = 0;
		$repeat = 0;
		$save_mode = 0;
		
		if( $this->_setup->motion_mode != $motion )
		{
			if( $this->_setup->block1->z_flag == 0 )
			{
				$this->report_error($function_name);
				return NCE_Z_VALUE_UNSPECIFIED_IN_XY_PLANE_CANNED_CYCLE;
			}
		}
		$this->_setup->block1->z_number = ($this->_setup->block1->z_flag == 1 )? $this->_setup->block1->z_number : $this->_setup->cycle_cc;
		$old_cc = $this->_setup->current_z;
		
		if( $this->_setup->distance_mode == MODE_ABSOLUTE )
		{
			$aa_increment = 0.0;
			$bb_increment = 0.0;
			$r = $this->_setup->block1->r_number;
			$cc = $this->_setup->block1->z_number;
			$aa = ($this->_setup->block1->x_flag == 1)? $this->_setup->block1->x_number : $this->_setup->current_x;
			$bb = ($this->_setup->block1->y_flag == 1)? $this->_setup->block1->y_number : $this->_setup->current_y;
		}
		else if( $this->_setup->distance_mode == MODE_INCREMENTAL )
		{
			$aa_increment = $this->_setup->block1->x_number;
			$bb_increment = $this->_setup->block1->y_number;
			$r = ($this->_setup->block1->r_number + $old_cc);
			$cc = ( $r + $this->_setup->block1->z_number );
			$aa = $this->_setup->current_x;
			$bb = $this->_setup->current_y;
		}
		else
		{
			$this->report_error($function_name);
			return NCE_BUG_DISTANCE_MODE_NOT_G90_OR_G91;
		}
		
		if( $r < $cc )
		{
			$this->report_error($function_name);
			return NCE_R_LESS_THAN_Z_IN_CYCLE_IN_XY_PLANE;
		}
		
		if( $old_cc < $r )
		{
			$this->STRAIGHT_TRAVERSE( $this->_setup->current_x, $this->_setup->current_y, $r );
			$old_cc = $r;
		}
		
		$clear_cc = ($this->_setup->retract_mode == R_PLANE)? $r : $old_cc;
		
		$save_mode = $this->GET_EXTERNAL_MOTION_CONTROL_MODE();
		if( $save_mode != CANON_EXACT_PATH )
			$this->SET_MOTION_CONTROL_MODE(CANON_EXACT_PATH);
		
		switch($motion)
		{
			case G_81:
				for( $repeat = $this->_setup->block1->l_number; $repeat > 0; $repeat-- )
				{
					$aa = ($aa + $aa_increment);
					$bb = ($bb + $bb_increment);
					$this->cycle_traverse($plane, $aa, $bb, $old_cc);
					if( $old_cc != $r )
						$this->cycle_traverse( $plane, $aa, $bb, $r );
					$status = $this->convert_cycle_g81( CANON_PLANE_XY, $aa, $bb, $clear_cc, $cc );
					if( $status != RS274NGC_OK )
					{
						$this->pass_error( $function_name );
						return $status;
					}
					$old_cc = $clear_cc;
				}
				break;
			case G_82:
				
				break;
			case G_83:
				if( $this->_setup->motion_mode != G_83 && $this->_setup->block1->q_number == -1.0 )
				{
					$this->report_error( $function_name );
					return NCE_Q_WORD_MISSING_WITH_G83;
				}
				if( $this->_setup->block1->q_number == -1.0 )
					$this->_setup->block1->q_number = $this->_setup->cycle_q;
				else
					$this->_setup->block1->q_number = $this->_setup->block1->q_number;
					
				for( $repeat = $this->_setup->block1->l_number; $repeat > 0; $repeat-- )
				{
					$aa = ($aa + $aa_increment);
					$bb = ($bb + $bb_increment);
					$this->cycle_traverse($plane, $aa, $bb, $old_cc);
					if( $old_cc != $r )
						$this->cycle_traverse( $plane, $aa, $bb, $r );
					$status = $this->convert_cycle_g83( CANON_PLANE_XY, $aa, $bb, $r, $clear_cc, $cc, $this->_setup->block1->q_number );
					if( $status != RS274NGC_OK )
					{
						$this->pass_error( $function_name );
						return $status;
					}
					$old_cc = $clear_cc;
				}
				
				$this->_setup->cycle_q = $this->_setup->block1->q_number;
				break;
			case G_84:
				
				break;
			case G_85:
				
				break;
			case G_86:
				
				break;
			case G_87:
				
				break;
			case G_88:
				
				break;
			case G_89:
				
				break;
			default:
				$this->report_error($function_name);
				return NCE_BUG_FUNCTION_SHOULD_NOT_HAVE_BEEN_CALLED;
		}
		
		$this->_setup->current_x = $aa;
		$this->_setup->current_y = $bb;
		$this->_setup->current_z = $clear_cc;
		$this->_setup->cycle_cc = $this->_setup->block1->z_number;
		
		if( $save_mode != CANON_EXACT_PATH )
			$this->SET_MOTION_CONTROL_MODE($save_mode);
		
		return RS274NGC_OK;
	}
	
	/*	convert_cycle
		If any of the specific functions called returns an error code,
		this returns that code.
		If any of the following errors occur, this returns the error code shown.
		Otherwise, it returns RS274NGC_OK.
		1. The r-value is not given the first time this code is called after
		some other motion mode has been in effect:
		NCE_R_CLEARANCE_PLANE_UNSPECIFIED_IN_CYCLE
		2. The l number is zero: NCE_CANNOT_DO_ZERO_REPEATS_OF_CYCLE
		3. The currently selected plane in not XY, YZ, or XZ.
		NCE_BUG_PLANE_NOT_XY_YZ_OR_XZ

		Side effects:
		A number of moves are made to execute a canned cycle. The current
		position is reset. The values of the cycle attributes in the settings
		may be reset.

		Called by: convert_motion

		This function makes a couple checks and then calls one of three
		functions, according to which plane is currently selected.

		See the documentation of convert_cycle_xy for most of the details.
	*/
	function convert_cycle( $motion )
	{
		$function_name = "convert_cycle";
		$plane = 0;
		$status = 0;
		
		$plane = $this->_setup->plane;
		if( $this->_setup->block1->r_flag == 0 )
		{
			if( $this->_setup->motion_mode == $motion )
				$this->_setup->block1->r_number = $this->_setup->cycle_r;
			else
			{
				$this->report_error( $function_name );
				return NCE_R_CLEARANCE_PLANE_UNSPECIFIED_IN_CYCLE;
			}
		}
		
		if( $this->_setup->block1->l_number == 0 )
		{
			$this->report_error( $function_name );
			return NCE_CANNOT_DO_ZERO_REPEATS_OF_CYCLE;
		}
		if( $this->_setup->block1->l_number == -1 )
			$this->_setup->block1->l_number = 1;
			
		if( $plane == CANON_PLANE_XY )
		{
			$status = $this->convert_cycle_xy($motion);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error( $function_name );
				return $status;
			}
		}
		else if( $plane == CANON_PLANE_YZ )
		{
			// tbd
		}
		else if( $plane == CANON_PLANE_XZ )
		{
			// tbd
		}
		else
		{
			$this->report_error( $function_name );
			return NCE_BUG_PLANE_NOT_XY_YZ_OR_XZ;
		}
		
		$this->_setup->cycle_l = $this->_setup->block1->l_number;
		$this->_setup->cycle_r = $this->_setup->block1->r_number;
		$this->_setup->motion_mode = $motion;
		
		return RS274NGC_OK;
	}

	/*	convert_motion
		If one of the following functions is called and returns an error code,
		this returns that code.
		convert_arc
		convert_cycle
		convert_probe
		convert_straight
		If any of the following errors occur, this returns the error shown.
		Otherwise, it returns RS274NGC_OK.
		1. The motion code is not 0,1,2,3,38.2,80,81,82,83,84,85,86,87, 88, or 89:
		NCE_BUG_UNKNOWN_MOTION_CODE

		Side effects:
		A g_code from the group causing motion (mode 1) is executed.

		Called by: convert_g.
	*/
	function convert_motion( $motion )
	{
		$function_name = "convert_motion";
		$status = 0;
		
		if( $motion == G_0 || $motion == G_1 )
		{
			$status = $this->convert_straight( $motion );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		else if( $motion == G_3 || $motion == G_2 )
		{
			$status = $this->convert_arc( $motion );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		else if( $motion == G_38_2 )
		{
			// tbd
		}
		else if( $motion == G_80 )
		{
			$this->return_msg =  $this->return_msg."interpreter: motion mode set to none<br/>";
			$this->_setup->motion_mode = G_80;
		}
		else if( $motion > G_80 && $motion < G_90 )
		{
			$status = $this->convert_cycle( $motion );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		else
		{
			$this->report_error( $function_name );
			return NCE_BUG_UNKNOWN_MOTION_CODE;
		}
		
		return RS274NGC_OK;
	}

	/*
		If one of the following functions is called and returns an error code,
		this returns that code.
		convert_control_mode
		convert_coordinate_system
		convert_cutter_compensation
		convert_distance_mode
		convert_dwell
		convert_length_units
		convert_modal_0
		convert_motion
		convert_retract_mode
		convert_set_plane
		convert_tool_length_offset
		Otherwise, it returns RS274NGC_OK.

		Side effects:
		Any g_codes in the block (excluding g93 and 94) and any implicit
		motion g_code are executed.

		Called by: execute_block.

		This takes a pointer to a block of RS274/NGC instructions (already
		read in) and creates the appropriate output commands corresponding to
		any "g" codes in the block.

		Codes g93 and g94, which set the feed mode, are executed earlier by
		execute_block before reading the feed rate.

		G codes are are executed in the following order.
		1.  mode 0, G4 only - dwell. Left here from earlier versions.
		2.  mode 2, one of (G17, G18, G19) - plane selection.
		3.  mode 6, one of (G20, G21) - length units.
		4.  mode 7, one of (G40, G41, G42) - cutter radius compensation.
		5.  mode 8, one of (G43, G49) - tool length offset
		6.  mode 12, one of (G54, G55, G56, G57, G58, G59, G59.1, G59.2, G59.3)
		- coordinate system selection.
		7.  mode 13, one of (G61, G61.1, G64) - control mode
		8.  mode 3, one of (G90, G91) - distance mode.
		9.  mode 10, one of (G98, G99) - retract mode.
		10. mode 0, one of (G10, G28, G30, G92, G92.1, G92.2, G92.3) -
		setting coordinate system locations, return to reference point 1,
		return to reference point 2, setting or cancelling axis offsets.
		11. mode 1, one of (G0, G1, G2, G3, G38.2, G80, G81 to G89) - motion or cancel.
		G53 from mode 0 is also handled here, if present.

		Some mode 0 and most mode 1 G codes must be executed after the length units
		are set, since they use coordinate values. Mode 1 codes also must wait
		until most of the other modes are set.
	*/
	function convert_g()
	{
		$function_name = "convert_g";
		$status = 0;
		
		if( $this->_setup->block1->g_modes[0] == G_4 )
		{
			$status = $this->convert_dwell($_setup->block1->p_number); // tbd
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[2] != -1 )
		{
			$status = $this->convert_set_plane($this->_setup->block1->g_modes[2]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[6] != -1 )
		{
			$status = $this->convert_length_units($this->_setup->block1->g_modes[6]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[7] != -1 )
		{
			$status = $this->convert_cutter_compensation($this->_setup->block1->g_modes[7]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[8] != -1 )
		{
			$status = $this->convert_tool_length_offset($this->_setup->block1->g_modes[8]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[12] != -1 )
		{
			$status = $this->convert_coordinate_system($this->_setup->block1->g_modes[12]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[13] != -1 )
		{
			$status = $this->convert_control_mode($this->_setup->block1->g_modes[13]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[3] != -1 )
		{
			$status = $this->convert_distance_mode($this->_setup->block1->g_modes[3]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[10] != -1 )
		{
			$status = $this->convert_retract_mode($this->_setup->block1->g_modes[10]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[0] != -1 )
		{
			$status = $this->convert_modal_0($this->_setup->block1->g_modes[0]);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->motion_to_be != -1 ) // motion_to_be is set in enhance_block
		{
			$status =$this-> convert_motion($this->_setup->block1->motion_to_be);
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		
		return RS274NGC_OK;
	}

	function convert_stop() // tbd
	{
		$this->return_msg =  $this->return_msg."interpreter: program stopped<br/>";
		return RS274NGC_EXIT;
	}


	/*	execute_block
		If convert_stop returns RS274NGC_EXIT, this returns RS274NGC_EXIT.
		If any of the following functions is called and returns an error code,
		this returns that code.
		convert_comment
		convert_feed_mode
		convert_feed_rate
		convert_g
		convert_m
		convert_speed
		convert_stop
		convert_tool_select
		Otherwise, if the probe_flag in the settings is ON, this returns
		RS274NGC_EXECUTE_FINISH.
		Otherwise, it returns RS274NGC_OK.

		Side effects:
		One block of RS274/NGC instructions is executed.

		Called by:
		rs274ngc_execute

		This converts a block to zero to many actions. The order of execution
		of items in a block is critical to safe and effective machine operation,
		but is not specified clearly in the RS274/NGC documentation.
		
		Actions are executed in the following order:
		1. any comment.
		2. a feed mode setting (g93, g94)
		3. a feed rate (f) setting if in units_per_minute feed mode.
		4. a spindle speed (s) setting.
		5. a tool selection (t).
		6. "m" commands as described in convert_m (includes tool change).
		7. any g_codes (except g93, g94) as described in convert_g.
		8. stopping commands (m0, m1, m2, m30, or m60).
		
		In inverse time feed mode, the explicit and implicit g code executions
		include feed rate setting with g1, g2, and g3. Also in inverse time
		feed mode, attempting a canned cycle cycle (g81 to g89) or setting a
		feed rate with g0 is illegal and will be detected and result in an
		error message.
	*/
	function execute_block()
	{
		$function_name = "execute_block";
		$status = 0;
		
		if( strlen( $this->_setup->block1->comment ) > 0 )
		{
			$status = $this->convert_comment( $this->_setup->block1->comment );
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->g_modes[5] != -1 )
		{
			$status = $this->convert_feed_mode();
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->f_number > -1.0 )
		{
			if( $this->_setup->feed_mode == INVERSE_TIME );
			else
			{
				$status = $this->convert_feed_rate();
				if( $status != RS274NGC_OK )
				{
					$this->pass_error($function_name);
					return $status;
				}
			}
		}
		if( $this->_setup->block1->s_number > -1.0 )
		{
			$status = $this->convert_speed();
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		if( $this->_setup->block1->t_number != -1 )
		{
			$status = $this->convert_tool_select();
			if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		$status = $this->convert_m();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		$status = $this->convert_g();
		if( $status != RS274NGC_OK )
		{
			$this->pass_error($function_name);
			return $status;
		}
		if( $this->_setup->block1->m_modes[4] != -1 )
		{
			$status = $this->convert_stop();
			if( $status == RS274NGC_EXIT )
				return RS274NGC_EXIT;
			else if( $status != RS274NGC_OK )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		
		if( $this->_setup->probe_flag == 1 )
			return RS274NGC_EXECUTE_FINISH;
		return RS274NGC_OK;
	}

	function write_g_codes() // tbd
	{
	}

	function rs274ngc_execute()
	{
		$function_name = "rs274ngc_execute";
		$status = 0;
		
		// copy parameter settings (#). For this version, keyword # is not included.
		
		if( $this->_setup->line_length != 0 )
		{
			$status = $this->execute_block();
			//write_g_codes(); // need to be done
			//write_m_codes(); // need to be done
			//write_settings(); // need to be done
			if( $status != RS274NGC_OK &&
				$status != RS274NGC_EXECUTE_FINISH &&
				$status != RS274NGC_EXIT )
			{
				$this->pass_error($function_name);
				return $status;
			}
		}
		
		return $status;
	}
/********************* functions of rs274ngc end ***********************/


/********************** functions of Canon **************************/
	private function SET_ORIGIN_OFFSETS( $x, $y, $z )
	{
		$msg = "SET_ORIGIN_OFFSETS(".$x.",".$y.",".$z.")<br/>";
		$this->return_msg = $this->return_msg.$msg;
		
		$this->_program_position_x = $this->_program_position_x + $this->_program_origin_x - $x;
		$this->_program_position_y = $this->_program_position_y + $this->_program_origin_y - $y;
		$this->_program_position_z = $this->_program_position_z + $this->_program_origin_z - $z;
		
		$this->_program_origin_x = $x;
		$this->_program_origin_y = $y;
		$this->_program_origin_z = $z;
		
		return $msg;
	}

	private function USE_LENGTH_UNITS( $in_unit )
	{
		$msg = "";
		if( $in_unit == CANON_UNITS_INCHES )
		{
			$msg = "USE_LENGTH_UNITS(CANON_UNITS_INCHES)<br/>";
			if( $this->_length_unit_type == CANON_UNITS_MM )
			{
				$this->_length_unit_type = CANON_UNITS_INCHES;
				$this->_length_unit_factor = 25.4;
				$this->_program_origin_x = ($this->_program_origin_x / 25.4);
				$this->_program_origin_y = ($this->_program_origin_y / 25.4);
				$this->_program_origin_z = ($this->_program_origin_z / 25.4);
				$this->_program_position_x = ($this->_program_position_x / 25.4 );
				$this->_program_position_y = ($this->_program_position_y / 25.4 );
				$this->_program_position_z = ($this->_program_position_z / 25.4 );
			}
		}
		else if( $in_unit == CANON_UNITS_MM )
		{
			$msg = "USE_LENGTH_UNITS(CANON_UNITS_MM)<br/>";
			if( $this->_length_unit_type == CANON_UNITS_INCHES )
			{
				$this->_length_unit_type = CANON_UNITS_MM;
				$this->_length_unit_factor = 1.0;
				$this->_program_origin_x = ($this->_program_origin_x * 25.4);
				$this->_program_origin_y = ($this->_program_origin_y * 25.4);
				$this->_program_origin_z = ($this->_program_origin_z * 25.4);
				$this->_program_position_x = ($this->_program_position_x * 25.4 );
				$this->_program_position_y = ($this->_program_position_y * 25.4 );
				$this->_program_position_z = ($this->_program_position_z * 25.4 );
			}
		}
		else
			$msg = "USE_LENGTH_UNITS(UNKNOWN)<br/>";
		
		$this->return_msg = $this->return_msg.$msg;
		
		return $msg;
	}

	private function SET_TRAVERSE_RATE( $rate )
	{
		$msg = "SET_TRAVERSE_RATE(".$rate.")<br/>";
		$this->_traverse_rate = $rate;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function STRAIGHT_TRAVERSE( $x, $y, $z )
	{
		$msg = "STRAIGHT_TRAVERSE(".$x.",".$y.",".$z.")<br/>";
		
		$this->_program_position_x = $x;
		$this->_program_position_y = $y;
		$this->_program_position_z = $z;
		
		//$index = count($this->trajectory);
		//$this->trajectory[$index] = Array(0,$x,$y,$z);
		
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function SET_FEED_RATE( $rate )
	{
		$msg = "SET_FEED_RATE(".$rate.")<br/>";
		$this->_feed_rate = $rate;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function SET_FEED_REFERENCE( $reference )
	{
		$msg = "";
		if( $reference == 1 )
			$msg = "SET_FEED_REFERENCE(CANON_WORKPIECE)<br/>";
		else
			$msg = "SET_FEED_REFERENCE(CANON_XYZ)<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function SET_MOTION_CONTROL_MODE( $mode )
	{
		$msg = "";
		if( $mode == CANON_EXACT_STOP )
		{
			$msg = "SET_MOTION_CONTROL_MODE(CANON_EXACT_STOP)<br/>";
			$this->_motion_mode = CANON_EXACT_STOP;
		}
		else if( $mode == CANON_EXACT_PATH )
		{
			$msg = "SET_MOTION_CONTROL_MODE(CANON_EXACT_PATH)<br/>";
			$this->_motion_mode = CANON_EXACT_PATH;
		}
		else if( $mode == CANON_CONTINUOUS )
		{
			$msg = "SET_MOTION_CONTROL_MODE(CANON_CONTINUOUS)<br/>";
			$this->_motion_mode = CANON_CONTINUOUS;
		}
		else
			$msg = "SET_MOTION_CONTROL_MODE(UNKNOWN)<br/>";
		
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function SELECT_PLANE( $in_plane )
	{
		$msg = "";
		if( $in_plane == CANON_PLANE_XY )
			$msg = "SELECT_PLANE(CANON_PLANE_XY)<br/>";
		else if( $in_plane == CANON_PLANE_YZ )
			$msg = "SELECT_PLANE(CANON_PLANE_YZ)<br/>";
		else if( $in_plane == CANON_PLANE_XZ )
			$msg = "SELECT_PLANE(CANON_PLANE_XZ)<br/>";
		else
			$msg = "SELECT_PLANE(UNKNOWN)<br/>";
		
		$this->_active_plane = $in_plane;
		
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function SET_CUTTER_RADIUS_COMPENSATION( $radius )
	{
		$msg = "SET_CUTTER_RADIUS_COMPENSATION(".$radius.")<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function START_CUTTER_RADIUS_COMPENSATION( $side )
	{
		$msg = "";
		if( $side == CANON_SIDE_LEFT )
			$msg = "START_CUTTER_RADIUS_COMPENSATION(LEFT)<br/>";
		else if( $sied == CANON_SIDE_RIGHT )
			$msg = "START_CUTTER_RADIUS_COMPENSATION(RIGHT)<br/>";
		else
			$msg = "START_CUTTER_RADIUS_COMPENSATION(UNKNOWN)<br/>";
		
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function STOP_CUTTER_RADIUS_COMPENSATION()
	{
		$msg = "STOP_CUTTER_RADIUS_COMPENSATION()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function START_SPEED_FEED_SYNCH()
	{
		$msg = "START_SPEED_FEED_SYNCH()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function STOP_SPEED_FEED_SYNCH()
	{
		$msg = "STOP_SPEED_FEED_SYNCH()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	/*	Machining Functions  */

	private function ARC_FEED( $first_end, $second_end, $first_axis, $second_axis, $rotation, $axis_end_point )
	{
		$msg = "ARC_FEED($first_end, $second_end, $first_axis, $second_axis, $rotation, $axis_end_point)<br/>";
		
		if( $this->_active_plane == CANON_PLANE_XY )
		{
			$this->_program_position_x = $first_end;
			$this->_program_position_y = $second_end;
			$this->_program_position_z = $axis_end_point;
		}
		else if( $this->_active_plane == CANON_PLANE_YZ )
		{
			$this->_program_position_x = $axis_end_point;
			$this->_program_position_y = $first_end;
			$this->_program_position_z = $second_end;
		}
		else
		{
			$this->_program_position_x = $second_end;
			$this->_program_position_y = $axis_end_point;
			$this->_program_position_z = $first_end;
		}
		
		$index = count($this->trajectory);
		if( $this->_setup->length_units == CANON_UNITS_MM )
			$this->trajectory[$index] = Array(2,$first_end/25.4,$second_end/25.4,$first_axis/25.4,$second_axis/25.4,$rotation);
		else
			$this->trajectory[$index] = Array(2,$first_end,$second_end,$first_axis,$second_axis,$rotation);
		
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function STRAIGHT_FEED( $x, $y, $z )
	{
		$msg = "STRAIGHT_FEED(".$x.",".$y.",".$z.")<br/>";
		
		$this->_program_position_x = $x;
		$this->_program_position_y = $y;
		$this->_program_position_z = $z;
		
		//$index = count($this->trajectory);
		//$this->trajectory[$index] = Array(1,$x,$y,$z);
		
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function STRAIGHT_PROBE( $x, $y, $z )
	{
		$msg = "STRAIGHT_PROBE()<br/>";
		
		$dx = ( $this->_program_position_x - $x );
		$dy = ( $this->_program_position_y - $y );
		$dz = ( $this->_program_position_z - $z );
		$distance = Math.sqrt( $dx*$dx + $dy*$dy + $dz*$dz );
		
		if( $distance == 0 )
		{
			$this->_program_position_x = $this->_program_position_x;
			$this->_program_position_y = $this->_program_position_y;
			$this->_program_position_z = $this->_program_position_z;
		}
		else
		{
			$backoff = 0;
			if( $this->_length_unit_type == CANON_UNITS_MM )
				$backoff = 0.254;
			else
				$backoff = 0.01;
				
			$this->_program_position_x = ($x + ($backoff*($dx/$distance)));
			$this->_program_position_y = ($y + ($backoff*($dy/$distance)));
			$this->_program_position_z = ($z + ($backoff*($dz/$distance)));
		}
		
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function DWELL( $seconds )
	{
		$msg = "DWELL(".$seconds.");<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}


	/* Spindle Functions */
	private function SPINDLE_RETRACT_TRAVERSE()
	{
		$msg = "SPINDLE_RETRACT_TRAVERSE()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function START_SPINDLE_CLOCKWISE()
	{
		$msg = "START_SPINDLE_CLOCKWISE()<br/>";
		if( $this->_spindle_turning == 0 )
			$this->_spindle_turning = CANON_STOPPED;
		else
			$this->_spindle_turning = CANON_CLOCKWISE;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function START_SPINDLE_COUNTERCLOCKWISE()
	{
		$msg = "START_SPINDLE_COUNTERCLOCKWISE()<br/>";
		if( $this->_spindle_turning == 0 )
			$this->_spindle_turning = CANON_STOPPED;
		else
			$this->_spindle_turning = CANON_COUNTERCLOCKWISE;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function SET_SPINDLE_SPEED( $rpm )
	{
		$msg = "SET_SPINDLE_SPEED(".$rpm.")<br/>";
		$this->_spindle_speed = $rpm;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function STOP_SPINDLE_TURNING()
	{
		$msg = "STOP_SPINDLE_TURNING()<br/>";
		$this->_spindle_turning = CANON_STOPPED;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function SPINDLE_RETRACT()
	{
		$msg = "SPINDLE_RETRACT()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function ORIENT_SPINDLE( $orientation, $direction )
	{
		$msg = "ORIENT_SPINDLE()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function USE_NO_SPINDLE_FORCE()
	{
		$msg = "USE_NO_SPINDLE_FORCE()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}


	/* Tool Functions */
	private function USE_TOOL_LENGTH_OFFSET( $length )
	{
		$msg = "USE_TOOL_LENGTH_OFFSET(".$length.")<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function CHANGE_TOOL( $slot )
	{
		$msg = "CHANGE_TOOL(".$slot.")<br/>";
		$this->_active_slot = $slot;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function SELECT_TOOL( $slot )
	{
		$msg = "SELECT_TOOL(".$slot.")<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}


	/* Misc Functions */
	private function CLAMP_AXIS( $axis )
	{
		$msg = "CLAMP_AXIS()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function COMMENT( $s )
	{
		$msg = $s."<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function DISABLE_FEED_OVERRIDE()
	{
	}

	private function DISABLE_SPEED_OVERRIDE()
	{
	}

	private function ENABLE_FEED_OVERRIDE()
	{
	}

	private function ENABLE_SPEED_OVERRIDE()
	{
	}

	private function FLOOD_OFF()
	{
		$msg = "FLOOD_OFF()<br/>";
		$this->_flood = 0;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function FLOOD_ON()
	{
		$msg = "FLOOD_ON()<br/>";
		$this->_flood = 1;
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function INIT_CANON()
	{
	}

	private function MESSAGE( $s )
	{
		$msg = $s."<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function MIST_ON()
	{
		$this->_mist = 1;
		$msg = "MIST_ON()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}
	
	private function MIST_OFF()
	{
		$this->_mist = 0;
		$msg = "MIST_OFF()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function PALLET_SHUTTLE()
	{}

	private function TURN_PROBE_OFF()
	{}

	private function TURN_PROBE_ON()
	{}

	private function UNCLAMP_AXIS( $aixs )
	{}

	/* Program Functions */
	private function PROGRAM_STOP()
	{
		$msg = "PROGRAM_STOP()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	private function OPTIONAL_PROGRAM_STOP()
	{
	}

	private function PROGRAM_END()
	{
		$msg = "PROGRAM_END()<br/>";
		$this->return_msg = $this->return_msg.$msg;
		return $msg;
	}

	/*	Canonical "Give me information" functions

		In general, returned values are valid only if any canonical do it commands
		that may have been called for have been executed to completion. If a 
		function returns a valid value regardless of execution, that is noted in 
		the comments below.
	*/
	function GET_EXTERNAL_FEED_RATE()
	{
		return $this->_feed_rate;
	}

	function GET_EXTERNAL_FLOOD()
	{
		return $this->_flood;
	}

	function GET_EXTERNAL_LENGTH_UNIT_FACTOR()
	{
		return (1.0/$this->_length_unit_factor);
	}

	function GET_EXTERNAL_LENGTH_UNIT_TYPE()
	{
		return $this->_length_unit_type;
	}

	function GET_EXTERNAL_MIST()
	{
		return $this->_mist;	
	}

	function GET_EXTERNAL_MOTION_CONTROL_MODE()
	{
		return $this->_motion_mode;
	}

	function GET_EXTERNAL_PLANE()
	{
		return $this->_active_plane;
	}

	function GET_EXTERNAL_POSITION_X()
	{
		return $this->_program_position_x;
	}

	function GET_EXTERNAL_POSITION_Y()
	{
		return $this->_program_position_y;
	}

	function GET_EXTERNAL_POSITION_Z()
	{
		return $this->_program_position_z;
	}

	function GET_EXTERNAL_PROBE_POSITION_X()
	{
		return $this->_probe_position_x;
	}

	function GET_EXTERNAL_PROBE_POSITION_Y()
	{
		return $this->_probe_position_y;
	}

	function GET_EXTERNAL_PROBE_POSITION_Z()
	{
		return $this->_probe_position_z;
	}

	function GET_EXTERNAL_PROBE_VALUE()
	{
		return 1.0;
	}

	function GET_EXTERNAL_QUEUE_EMPTY()
	{
		return 1;
	}

	function GET_EXTERNAL_SPEED()
	{
		return $this->_spindle_speed;
	}

	function GET_EXTERNAL_SPINDLE()
	{
		return $this->_spindle_turning;
	}

	function GET_EXTERNAL_TOOL_SLOT()
	{
		return $this->_active_slot;
	}

	function GET_EXTERNAL_TOOL_MAX()
	{
		return $this->_tool_max;
	}

	function GET_EXTERNAL_TOOL_TABLE( $pocket )
	{
		return $this->_tools[$pocket];
	}

	function GET_EXTERNAL_TRAVERSE_RATE()
	{
		return $this->_traverse_rate;
	}
/********************* functions of Canon end *************************/





	private $return_msg;
	private $trajectory;
	private $machine_state = Array();

/********************** variable of rs274ngc **************************/
	/* Interpreter global arrays for g_codes and m_codes. The nth entry
	in each array is the modal group number corresponding to the nth
	code. Entries which are -1 represent illegal codes. Remember g_codes
	in this interpreter are multiplied by 10.

	The modal g groups and group numbers defined in [NCMS, pages 71 - 73]
	(see also [Fanuc, pages 43 - 45]) are used here, except the canned
	cycles (g80 - g89), which comprise modal g group 9 in [Fanuc], are
	treated here as being in the same modal group (group 1) with the
	straight moves and arcs (g0, g1, g2,g3).  [Fanuc, page 45] says only
	one g_code from any one group may appear on a line, and we are
	following that rule. The straight_probe move, g38.2, is in group 1; it
	is not defined in [NCMS].

	Some g_codes are non-modal (g4, g10, g28, g30, g53, g92, g92.1, g92.2,
	and g92.3 here - many more in [NCMS]). [Fanuc] and [NCMS] put all
	these in the same group 0, so we do also. Logically, there are two
	subgroups, those which require coordinate values (g10, g28, g30, and
	g92) and those which do not (g4, g53, g92.1, g92.2, and g92.3).
	The subgroups are identified by itemization when necessary.

	Those in group 0 which require coordinate values may not be on the
	same line as those in group 1 (except g80) because they would be
	competing for the coordinate values. Others in group 0 may be used on
	the same line as those in group 1.

	A total of 52 G-codes are implemented.

	The groups are:
	group  0 = {g4,g10,g28,g30,g53,g92,g92.1,g92.2,g92.3} - NON-MODAL
	dwell, setup, return to ref1, return to ref2,
	motion in machine coordinates, set and unset axis offsets
	group  1 = {g0,g1,g2,g3,g38.2,g80,g81,g82,g83,g84,g85,g86,g87,g88,g89} - motion
	group  2 = {g17,g18,g19}   - plane selection
	group  3 = {g90,g91}       - distance mode
	group  5 = {g93,g94}       - feed rate mode
	group  6 = {g20,g21}       - units
	group  7 = {g40,g41,g42}   - cutter diameter compensation
	group  8 = {g43,g49}       - tool length offset
	group 10 = {g98,g99}       - return mode in canned cycles
	group 12 = {g54,g55,g56,g57,g58,g59,g59.1,g59.2,g59.3} - coordinate system
	group 13 = {g61,g61.1,g64} - control mode
	*/
	private $_gees = Array(
		/*   0 */   1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /*  20 */   1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /*  40 */   0,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /*  60 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /*  80 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 100 */   0,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 120 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 140 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 160 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 180 */   2,-1,-1,-1,-1,-1,-1,-1,-1,-1, 2,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 200 */   6,-1,-1,-1,-1,-1,-1,-1,-1,-1, 6,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 220 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 240 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 260 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 280 */   0,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 300 */   0,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 320 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 340 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 360 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 380 */  -1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 400 */   7,-1,-1,-1,-1,-1,-1,-1,-1,-1, 7,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 420 */   7,-1,-1,-1,-1,-1,-1,-1,-1,-1, 8,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 440 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 460 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 480 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 8,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 500 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 520 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 0,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 540 */  12,-1,-1,-1,-1,-1,-1,-1,-1,-1,12,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 560 */  12,-1,-1,-1,-1,-1,-1,-1,-1,-1,12,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 580 */  12,-1,-1,-1,-1,-1,-1,-1,-1,-1,12,12,12,12,-1,-1,-1,-1,-1,-1,
        /* 600 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,13,13,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 620 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 640 */  13,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 660 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 680 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 700 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 720 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 740 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 760 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 780 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 800 */   1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 820 */   1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 840 */   1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 860 */   1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 880 */   1,-1,-1,-1,-1,-1,-1,-1,-1,-1, 1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 900 */   3,-1,-1,-1,-1,-1,-1,-1,-1,-1, 3,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 920 */   0, 0, 0, 0,-1,-1,-1,-1,-1,-1, 5,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 940 */   5,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 960 */  -1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,-1,
        /* 980 */  10,-1,-1,-1,-1,-1,-1,-1,-1,-1,10,-1,-1,-1,-1,-1,-1,-1,-1,-1
	);
	
	/*
	Modal groups and modal group numbers for M codes are not described in
   [Fanuc]. We have used the groups from [NCMS] and added M60, as an
	extension of the language for pallet shuttle and stop. This version has
	no codes related to axis clamping.

	The groups are:
	group 4 = {m0,m1,m2,m30,m60} - stopping
	group 6 = {m6}               - tool change
	group 7 = {m3,m4,m5}         - spindle turning
	group 8 = {m7,m8,m9}         - coolant
	group 9 = {m48,m49}          - feed and speed override switch bypass
	*/
	private $_ems = Array(
		4,  4,  4,  7,  7,  7,  6,  8,  8,  8,
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
		4, -1, -1, -1, -1, -1, -1, -1, -1, -1,
		-1, -1, -1, -1, -1, -1, -1, -1,  9,  9,
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
		4, -1, -1, -1, -1, -1, -1, -1, -1, -1,
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1,
		-1, -1, -1, -1, -1, -1, -1, -1, -1, -1
	);
	
	/*
	This is an array of the index numbers of system parameters that must
	be included in a file used with the rs274ngc_restore_parameters
	function. The array is used by that function and by the
	rs274ngc_save_parameters function.
	*/
	private $_required_parameters = Array(
		5161, 5162, 5163,                         /* G28 home */
		5181, 5182, 5183,                     /* G30 home */
		5211, 5212, 5213,                     /* G92 offsets */
		5220,                                 /* selected coordinate */
		5221, 5222, 5223,                     /* coordinate system 1 */
		5241, 5242, 5243,                     /* coordinate system 2 */
		5261, 5262, 5263,                     /* coordinate system 3 */
		5281, 5282, 5283,                     /* coordinate system 4 */
		5301, 5302, 5303,                     /* coordinate system 5 */
		5321, 5322, 5323,                     /* coordinate system 6 */
		5341, 5342, 5343,                     /* coordinate system 7 */
		5361, 5362, 5363,                     /* coordinate system 8 */
		5381, 5382, 5383,                     /* coordinate system 9 */
		RS274NGC_MAX_PARAMETERS
	);
	
	private $_setup;
/********************* variable of rs274ngc end ***********************/


/********************** below belongs to Canon ************************/
	private $_active_plane = CANON_PLANE_XY;
	private $_active_slot = 1;
	private $_feed_rate = 0.0;
	private $_flood = 0;
	private $_length_unit_factor = 1; /* 1 for MM 25.4 for inch */
	private $_length_unit_type = CANON_UNITS_MM;
	private $_line_number = 1;
	private $_mist = 0;
	private $_motion_mode = CANON_CONTINUOUS; /*Not static.Driver writes*/
	private $_parameter_file_name = "";

	private $_probe_position_x = 0;
	private $_probe_position_y = 0;
	private $_probe_position_z = 0;

	private $_program_origin_x = 0;
	private $_program_origin_y = 0;
	private $_program_origin_z = 0;

	private $_program_position_x = 0;
	private $_program_position_y = 0;
	private $_program_position_z = 0;
	private $_spindle_speed = 0;
	private $_spindle_turning = 0;
	private $_tool_max = 68;          /*Not static. Driver reads  */
	private $_tools = Array();  /*Not static. Driver writes */
	private $_traverse_rate = 0;
/************************** Canon ended ********************************/

/***************** below belongs to rs274ngc_errors ********************/	
	private $_rs274ngc_errors = Array(
    /*   0 */ "No error",
    /*   1 */ "No error",
    /*   2 */ "No error",
    /*   3 */ "No error",
    /*   4 */ "A file is already open", // rs274ngc_open
    /*   5 */ "All axes missing with g92", // enhance_block
    /*   6 */ "All axes missing with motion code", // enhance_block
    /*   7 */ "Arc radius too small to reach end point", // arc_data_r
    /*   8 */ "Argument to acos out of range", // execute_unary
    /*   9 */ "Argument to asin out of range", // execute_unary
    /*  10 */ "Attempt to divide by zero", // execute_binary1
    /*  11 */ "Attempt to raise negative to non integer power", // execute_binary1
    /*  12 */ "Bad character used", // read_one_item
    /*  13 */ "Bad format unsigned integer", // read_integer_unsigned
    /*  14 */ "Bad number format", // read_real_number
    /*  15 */ "Bug bad g code modal group 0", // check_g_codes
    /*  16 */ "Bug code not g0 or g1", // convert_straight, convert_straight_comp1, convert_straight_comp2
    /*  17 */ "Bug code not g17 g18 or g19", // convert_set_plane
    /*  18 */ "Bug code not g20 or g21", // convert_length_units
    /*  19 */ "Bug code not g28 or g30", // convert_home
    /*  20 */ "Bug code not g2 or g3", // arc_data_comp_ijk, arc_data_ijk
    /*  21 */ "Bug code not g40 g41 or g42", // convert_cutter_compensation
    /*  22 */ "Bug code not g43 or g49", // convert_tool_length_offset
    /*  23 */ "Bug code not g4 g10 g28 g30 g53 or g92 series", // convert_modal_0
    /*  24 */ "Bug code not g61 g61 1 or g64", // convert_control_mode
    /*  25 */ "Bug code not g90 or g91", // convert_distance_mode
    /*  26 */ "Bug code not g93 or g94", // convert_feed_mode
    /*  27 */ "Bug code not g98 or g99", // convert_retract_mode
    /*  28 */ "Bug code not in g92 series", // convert_axis_offsets
    /*  29 */ "Bug code not in range g54 to g593", // convert_coordinate_system
    /*  30 */ "Bug code not m0 m1 m2 m30 m60", // convert_stop
    /*  31 */ "Bug distance mode not g90 or g91", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /*  32 */ "Bug function should not have been called", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx, read_a, read_b, read_c, read_comment, read_d, read_f, read_g, read_h, read_i, read_j, read_k, read_l, read_line_number, read_m, read_p, read_parameter, read_parameter_setting, read_q, read_r, read_real_expression, read_s, read_t, read_x, read_y, read_z
    /*  33 */ "Bug in tool radius comp", // arc_data_comp_r
    /*  34 */ "Bug plane not xy yz or xz", // convert_arc, convert_cycle
    /*  35 */ "Bug side not right or left", // convert_straight_comp1, convert_straight_comp2
    /*  36 */ "Bug unknown motion code", // convert_motion
    /*  37 */ "Bug unknown operation", // execute_binary1, execute_binary2, execute_unary
    /*  38 */ "Cannot change axis offsets with cutter radius comp", // convert_axis_offsets
    /*  39 */ "Cannot change units with cutter radius comp", // convert_length_units
    /*  40 */ "Cannot create backup file", // rs274ngc_save_parameters
    /*  41 */ "Cannot do g1 with zero feed rate", // convert_straight
    /*  42 */ "Cannot do zero repeats of cycle", // convert_cycle
    /*  43 */ "Cannot make arc with zero feed rate", // convert_arc
    /*  44 */ "Cannot move rotary axes during probing", // convert_probe
    /*  45 */ "Cannot open backup file", // rs274ngc_save_parameters
    /*  46 */ "Cannot open variable file", // rs274ngc_save_parameters
    /*  47 */ "Cannot probe in inverse time feed mode", // convert_probe
    /*  48 */ "Cannot probe with cutter radius comp on", // convert_probe
    /*  49 */ "Cannot probe with zero feed rate", // convert_probe
    /*  50 */ "Cannot put a b in canned cycle", // check_other_codes
    /*  51 */ "Cannot put a c in canned cycle", // check_other_codes
    /*  52 */ "Cannot put an a in canned cycle", // check_other_codes
    /*  53 */ "Cannot turn cutter radius comp on out of xy plane", // convert_cutter_compensation_on
    /*  54 */ "Cannot turn cutter radius comp on when on", // convert_cutter_compensation_on
    /*  55 */ "Cannot use a word", // read_a
    /*  56 */ "Cannot use axis values with g80", // enhance_block
    /*  57 */ "Cannot use axis values without a g code that uses them", // enhance_block
    /*  58 */ "Cannot use b word", // read_b
    /*  59 */ "Cannot use c word", // read_c
    /*  60 */ "Cannot use g28 or g30 with cutter radius comp", // convert_home
    /*  61 */ "Cannot use g53 incremental", // check_g_codes
    /*  62 */ "Cannot use g53 with cutter radius comp", // convert_straight
    /*  63 */ "Cannot use two g codes that both use axis values", // enhance_block
    /*  64 */ "Cannot use xz plane with cutter radius comp", // convert_set_plane
    /*  65 */ "Cannot use yz plane with cutter radius comp", // convert_set_plane
    /*  66 */ "Command too long", // read_text, rs274ngc_open
    /*  67 */ "Concave corner with cutter radius comp", // convert_arc_comp2, convert_straight_comp2
    /*  68 */ "Coordinate system index parameter 5220 out of range", // rs274ngc_init
    /*  69 */ "Current point same as end point of arc", // arc_data_r
    /*  70 */ "Cutter gouging with cutter radius comp", // convert_arc_comp1, convert_straight_comp1
    /*  71 */ "D word with no g41 or g42", // check_other_codes
    /*  72 */ "Dwell time missing with g4", // check_g_codes
    /*  73 */ "Dwell time p word missing with g82", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /*  74 */ "Dwell time p word missing with g86", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /*  75 */ "Dwell time p word missing with g88", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /*  76 */ "Dwell time p word missing with g89", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /*  77 */ "Equal sign missing in parameter setting", // read_parameter_setting
    /*  78 */ "F word missing with inverse time arc move", // convert_arc
    /*  79 */ "F word missing with inverse time g1 move", // convert_straight
    /*  80 */ "File ended with no percent sign", // read_text, rs274ngc_open
    /*  81 */ "File ended with no percent sign or program end", // read_text
    /*  82 */ "File name too long", // rs274ngc_open
    /*  83 */ "File not open", // rs274ngc_read
    /*  84 */ "G code out of range", // read_g
    /*  85 */ "H word with no g43", // check_other_codes
    /*  86 */ "I word given for arc in yz plane", // convert_arc
    /*  87 */ "I word missing with g87", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /*  88 */ "I word with no g2 or g3 or g87 to use it", // check_other_codes
    /*  89 */ "J word given for arc in xz plane", // convert_arc
    /*  90 */ "J word missing with g87", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /*  91 */ "J word with no g2 or g3 or g87 to use it", // check_other_codes
    /*  92 */ "K word given for arc in xy plane", // convert_arc
    /*  93 */ "K word missing with g87", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /*  94 */ "K word with no g2 or g3 or g87 to use it", // check_other_codes
    /*  95 */ "L word with no canned cycle or g10", // check_other_codes
    /*  96 */ "Left bracket missing after slash with atan", // read_atan
    /*  97 */ "Left bracket missing after unary operation name", // read_unary
    /*  98 */ "Line number greater than 99999", // read_line_number
    /*  99 */ "Line with g10 does not have l2", // check_g_codes
    /* 100 */ "M code greater than 99", // read_m
    /* 101 */ "Mixed radius ijk format for arc", // convert_arc
    /* 102 */ "Multiple a words on one line", // read_a
    /* 103 */ "Multiple b words on one line", // read_b
    /* 104 */ "Multiple c words on one line", // read_c
    /* 105 */ "Multiple d words on one line", // read_d
    /* 106 */ "Multiple f words on one line", // read_f
    /* 107 */ "Multiple h words on one line", // read_h
    /* 108 */ "Multiple i words on one line", // read_i
    /* 109 */ "Multiple j words on one line", // read_j
    /* 110 */ "Multiple k words on one line", // read_k
    /* 111 */ "Multiple l words on one line", // read_l
    /* 112 */ "Multiple p words on one line", // read_p
    /* 113 */ "Multiple q words on one line", // read_q
    /* 114 */ "Multiple r words on one line", // read_r
    /* 115 */ "Multiple s words on one line", // read_s
    /* 116 */ "Multiple t words on one line", // read_t
    /* 117 */ "Multiple x words on one line", // read_x
    /* 118 */ "Multiple y words on one line", // read_y
    /* 119 */ "Multiple z words on one line", // read_z
    /* 120 */ "Must use g0 or g1 with g53", // check_g_codes
    /* 121 */ "Negative argument to sqrt", // execute_unary
    /* 122 */ "Negative d word tool radius index used", // read_d
    /* 123 */ "Negative f word used", // read_f
    /* 124 */ "Negative g code used", // read_g
    /* 125 */ "Negative h word tool length offset index used", // read_h
    /* 126 */ "Negative l word used", // read_l
    /* 127 */ "Negative m code used", // read_m
    /* 128 */ "Negative or zero q value used", // read_q
    /* 129 */ "Negative p word used", // read_p
    /* 130 */ "Negative spindle speed used", // read_s
    /* 131 */ "Negative tool id used", // read_t
    /* 132 */ "Nested comment found", // close_and_downcase
    /* 133 */ "No characters found in reading real value", // read_real_value
    /* 134 */ "No digits found where real number should be", // read_real_number
    /* 135 */ "Non integer value for integer", // read_integer_value
    /* 136 */ "Null missing after newline", // close_and_downcase
    /* 137 */ "Offset index missing", // convert_tool_length_offset
    /* 138 */ "P value not an integer with g10 l2", // check_g_codes
    /* 139 */ "P value out of range with g10 l2", // check_g_codes
    /* 140 */ "P word with no g4 g10 g82 g86 g88 g89", // check_other_codes
    /* 141 */ "Parameter file out of order", // rs274ngc_restore_parameters, rs274ngc_save_parameters
    /* 142 */ "Parameter number out of range", // read_parameter, read_parameter_setting, rs274ngc_restore_parameters, rs274ngc_save_parameters
    /* 143 */ "Q word missing with g83", // convert_cycle_xy, convert_cycle_yz, convert_cycle_zx
    /* 144 */ "Q word with no g83", // check_other_codes
    /* 145 */ "Queue is not empty after probing", // rs274ngc_read
    /* 146 */ "R clearance plane unspecified in cycle", // convert_cycle
    /* 147 */ "R i j k words all missing for arc", // convert_arc
    /* 148 */ "R less than x in cycle in yz plane", // convert_cycle_yz
    /* 149 */ "R less than y in cycle in xz plane", // convert_cycle_zx
    /* 150 */ "R less than z in cycle in xy plane", // convert_cycle_xy
    /* 151 */ "R word with no g code that uses it", // check_other_codes
    /* 152 */ "Radius to end of arc differs from radius to start", // arc_data_comp_ijk, arc_data_ijk
    /* 153 */ "Radius too small to reach end point", // arc_data_comp_r
    /* 154 */ "Required parameter missing", // rs274ngc_restore_parameters
    /* 155 */ "Selected tool slot number too large", // convert_tool_select
    /* 156 */ "Slash missing after first atan argument", // read_atan
    /* 157 */ "Spindle not turning clockwise in g84", // convert_cycle_g84
    /* 158 */ "Spindle not turning in g86", // convert_cycle_g86
    /* 159 */ "Spindle not turning in g87", // convert_cycle_g87
    /* 160 */ "Spindle not turning in g88", // convert_cycle_g88
    /* 161 */ "Sscanf failed", // read_integer_unsigned, read_real_number
    /* 162 */ "Start point too close to probe point", // convert_probe
    /* 163 */ "Too many m codes on line", // check_m_codes
    /* 164 */ "Tool length offset index too big", // read_h
    /* 165 */ "Tool max too large", // rs274ngc_load_tool_table
    /* 166 */ "Tool radius index too big", // read_d
    /* 167 */ "Tool radius not less than arc radius with comp", // arc_data_comp_r, convert_arc_comp2
    /* 168 */ "Two g codes used from same modal group", // read_g
    /* 169 */ "Two m codes used from same modal group", // read_m
    /* 170 */ "Unable to open file", // convert_stop, rs274ngc_open, rs274ngc_restore_parameters
    /* 171 */ "Unclosed comment found", // close_and_downcase
    /* 172 */ "Unclosed expression", // read_operation
    /* 173 */ "Unknown g code used", // read_g
    /* 174 */ "Unknown m code used", // read_m
    /* 175 */ "Unknown operation", // read_operation
    /* 176 */ "Unknown operation name starting with a", // read_operation
    /* 177 */ "Unknown operation name starting with m", // read_operation
    /* 178 */ "Unknown operation name starting with o", // read_operation
    /* 179 */ "Unknown operation name starting with x", // read_operation
    /* 180 */ "Unknown word starting with a", // read_operation_unary
    /* 181 */ "Unknown word starting with c", // read_operation_unary
    /* 182 */ "Unknown word starting with e", // read_operation_unary
    /* 183 */ "Unknown word starting with f", // read_operation_unary
    /* 184 */ "Unknown word starting with l", // read_operation_unary
    /* 185 */ "Unknown word starting with r", // read_operation_unary
    /* 186 */ "Unknown word starting with s", // read_operation_unary
    /* 187 */ "Unknown word starting with t", // read_operation_unary
    /* 188 */ "Unknown word where unary operation could be", // read_operation_unary
    /* 189 */ "X and y words missing for arc in xy plane", // convert_arc
    /* 190 */ "X and z words missing for arc in xz plane", // convert_arc
    /* 191 */ "X value unspecified in yz plane canned cycle", // convert_cycle_yz
    /* 192 */ "X y and z words all missing with g38 2", // convert_probe
    /* 193 */ "Y and z words missing for arc in yz plane", // convert_arc
    /* 194 */ "Y value unspecified in xz plane canned cycle", // convert_cycle_zx
    /* 195 */ "Z value unspecified in xy plane canned cycle", // convert_cycle_xy
    /* 196 */ "Zero or negative argument to ln", // execute_unary
    /* 197 */ "Zero radius arc", // arc_data_ijk
    "The End"
	);
/*********************** rs274ngc_errors ended *************************/
	
}

?>
