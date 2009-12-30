<?php

$race = $_GET['race'];
echo $race;
$walls = (float)$_GET['walls'];
$wallStrength = (float)$_GET['wallStrength'];
//91800

$wall =   ($wallStrength*0.025)+(($walls*$walls)*10) ;

$level1Archer = (float)$_GET['1archer'];
$level2Archer = (float)$_GET['2archer'];
$level3Archer = (float)$_GET['3archer'];

if ($race == Elf) {
$level1ArcherStrength = 12;
$level1ArcherHealth = 9;
$level2ArcherStrength = 25;
$level2ArcherHealth = 19;
$level3ArcherStrength = 56;
$level3ArcherHealth = 42;
}

if ($race == Gnoll) {
$level1ArcherStrength = 11;
$level1ArcherHealth = 9;
$level2ArcherStrength = 24;
$level2ArcherHealth = 18;
$level3ArcherStrength = 54;
$level3ArcherHealth = 40;
}


if ($race == Troll) {
$level1ArcherStrength = 12;
$level1ArcherHealth = 9;
$level2ArcherStrength = 25;
$level2ArcherHealth = 19;
$level3ArcherStrength = 56;
$level3ArcherHealth = 42;
}


if ($race == Dwarf) {
$level1ArcherStrength = 12;
$level1ArcherHealth = 9;
$level2ArcherStrength = 25;
$level2ArcherHealth = 19;
$level3ArcherStrength = 56;
$level3ArcherHealth = 42;
}


if ($race == Human) {
$level1ArcherStrength = 10;
$level1ArcherHealth = 8;
$level2ArcherStrength = 21;
$level2ArcherHealth = 16;
$level3ArcherStrength = 47;
$level3ArcherHealth = 35;
}


if ($race == Orc) {
$level1ArcherStrength = 12;
$level1ArcherHealth = 9;
$level2ArcherStrength = 25;
$level2ArcherHealth = 19;
$level3ArcherStrength = 56;
$level3ArcherHealth = 42;
}



$level1Cavalry = (float)$_GET['1cavalry'];
$level2Cavalry = (float)$_GET['2cavalry'];
$level3Cavalry = (float)$_GET['3cavalry'];

if ($race == Elf){
$level1CavalryStrength = 11;
$level1CavalryHealth = 9;
$level2CavalryStrength = 23;
$level2CavalryHealth = 18;
$level3CavalryStrength = 48;
$level3CavalryHealth = 39;
}

if ($race == Human){
$level1CavalryStrength = 12;
$level1CavalryHealth = 9;
$level2CavalryStrength = 24;
$level2CavalryHealth = 19;
$level3CavalryStrength = 50;
$level3CavalryHealth = 41;
}

if ($race == Gnoll){
$level1CavalryStrength = 11;
$level1CavalryHealth = 9;
$level2CavalryStrength = 23;
$level2CavalryHealth = 18;
$level3CavalryStrength = 48;
$level3CavalryHealth = 39;
}

if ($race == Troll){
$level1CavalryStrength = 11;
$level1CavalryHealth = 9;
$level2CavalryStrength = 23;
$level2CavalryHealth = 18;
$level3CavalryStrength = 48;
$level3CavalryHealth = 39;
}

if ($race == Dwarf){
$level1CavalryStrength = 11;
$level1CavalryHealth = 9;
$level2CavalryStrength = 23;
$level2CavalryHealth = 18;
$level3CavalryStrength = 48;
$level3CavalryHealth = 39;
}

if ($race == Orc){
$level1CavalryStrength = 11;
$level1CavalryHealth = 9;
$level2CavalryStrength = 23;
$level2CavalryHealth = 18;
$level3CavalryStrength = 48;
$level3CavalryHealth = 39;
}


$level1Foot = (float)$_GET['1foot'];
$level2Foot = (float)$_GET['2foot'];
$level3Foot = (float)$_GET['3foot'];

if ($race == Elf){ 
$level1FootStrength = 6;
$level1FootHealth = 6;
$level2FootStrength = 12;
$level2FootHealth = 13;
$level3FootStrength = 28;
$level3FootHealth = 28;
}


if ($race == Gnoll){ 
$level1FootStrength = 6;
$level1FootHealth = 6;
$level2FootStrength = 12;
$level2FootHealth = 13;
$level3FootStrength = 28;
$level3FootHealth = 28;
}

