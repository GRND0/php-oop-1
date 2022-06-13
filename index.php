<?php
class Movies
{
    public $titolo;
    public $regista;
    public $lingua;
    public $voti;


    function __construct($_titolo, $_regista, $_lingua, $_voti = [])
    {
        $this->titolo = $_titolo;
        $this->regista = $_regista;
        $this->lingua = $_lingua;
        $this->voti = $_voti;
    }

    public function caricaVoto ($_voto) {
        $this->voti[] = $_voto;
    }

    public function calcolaVoto()
    {
        $sommaVoti = 0;
        foreach ($this->voti as $voto) {
            $sommaVoti += $voto;
        }
        $votoMedio = $sommaVoti /count($this->voti) ;
        return $votoMedio;
    }

}

$movies = [];

$filmuno = new Movies("The Matrix ", "Andy e Larry Wachowski", "Inglese");
$filmuno->caricaVoto(5);
$filmuno->caricaVoto(4);
$filmuno->caricaVoto(4);
$filmuno->caricaVoto(5);
$movies[] = $filmuno;

$filmdue = new Movies("The Matrix Reloaded", "Andy e Larry Wachowski", "Inglese");
$filmdue->caricaVoto(5);
$filmdue->caricaVoto(3);
$filmdue->caricaVoto(2);
$filmdue->caricaVoto(5);
$movies[] = $filmdue;

$filmtre = new Movies("The Matrix Revolutions", "Andy e Larry Wachowski", "Inglese");
$filmtre->caricaVoto(5);
$filmtre->caricaVoto(4);
$filmtre->caricaVoto(3);
$filmtre->caricaVoto(1);
$movies[] = $filmtre;

?>

<ul>
    <?php foreach ($movies as $movie) {  ?>
        <li>
            <h2>
                Titolo originale
            </h2>
            <h3>
                <?php echo $movie->titolo; ?>
            </h3>
            <h2>
                Regista
            </h2>
            <h3>
                <?php echo $movie->regista; ?>
            </h3>
            <h2>
                Lingua originale
            </h2>
            <h3>
                <?php echo $movie->lingua; ?>
            </h3>
            <h2>
                Voto medio
            </h2>
            <h3>
                <?php echo $movie->calcolaVoto(); ?>
            </h3>
        </li>
    <?php } ?>
</ul>