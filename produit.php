<!doctype html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <link rel="icon" type="image/svg+xml" href="/image/GP_du_Monde.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link
    href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
    rel="stylesheet">
  <script src="https://kit.fontawesome.com/456180ef81.js" crossorigin="anonymous"></script>
  <title>Gestion Cargaison</title>
</head>

<body class="w-full relative h-full bg-white ">
  <div class="min-h-screen flex">
    <!-- SideBar -->
    <div class="w-96 h-[full] bg-blue-900 text-white flex flex-col justify-center font-Roboto text-xl">
      <div class="p-4 flex items-center justify-center">
        <img src="/image/GP_du_Monde.png" href="#" alt="GP du Monde Logo" class=" cursor-pointer w-64 h-72">
      </div>
      <nav class="mt-6 flex-1 justify-center">
        <ul class="w-72 flex flex-col ml-10 gap-4 ">
          <li class="mb-4 w-full text-center">
            <a href="./index.html"
              class="block py-2 px-4 border-2 rounded-xl hover:bg-gradient-to-r from-green-400 hover:to-pink-500 hover:text-blue-900 hover:border-green-400 hover:border hover:animate-bounce ">Dashboard</a>
          </li>
          <li class="mb-4 w-full text-center">
            <a href="./cargaison.html"
              class="block py-2 px-4 border-2 rounded-xl hover:bg-gradient-to-r from-green-400 hover:to-pink-500 hover:text-blue-900 hover:border-green-400 hover:border hover:animate-bounce ">Cargaison</a>
          </li>
          <li class="mb-4 w-full text-center">
            <a href="#"
              class="block py-2 px-4 border-2 rounded-xl hover:bg-gradient-to-r from-green-400 hover:to-pink-500 hover:text-blue-900 hover:border-green-400 hover:border hover:animate-bounce ">Produits</a>
          </li>
        </ul>
      </nav>
      <div class="p-4 flex flex-col ml-10 mb-4">
        <button
          class="w-52 bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 py-2 mb-6 rounded-xl ">LOG
          IN</button>
        <button
          class="w-52  bg-gradient-to-r from-green-400 to-blue-500 hover:from-pink-500 hover:to-yellow-500 py-2 rounded-xl">SIGN IN</button>
      </div>
    </div>

    <!-- Main Content -->
    <div class="flex-1 pr-6 pl-6 ">
      <header class="flex justify-between items-center mb-6 mt-0">
        <div class="flex justify-between bg-gray-200 w-full h-20 rounded-b-xl p-6 ">
          <div class="text-2xl font-bold">
            <i class="fa-solid fa-bars fa-2xl cursor-pointer" style="color: #1e3a8a;"></i>
          </div>
          <div>
            <h1 class="text-3xl font-bold text-blue-900">Bienvenue dans le système de Gestion de cargaisons</h1>
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

      <main class="flex justify-between gap-4 ">
        <!-- Section Principal -->
        <!-- <section class="mb-6 flex-1 p-2  box-border">
          <div class="flex flex-wrap justify-around items-center mt-1 gap-6">
            <div class="bg-slate-300 p-4 rounded-lg shadow w-96 h-80">
              <img src="/image/avion-plat-boites.jpg" alt="Cargaison Aérien"
                class="w-full h-32 object-cover rounded-lg mb-2 brightness-50">
              <div class="text-center relative">
                <p class="font-bold text-white text-2xl absolute -top-24 left-32">Aérien</p>

                <div class="flex justify-around gap-3  w-64 h-12 mt-3">
                  <span
                    class="flex justify-center items-center w-full text-xl rounded-lg border-2 border-blue-600 text-blue-800 font-semibold">
                    Alimentaire </span>
                  <span
                    class="flex justify-center items-center w-full text-xl text-orange-600 rounded-lg border-blue-800 border-2 font-semibold">
                    Fragile </span>
                </div>

                <div class="flex justify-between mt-7 ">
                  <span class="ml-2 text-xl text-blue-800 font-medium">
                    <i class="fa-solid fa-plane-departure"></i> 18/05/2024
                  </span>
                  <span class=" ml-2 text-xl text-blue-800 font-medium">
                    <i class="fa-solid fa-plane-arrival"></i> 18/05/2024
                  </span>
                </div>
                <div class="flex justify-between items-center mt-4 mb-3">
                  <span class="text-xl text-blue-900 font-semibold"> Poids Restant : </span>
                  <span class="text-xl text-blue-800 font-semibold"> 105Kg</span>
                </div>

              </div>
            </div>
            <div class="bg-slate-300 p-4 rounded-lg shadow w-96 h-80">
              <img src="/image/maritime_cargo.jpeg" alt="Maritime"
                class="w-full h-32 object-cover rounded-xl mb-2 brightness-50">
              <div class="text-center relative">
                <p class="absolute right-32 -top-24 text-white text-2xl font-bold">Maritime</p>
                <div class="flex justify-around gap-3  w-64 h-12 mt-3">
                  <span
                    class="flex justify-center items-center w-full text-xl rounded-lg border-2 border-blue-600 text-blue-800 font-semibold">
                    Alimentaire </span>
                  <span
                    class="flex justify-center items-center w-full text-xl text-red-600 rounded-lg border-blue-800 border-2 font-semibold">
                    Chimique </span>
                </div>

                <div class="flex justify-between mt-7 ">
                  <span class="ml-2 text-xl text-blue-800 font-medium">
                    <i class="fa-solid fa-ship"></i> 18/05/2024
                  </span>
                  <span class=" ml-2 text-xl text-blue-800 font-medium">
                    <i class="fa-solid fa-ship"></i> 18/05/2024
                  </span>
                </div>
                <div class="flex justify-between items-center mt-4 mb-3">
                  <span class="text-xl text-blue-900 font-semibold"> Poids Restant : </span>
                  <span class="text-xl text-blue-800 font-semibold"> 

                    <div class="w-40 bg-gray-200 rounded-full dark:bg-gray-700">
                      <div class=" h-5 bg-blue-600 text-sm font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 60%"> 60%</div>
                    </div>
                  
                  </span>
                </div>

              </div>
            </div>
            <div class="bg-slate-300 p-4 rounded-lg shadow w-96 h-80">
              <img src="/image/supply-chain-representation-still-life.jpg" alt="Terrestre"
                class="w-full h-32 object-cover rounded-lg mb-2 brightness-50">
                <div class="text-center relative">
                  <p class=" absolute -top-24 left-28 text-white font-semibold text-2xl">Terrestre</p>
                  <div class="flex justify-around gap-3  w-64 h-12 mt-3">
                    <span
                      class="flex justify-center items-center w-full text-xl rounded-lg border-2 border-blue-600 text-blue-800 font-semibold">
                      Alimentaire </span>
                    <span
                      class="flex justify-center items-center w-full text-xl text-orange-600 rounded-lg border-blue-800 border-2 font-semibold">
                      Fragile </span>
                  </div>
    
                  <div class="flex justify-between mt-7 ">
                    <span class="ml-2 text-xl text-blue-800 font-medium">
                      <i class="fa-solid fa-truck" ></i> 18/05/2024
                    </span>
                    <span class=" ml-2 text-xl text-blue-800 font-medium">
                      <i class="fa-solid fa-truck fa-flip-horizontal"></i> 18/05/2024
                    </span>
                  </div>
                  <div class="flex justify-between items-center mt-4 mb-3">
                    <span class="text-xl text-blue-900 font-semibold"> Poids Restant: </span>
                    <span class="text-xl text-blue-800 font-semibold"> 
                      <div class="w-40 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class=" h-5 bg-blue-600 text-sm font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 34%"> 34%</div>
                      </div>
                    </span>
                  </div>
                </div>

            </div>
            <div class="bg-slate-300 p-4 rounded-lg shadow w-96 h-80">
              <img src="/image/supply-chain-representation-still-life.jpg" alt="Terrestre"
                class="w-full h-32 object-cover rounded-xl mb-2 brightness-50">
                <div class="relative font-semibold text-white text-2xl">
                  <p class="font-bold absolute -top-24 left-28">Terrestre</p>
                  <div class="flex justify-around gap-3  w-64 h-12 mt-3">
                    <span
                      class="flex justify-center items-center w-full text-xl rounded-lg border-2 border-blue-600 text-blue-800 font-semibold">
                      Alimentaire </span>
                    <span
                      class="flex justify-center items-center w-full text-xl text-orange-600 rounded-lg border-blue-800 border-2 font-semibold">
                      Fragile </span>
                  </div>
    
                  <div class="flex justify-between mt-7 ">
                    <span class="ml-2 text-xl text-blue-800 font-medium">
                      <i class="fa-solid fa-truck" ></i> 18/05/2024
                    </span>
                    <span class=" ml-2 text-xl text-blue-800 font-medium">
                      <i class="fa-solid fa-truck fa-flip-horizontal"></i> 18/05/2024
                    </span>
                  </div>
                  <div class="flex justify-between items-center mt-4 mb-3">
                    <span class="text-xl text-blue-900 font-semibold"> Poids Restant : </span>
                    <span class="text-xl text-blue-800 font-semibold"> 
                      <div class="w-40 bg-gray-200 rounded-full dark:bg-gray-700">
                        <div class=" h-5 bg-blue-600 text-sm font-medium text-blue-100 text-center p-0.5 leading-none rounded-full" style="width: 87%"> 87%</div>
                      </div>
                    </span>
                  </div>
                </div>

            </div>
          </div>
        </section> -->
        <!-- End Section Principal -->

        <!-- Section Formulaire Cargaison -->
        <section class="grid w-full h-full">
          <div
            class="bg-blue-900 p-6 rounded-tl-3xl rounded-br-3xl shadow-xl mix-blend-multiply shadow-blue-300 flex flex-col justify-items-center">
            <h2 class="text-3xl font-bold mb-4 text-center text-white mt-3">Ajouter Produits</h2>
            <div>
              <form action="" class="mt-20">
                <!-- Nom Cargaison -->
                <div class="mb-8">
                  <input type="text" name="libellé" id="libelle" placeholder="Libellé"
                    class="w-full p-5 outline-none border border-gray-300 rounded-lg h-12 text-2xl placeholder:text-slate-500 placeholder:text-xl"> 
                </div>
                <!--  Type de  Cargaison -->
                <div class="mb-8">
                  <select name="cargaison" id="cargaison"
                    class=" bg-white h-12 w-full p-2 border border-gray-300 rounded-lg text-xl">
                    <option value="">Type de produits</option>
                    <option value="Alimentaire" class="text-blue-700">Alimentaire</option>
                    <option value="Chimique" class="text-red-600">Chimique</option>
                    <option value="Fragile" class="text-orange-600">Fragile</option>
                    <option value="Incassablet" class="text-green-600">Incassable</option>
                  </select>
                </div>
                <!--  Poids Cargaison -->
                <div class="mb-8">
                  <input type="text" name="poids" id="poids" placeholder="Poids total"
                    class="relative text-2xl h-12 w-full p-5 border border-gray-300 rounded-lg placeholder:text-slate-500 placeholder:text-xl">
                  <span class=" absolute right-16 top-[27.4rem] text-2xl text-slate-600 select-none">Kg</span>
                </div>
                <!--  Date de départ Cargaison -->
                <div class="mb-8">
                  <input type="date" name="dateDepart" id="dateDepart"
                    class="h-12 w-full p-2 border border-gray-300 rounded-lg text-xl uppercase">
                </div>
                <!--  Date de d'arrivé Cargaison -->
                <div class="mb-8">
                  <input type="date" name="dateFin" id="dateFin"
                    class="uppercase h-12 w-full p-2 border border-gray-300 rounded-lg text-xl">
                </div>
                <div>
                  <button type="submit"
                    class="w-full bg-blue-500 text-white py-2 rounded-3xl text-2xl font-bold h-16 hover:bg-blue-600">Valider</button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!-- End Section Formulaire Cargaison -->
      </main>
    </div> <!-- End Main Content -->
  </div>
  <footer
    class="-z-10 w-[1500px] absolute bottom-1 right-4 flex justify-center  rounded-t-xl text-2xl text-center py-4 bg-gray-200 mt-6 mb-0">
    &copy; <a href="https://www.sonatelacademy.com/" target="_blank">Sonatel Academy 2024 </a>, Tout droits réserves
  </footer>

  <script type="module" src="/src/main.ts"></script>
</body>

</html>