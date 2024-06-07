// Model/ProduitMaterielIncassable.ts
import ProduitMateriel from './ProduitMateriel';

class ProduitMaterielIncassable extends ProduitMateriel {
  constructor(libelle: string, poids: number) {
    super(libelle, poids, 'Incassable');
  }

  info() {
    console.log(`Produit Matériel Incassable: ${this.libelle}, Poids: ${this.poids}kg`);
  }
}

export default ProduitMaterielIncassable;
