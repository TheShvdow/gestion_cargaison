import './style.css'
import cargaisons from './data/cargaisons.json';
import fs from 'fs';


interface Cargaison {
  id_cargo: string;
  category: string;
  dateDepart: string;
  dateArrive: string;
  origine: string;
  destination: string;
  etat: string;
  poids: number | null;
  volume: number | null;
}

function createTableRow(cargaison: Cargaison): string {
  return `
      <tr class="bg-white border-4 hover:bg-gray-50">
          <td class="w-4 p-4">
              <div class="flex items-center">
                  <input type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2">
                  <label class="sr-only">checkbox</label>
              </div>
          </td>
          <td class="px-6 py-4 text-center text-slate-700">${cargaison.id_cargo}</td>
          <td class="px-6 py-4 text-center text-slate-700">${cargaison.category}</td>
          <td class="px-6 py-4 text-center text-slate-700">${cargaison.dateDepart}</td>
          <td class="px-6 py-4 text-center text-slate-700">${cargaison.dateArrive}</td>
          <td class="px-6 py-4 text-center text-slate-700">${cargaison.origine}</td>
          <td class="px-6 py-4 text-center text-slate-700">${cargaison.destination}</td>
          <td class="px-6 py-4 text-center text-slate-700">${cargaison.etat}</td>
          <td class="px-6 py-4 flex justify-between">
              <a href="#"><svg class="w-[28px] h-[28px] text-blue-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/> <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/></svg></a>
              <a href="#"><svg class="w-[28px] h-[28px] text-orange-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M5 13.17a3.001 3.001 0 0 0 0 5.66V20a1 1 0 1 0 2 0v-1.17a3.001 3.001 0 0 0 0-5.66V4a1 1 0 0 0-2 0v9.17ZM11 20v-9.17a3.001 3.001 0 0 1 0-5.66V4a1 1 0 1 1 2 0v1.17a3.001 3.001 0 0 1 0 5.66V20a1 1 0 1 1-2 0Zm6-1.17V20a1 1 0 1 0 2 0v-1.17a3.001 3.001 0 0 0 0-5.66V4a1 1 0 1 0-2 0v9.17a3.001 3.001 0 0 0 0 5.66Z"/></svg></a>
              <a href="#"><svg class="w-[28px] h-[28px] text-green-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M15 7a2 2 0 1 1 4 0v4a1 1 0 1 0 2 0V7a4 4 0 0 0-8 0v3H5a2 2 0 0 0-2 2v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-7a2 2 0 0 0-2-2V7Zm-5 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z"/></svg></a>
              <a href="#"><svg class="w-[28px] h-[28px] text-red-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M8 10V7a4 4 0 1 1 8 0v3h1a2 2 0 0 1 2 2v7a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2v-7a2 2 0 0 1 2-2h1Zm2-3a2 2 0 1 1 4 0v3h-4V7Zm2 6a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0v-3a1 1 0 0 1 1-1Z" clip-rule="evenodd"/></svg></a>
              <a href="#"><svg class="w-[28px] h-[28px] text-gray-800" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path fill="currentColor" d="M20 10H4v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8ZM9 13v-1h6v1a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1Z"/><path fill="currentColor" d="M2 6a2 2 0 0 1 2-2h16a2 2 0 1 1 0 4H4a2 2 0 0 1-2-2Z"/></svg></a>
          </td>
      </tr>
  `;
}

function filterData(data: Cargaison[], filter: string): Cargaison[] {
  return data.filter(item => {
    for (let key in item) {
      if (typeof item[key as keyof Cargaison] === 'string' && item[key as keyof Cargaison] !== null && item[key as keyof Cargaison].toLowerCase().includes(filter.toLowerCase())) {
        return true;
      }
    }
    return false;
  });
}

function populateTable(data: Cargaison[] = cargaisons) {
  const tableBody = document.getElementById('table_cargaison')?.querySelector('tbody');
  if (!tableBody) return;

  let rows = '';
  data.forEach((cargaison: Cargaison) => {
    rows += createTableRow(cargaison);
  });
  tableBody.innerHTML = rows;
}

document.addEventListener('DOMContentLoaded', () => {
  populateTable();

  const input = document.getElementById('default-search') as HTMLInputElement;
  input.addEventListener('input', (event) => {
    const filterValue = (event.target as HTMLInputElement).value;
    const filteredData = filterData(cargaisons, filterValue);
    populateTable(filteredData);
  });
});




/* function populateTable() {
  const tableBody = document.getElementById('table_cargaison')?.querySelector('tbody');
  if (!tableBody) return;

  let rows = '';
  cargaisons.forEach((cargaison: Cargaison) => {
    rows += createTableRow(cargaison);
  });
  tableBody.innerHTML = rows;
} */
  
  





function generateId(): string {
  const prefix = 'GPM-';
  const number = Math.floor(Math.random() * 9000) + 1000; // Generates a number between 1000 and 9999
  return `${prefix}${number}`;
}



