// Model/ProduitMateriel.ts
import Produit from './produit';

abstract class ProduitMateriel extends Produit {
  constructor(libelle: string, poids: number, public type: 'Fragile' | 'Incassable') {
    super(libelle, poids);
  }

  abstract info(): void;
}
export default ProduitMateriel;
