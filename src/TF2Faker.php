<?php

namespace cheddzy\TF2Faker;

use Faker\Provider\Base;
use InvalidArgumentException;


/**
 * Team Fortress 2 Weapon Faker, made with Laravel Factories in mind.
 *
 * @package cheddzy/tf2-faker
 * @see <a href="https://wiki.teamfortress.com/wiki">TF2 Wiki</a>
 * @see <a href="https://github.com/cheddZy/tf2-faker">Repo</a>
 */
class TF2Faker extends Base
{
    protected static array $qualities = [
        'normal',
        'unique',
        'strange',
        'vintage',
        'genuine',
        'haunted',
        'unusual',
        'collector',
        'valve',
    ];

    protected static array $scoutWeapons = [
        'primary' => [
            'Scattergun',
            'Force-A-Nature',
            'Shortstop',
            'Soda Popper',
            'Baby Face\'s Blaster',
            'Back Scatter',
        ],
        'secondary' => [
            'Pistol',
            'Lugermorph',
            'C.A.P.P.E.R',
            'Winger',
            'Pretty Boy\'s Pocket Pistol',
            'Flying Guillotine',
            'Bonk! Atomic Punch',
            'Crit-a-Cola',
            'Mad Milk',
            'Mutated Milk',
        ],
        'melee' => [
            'Bat',
            'Holy Mackerel',
            'Unarmed Combat',
            'Batsaber',
            'Sandman',
            'Candy Cane',
            'Bostom Basher',
            'Three-Rune Blade',
            'Sun-on-a-Stick',
            'Fan O\'War',
            'Atomizer',
            'Wrap Assassin',
        ],
    ];

    protected static array $soldierWeapons = [
        'primary' => [
            'Rocket Launcher',
            'Original',
            'Direct Hit',
            'Black Box',
            'Rocket Jumper',
            'Liberty Launcher',
            'Cow Mangler 5000',
            'Beggar\'s Bazooka',
            'Air Strike',
        ],
        'secondary' => [
            'Shotgun',
            'Reserve Shooter',
            'Buff Banner',
            'Gunboats',
            'Battalion\'s Backup',
            'Concheror',
            'Mantreads',
            'Righteous Bison',
            'B.A.S.E. Jumper',
            'Panic Attack',
        ],
        'melee' => [
            'Shovel',
            'Equalizer',
            'Pain Train',
            'Half-Zatoichi',
            'Disciplinary Action',
            'Market Gardener',
            'Escape Plan',
        ],
    ];

    protected static array $pyroWeapons = [
        'primary' => [
            'Flame Thrower',
            'Rainblower',
            'Nostromo Napalmer',
            'Backburner',
            'Degreaser',
            'Phlogistinator',
            'Dragon\'s Fury',
        ],
        'secondary' => [
            'Shotgun',
            'Reserve Shooter',
            'Flare Gun',
            'Detonator',
            'Manmelter',
            'Scorch Shot',
            'Panic Attack',
            'Thermal Thruster',
            'Gas Passer',
        ],
        'melee' => [
            'Fire Axe',
            'Lollichop',
            'Axtinguisher',
            'Postal Pummeler',
            'Homewrecker',
            'Maul',
            'Powerjack',
            'Back Scratcher',
            'Sharpened Volcano Fragment',
            'Third Degree',
            'Neon Annihilator',
            'Hot Hand',
        ],
    ];

    protected static array $demomanWeapons = [
        'primary' => [
            'Grenade Launcher',
            'Lock-n-Load',
            'Ali Baba\'s Wee Booties',
            'Bootlegger',
            'Loose Cannon',
            'Iron Bomber',
        ],
        'secondary' => [
            'Stickybomb Launcher',
            'Scottish Resistance',
            'Chargin\' Targe',
            'Sticky Jumper',
            'Splendid Screen',
            'Tide Turner',
            'Quickiebomb Launcher',
        ],
        'melee' => [
            'Bottle',
            'Scottish Handshake',
            'Eyelander',
            'Horseless Headless Horsemann\'s Headtaker',
            'Nessie\'s Nine Iron',
            'Scotsman\'s Skullcutter',
            'Pain Train',
            'Ullapool Caber',
            'Claidheamh Mòr',
            'Half-Zatoichi',
            'Persian Persuader',
        ],
    ];