if ($race == Troll){ 
$level1FootStrength = 6;
$level1FootHealth = 6;
$level2FootStrength = 12;
$level2FootHealth = 13;
$level3FootStrength = 28;
$level3FootHealth = 28;
}

if ($race == Dwarf){ 
$level1FootStrength = 6;
$level1FootHealth = 6;
$level2FootStrength = 12;
$level2FootHealth = 13;
$level3FootStrength = 28;
$level3FootHealth = 28;
}

if ($race == Human){ 
$level1FootStrength = 9;
$level1FootHealth = 9;
$level2FootStrength = 18;
$level2FootHealth = 19;
$level3FootStrength = 40;
$level3FootHealth = 40;
}

if ($race == Orc){ 
$level1FootStrength = 6;
$level1FootHealth = 6;
$level2FootStrength = 12;
$level2FootHealth = 13;
$level3FootStrength = 28;
$level3FootHealth = 28;
}

$Experiencebonus = (float)$_GET['xp'];
$TacticsLevel = (float)$_GET['tactics'];
$smithy = (float)$_GET['forge'];
$MedicineLevel = (float)$_GET['medicine'];
$armoury = (float)$_GET['armoury'];

$level1Troops = $level1Foot + $level1Cavalry + $level1Archer;
$level2Troops = $level2Foot + $level2Cavalry + $level2Archer;
$level3Troops = $level3Foot + $level3Cavalry + $level3Archer;

echo '<br>';
echo $level1ArcherStrength;
echo '<br>';
echo $level1ArcherHealth ;
echo '<br>';
echo $level2ArcherStrength;
echo '<br>';
echo $level2ArcherHealth;
echo '<br>';
echo $level3ArcherStrength;
echo '<br>';
echo $level3ArcherHealth;
echo '<br>';



$totalAttackStrength = ($level1Foot*$level1FootStrength) + ($level1Archer*$level1ArcherStrength) + ($level1Cavalry*$level1CavalryStrength) + ($level2Foot*$level2FootStrength) + ($level2Archer*$level2ArcherStrength) + ($level2Cavalry*$level2CavalryStrength) + ($level3Foot*$level3FootStrength) + ($level3Archer*$level3ArcherStrength) + ($level3Cavalry*$level3CavalryStrength);
$totalDefenceStrength = ($level1Foot*$level1FootHealth) + ($level1Archer*$level1ArcherHealth) + ($level1Cavalry*$level1CavalryHealth) + ($level2Foot*$level2FootHealth) + ($level2Archer*$level2ArcherHealth) + ($level2Cavalry*$level2CavalryHealth) + ($level3Foot*$level3FootHealth) + ($level3Archer*$level3ArcherHealth) + ($level3Cavalry*$level3CavalryHealth);

$troopstrength = ((($totalAttackStrength*(1.0+$ExperienceBonus))*(1.0+$TacticsLevel)*(1.0+($smithy*.02))) +($totalDefenceStrength*(1.0+$ExperienceBonus)*(1.0+$MedicineLevel)*(1.0+($armoury*.02))))*0.02;
$troopnumber = $level1Troops*3 + $level2Troops*5 + $level3Troops*8 ; 
$troops = $troopstrength + $troopnumber;



$engineers = (float)$_GET['engineers'];

$off_ladder = (float)$_GET['oladder'];
$off_ram = (float)$_GET['oram'];
$off_tower = (float)$_GET['otower']; 
$off_cata = (float)$_GET['ocata'];
$off_treb = (float)$_GET['otrebs'];
$def_rocks = (float)$_GET['drock'];
$def_oil = (float)$_GET['doil'];
$def_ballista = (float)$_GET['dballista'];
$def_cata = (float)$_GET['dcata'];
$def_treb = (float)$_GET['dtrebs'];

if ($race == Elf){
$racebonus = 0;
}

if ($race == Human){
$racebonus = 0;
}

if ($race == Gnoll){
$racebonus = 0.15;
}

if ($race == Troll){
$racebonus = 0;
}

if ($race == Dwarf){
$racebonus = 0;
}

if ($race == Orc){
$racebonus = 0;
}

$researchbonus = (float)$_GET['research_bonus'];


