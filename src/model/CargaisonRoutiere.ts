// Model/CargaisonRoutiere.ts
import Cargaison from './cargo';
import Produit from './produit';

class CargaisonRoutiere extends Cargaison {
  ajouterProduit(produit: Produit) {
    this.produits.push(produit);
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

export default CargaisonRoutiere;
