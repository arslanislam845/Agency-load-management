

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* tr,
    th {
      font-size: 20px
    } */
    input[type=number]::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
      width: 2rem;

    }
  </style>
  <title>Naveed and Brothers</title>

  <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
  <div class="flex flex-row ">
    <div
      class="flex flex-col fixed  space-y-5 justify-between min-h-screen w-60 px-2 py-4 bg-gray-50 border-r-2 border-gray-200">
      <div class=" flex items-center justify-between text-gray-600 text-3xl px-3  mb-8">
        <img src="2.png" alt="" style=" object-position: center; ">
      </div>

      <div class="p-2 pb-0 ">
        <div class="flex flex-row space-x-3">
         
          <div class="font-bold text-xl text-gray-500 text-pink-600 ">Factory Details</div>
        </div>
      </div>
      <div class="flex flex-col flex-auto pl-10 mt-3">
        
        <div class="p-2 hover:bg-pink-100">
          <div class="flex flex-row space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <a href="factoryindex.php" class="font-bold text-gray-500 hover:text-pink-600 ">Dashboard</a>
          </div>
        </div>
        <div class="p-2 hover:bg-pink-100 ">
          <div class="flex flex-row space-x-3 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500 " viewBox="0 0 20 20"
              fill="currentColor">
              <path
                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            <a href="incomingdetails.php" class="font-bold text-gray-500 hover:text-pink-600">Incoming Details</a>
          </div>
        </div>
        <div class="p-2 hover:bg-pink-100">
          <div class="flex flex-row space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            <a href="outgoingdetails.php" class="font-bold text-gray-500 hover:text-pink-600">Outgoing Details</a>
          </div>
        </div>

      </div>


      <div class="p-2 pb-0">
        <div class="flex flex-row space-x-3">
          
          <div class="font-bold text-xl text-gray-500 text-pink-600 ">Distribution Details</div>
        </div>
      </div>
      <div class="flex flex-col flex-auto pl-10 mt-3">
        
        <div class="p-2 bg-pink-100">
          <div class="flex flex-row space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-700" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" />
            </svg>
            <a href="distindex.php" class="font-bold text-gray-500 text-pink-600 ">Dashboard</a>
          </div>
        </div>
        <div class="p-2 hover:bg-pink-100 ">
          <div class="flex flex-row space-x-3 ">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500 " viewBox="0 0 20 20"
              fill="currentColor">
              <path
                d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
            </svg>
            <a href="incomingdetailsagency.php" class="font-bold text-gray-500 hover:text-pink-600">Incoming Details</a>
          </div>
        </div>
        <div class="p-2 hover:bg-pink-100">
          <div class="flex flex-row space-x-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-500" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
            </svg>
            <a href="outgoingdetailsagency.php" class="font-bold text-gray-500 hover:text-pink-600">Outgoing Details</a>
          </div>
        </div>

      </div>


      <div class="flex flex-col ">
        <a href="/FirstPhp/pepsi/index.php" class="rounded-md text-center bg-pink-500 py-2 text-white text-lg">Logout</a>

      </div>


    </div>
    <div class="ml-52">
    <div class=" text-center mt-5">
      <p class="font-bold text-3xl text-black p-1 pt-2 "> Naveed & Brothers(Distribution details)</p>
    </div>


    <section class="bg-white p-5 contain px-10 ">

      <h1 class="font-bold text-3xl text-black text-center py-3">Pending Load</h1>
      <?php

          include 'db-connection.php';

          $sql = "SELECT sheets,creates,bottels,stands,baskets,date FROM `newload`.`actualloadagency` ";
                    

          $result = mysqli_query($conn, $sql);

          if (mysqli_num_rows($result) > 0) {
              echo '<table class="ml-[11%] min-w-[83%] border-2 divide-y divide-gray-300 mb-10">
              <thead class="bg-gray-50">
                <tr>
                  <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-xl font-semibold text-gray-900 sm:pl-6">Sheets
                  </th>
                  <th scope="col" class=" px-3 py-3.5 text-left text-xl font-semibold text-gray-900 sm:table-cell">
                    Shell
                  </th>
                  <th scope="col" class=" px-3 py-3.5 text-left text-xl font-semibold text-gray-900 lg:table-cell">
                    Empty </th>
                  <th scope="col" class="px-3 py-3.5 text-left text-xl font-semibold text-gray-900">Pallet</th>
                  <th scope="col" class="px-3 py-3.5 text-left text-xl font-semibold text-gray-900">Basket</th>
                 
                  <th scope="col" class="px-3 py-3.5 text-left text-xl font-semibold text-gray-900">Date</th>
    
                </tr>
              </thead>';
              // output data of each row
              while($row = $result->fetch_assoc()) {
                  echo  '<tbody class="divide-y divide-gray-200 bg-white">
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl  text-gray-900 sm:pl-6">'.$row["sheets"].'
                    </td>
      
                    <td class="hidden whitespace-nowrap px-3 py-4 text-xl  text-gray-900 sm:table-cell">'.$row["creates"].'
      
                    </td>
                    <td class="whitespace-nowrap px-3 py-4 text-xl   text-gray-900">'.$row["bottels"].'</td>
                    
                    <td class="hidden whitespace-nowrap px-3 py-4 text-xl  text-gray-900 lg:table-cell">
                    '.$row["stands"].'</td>
                    <td class="hidden whitespace-nowrap px-3 py-4 text-xl  text-gray-900 lg:table-cell">
                    '.$row["baskets"].'</td>
                  <td class="whitespace-nowrap px-3 py-4 text-xl   text-gray-900">'.$row["date"].'</td>
      
      
                  </tr>
                </tbody>';
              //     echo "<tr><td>".$row["sheets"]."</td><td>".$row["creates"]."</td><td>".$row["bottels"]."</td><td>".$row["stands"]."</td><td>".$row["date"]."</td></tr>";
              // 
          }
            } else {
            echo "Error creating table: " . mysqli_error($conn);
          }
          mysqli_close($conn);

        ?>
    </section>


    <table>
      <tr>
        <td class="">
          <form method="post" action="incomingagency.php">
            <div class="-ml-1">

              <table class="ml-16 min-w-[50%] border-2 divide-y divide-gray-300">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" colspan="2"
                      class="bg-white py-3.5 pl-4 pr-3 text-center text-2xl font-bold text-gray-900 sm:pl-6">Incoming
                      Load
                    </th>
                  </tr>
                  <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-xl font-semibold text-gray-900 sm:pl-6">Items
                    </th>
                    <th scope="col" class=" px-3 py-3.5 text-left text-xl font-semibold text-gray-900 sm:table-cell">
                      Quantity
                    </th>

                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Sheets
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-500 sm:table-cell"><input
                        type="number" name="sheets" class="px-4 py-1 border border-gray-600" />

                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Empty Bottels
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-500 sm:table-cell"><input
                        type="number" name="bottels" class="px-4 py-1 border border-gray-600" />

                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Shell
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-500 sm:table-cell"><input
                        type="number" name="creates" class="px-4 py-1 border border-gray-600" />

                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Pallet
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-500 sm:table-cell"><input
                        type="number" name="stands" class="px-4 py-1 border border-gray-600" />

                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Basket
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-500 sm:table-cell"><input
                        type="number" name="baskets" class="px-4 py-1 border border-gray-600" />

                    </td>
                  </tr>
                </tbody>

              </table>

              <div class="text-center mt-3 ml-10 ">
                <input type="submit" class="rounded-xl	 font-semibold p-2 text-xl border-2 border-black cursor-pointer"
                  value="Submit">
              </div>

          </form>
        </td>
        <td>
          <form method="post" action="outgoingagency.php">
            <div>
              <table class=" ml-16 min-w-[50%] border-2 divide-y divide-gray-300">
                <thead class="bg-gray-50">
                  <tr>
                    <th scope="col" colspan="2"
                      class="bg-white py-3.5 pl-4 pr-3 text-center text-2xl font-bold text-gray-900 sm:pl-6">Outgoing
                      Load
                    </th>
                  </tr>
                  <tr>
                    <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-xl font-semibold text-gray-900 sm:pl-6">Items
                    </th>
                    <th scope="col" class=" px-3 py-3.5 text-left text-xl font-semibold text-gray-900 sm:table-cell">
                      Quantity
                    </th>

                  </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 bg-white">
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Sheets
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-800 sm:table-cell"><input
                        type="number" name="sheets" class=" px-4 py-1 border border-gray-600" />

                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Empty Bottels
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-800 sm:table-cell"><input
                        type="number" name="bottels" class="px-4 py-1  border border-gray-600" />

                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Shell
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-800 sm:table-cell"><input
                        type="number" name="creates" class=" px-4 py-1 border border-gray-600" />

                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Pallet
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-500 sm:table-cell"><input
                        type="number" name="stands" class="px-4 py-1  border border-gray-600" />

                    </td>
                  </tr>
                  <tr>
                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-xl font-medium text-gray-900 sm:pl-6">Basket
                    </td>

                    <td class="hidden whitespace-nowrap px-3 py-2 text-xl  text-gray-500 sm:table-cell"><input
                        type="number" name="baskets" class="px-4 py-1  border border-gray-600" />

                    </td>
                  </tr>

                </tbody>

              </table>

              <div class="text-center mt-3 ml-16">
                <input type="submit" class="rounded-xl font-semibold p-2 text-xl border-2 border-black cursor-pointer"
                  value="Submit">
              </div>



          </form>
        </td>
      </tr>
    </table>



    <div class="bg-[#F9FAFB] mt-6">
      <p class="text-center p-4">All right reserve by Naveed and Brothers </p>
    </div>
  </div>
  </div>

  <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>

