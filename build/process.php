<!doctype html>
<html class="scroll-smooth ">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="./css/output.css" rel="stylesheet">
  <link rel="shortcut icon" href="./img/favicon.png" type="image/x-icon">

  <!-- google fonts (Lora, Roboto) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400;0,600;1,400;1,600&family=Roboto:ital,wght@0,300;0,400;1,300;1,400&display=swap"
    rel="stylesheet">

  <title>Contact Us | Ceylon Oceanic Views</title>
</head>

<body class="antialiased bg-gray-100 scrollbar-thin scrollbar-thumb-teal-500 scrollbar-track-slate-700">

  <header class="overflow-x-hidden ">
    <!-- bg img -->
    <div class="w-screen h-screen bg-gray-400 bg-top bg-no-repeat bg-cover bg-blend-multiply"
      style="background-image: url('./img/contact-us/contact-us-bg1.jpg');">

      <!-- nav bar -->
      <nav class="p-3 bg-teal-900 border-gray-200 dark:bg-gray-800 dark:border-gray-700 opacity-90 ">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
          <a href="index.html" class="flex items-center">
            <img loading="lazy" src="./img/Logo.svg" class="h-11 mr-3 sm:h-12" alt="Ceylon Oceanic Views Logo" />
          </a>
          <button data-collapse-toggle="navbar-solid-bg" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-solid-bg" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
              xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
          <div class="hidden w-full md:block md:w-auto" id="navbar-solid-bg">
            <ul
              class="flex flex-col mt-4 bg-teal-900 rounded-lg md:flex-row md:space-x-10 md:mt-0 md:mr-12 md:ml-10 md:text-base md:font-normal md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-transparent dark:border-gray-700">
              <li>
                <a href="index.html"
                  class="block py-2 pl-3 pr-4 text-white bg-blue-700 rounded md:bg-transparent md:hover:text-gray-50 md:p-0 md:dark:text-white dark:bg-blue-600 md:dark:bg-transparent"
                  aria-current="page">Home</a>
              </li>
              <!-- Location-Dropdown -->
              <li>
                <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                  class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-teal-700 md:hover:bg-transparent md:border-0 md:hover:text-gray-50 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Locations
                  <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg></button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar"
                  class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="galle.html"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Galle</a>
                    </li>
                    <li>
                      <a href="matara.html"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Matara</a>
                    </li>
                    <li>
                      <a href="trinco.html"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Trincomalee</a>
                    </li>
                  </ul>

                </div>
              </li>


              <!-- Activity-Dropdown -->
              <li>
                <button id="dropdownNavbarLink1" data-dropdown-toggle="dropdownNavbar1"
                  class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-teal-700 md:hover:bg-transparent md:border-0 md:hover:text-gray-50 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">Activities
                  <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                      d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                      clip-rule="evenodd"></path>
                  </svg></button>

                <!-- Dropdown menu -->
                <div id="dropdownNavbar1"
                  class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                  <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                    <li>
                      <a href="./action-test.html#surfing-link"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Surfing</a>
                    </li>
                    <li>
                      <a href="./action-test.html#diving-link"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Diving</a>
                    </li>
                    <li>
                      <a href="./action-test.html#whale-watching-link"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Whale
                        watching</a>
                    </li>
                    <li>
                      <a href="./action-test.html#boat-rides-link"
                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Boat
                        rides</a>
                    </li>
                  </ul>

                </div>
              </li>

              <!-- normal nav bar -->

              <li>
                <a href="#"
                  class="block py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-teal-700 md:hover:bg-transparent md:border-0 md:hover:text-gray-50 md:p-0 dark:text-gray-400 md:dark:hover:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Vlogs</a>
              </li>


              <!-- about us drop down -->
            <li>
              <button id="dropdownNavbarLink2" data-dropdown-toggle="dropdownNavbar2"
                class="flex items-center justify-between w-full py-2 pl-3 pr-4 text-gray-300 rounded hover:bg-teal-700 md:hover:bg-transparent md:border-0 md:hover:text-gray-50 md:p-0 md:w-auto dark:text-gray-400 dark:hover:text-white dark:focus:text-white dark:border-gray-700 dark:hover:bg-gray-700 md:dark:hover:bg-transparent">About Us
                <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                  xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd"
                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
                </svg></button>
            
              <!-- Dropdown menu -->
              <div id="dropdownNavbar2"
                class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                <ul class="py-1 text-sm text-gray-700 dark:text-gray-400" aria-labelledby="dropdownLargeButton">
                  <li>
                    <a href="./aboutus.html"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">About Us</a>
                  </li>
                  <li>
                    <a href="./contact-us.html"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Contact Us</a>
                  </li>
                  <li>
                    <a href="./privacy-policy.html"
                      class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Privacy Policy</a>
                  </li>
            </ul>
          </div>
        </div>
      </nav>

      <!-- main heading -->
      <div class="flex flex-col items-center justify-center mt-80">
        <div>
          <h1
            class="text-3xl font-semibold text-gray-100 font-lora text-lora sm:text-5xl sm:mt-10 md:text-6xl lg:text-7xl xl:text-8xl dark:text-white">
            Ceylon<span class="italic font-normal"> Oceanic</span> Views</h1>
        </div>
        <div>
          <p
            class="mt-10 text-sm font-light tracking-widest text-gray-100 font-roboto sm:text-base md:text-lg lg:text-2xl">
            24/7 SERVICE</p>
        </div>
      </div>

    </div>
  </header>

  <div class=" flex w-full min-h-screen justify-center items-center font-roboto">


    <!-- background style -->

    <div
      class="flex flex-col md:flex-row md:space-x-6  space-y-6 md:space-y-0 bg-cyan-700 w-full max-w-4xl p-8 sm:p-12 rounded-xl shadow-lg text-white overflow-hidden">

      <div class="flex flex-col justify-between  space-y-8">

        <div>
          <h1 class="font-bold text-4xl tracking-wide font-lora">Contact Us</h1>
          <p class="pt-2 text-cyan-100 text-sm">Please contact us through this form if you face any issues. <br> We will
            be glad to help.</p>
        </div>

        <div class="flex flex-col space-y-6">
          <div class="inline-flex space-x-2 items-center">
            <ion-icon name="call" class="text-teal-300 text-xl"></ion-icon>
            <span>+(94) 72 108 9721</span>
          </div>
          <div class="inline-flex space-x-2 items-center">
            <ion-icon name="mail" class="text-teal-300 text-xl"></ion-icon>
            <span>kadwijesinghe@students.nsbm.ac.lk</span>
          </div>
          <div class="inline-flex space-x-2 items-center">
            <ion-icon name="location" class="text-teal-300 text-xl"></ion-icon>
            <span>Pitipana, Thalagala Road, Homagama</span>
          </div>
          <div>
            <a href="./contact-us.html" class="inline-block self-end bg-cyan-600 text-white font-lora rounded-lg px-6 py-2 uppercase text-sm hover:bg-cyan-800 transition-colors duration-200">Return to Previous Page</a>
          </div>

        </div>


        <div>

        </div>

      </div>

      <div class="relative">
        <!-- circles -->
        <div class="absolute z-0 w-40 h-40 bg-teal-400 rounded-full -right-28 -top-28"></div>
        <div class="absolute z-0 w-40 h-40 bg-teal-400 rounded-full -left-28 -bottom-16"></div>
      </div>

        <!-- success msg -->
        <div id="toast-success"
          class="flex items-center p-4 mb-4 w-full max-w-xs text-gray-600 bg-green-300 rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
          role="alert">
          <div
            class="inline-flex flex-shrink-0 justify-center items-center w-8 h-8 text-green-500 bg-green-400 rounded-lg dark:bg-green-800 dark:text-green-200">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Check icon</span>
          </div>
          <div class="ml-3 text-sm font-normal font-roboto">Message submitted successfully.</div>
          <button type="button"
            class="ml-auto -mx-1.5 -my-1.5 bg-red-300 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
            data-dismiss-target="#toast-success" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg aria-hidden="true" class="w-5 h-5 fill-red-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd"
                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>



    </div>
  </div>













