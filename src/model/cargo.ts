// Model/Cargaison.ts
import Produit from './produit';

abstract class Cargaison {
  protected produits: Produit[] = [];

  constructor(public distance: number, public frais: number) {}

  abstract ajouterProduit(produit: Produit): void;
  abstract calculerFrais(): number;
  abstract sommetotaleC(): number;
  abstract nbProduit1(): number;
}
export default Cargaison;
