// Model/Produit.ts
abstract class Produit {
    constructor(public libelle: string, public poids: number) {}
    abstract info(): void;
  }
  export default Produit;
  