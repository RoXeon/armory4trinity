<?php

function SQL_template($field,$type='characters') {
  return "CAST(SUBSTRING_INDEX(SUBSTRING_INDEX(`$type`.`data`, ' ', ".($field+1)."), ' ', -1) AS UNSIGNED)";	
}

define('UNIT_END', 148);

if($config['mangos_version']==2) {
	define('CHAR_LEVEL_OFFSET', 53);
	define('CHAR_HONOR_OFFSET', 1246);
	define('CHAR_HK_OFFSET', UNIT_END + 0x0438);
	define('CHAR_ARENAPOINTS_OFFSET', 1247);
	define('CHAR_GUILD_ID_OFFSET', 0x97);
	define('SKILL_INFO_OFFSET', 0x27C);
	define('MONEY_OFFSET', 1144);
	define('CHAR_GUILD_OFFSET', 0x97);
	
	
	define('HEAD_EQU_OFFSET', 258);
	define('NECK_EQU_OFFSET', 260);
	define('SHOULDER_EQU_OFFSET', 262);
	define('SHIRT_EQU_OFFSET', 264);
	define('CHEST_EQU_OFFSET', 266);
	define('BELT_EQU_OFFSET', 268);
	define('LEGS_EQU_OFFSET', 270);
	define('FEET_EQU_OFFSET', 272);
	define('WRIST_EQU_OFFSET', 274);
	define('GLOVES_EQU_OFFSET', 276);
	define('FINGER1_EQU_OFFSET', 278);
	define('FINGER2_EQU_OFFSET', 280);
	define('TRINKET1_EQU_OFFSET', 282);
	define('TRINKET2_EQU_OFFSET', 284);
	define('BACK_EQU_OFFSET', 286);
	define('MAIN_HAND_EQU_OFFSET', 288);
	define('OFF_HAND_EQU_OFFSET', 290);
	define('RANGED_EQU_OFFSET', 292);
	define('TABARD_EQU_OFFSET', 294);
	
	
	define('STRENGTH_BASE_OFFSET', 84);
	define('AGILITY_BASE_OFFSET', 85);
	define('STAMINA_BASE_OFFSET', 86);
	define('INTELLECT_BASE_OFFSET', 87);
	define('SPIRIT_BASE_OFFSET', 88);
	
	define('STRENGTH_POS_OFFSET', 89);
	define('AGILITY_POS_OFFSET', 90);
	define('STAMINA_POS_OFFSET', 91);
	define('INTELLECT_POS_OFFSET', 92);
	define('SPIRIT_POS_OFFSET', 93);
	
	define('STRENGTH_NEG_OFFSET', 94);
	define('AGILITY_NEG_OFFSET', 95);
	define('STAMINA_NEG_OFFSET', 96);
	define('INTELLECT_NEG_OFFSET', 97);
	define('SPIRIT_NEG_OFFSET', 98);
	
	define('ARMOR_BASE_OFFSET', 99);
	define('ARMOR_POS_OFFSET', 106);
	define('ARMOR_NEG_OFFSET', 113);
	define('DEFENCE_RATING_OFFSET', 1457);
	define('DODGE_OFFSET', UNIT_END + 0x036D);
	define('PARRY_OFFSET', UNIT_END + 0x036E);
	define('BLOCK_OFFSET', UNIT_END + 0x036C);
	
	define('MELEE_DAMAGE_MIN_OFFSET', 69);
	define('MELEE_DAMAGE_MAX_OFFSET', 70);
	define('MELEE_DAMAGE_MIN_OFF_OFFSET', 71);
	define('MELEE_DAMAGE_MAX_OFF_OFFSET', 72);
	define('MELEE_SPEED_OFFSET', 61);
	define('MELEE_SPEED_OFF_OFFSET', 62);
	define('MELEE_AP_OFFSET', 123);
	define('MELEE_AP_MOD_OFFSET', 124);
	
	define('RANGED_DAMAGE_MIN_OFFSET', 129);
	define('RANGED_DAMAGE_MAX_OFFSET', 130);
	define('RANGED_SPEED_OFFSET', 63);
	define('RANGED_AP_OFFSET', 126);
	define('RANGED_AP_MOD_OFFSET', 127);
	
	define('MELEE_CRIT_OFFSET', UNIT_END + 0x0371);
	define('RANGED_CRIT_OFFSET', UNIT_END + 0x0372);
	define('MELEE_CRIT_OFF_OFFSET', UNIT_END + 0x0373);
	define('SPELL_CRIT_HOLY_OFFSET', UNIT_END + 0x0375);
	define('SPELL_CRIT_FIRE_OFFSET', UNIT_END + 0x0376);
	define('SPELL_CRIT_NATURE_OFFSET', UNIT_END + 0x0377);
	define('SPELL_CRIT_FROST_OFFSET', UNIT_END + 0x0378);
	define('SPELL_CRIT_SHADOW_OFFSET', UNIT_END + 0x0379);
	define('SPELL_CRIT_ARCANE_OFFSET', UNIT_END + 0x037A);
	define('MANA_REGEN_OFFSET', 39);
	
	define('SPELL_BONUS_HOLY_OFFSET', UNIT_END + 0x03FF + 1);
	define('SPELL_BONUS_FIRE_OFFSET', UNIT_END + 0x03FF + 2);
	define('SPELL_BONUS_NATURE_OFFSET', UNIT_END + 0x03FF + 3);
	define('SPELL_BONUS_FROST_OFFSET', UNIT_END + 0x03FF + 4);
	define('SPELL_BONUS_SHADOW_OFFSET', UNIT_END + 0x03FF + 5);
	define('SPELL_BONUS_ARCANE_OFFSET', UNIT_END + 0x03FF + 6);
	define('SPELL_BONUS_HEALING_OFFSET', UNIT_END + 0x0414);
	
	define('PLAYER_FIELD_COMBAT_RATING_1', UNIT_END + 0x043B);
	
	define('MELEE_HIT_RATING_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 5); 
	define('RANGED_HIT_RATING_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 5); 
	define('SPELL_HIT_RATING_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 5);
	define('MELEE_CRIT_RATING_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 8);
	define('RANGED_CRIT_RATING_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 9);
	define('SPELL_CRIT_RATING_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 10);
	
	define('MELEE_EXPERTISE_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 23);
	define('MELEE_EXPERTISE_OFF_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 23);
	
	define('MELEE_HASTE_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 17);
	define('RANGED_HASTE_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 18);
	define('SPELL_HASTE_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 19);
	
	define('DEFENSE_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 1);
	define('RESILIENCE_OFFSET', PLAYER_FIELD_COMBAT_RATING_1 + 14);
	
	define('HOLY_RES_OFFSET', 0x0063 + 1);
	define('FIRE_RES_OFFSET', 0x0063 + 2);
	define('NATURE_RES_OFFSET', 0x0063 + 3);
	define('FROST_RES_OFFSET', 0x0063 + 4);
	define('SHADOW_RES_OFFSET', 0x0063 + 5);
	define('ARCANE_RES_OFFSET', 0x0063 + 6);
	
	define('MAX_HEALTH_OFFSET', 31);
	define('MAX_MANA_OFFSET', 32);
	define('MAX_RAGE_OFFSET', 33);
	define('MAX_FOCUS_OFFSET', 34);
	define('MAX_ENERGY_OFFSET', 35);
	
	define('CHAR_GLYPHS_SLOT_OFFSET', UNIT_END + 0x048C);
	define('CHAR_GLYPHS_OFFSET', UNIT_END + 0x0492);

	define('ITEM_FIELD_RANDOM_PROPERTIES_ID_OFFSET', 59);
	define('ITEM_FIELD_ENCHANTMENT_PROP_1_ID_OFFSET', 43);
	define('ITEM_FIELD_ENCHANTMENT_PROP_2_ID_OFFSET', 46);
	define('ITEM_FIELD_ENCHANTMENT_PROP_3_ID_OFFSET', 49);
	define('ITEM_FIELD_SUFFIX_FACTOR_OFFSET', 58);
	define('CHAR_GENDER_OFFSET', "mid(lpad( hex( CAST(substring_index(substring_index(characters.data,' ',23),' ',-1) as unsigned) ),8,'0'),4,1)");

}else if($config['mangos_version']==1) {
	define('CHAR_LEVEL_OFFSET', 53);
	define('CHAR_HONOR_OFFSET', 1246+402);
	define('CHAR_HK_OFFSET', 1200+402);
	define('CHAR_ARENAPOINTS_OFFSET', 1247+402);
	define('CHAR_GUILD_ID_OFFSET', 151);
	define('SKILL_INFO_OFFSET', 610+402);
	define('MONEY_OFFSET', 1144+402);
	define('CHAR_GUILD_OFFSET', 151);
	
	
	define('HEAD_EQU_OFFSET', 260);
	define('NECK_EQU_OFFSET', 260+(1*18));
	define('SHOULDER_EQU_OFFSET', 260+(2*18));
	define('SHIRT_EQU_OFFSET', 260+(3*18));
	define('CHEST_EQU_OFFSET', 260+(4*18));
	define('BELT_EQU_OFFSET', 260+(5*18));
	define('LEGS_EQU_OFFSET', 260+(6*18));
	define('FEET_EQU_OFFSET', 260+(7*18));
	define('WRIST_EQU_OFFSET', 260+(8*18));
	define('GLOVES_EQU_OFFSET', 260+(9*18));
	define('FINGER1_EQU_OFFSET', 260+(10*18));
	define('FINGER2_EQU_OFFSET', 260+(11*18));
	define('TRINKET1_EQU_OFFSET', 260+(12*18));
	define('TRINKET2_EQU_OFFSET', 260+(13*18));
	define('BACK_EQU_OFFSET', 260+(14*18));
	define('MAIN_HAND_EQU_OFFSET', 260+(15*18));
	define('OFF_HAND_EQU_OFFSET', 260+(16*18));
	define('RANGED_EQU_OFFSET', 260+(17*18));
	define('TABARD_EQU_OFFSET', 260+(18*18));
	
	
	define('STRENGTH_BASE_OFFSET', 84);
	define('AGILITY_BASE_OFFSET', 85);
	define('STAMINA_BASE_OFFSET', 86);
	define('INTELLECT_BASE_OFFSET', 87);
	define('SPIRIT_BASE_OFFSET', 88);
	
	define('STRENGTH_POS_OFFSET', 89);
	define('AGILITY_POS_OFFSET', 90);
	define('STAMINA_POS_OFFSET', 91);
	define('INTELLECT_POS_OFFSET', 92);
	define('SPIRIT_POS_OFFSET', 93);
	
	define('STRENGTH_NEG_OFFSET', 94);
	define('AGILITY_NEG_OFFSET', 95);
	define('STAMINA_NEG_OFFSET', 96);
	define('INTELLECT_NEG_OFFSET', 97);
	define('SPIRIT_NEG_OFFSET', 98);
	
	define('ARMOR_BASE_OFFSET', 99);
	define('ARMOR_POS_OFFSET', 106);
	define('ARMOR_NEG_OFFSET', 113);
	define('DEFENCE_RATING_OFFSET', 1457+402);
	define('DODGE_OFFSET', 999+402);
	define('PARRY_OFFSET', 1000+402);
	define('BLOCK_OFFSET', 998+402);
	
	define('MELEE_DAMAGE_MIN_OFFSET', 69);
	define('MELEE_DAMAGE_MAX_OFFSET', 70);
	define('MELEE_DAMAGE_MIN_OFF_OFFSET', 71);
	define('MELEE_DAMAGE_MAX_OFF_OFFSET', 72);
	define('MELEE_SPEED_OFFSET', 61);
	define('MELEE_SPEED_OFF_OFFSET', 62);
	define('MELEE_AP_OFFSET', 123);
	define('MELEE_AP_MOD_OFFSET', 124);
	
	define('RANGED_DAMAGE_MIN_OFFSET', 129);
	define('RANGED_DAMAGE_MAX_OFFSET', 130);
	define('RANGED_SPEED_OFFSET', 63);
	define('RANGED_AP_OFFSET', 126);
	define('RANGED_AP_MOD_OFFSET', 127);
	
	define('MELEE_CRIT_OFFSET', 1003+402);
	define('RANGED_CRIT_OFFSET', 1004+402);
	define('MELEE_CRIT_OFF_OFFSET', 1005+402);
	define('SPELL_CRIT_HOLY_OFFSET', 1007+402);
	define('SPELL_CRIT_FIRE_OFFSET', 1008+402);
	define('SPELL_CRIT_NATURE_OFFSET', 1009+402);
	define('SPELL_CRIT_FROST_OFFSET', 1010+402);
	define('SPELL_CRIT_SHADOW_OFFSET', 1011+402);
	define('SPELL_CRIT_ARCANE_OFFSET', 1012+402);
	define('MANA_REGEN_OFFSET', 39);
	
	define('SPELL_BONUS_HOLY_OFFSET', 1146+402);
	define('SPELL_BONUS_FIRE_OFFSET', 1147+402);
	define('SPELL_BONUS_NATURE_OFFSET', 1148+402);
	define('SPELL_BONUS_FROST_OFFSET', 1149+402);
	define('SPELL_BONUS_SHADOW_OFFSET', 1150+402);
	define('SPELL_BONUS_ARCANE_OFFSET', 1151+402);
	define('SPELL_BONUS_HEALING_OFFSET', 1152+402);
	
	define('MELEE_HIT_RATING_OFFSET', 1208+402); // Brak info w dokumentacji! Zabic ich! ??
	define('RANGED_HIT_RATING_OFFSET', 1209+402); // Brak info w dokumentacji! Zabic ich!
	define('SPELL_HIT_RATING_OFFSET', 1210+402); // Brak info w dokumentacji! Zabic ich!
	define('MELEE_CRIT_RATING_OFFSET', 1211+402); // Brak info w dokumentacji! Zabic ich!
	define('RANGED_CRIT_RATING_OFFSET', 1211+402); // Brak info w dokumentacji! Zabic ich!
	define('SPELL_CRIT_RATING_OFFSET', 1211+402); // Brak info w dokumentacji! Zabic ich!
	
	define('MELEE_EXPERTISE_OFFSET', 1001+402);
	define('MELEE_EXPERTISE_OFF_OFFSET', 1002+402);
	
	define('HOLY_RES_OFFSET', 100);
	define('FIRE_RES_OFFSET', 101);
	define('NATURE_RES_OFFSET', 102);
	define('FROST_RES_OFFSET', 103);
	define('SHADOW_RES_OFFSET', 104);
	define('ARCANE_RES_OFFSET', 105);
	define('RESILIENCE_RATING_OFFSET', 1055+14);
	
	define('MAX_HEALTH_OFFSET', 31);
	define('MAX_MANA_OFFSET', 32);
	define('MAX_RAGE_OFFSET', 33);
	define('MAX_FOCUS_OFFSET', 34);
	define('MAX_ENERGY_OFFSET', 35);
	
	define('CHAR_GLYPHS_SLOT_OFFSET', 1133+402);
	define('CHAR_GLYPHS_OFFSET', 1287+402);
	
	
	define('ITEM_FIELD_RANDOM_PROPERTIES_ID_OFFSET', 59);
	define('ITEM_FIELD_ENCHANTMENT_PROP_1_ID_OFFSET', 43);
	define('ITEM_FIELD_ENCHANTMENT_PROP_2_ID_OFFSET', 46);
	define('ITEM_FIELD_ENCHANTMENT_PROP_3_ID_OFFSET', 49);
	define('ITEM_FIELD_SUFFIX_FACTOR_OFFSET', 58);
	define('CHAR_GENDER_OFFSET', "mid(lpad( hex( CAST(substring_index(substring_index(characters.data,' ',23),' ',-1) as unsigned) ),8,'0'),4,1)");
}else{
	define('CHAR_LEVEL_OFFSET', 34);
	define('CHAR_HONOR_OFFSET', 1498);
	define('CHAR_HK_OFFSET', 1453);
	define('CHAR_ARENAPOINTS_OFFSET', 1499);
	define('CHAR_GUILD_ID_OFFSET', 237);
	define('SKILL_INFO_OFFSET', 928);
	define('MONEY_OFFSET', 1397);
	define('CHAR_GUILD_OFFSET', 237);
	
	
	define('HEAD_EQU_OFFSET', 346);
	define('NECK_EQU_OFFSET', 346+(1*16));
	define('SHOULDER_EQU_OFFSET', 346+(2*16));
	define('SHIRT_EQU_OFFSET', 346+(3*16));
	define('CHEST_EQU_OFFSET', 346+(4*16));
	define('BELT_EQU_OFFSET', 346+(5*16));
	define('LEGS_EQU_OFFSET', 346+(6*16));
	define('FEET_EQU_OFFSET', 346+(7*16));
	define('WRIST_EQU_OFFSET', 346+(8*16));
	define('GLOVES_EQU_OFFSET', 346+(9*16));
	define('FINGER1_EQU_OFFSET', 346+(10*16));
	define('FINGER2_EQU_OFFSET', 346+(11*16));
	define('TRINKET1_EQU_OFFSET', 346+(12*16));
	define('TRINKET2_EQU_OFFSET', 346+(13*16));
	define('BACK_EQU_OFFSET', 346+(14*16));
	define('MAIN_HAND_EQU_OFFSET', 346+(15*16));
	define('OFF_HAND_EQU_OFFSET', 346+(16*16));
	define('RANGED_EQU_OFFSET', 346+(17*16));
	define('TABARD_EQU_OFFSET', 346+(18*16));
	
	
	define('STRENGTH_BASE_OFFSET', 171);
	define('AGILITY_BASE_OFFSET', 172);
	define('STAMINA_BASE_OFFSET', 173);
	define('INTELLECT_BASE_OFFSET', 174);
	define('SPIRIT_BASE_OFFSET', 175);
	
	define('STRENGTH_POS_OFFSET', 176);
	define('AGILITY_POS_OFFSET', 177);
	define('STAMINA_POS_OFFSET', 178);
	define('INTELLECT_POS_OFFSET', 179);
	define('SPIRIT_POS_OFFSET', 180);
	
	define('STRENGTH_NEG_OFFSET', 181);
	define('AGILITY_NEG_OFFSET', 182);
	define('STAMINA_NEG_OFFSET', 183);
	define('INTELLECT_NEG_OFFSET', 184);
	define('SPIRIT_NEG_OFFSET', 185);
	
	define('ARMOR_BASE_OFFSET', 186);
	define('ARMOR_POS_OFFSET', 193);
	define('ARMOR_NEG_OFFSET', 200);
	define('DEFENCE_RATING_OFFSET', 1457);
	define('DODGE_OFFSET', 1317);
	define('PARRY_OFFSET', 1318);
	define('BLOCK_OFFSET', 1316);
	
	define('MELEE_DAMAGE_MIN_OFFSET', 69);
	define('MELEE_DAMAGE_MAX_OFFSET', 70);
	define('MELEE_DAMAGE_MIN_OFF_OFFSET', 71);
	define('MELEE_DAMAGE_MAX_OFF_OFFSET', 72);
	define('MELEE_SPEED_OFFSET', 61);
	define('MELEE_SPEED_OFF_OFFSET', 62);
	define('MELEE_AP_OFFSET', 123);
	define('MELEE_AP_MOD_OFFSET', 124);
	
	define('RANGED_DAMAGE_MIN_OFFSET', 129);
	define('RANGED_DAMAGE_MAX_OFFSET', 130);
	define('RANGED_SPEED_OFFSET', 63);
	define('RANGED_AP_OFFSET', 126);
	define('RANGED_AP_MOD_OFFSET', 127);
	
	define('MELEE_CRIT_OFFSET', 1321);
	define('RANGED_CRIT_OFFSET', 1322);
	define('MELEE_CRIT_OFF_OFFSET', 1323);
	define('SPELL_CRIT_HOLY_OFFSET', 1324);
	define('SPELL_CRIT_FIRE_OFFSET', 1325);
	define('SPELL_CRIT_NATURE_OFFSET', 1326);
	define('SPELL_CRIT_FROST_OFFSET', 1327);
	define('SPELL_CRIT_SHADOW_OFFSET', 1328);
	define('SPELL_CRIT_ARCANE_OFFSET', 1329);
	define('MANA_REGEN_OFFSET', 1500);
	
	define('SPELL_BONUS_HOLY_OFFSET', 0); // TODO
	define('SPELL_BONUS_FIRE_OFFSET', 0);// TODO
	define('SPELL_BONUS_NATURE_OFFSET', 0);// TODO
	define('SPELL_BONUS_FROST_OFFSET', 0);// TODO
	define('SPELL_BONUS_SHADOW_OFFSET', 0);// TODO
	define('SPELL_BONUS_ARCANE_OFFSET', 0);// TODO
	define('SPELL_BONUS_HEALING_OFFSET', 0);// TODO
	
	define('MELEE_HIT_RATING_OFFSET', 1461); 
	define('RANGED_HIT_RATING_OFFSET', 1462);
	define('SPELL_HIT_RATING_OFFSET', 1463);
	define('MELEE_CRIT_RATING_OFFSET', 1464);
	define('RANGED_CRIT_RATING_OFFSET', 1465);
	define('SPELL_CRIT_RATING_OFFSET', 1472);
	
	define('MELEE_EXPERTISE_OFFSET', 1491);
	define('MELEE_EXPERTISE_OFF_OFFSET', 1492);
	
	define('HOLY_RES_OFFSET', 187);
	define('FIRE_RES_OFFSET', 188);
	define('NATURE_RES_OFFSET', 189);
	define('FROST_RES_OFFSET', 190);
	define('SHADOW_RES_OFFSET', 191);
	define('ARCANE_RES_OFFSET', 192);
	
	define('MAX_HEALTH_OFFSET', 28);
	define('MAX_MANA_OFFSET', 29);
	define('MAX_RAGE_OFFSET', 30);
	define('MAX_FOCUS_OFFSET', 31);
	define('MAX_ENERGY_OFFSET', 32);
	
	
	define('ITEM_FIELD_RANDOM_PROPERTIES_ID_OFFSET', 56);
	define('ITEM_FIELD_ENCHANTMENT_PROP_1_ID_OFFSET', 43);
	define('ITEM_FIELD_ENCHANTMENT_PROP_2_ID_OFFSET', 46);
	define('ITEM_FIELD_ENCHANTMENT_PROP_3_ID_OFFSET', 49);
	define('ITEM_FIELD_SUFFIX_FACTOR_OFFSET', 55);
	define('CHAR_GENDER_OFFSET', "mid(lpad( hex( CAST(substring_index(substring_index(characters.data,' ',36),' ',-1) as unsigned) ),8,'0'),4,1)");
}




?>