    protected static array $heavyWeapons = [
        'primary' => [
            'Minigun',
            'Iron Curtain',
            'Natascha',
            'Brass Beast',
            'Tomislav',
            'Huo-Long Heater',
        ],
        'secondary' => [
            'Family Business',
            'Robo-Sandvich',
            'Dalokohs Bar',
            'Fishcake',
            'Buffalo Steak Sandvich',
            'Second Banana',
        ],
        'melee' => [
            'Fists',
            'Apoco-Fists',
            'Killing Gloves of Boxing',
            'Gloves of Running Urgently',
            'Bread Bite',
            'Warrior\'s Spirit',
            'Fists of Steel',
            'Eviction Notice',
            'Holiday Punch',
        ],
    ];

    protected static array $engineerWeapons = [
        'primary' => [
            'Shotgun',
            'Frontier Justice',
            'Widowmaker',
            'Pomson 6000',
            'Rescue Ranger',
            'Panic Attack',
        ],
        'secondary' => [
            'Pistol',
            'Lugermorph',
            'C.A.P.P.E.R',
            'Wrangler',
            'Giger Counter',
            'Short Circuit',
        ],
        'melee' => [
            'Wrench',
            'Golden Wrench',
            'Gunslinger',
            'Southern Hospitality',
            'Jag',
            'Eureka Effect',
        ],
        'pda' => [
            'Construction PDA',
            'Destruction PDA',
        ],
    ];

    protected static array $medicWeapons = [
        'primary' => [
            'Syringe Gun',
            'Blutsauger',
            'Crusader\'s Crossbow',
            'Overdose',
        ],
        'secondary' => [
            'Medi Gun',
            'Kritzkrieg',
            'Quick-Fix',
            'Vaccinator',
        ],
        'melee' => [
            'Bonesaw',
            'Ubersaw',
            'Vita-Saw',
            'Amputator',
            'Solemn Vow',
        ],
    ];

    protected static array $sniperWeapons = [
        'primary' => [
            'Sniper Rifle',
            'AWPer Hand',
            'Huntsman',
            'Fortified Compound',
            'Sydney Sleeper',
            'Bazaar Bargain',
            'Machina',
            'Shooting Star',
            'Hitman\'s Hitmaker',
            'Classic',
        ],
        'secondary' => [
            'SMG',
            'Cleaner\'s Carbine',
            'Jarate',
            'Self-Aware Beauty Mark',
            'Razorback',
            'Darwin\'s Danger Shield',
            'Cozy Camper',
        ],
        'melee' => [
            'Kukri',
            'Tribalman\'s Shiv',
            'Bushwacka',
            'Shahanshah',
        ],
    ];

    protected static array $spyWeapons = [
        'primary' => [
            'Revolver',
            'Big Kill',
            'Ambassador',
            'L\'Etranger',
            'Enforcer',
            'Diamondback',
        ],
        'melee' => [
            'Knife',
            'Sharp Dresser',
            'Black Rose',
            'Your Eternal Reward',
            'Wanga Prick',
            'Conniver\'s Kunai',
            'Big Earner',
            'Spy-cicle',
        ],
        'pda' => [
            'Disguise Kit',
        ],
        'watch' => [
            'Invis Watch',
            'Enthusiast\'s Timepiece',
            'Quäckenbirdt',
            'Cloak and Dagger',
            'Dead Ringer',
        ],
        'sapper' => [
            'Sapper',
            'Ap-Sap',
            'Snack Attack',
            'Red-Tape Recorder',
        ],
    ];

