// Model/CargaisonMaritime.ts
import Cargaison from './cargo';
import Produit from './produit';

class CargaisonMaritime extends Cargaison {
  ajouterProduit(produit: Produit) {
    if (this.produits.length < 10) {
      this.produits.push(produit);
    } else {
      console.log("Cargaison pleine, impossible d'ajouter un autre produit.");
    }
  }

  calculerFrais(): number {
    return this.produits.reduce((acc, produit) => acc + produit.poids * this.frais, 0);
  }

  sommetotaleC(): number {
    return this.calculerFrais();
  }

  nbProduit1(): number {
    return this.produits.length;
  }
}
export default CargaisonMaritime;