<?php


  // if(isset($_POST['btn-send']))
  // {
  //   echo 'Working';
  // }

  $UName = $_POST['UName'];
  $Email = $_POST['Email'];
  $Sub = $_POST['Sub'];
  $msg = $_POST['msg'];

  //Database connection

  $servername = "localhost";
  $username = "root";
  $password = "";
  

  try {
  $conn = new PDO("mysql:host=$servername;dbname=contact_us", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO contactdetails (UName, Email, Sub, msg)
  VALUES ('$UName', '$Email', '$Sub', '$msg')";

// use exec() because no results are returned
  $conn->exec($sql);
  echo "";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$conn = null;
















?>






<!-- footer -->
  <footer class="p-4 bg-teal-900 shadow md:px-6 md:py-8 dark:bg-gray-900">
    <div class="sm:flex sm:items-center sm:justify-between">
      <a href="index.html" class="flex items-center mb-4 sm:mb-0">
        <img loading="lazy" src="./img/Logo.svg" class="mr-3 h-14" alt="Ceylon Oceanic Views Logo" />
        <!-- <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span> -->
      </a>
      <ul class="flex flex-wrap items-center mb-6 text-sm text-gray-100 sm:mb-0 dark:text-gray-400">
        <li>
          <a href="./aboutus.html" class="mr-4 hover:underline md:mr-6 ">About Us</a>
        </li>
        <li>
          <a href="./privacy-policy.html" class="mr-4 hover:underline md:mr-6">Privacy Policy</a>
        </li>
        <li>
          <a href="./contact-us.html" class="mr-4 hover:underline md:mr-6">Contact Us</a>
        </li>
      </ul>
    </div>
    <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    <span class="block text-sm text-center text-gray-400 dark:text-gray-400">© 2022 <a href="index.html"
        class="hover:underline">Ceylon Oceanic Views™</a>. All Rights Reserved.
    </span>
  </footer>


  <!-- Implement the Back Top Top Button -->
  <button id="to-top-button" onclick="goToTop()" title="Go To Top"
    class="hidden fixed z-90 bottom-8 right-8 border-0 w-16 h-16 rounded-full drop-shadow-md bg-teal-500 text-white text-3xl font-bold">&#8963;</button>


  <script src="./js/flowbite.js"></script>

  <!-- Javascript code -->
  <script>
    var toTopButton = document.getElementById("to-top-button");

    // When the user scrolls down 200px from the top of the document, show the button
    window.onscroll = function () {
      if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        toTopButton.classList.remove("hidden");
      } else {
        toTopButton.classList.add("hidden");
      }
    }

    // When the user clicks on the button, smoothy scroll to the top of the document
    function goToTop() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    }
  </script>

  <!-- ionicons -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>