    protected static array $allClassWeapons = [
        'melee' => [
            'Saxxy',
            'Frying Pan',
            'Conscientious Objector',
            'Freedom Staff',
            'Bat Outta Hell',
            'Memory Maker',
            'Ham Shank',
            'Golden Frying Pan',
            'Necro Smasher',
            'Crossing Guard',
            'Prinny Machete',
        ],
    ];

    protected static array $items = [
        'booger',
        'aids',
    ];

    //    public function weapons()
    //    {
    //        $allWeapons = array_merge(
    //            self::$allClassWeapons,
    //            array_merge(...array_values(self::$scoutWeapons)),
    //            array_merge(...array_values(self::$soldierWeapons)),
    //            array_merge(...array_values(self::$pyroWeapons)),
    //            array_merge(...array_values(self::$demomanWeapons)),
    //            array_merge(...array_values(self::$heavyWeapons)),
    //            array_merge(...array_values(self::$engineerWeapons)),
    //            array_merge(...array_values(self::$medicWeapons)),
    //            array_merge(...array_values(self::$sniperWeapons)),
    //            array_merge(...array_values(self::$spyWeapons)),
    //        );
    //
    //        return static::randomElement($allWeapons);
    //    }

    private function classWeapons(string $class)
    {
        $propertyName = strtolower($class).'Weapons';
        if (property_exists($this, $propertyName)) {
            $weapons = array_merge(...array_values(static::${$propertyName}));

            return static::randomElement($weapons);
        }
        throw new InvalidArgumentException('Class \''.$class.'\' does not exist.');
    }

    private function classSlotWeapons(string $class, string $slot)
    {
        $class = strtolower($class);
        $slot = strtolower($slot);

        $propertyName = strtolower($class).'Slots';

        if (property_exists($this, $propertyName)) {
            $weapons = static::${$propertyName}[strtolower($slot)] ?? null;
            if ($weapons) {
                return static::randomElement($weapons);
            }
            throw new InvalidArgumentException('Slot \''.$slot.'\' not found for class \''.$class.'\'.');
        }
        throw new InvalidArgumentException('Class \''.$class.'\' does not exist.');
    }

    /**
     * @param "scout"|"soldier"|"pyro"|"demoman"|"heavy"|"engineer"|"medic"|"sniper"|"spy" $className Team Fortress 2 Class Name
     * @return string
     */
    public function classWeapon(string $className): string
    {
        return $this->classWeapons($className);
    }

    /**
     *
     * @param "scout"|"soldier"|"pyro"|"demoman"|"heavy"|"engineer"|"medic"|"sniper"|"spy" $className Team Fortress 2 Class Name
     * @param "primary"|"secondary"|"melee"|"pda"|"sapper"|"watch" $slot Class Weapon Slot (e.g. primary, secondary, melee)
     * @return string
     */
    public function classWeaponSlot(string $className, string $slot): string
    {
        return $this->classSlotWeapons($className, $slot);
    }

    /**
     * <h4>Scout Weapons</h4>
     * Returns weapons for Scout.
     */

    public function scoutWeapon(): string
    {
        return $this->classWeapons('scout');
    }

    public function scoutPrimary(): string
    {
        return $this->classSlotWeapons('scout', 'primary');
    }

    public function scoutSecondary(): string
    {
        return $this->classSlotWeapons('scout', 'secondary');
    }

    public function scoutMelee(): string
    {
        return $this->classSlotWeapons('scout', 'melee');
    }

    /**
     * <h4>Soldier Weapons</h4>
     * Returns weapons for Soldier.
     */
    public function soldierWeapon(): string
    {
        return $this->classWeapons('soldier');
    }

    public function soldierPrimary(): string
    {
        return $this->classSlotWeapons('soldier', 'primary');
    }

    public function soldierSecondary(): string
    {
        return $this->classSlotWeapons('soldier', 'secondary');
    }

    public function soldierMelee(): string
    {
        return $this->classSlotWeapons('soldier', 'melee');
    }

