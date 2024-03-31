<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="/public/js/script.js"></script>
  <style>
    /* Add any additional styles here */
  </style>
</head>

<body class="flex h-screen">
  <!-- Sidebar -->
  <div class="bg-gray-800 text-white py-6 px-4 w-64">
    <div class="flex items-center justify-center mb-8">
      <svg class="w-8 h-8 mr-2 text-white" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <!-- Your SVG logo goes here -->
        <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z" fill="currentColor"></path>
        <path d="M12 6c-3.31 0-6 2.69-6 6s2.69 6 6 6 6-2.69 6-6-2.69-6-6-6zm0 10c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4z" fill="currentColor"></path>
      </svg>
      <span class="text-white font-semibold"><?php echo GLOB_VAR['COMPANY_NAME']?></span>
    </div>
    <nav class="h-[80vh]">
      <ul>
        <li class="mb-4">
          <a href="#" class="flex items-center text-gray-400 hover:text-white">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
            </svg>
            <?php echo $this->t("ManageUI") ?>
          </a>
        </li>
        <li class="mb-4">
          <div class="flex items-center justify-between text-gray-400 hover:text-white cursor-pointer">
            <div class="flex items-center">
              <svg class="w-6 h-6 mr-2" fill="currentColor  " stroke="currentColor" height="24" width="21" viewBox="0 0 448 512">
                <path d="M448 80v48c0 44.2-100.3 80-224 80S0 172.2 0 128V80C0 35.8 100.3 0 224 0S448 35.8 448 80zM393.2 214.7c20.8-7.4 39.9-16.9 54.8-28.6V288c0 44.2-100.3 80-224 80S0 332.2 0 288V186.1c14.9 11.8 34 21.2 54.8 28.6C99.7 230.7 159.5 240 224 240s124.3-9.3 169.2-25.3zM0 346.1c14.9 11.8 34 21.2 54.8 28.6C99.7 390.7 159.5 400 224 400s124.3-9.3 169.2-25.3c20.8-7.4 39.9-16.9 54.8-28.6V432c0 44.2-100.3 80-224 80S0 476.2 0 432V346.1z" />
              </svg>
              <?php echo $this->t("Data") ?>
            </div>
            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
            </svg>
          </div>
          <ul class="ml-10 mt-2">
            <li class="mb-2">
              <a href="#" class="text-gray-400 hover:text-white">
                <?php echo $this->t("Introduction") ?></a>
            </li>
            <li class="mb-2">
              <a href="#" class="text-gray-400 hover:text-white">
                <?php echo $this->t("Product") ?></a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white">
                <?php echo $this->t("Contact") ?></a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white">
                <?php echo $this->t("News") ?></a>
            </li>
            <li>
              <a href="#" class="text-gray-400 hover:text-white">
                <?php echo $this->t("OtherCategories") ?></a>
            </li>
          </ul>
        </li>
        <li class="mb-4">
          <a href="#" class="flex items-center text-gray-400 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="currentColor" stroke="currentColor" height="24" width="24" viewBox="0 0 512 512">
              <path d="M160 368c26.5 0 48 21.5 48 48v16l72.5-54.4c8.3-6.2 18.4-9.6 28.8-9.6H448c8.8 0 16-7.2 16-16V64c0-8.8-7.2-16-16-16H64c-8.8 0-16 7.2-16 16V352c0 8.8 7.2 16 16 16h96zm48 124l-.2 .2-5.1 3.8-17.1 12.8c-4.8 3.6-11.3 4.2-16.8 1.5s-8.8-8.2-8.8-14.3V474.7v-6.4V468v-4V416H112 64c-35.3 0-64-28.7-64-64V64C0 28.7 28.7 0 64 0H448c35.3 0 64 28.7 64 64V352c0 35.3-28.7 64-64 64H309.3L208 492z" />
            </svg>
            <?php echo $this->t("CustomerCare") ?>
          </a>
        <li class="mb-4">
          <a href="#" class="flex items-center text-gray-400 hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="currentColor" stroke="currentColor" height="24" width="24" viewBox="0 0 512 512">
              <path d="M352 320c88.4 0 160-71.6 160-160c0-15.3-2.2-30.1-6.2-44.2c-3.1-10.8-16.4-13.2-24.3-5.3l-76.8 76.8c-3 3-7.1 4.7-11.3 4.7H336c-8.8 0-16-7.2-16-16V118.6c0-4.2 1.7-8.3 4.7-11.3l76.8-76.8c7.9-7.9 5.4-21.2-5.3-24.3C382.1 2.2 367.3 0 352 0C263.6 0 192 71.6 192 160c0 19.1 3.4 37.5 9.5 54.5L19.9 396.1C7.2 408.8 0 426.1 0 444.1C0 481.6 30.4 512 67.9 512c18 0 35.3-7.2 48-19.9L297.5 310.5c17 6.2 35.4 9.5 54.5 9.5zM80 408a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
            </svg>
            <?php echo $this->t("SupportContact") ?>
          </a>
        </li>
      </ul>
    </nav>
    <div class="mt-auto flex justify-center items-center">
      <div class="rounded-full mr-2">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
        </svg>
      </div>

      <span class="text-gray-400">
        <?php echo GLOB_VAR['ADMIN_NAME'] ?>
      </span>
      <button class="hover:bg-red-700 text-white font-bold py-2 px-4 rounded inline-flex items-center" onclick="logout()"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
        </svg>
      </button>
    </div>
  </div>

  <!-- Main Content -->
  <div class="flex-1 flex flex-col">
    <!-- Topbar -->
    <div class="bg-gray-200 flex items-center px-4 py-2">
      <!-- Add your topbar content here -->
    </div>

    <!-- Content Area -->
    <div class="flex-1 p-6">
      <!-- Main content goes here -->
      <?php require_once $contentFile; ?>
    </div>
  </div>
</body>

</html>