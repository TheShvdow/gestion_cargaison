// Model/ProduitChimique.ts
import Produit from './produit';

class ProduitChimique extends Produit {
  constructor(libelle: string, poids: number, public degreToxicite: number) {
    super(libelle, poids);
  }

  info() {
    console.log(`Produit Chimique: ${this.libelle}, Poids: ${this.poids}kg, Degré de toxicité: ${this.degreToxicite}`);
  }
}
export default ProduitChimique;