    /**
     * <h4>Pyro Weapons</h4>
     * Returns weapons for Pyro.
     */
    public function pyroWeapon(): string
    {
        return $this->classWeapons('pyro');
    }

    public function pyroPrimary(): string
    {
        return $this->classSlotWeapons('pyro', 'primary');
    }

    public function pyroSecondary(): string
    {
        return $this->classSlotWeapons('pyro', 'secondary');
    }

    public function pyroMelee(): string
    {
        return $this->classSlotWeapons('pyro', 'melee');
    }

    /**
     * <h4>Demoman Weapons</h4>
     * Returns weapons for Demoman.
     */
    public function demomanWeapon(): string
    {
        return $this->classWeapons('demoman');
    }

    public function demomanPrimary(): string
    {
        return $this->classSlotWeapons('demoman', 'primary');
    }

    public function demomanSecondary(): string
    {
        return $this->classSlotWeapons('demoman', 'secondary');
    }

    public function demomanMelee(): string
    {
        return $this->classSlotWeapons('demoman', 'melee');
    }

    /**
     * <h4>Heavy Weapons</h4>
     * Returns weapons for Heavy.
     */
    public function heavyWeapon(): string
    {
        return $this->classWeapons('heavy');
    }

    public function heavyPrimary(): string
    {
        return $this->classSlotWeapons('heavy', 'primary');
    }

    public function heavySecondary(): string
    {
        return $this->classSlotWeapons('heavy', 'secondary');
    }

    public function heavyMelee(): string
    {
        return $this->classSlotWeapons('heavy', 'melee');
    }

    /**
     * <h4>Engineer Weapons</h4>
     * Returns weapons for Engineer.
     */
    public function engineerWeapon(): string
    {
        return $this->classWeapons('engineer');
    }

    public function engineerPrimary(): string
    {
        return $this->classSlotWeapons('engineer', 'primary');
    }

    public function engineerSecondary(): string
    {
        return $this->classSlotWeapons('engineer', 'secondary');
    }

    public function engineerMelee(): string
    {
        return $this->classSlotWeapons('engineer', 'melee');
    }

    public function engineerPDA(): string
    {
        return $this->classSlotWeapons('engineer', 'pda');
    }

    /**
     * <h4>Medic Weapons</h4>
     * Returns weapons for Medic.
     */
    public function medicWeapon(): string
    {
        return $this->classWeapons('medic');
    }

    public function medicPrimary(): string
    {
        return $this->classSlotWeapons('medic', 'primary');
    }

    public function medicSecondary(): string
    {
        return $this->classSlotWeapons('medic', 'secondary');
    }

    public function medicMelee(): string
    {
        return $this->classSlotWeapons('medic', 'melee');
    }

    /**
     * <h4>Sniper Weapons</h4>
     * Returns weapons for Sniper.
     */
    public function sniperWeapon(): string
    {
        return $this->classWeapons('sniper');
    }

    public function sniperPrimary(): string
    {
        return $this->classSlotWeapons('sniper', 'primary');
    }

    public function sniperSecondary(): string
    {
        return $this->classSlotWeapons('sniper', 'secondary');
    }

    public function sniperMelee(): string
    {
        return $this->classSlotWeapons('sniper', 'melee');
    }

    /**
     * <h4>Spy Weapons</h4>
     * Returns weapons for Spy.
     */
    public function spyWeapon(): string
    {
        return $this->classWeapons('spy');
    }

    public function spyPrimary(): string
    {
        return $this->classSlotWeapons('spy', 'primary');
    }

    public function spyMelee(): string
    {
        return $this->classSlotWeapons('spy', 'melee');
    }

    public function spyPDA(): string
    {
        return $this->classSlotWeapons('spy', 'pda');
    }

    public function spyWatch(): string
    {
        return $this->classSlotWeapons('spy', 'watch');
    }

    public function spySapper(): string
    {
        return $this->classSlotWeapons('spy', 'sapper');
    }
}
