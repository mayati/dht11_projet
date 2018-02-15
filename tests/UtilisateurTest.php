<?php

use PHPUnit\Framework\TestCase;

include '../classes/Utilisateur.php';

/**
 *  test case.
 */
class UtilisateurTest extends TestCase {

    public function testUtilisateur() {
        
        $utilisateur = new Utilisateur(1, "Meriem", "Ayati");
        
        $this->assertEquals(1, $utilisateur->id);
        $this->assertEquals ("Meriem", $utilisateur->prenom);
        $this->assertEquals ("Ayati", $utilisateur->nom);
    }
}