$OffensiveSiegeStrength = ($off_ladder*50)+($off_ram*175)+($off_tower*300)+($off_cata*425)+($off_treb*500);
$DefensiveSiegeStrength = ($def_rocks*50)+($def_oil*175)+($def_ballista*300)+($def_cata*425)+($def_treb*500);
$DefensiveSiegeStrength = $DefensiveSiegeStrength *(1 + $racebonus) *(1 + $researchbonus);
$OffensiveSiegeStrength = $OffensiveSiegeStrength *(1 + $racebonus) *(1 + $researchbonus);

$siege = ($engineers*6 + (($OffensiveSiegeStrength + $DefensiveSiegeStrength)*0.02));

$spies = (float)$_GET['spies'];
$spyAcademy = (float)$_GET['spyAcademy'];
$SpyRaceBonus = (float)$_GET['spyRaceBonus'];
$SpyingTechBonus = (float)$_GET['spyresearch'];

$spy = ($spies*$spyAcademy*.7*(1+$SpyRaceBonus)*(1+$SpyingTechBonus));

$scouts = (float)$_GET['scouts'];
$scoutBuilding = (float)$_GET['scoutBuilding'];

$scout = ($scouts*$scoutBuilding*.4*(1+$SpyingTechBonus)) ;


$total = $wall + $troopstrength + $troopnumber + $siege + $spy + $scout;

echo "Ranking Points from walls  ".$wall."<br>" ;
echo "Ranking Points from number of troops  ".$troopnumber."<br>";
echo "Ranking Points from number of troop modifications  ".$troopstrength."<br>";
echo "Total Ranking Points from troops  ".$troops."<br>";
echo "Total Ranking Points from seige and engineers  ".$siege."<br>";
echo "Ranking Points from spies  ".$spy."<br>";
echo "Ranking Points from scouts  ".$scout."<br>";
echo "Total Ranking Points  ".$total."<br>";

?>
<br><br>
<form name="input" action="#" method="get">

Race: <select name="race" id="select8">
            <option value="Human">Human</option>
            <option value="Elf">Elf</option>
            <option value="Dwarf">Dwarf</option>
            <option value="Orc">Orc</option>
			<option value="Troll">Troll</option>
            <option value="Gnoll">Gnoll</option>
			</select>


Wall: <input type="text" name="walls" /> <br>
WallStrength: <input type="text" name="wallStrength" /><br>

level 1 archers: <input type="text" name="1archer" /><br>
level 2 archers: <input type="text" name="2archer" /><br>
level 3 archers: <input type="text" name="3archer" /><br>

level 1 cavalry: <input type="text" name="1cavalry" /><br>
level 2 cavalry: <input type="text" name="2cavalry" /><br>
level 3 cavalry: <input type="text" name="3cavalry" /><br>

level 3 foot: <input type="text" name="1foot" /><br>
level 3 foot: <input type="text" name="2foot" /><br>
level 3 foot: <input type="text" name="3foot" /><br>

Experience in decimals: <input type="text" name="xp" /><br>
Tactics research in decomals: <input type="text" name="tactics" /><br>
Medicine research in decimals: <input type="text" name="medicine" /><br>
Forge lvl: <input type="text" name="forge" /><br>
Armoury lvl: <input type="text" name="armoury" /><br>

Number of engineers: <input type="text" name="engineers" /><br>

Number of Ladders: <input type="text" name="oladder" /><br>
Number of Rams: <input type="text" name="oram" /><br>
Number of Towers: <input type="text" name="otower" /><br>
Number of offensive catapaults: <input type="text" name="ocata" /><br>
Number of offensive trebuchets: <input type="text" name="otrebs" /><br>

Number of Rocks: <input type="text" name="drock" /><br>
Number of Oil: <input type="text" name="doil" /><br>
Number of Ballistae: <input type="text" name="dballista" /><br>
Number of defensive catapaults: <input type="text" name="dcata" /><br>
Number of defensive trebuchets: <input type="text" name="dtrebs" /><br>

Siege Research Bonus in decimals: <input type="text" name="research_bonus" /><br>
Number of Spies: <input type="text" name="spies" /><br>
Number of Scouts: <input type="text" name="scouts" /><br>
Spy Academy <input type="text" name="spyAcademy" /><br>
Spy Race Bonus: <input type="text" name="spyRaceBonus" /><br>
Spy Research: <input type="text" name="spyresearch" /><br>
Scout Building: <input type="text" name="scoutBuilding" /><br>



<br><input type="submit" value="Submit" />
</form>




