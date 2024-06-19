<?php 
class SuperHero 
{
    // public $name; # asi se hacia antes
    // public $power;
    // public $planet;

    // public function __construct($name, $power, $planet)
    // {
    //     $this->name = $name;
    //     $this->power = $power;
    //     $this->planet = $planet;
    // }

    public function __construct(readonly public string $name, private $power, public $planet) #asi mas corto no te parece promoted propierties
    {
    }

    public function attact() {
        return "$this->name ataca con sus poderes";
    }

    public function description() {
        return "$this->name es un super heroe que viene de $this->planet y tiene los siguientes poderes $this->power";
    }

    public static function ramdom()
    {
        $nombres = ["a", "b", "c"];
        $poderes = ["duro", "grande", "fuerte", "rapido"];
        $planets = ["z", "x", "y"];
        
        $nombre = $nombres[array_rand($nombres)];
        $poder = $poderes[array_rand($poderes)];
        $planeta = $planets[array_rand($planets)];
    
        return new self($nombre, $poder, $planeta);
    }
}

$superman = new SuperHero("superman", "todo", "kripton");
$hero = SuperHero::ramdom();
/*<?=$superman->description();?>
<?=$hero->description()?> */

class nextMovie
{
    public function __construct(
        private string $title,
        private int $days_until,
        private string $following_production,
        private string $release_date,
        private string $poster_url,
        private string $overview,
    ){}
    
    public function days_until() 
    {
        $days = $this->days_until;
        return match (true){
            $days === 0 => "hoy se estrena",
            $days === 1 => "mañana se estrena",
            $days < 7 => "esta semana se estrena",
            $days < 30 => "este mes se estrena",
            default => "se estrena en $days",
    
        };   
    }
    public static function fetch_and_create($api_url)
    {
        $result = file_get_contents($api_url);
        $data = json_decode($result, true);
        
        return new self (
            $data["title"],
            $data["days_until"],
            $data["following_production"]["title"],
            $data["release_date"],
            $data["poster_url"],
            $data["overview"]

        );
    }
    public function get_data()
    {
        return get_object_vars($this);
    }
}

?>

