<?php
// One-to-One Relation ship
class Personne {
    private $id;
    private $nom;
    private $passeport; // Un objet Passeport

    // Getters et setters pour id et nom
    public function getId() {
        return $this->id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function getNom() {
        return $this->nom;
    }

    public function setNom($nom): void {
        $this->nom = $nom;
    }

    public function setPasseport(Passeport $passeport): void {
        $this->passeport = $passeport;
        $passeport->setPersonne($this); // Lien bidirectionnel
    }
}

class Passeport {
    private $numero;
    private $dateExpiration;
    private $personne; // Un objet Personne

    // Getters et setters pour numero et dateExpiration
    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero): void {
        $this->numero = $numero;
    }

    public function getDateExpiration() {
        return $this->dateExpiration;
    }

    public function setDateExpiration($dateExpiration): void {
        $this->dateExpiration = $dateExpiration;
    }

    public function getPersonne() {
        return $this->personne;
    }

    public function setPersonne(Personne $personne): void {
        $this->personne = $personne;
    }
}

// Création d'une personne
$personne = new Personne();
$personne->setId(1);
$personne->setNom("Dina Dehbi");

// Création d'un passeport
$passeport = new Passeport();
$passeport->setNumero("123456789");
$passeport->setDateExpiration("2026-12-31");

// Lier la personne et le passeport
$personne->setPasseport($passeport);

// Vérification du lien bidirectionnel
echo "Nom de la personne : " . $personne->getNom() . "\n" ."Numéro du passeport : " . $passeport->getNumero() . "\n". "Personne associée au passeport : " . $passeport->getPersonne()->getNom();


















// One-to-Many Relationsheep

class Auteur {
    private $id;
    private $nom;
    /** @var Livre[] */
    private $livres = [];

    // ... getters et setters ...

    public function addLivre(Livre $livre): void {
        $this->livres[] = $livre;
        $livre->setAuteur($this);
    }
}

class Livre {
    private $id;
    private $titre;
    private $auteur; // Un objet Auteur

    // ... getters et setters ...
}




//Many-to-Many relation


class Etudiant {
    private $id;
    private $nom;
    /** @var Cours[] */
    private $cours = [];

    // ... getters et setters ...

    public function ajouterCours(Cours $cours): void {
        $this->cours[] = $cours;
        $cours->ajouterEtudiant($this);
    }
}

class Cours {
    private $id;
    private $nom;
    /** @var Etudiant[] */
    private $etudiants = [];

    // ... getters et setters ...

    public function ajouterEtudiant(Etudiant $etudiant): void {
        $this->etudiants[] = $etudiant;
    }
}



?>
