// Model/ProduitAlimentaire.ts
import Produit from './produit';

class ProduitAlimentaire extends Produit {
  info() {
    console.log(`Produit Alimentaire: ${this.libelle}, Poids: ${this.poids}kg`);
  }
}
export default ProduitAlimentaire;