// test.ts
/* import ProduitAlimentaire from './model/ProduitAlimentaire';
import ProduitChimique from './model/ProduitChimique';
import ProduitMaterielFragile from './model/ProduitMaterielFragile';
import ProduitMaterielIncassable from './model/ProduitMaterielIncassable';
import CargaisonMaritime from './model/CargaisonMaritime';
import CargaisonAerienne from './model/CargaisonAerienne';
import CargaisonRoutiere from './model/CargaisonRoutiere'; */



/* 
const cargaisonMaritime = new CargaisonMaritime(1000, 90);
const produit1 = new ProduitAlimentaire('Banane', 10);
const produit2 = new ProduitChimique('Acide', 5, 3);
const produit3 = new ProduitMaterielFragile('Vase', 2);
const produit4 = new ProduitMaterielIncassable('Table', 15);

cargaisonMaritime.ajouterProduit(produit1);
cargaisonMaritime.ajouterProduit(produit2);

console.log(`Montant total de la cargaison maritime: ${cargaisonMaritime.sommetotaleC()} F`);
console.log(`Nombre de produits dans la cargaison maritime: ${cargaisonMaritime.nbProduit1()}`);

const cargaisonAerienne = new CargaisonAerienne(2000, 150);
cargaisonAerienne.ajouterProduit(produit3);
cargaisonAerienne.ajouterProduit(produit4);

console.log(`Montant total de la cargaison aérienne: ${cargaisonAerienne.sommetotaleC()} F`);
console.log(`Nombre de produits dans la cargaison aérienne: ${cargaisonAerienne.nbProduit1()}`);

const cargaisonRoutiere = new CargaisonRoutiere(500, 50);
cargaisonRoutiere.ajouterProduit(produit1);
cargaisonRoutiere.ajouterProduit(produit4);

console.log(`Montant total de la cargaison routière: ${cargaisonRoutiere.sommetotaleC()} F`);
console.log(`Nombre de produits dans la cargaison routière: ${cargaisonRoutiere.nbProduit1()}`);
   */


// Définissez les types de variables
let table: HTMLElement | null;
let paginationContainer: HTMLElement | null;
let itemsPerPage: number;
let totalItems: number;
let totalPages: number;
let currentPage: number;

// Définissez la fonction updatePagination
function updatePagination() {
  if (table === null || paginationContainer === null) {
    return;
  }

  // Calculez l'index de début et de fin des éléments à afficher
  const startIndex = (currentPage - 1) * itemsPerPage;
  const endIndex = startIndex + itemsPerPage;

  // Masquez tous les éléments du tableau
  for (let i = 0; i < totalItems; i++) {
    (table.children[i] as HTMLElement).style.display = 'none';
  }

  // Affichez les éléments de la page courante
  for (let i = startIndex; i < endIndex && i < totalItems; i++) {
    (table.children[i] as HTMLElement).style.display = '';
  }

  // Mettez à jour les éléments de pagination
  for (let i = 0; i < totalPages; i++) {
    (paginationContainer.children[i] as HTMLElement).classList.remove('active');
    if (i + 1 === currentPage) {
      (paginationContainer.children[i] as HTMLElement).classList.add('active');
    }
  }
}



document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById('formulaire_cargo') as HTMLFormElement;
  const selectChoice = document.getElementById('type_cargo') as HTMLInputElement;
  const origineInput = document.getElementById('origine') as HTMLSelectElement;
  const destinationInput = document.getElementById('destination') as HTMLInputElement;
  const dateDepartInput = document.getElementById('depart') as HTMLInputElement;
  const dateFinInput = document.getElementById('arrive') as HTMLInputElement;

  form.addEventListener("submit", (event) => {
    event.preventDefault(); // Empêche la soumission par défaut du formulaire

    // Efface les messages d'erreur existants
    clearErrors();

    // Valide les champs du formulaire
    let isValid = validateForm();

    if (isValid) {
      // Soumet le formulaire si tous les champs sont valides
      // form.submit();
    }
  });

  function clearErrors() {
    const errorMessages = document.querySelectorAll('.error-message');
    errorMessages.forEach(error => error.remove());
  }

  function validateForm(): boolean {
    let isValid = true;

    if (!selectChoice.value) {
      showError(selectChoice, 'une choix  est requis.');
      isValid = false;
    }

    if (!origineInput.value) {
      showError(origineInput, "Pays d'origine est requis.");
      isValid = false;
    }

    if (!destinationInput.value) {
      showError(destinationInput, 'Pays de destination est requis.');
      isValid = false;
    }

    if (!dateDepartInput.value) {
      showError(dateDepartInput, 'La date de départ est requise.');
      isValid = false;
    }

    if (!dateFinInput.value) {
      showError(dateFinInput, 'La date de fin est requise.');
      isValid = false;
    }

    if (new Date(dateDepartInput.value) > new Date(dateFinInput.value)) {
      showError(dateFinInput, 'La date de fin doit être postérieure à la date de départ.');
      isValid = false;
    }

    return isValid;
  }

  function showError(input: HTMLElement, message: string) {
    const errorSpan = document.createElement('span');
    errorSpan.className = 'error-message text-red-600 text-sm';
    errorSpan.innerText = message;
    input.parentElement?.appendChild(errorSpan);
  }

  /* ----------------------------------------------- pagination -------------------------------------------------- */

  table = document.querySelector('table tbody');
  paginationContainer = document.querySelector('.pagination');

  if (table === null || paginationContainer === null) {
    return;
  }

  // Définissez le nombre d'éléments par page et calculez le nombre total de pages
  itemsPerPage = 10;
  totalItems = table.children.length;
  totalPages = Math.ceil(totalItems / itemsPerPage);

  // Créez les éléments de pagination
  for (let i = 1; i <= totalPages; i++) {
    const pageItem = document.createElement('li');
    pageItem.textContent = i.toString();
    pageItem.addEventListener('click', function () {
      currentPage = i;
      updatePagination();
    });
    paginationContainer.appendChild(pageItem);
  }

  // Définissez la page courante et mettez à jour l'affichage

  currentPage = 1;
  updatePagination();

  /* const Activation = document.getElementsByClassName('.activePromo'); */

});


