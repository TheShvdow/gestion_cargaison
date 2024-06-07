// Model/ProduitMaterielFragile.ts
import ProduitMateriel from './ProduitMateriel';

class ProduitMaterielFragile extends ProduitMateriel {
  constructor(libelle: string, poids: number) {
    super(libelle, poids, 'Fragile');
  }

  info() {
    console.log(`Produit Matériel Fragile: ${this.libelle}, Poids: ${this.poids}kg`);
  }
}

export default ProduitMaterielFragile;
