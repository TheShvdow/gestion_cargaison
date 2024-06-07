<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/image/GP_du_Monde.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css">
  <script src="https://kit.fontawesome.com/456180ef81.js" crossorigin="anonymous"></script>

  <title>Gestion Cargaison</title>

  <style>
    #map {
      height: 75px;
      /* ou une hauteur appropriée selon vos besoins */
      width: 450px;
    }
  </style>



</head>

<body class="w-full relative h-full bg-white ">
  <div class="min-h-screen flex">
    <!-- SideBar -->
    <div class="w-96 h-auto bg-blue-900 text-white flex flex-col justify-center font-Roboto text-xl">
      <div class="p-4 flex items-center justify-center">
        <img src="/image/GP_du_Monde.png" href="#" alt="GP du Monde Logo" class=" cursor-pointer w-64 h-72">
      </div>
      <nav class="mt-6 flex-1 justify-center">
        <ul class="w-72 flex flex-col ml-10 gap-4 ">
          <li class="mb-4 w-full text-center">
            <a href="index.php" class="block py-2 px-4 border-2 rounded-xl hover:bg-gradient-to-r from-green-400 hover:to-pink-500 hover:text-blue-900 hover:border-green-400 hover:border hover:animate-bounce ">Dashboard</a>
          </li>
          <li class="mb-4 w-full text-center">
            <a href="#" class="block py-2 px-4 border-2 rounded-xl hover:bg-gradient-to-r from-green-400 hover:to-pink-500 hover:text-blue-900 hover:border-green-400 hover:border hover:animate-bounce ">Cargaison</a>
          </li>
          <li class="mb-4 w-full text-center">
            <a href="#" class="block py-2 px-4 border-2 rounded-xl hover:bg-gradient-to-r from-green-400 hover:to-pink-500 hover:text-blue-900 hover:border-green-400 hover:border hover:animate-bounce ">Produits</a>
          </li>
        </ul>
      </nav>
      <!-- <div class="p-4 flex flex-col ml-10 mb-4">
        <button class="w-52 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 py-2 mb-6 rounded-xl ">LOG
          IN</button>
        <button class="w-52  bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 py-2 rounded-xl">SIGN
          IN</button>
      </div> -->
    </div>

    <!-- Main Content -->
    <div class="flex-1 pr-6 pl-6 ">
      <header class="flex justify-between items-center mb-6 mt-0">
        <div class="flex justify-between bg-gray-200 w-full h-20 rounded-b-xl p-6 ">
          <div class="text-2xl font-bold">
            <i class="fa-solid fa-bars fa-2xl cursor-pointer" style="color: #1e3a8a;"></i>
          </div>
          <div>
            <h1 class="text-3xl font-bold text-blue-900"> Bienvenue dans le système de Gestion de cargaisons</h1>
          </div>
          <div class="flex justify-between ">
            <button class="bg-blue-900 text-white py-2 px-4 rounded-xl w-40  text-xl flex justify-center items-center ">
              <i class="fas fa-calendar-alt"></i> 17/05/2024
            </button>
            <span class="ml-3">
              <i class="fa-solid fa-sun fa-2xl fa-spin" style="color: #1e3a8a;"></i>
            </span>
            <!-- <span> 
                <i class="fa-sharp fa-solid fa-moon fa-shake fa-2xl" style="color: #1e3a8a;"></i>
              </span> -->
          </div>
        </div>
      </header>

      <main class="flex justify-between h-[85vh] ">
        <!-- Section Principal -->
        <section class="mb-6 flex flex-col w-full h-full p-5 box-border border-blue-900 border relative ">
          <!-- Ajouter carga -->

          <!-- Main modal -->

          <!-- Fin ajouter cargo -->

          <form class="flex justify-between w-full top-0">
            <!-- <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label> -->
            <div class="relative ml-3">
              <div class=" w-full absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                <svg class="w-4 h-4 text-gray-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>
              </div>
              <input type="search" id="default-search" class="block w-96 p-4 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 " placeholder="Search cargo ... " required />
              <button type="submit" class="text-white absolute end-2.5 bottom-[10px] bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 ">Search</button>
            </div>
            <!-- Modal toggle -->
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal" class="mr-3 w-72 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center flex justify-center items-center gap-1" type="button">
              <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-7 7V5" />
              </svg>
              Ajouter Cargaison
            </button>
            <!-- End Modal toggle -->
          </form>


          <div class="relative p-4">
            <table id="table_cargaison" class="w-full text-sm text-left text-gray-500 ">
              <thead class="text-xs text-gray-700 uppercase bg-slate-400 ">
                <tr>
                  <th scope="col" class="p-4">
                    <div class="flex items-center">
                      <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2 ">
                      <label for="checkbox-all-search" class="sr-only">checkbox</label>
                    </div>
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    ID
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    Category
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    Date départ
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    Date
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    Origine
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    Destination
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    Etat
                  </th>
                  <th scope="col" class="px-6 py-3 text-center">
                    Action
                  </th>
                </tr>
              </thead>
              <tbody>
                <!-- données chargé  et injecté par main.ts à partir du fichier JSON  -->
              </tbody>
            </table>
            <nav class="flex items-center flex-column flex-wrap md:flex-row justify-between pt-4" aria-label="Table navigation">
              <span class="text-sm font-normal text-gray-500 dark:text-gray-400 mb-4 md:mb-0 block w-full md:inline md:w-auto">Showing <span class="font-semibold text-gray-900">1-10</span> of <span class="font-semibold text-gray-900 ">1000</span></span>
              <ul class="inline-flex -space-x-px rtl:space-x-reverse text-sm h-8">
                <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700 ">Previous</a>
                </li>
                <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">1</a>
                </li>
                <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">2</a>
                </li>
                <li>
                  <a href="#" aria-current="page" class="flex items-center justify-center px-3 h-8 text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700 ">3</a>
                </li>
                <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 ">4</a>
                </li>
                <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700">5</a>
                </li>
                <li>
                  <a href="#" class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700">Next</a>
                </li>
              </ul>
            </nav>
          </div>


          <div class="relative ">
            <div id="authentication-modal" tabindex="-1" aria-hidden="true" class="hidden absolute inset-0 z-50 left-52 -top-[450px]">
              <div class="relative w-[60vw] h-[100vh] p-2 overflow-hidden">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg h-[60vh] w-[55vw] shadow dark:bg-blue-800">
                  <!-- Modal header -->
                  <div class="flex items-center justify-between p-2 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                      Ajouter Cargaison
                    </h3>
                    <button type="button" class="end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="authentication-modal">
                      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                      </svg>
                      <span class="sr-only">Close modal</span>
                    </button>
                  </div>
                  <!-- Modal body -->
                  <div class="p-2 flex flex-col flex-1 bg-blue-800">
                    <form id="formulaire_cargo" class="teste p-2">
                      <div class="grid grid-cols-2 gap-5 p-3">
                        <div>
                          <label for="type cargo" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Type de Cargaison </label>
                          <select type="select" name="type_cargo" id="type_cargo" class="bg-gray-50 pl-5 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " placeholder="type de cargaison">
                            <option value="maritime">Maritime</option>
                            <option value="aérien">Aérien</option>
                            <option value="routiere">Routiere</option>
                          </select>
                        </div>
                        <div>
                          <label for="origine" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Pays d'origine </label>
                          <input type="text" name="origine" id="origine" placeholder="pays de départ" class="pl-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 " required readonly />
                        </div>
                        <div>
                          <div id="map"></div>
                        </div>
                        <div>
                          <label for="destination" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">pays destination</label>
                          <input type="text" name="destination" id="destination" placeholder="pays destination" class="pl-5 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 " required readonly />
                        </div>
                        
                        <div>
                          <label for="distance" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Distance</label>
                          <input type="text" name="destination" id="distance" placeholder="distance en km..." class="bg-gray-50 border border-gray-300 pl-5 text-gray-900 text-lg rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2 " required readonly />
                        </div>
                        <div class="flex mr-5 gap-9 items-center border-2 justify-center border-white">
                          <label for="poids" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Poids
                            <input type="radio" name="poids" id="capacity" class="ml-4 w-5 h-5">
                          </label>
                          <label for="poids" class=" mb-2 text-lg font-medium text-gray-900 dark:text-white">Volume <input type="radio" name="volume" id="capacity" class="ml-4 w-5 h-5"> </label>
                        </div>
                        <div>
                          <label for="date_depart" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">date de départ</label>
                          <input type="date" name="depart" id="depart" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
                        </div>
                        <div>
                          <label for="date d'arrivé" class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">Date d'arrivé</label>
                          <input type="date" name="arrive" id="arrive" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 " required />
                        </div>
                      </div>
                      <button type="submit" class="mt-7 w-full h-14 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"> Ajouter</button>

                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </section>

        <!-- End Section Principal -->

      </main>
    </div> <!-- End Main Content -->
  </div>
  <!-- <footer class="-z-10 w-[1500px] absolute bottom-1 right-4 flex justify-center  rounded-t-xl text-2xl text-center py-4  bg-gray-200 mt-6 mb-0">
    &copy; <a href="https://sonatelacademy.com/" target="_blank">Sonatel Academy 2024 </a>, Tout droits réserves
  </footer> -->

  <script type="module" src="/src/main.ts"></script>
  <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const modalToggleButtons = document.querySelectorAll('[data-modal-toggle]');
      const modals = document.querySelectorAll('.hidden');


      modalToggleButtons.forEach(button => {
        button.addEventListener('click', function() {
          const modalId = this.getAttribute('data-modal-target');
          const modal = document.getElementById(modalId);
          if (modal) {
            modal.classList.toggle('hidden');
          }
        });
      });

      const modalCloseButtons = document.querySelectorAll('[data-modal-hide]');
      modalCloseButtons.forEach(button => {
        button.addEventListener('click', function() {
          const modal = button.closest('.absolute');
          if (modal) {
            modal.classList.add('hidden');
          }
        });
      });
    });
  </script>
  <script>
    let map, departMarker, arriveeMarker;

    map = L.map("map").setView([0, 0], 2);
    L.tileLayer("https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png", {
      maxZoom: 18,
    }).addTo(map);

    map.on("click", function(e) {
      if (!departMarker) {
        departMarker = L.marker(e.latlng, {
            draggable: true
          }).addTo(map)
          .bindPopup("Lieu de départ")
          .openPopup();
        updateInputWithLocationName(e.latlng, "origine");

        departMarker.on('dragend', function(event) {
          let marker = event.target;
          let position = marker.getLatLng();
          updateInputWithLocationName(position, "origine");
          if (arriveeMarker) {
            calculateDistance(position, arriveeMarker.getLatLng());
          }
        });

      } else if (!arriveeMarker) {
        arriveeMarker = L.marker(e.latlng, {
            draggable: true
          }).addTo(map)
          .bindPopup("Lieu d'arrivée")
          .openPopup();
        updateInputWithLocationName(e.latlng, "destination");
        calculateDistance(departMarker.getLatLng(), e.latlng);

        arriveeMarker.on('dragend', function(event) {
          let marker = event.target;
          let position = marker.getLatLng();
          updateInputWithLocationName(position, "destination");
          calculateDistance(departMarker.getLatLng(), position);
        });
      } else {
        arriveeMarker.setLatLng(e.latlng);
        updateInputWithLocationName(e.latlng, "destination");
        calculateDistance(departMarker.getLatLng(), e.latlng);
      }
    });

    function updateInputWithLocationName(latlng, inputId) {
      fetch(`https://nominatim.openstreetmap.org/reverse?format=json&lat=${latlng.lat}&lon=${latlng.lng}`)
        .then(response => response.json())
        .then(data => {
          const country = data.address.country || `${latlng.lat}, ${latlng.lng}`;
          document.getElementById(inputId).value = country;
        })
        .catch(error => {
          console.error('Error fetching location name:', error);
          document.getElementById(inputId).value = `${latlng.lat}, ${latlng.lng}`;
        });
    }

    function calculateDistance(start, end) {
      const lat1 = start.lat;
      const lon1 = start.lng;
      const lat2 = end.lat;
      const lon2 = end.lng;

      const R = 6371; // Radius of the Earth in km
      const dLat = ((lat2 - lat1) * Math.PI) / 180;
      const dLon = ((lon2 - lon1) * Math.PI) / 180;
      const a =
        Math.sin(dLat / 2) * Math.sin(dLat / 2) +
        Math.cos((lat1 * Math.PI) / 180) *
        Math.cos((lat2 * Math.PI) / 180) *
        Math.sin(dLon / 2) *
        Math.sin(dLon / 2);
      const c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1 - a));
      const distance = R * c;

      document.getElementById("distance").value = distance.toFixed(2);
    }
    /*   const choixSelect = document.getElementById("poids-suporter");
      const champSaisi = document.getElementById("champ-saisi");
      const labelValeur = document.querySelector("#champ-saisi label");
      const inputValeur = document.getElementById("valeur-max"); */

    /* choixSelect.addEventListener("change", function() {
      if (this.value === "poids") {
        champSaisi.classList.remove("hidden");
        labelValeur.textContent = "Poids maximal";
        inputValeur.placeholder = "Entrez le poids maximal";
      } else if (this.value === "nombre") {
        champSaisi.classList.remove("hidden");
        labelValeur.textContent = "Nombre maximal de produits";
        inputValeur.placeholder = "Entrez le nombre maximal de produits";
      } else {
        champSaisi.classList.add("hidden");
      }
    }); */

    // Invalidate the map size to ensure it renders correctly
    /* setTimeout(() => {
      map.invalidateSize();
    }, 100); */
  </script>
  <script>
    // document.querySelector(".teste").addEventListener("submit", function(event) {
    //   event.preventDefault();
    //   const formData = new FormData(event.target);
    //   const data = Object.fromEntries(formData.entries());
    //   console.log(data);
    // });


        document.getElementById('formulaire_cargo').addEventListener('submit', function(event) {
            event.preventDefault();
            const formData = new FormData(event.target);
            const data = Object.fromEntries(formData.entries());
            console.log(data);
            fetch('./src/process/process_form.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify(data)
            })
            .then(response => response.json())
            .then(data => console.log(data))
            .catch(error => console.error('Erreur:', error));
        });
    </script>

</body>

</html>