/* ----------------------- recuperation des donnes du formulaire cargo ------------------------------------ */

const form = document.getElementById('formulaire_cargo') as HTMLFormElement;
const selectChoice = document.getElementById('type_cargo') as HTMLInputElement;
const origineInput = document.getElementById('origine') as HTMLSelectElement;
const destinationInput = document.getElementById('destination') as HTMLInputElement;
const dateDepartInput = document.getElementById('depart') as HTMLInputElement;
const dateArriveInput = document.getElementById('arrive') as HTMLInputElement;

form.addEventListener("submit" ,(event) => {

  event.preventDefault(); // Empêche la soumission par défaut du formulaire
  const formData = new FormData();

  const id =  generateId();
  formData.append('id_cargo', id);
  formData.append('type_cargo', selectChoice.value);
  formData.append('origine', origineInput.value);
  formData.append('destination', destinationInput.value);
  formData.append('depart', dateDepartInput.value);
  formData.append('arrive', dateArriveInput.value);
  
  fetch ("./process/process_form.php",{
    method: "POST",
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify(formData)
  })
  
  .then(response => {
    if (!response.ok) {
      throw new Error('Erreur lors de la requête.');
    }
    console.log(response);
    return response.text();
})
.then(data => {
  console.log(data); // Afficher la réponse du script PHP
})
.catch(error => {
    console.error('Erreur:', error);
  }); 

  
});  

let data = {
  "id_cargo": "1",
  "type_cargo": "cargo",
  "origine": "France",
  "destination": "Allemagne",
  "depart": "2021-06-01",
  "arrive": "2021-06-10"
}
fs.writeFile('./data/cargaison.json', JSON.stringify(data),(err)=>{
  if(err) throw err;
  console.log(data);
});

const formu = document.getElementById('formulaire_cargo') as HTMLFormElement;

formu.addEventListener('submit', async (event) => {
    event.preventDefault();

    const formData = new FormData(formu);
    const response = await fetch('/submit', {
        method: 'POST',
        body: formData,
    });

    if (response.ok) {
        console.log('Form submitted successfully');
    } else {
        console.error('Form submission failed');
    }
});


/* const form = document.getElementById('formulaire_cargo') as HTMLFormElement;
const selectChoice = document.getElementById('type_cargo') as HTMLInputElement;
const origineInput = document.getElementById('origine') as HTMLSelectElement;
const destinationInput = document.getElementById('destination') as HTMLInputElement;
const dateDepartInput = document.getElementById('depart') as HTMLInputElement;
const dateArriveInput = document.getElementById('arrive') as HTMLInputElement;

form.addEventListener("submit", (event) => {
  event.preventDefault(); // Empêche la soumission par défaut du formulaire

  const formData = new FormData(form);

  // Générer un ID pour le cargo
  const id = generateId();
  formData.append('id_cargo', id);
  formData.append('type_cargo', selectChoice.value);
  formData.append('origine', origineInput.value);
  formData.append('destination', destinationInput.value);
  formData.append('depart', dateDepartInput.value);
  formData.append('arrive', dateArriveInput.value);


  fetch("/src/process/process_form.php", {
    method: "POST",
    body: formData
  })
    .then(response => {
      if (!response.ok) {
        return response.json().then(err => { throw new Error(err.message); });
      }
      return response.json();
    })
    .then(data => {
      console.log(data); // Afficher la réponse du script PHP
      alert("Données ajoutées avec succès !");
    })
    .catch(error => {
      console.error('Erreur:', error);
      alert("Erreur: " + error.message);
    });

});



 */
/* 
document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('formulaire_cargo') as HTMLFormElement;

  form.addEventListener('submit', async (event) => {
      event.preventDefault();
      const formData = new FormData(form);

      try {
          const response = await fetch('/api/src/process/process_form.php', {
              method: 'POST',
              body: formData,
          });

          const result = await response.json();
          console.log(result);
      } catch (error) {
          console.error('Error:', error);
      }
  });
});
 */