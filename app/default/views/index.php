<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $GLOBALS['page_title']?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .header-image {
            height: 100px;
            background-image: url("data:image/svg+xml,%3Csvg%20width%3D%221280%22%20height%3D%22100%22%20viewBox%3D%220%200%201280%20100%22%20fill%3D%22none%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%3E%20%3Crect%20width%3D%221280%22%20height%3D%22100%22%20fill%3D%22%23F7F7F7%22%2F%3E%20%3Cpath%20d%3D%22M20%2020C20%2012.2679%2025.5914%206%2032.5%206H1247.5C1254.43%206%201260%2012.2679%201260%2020V80C1260%2087.7321%201254.41%2094%201247.5%2094H32.5C25.5718%2094%2020%2087.7321%2020%2080V20Z%22%20fill%3D%22%23D9D9D9%22%20stroke%3D%22%23333333%22%20stroke-width%3D%224%22%2F%3E%20%3Cpath%20d%3D%22M40%2040C40%2035.5817%2043.5817%2032%2048%2032H1232C1236.42%2032%201240%2035.5817%201240%2040V60C1240%2064.4183%201236.42%2068%201232%2068H48C43.5817%2068%2040%2064.4183%2040%2060V40Z%22%20fill%3D%22%23E6E6E6%22%20stroke%3D%22%23333333%22%20stroke-width%3D%224%22%2F%3E%20%3Cpath%20d%3D%22M60%2050H1220M60%2050C60%2047.7909%2061.7909%2046%2064%2046H104C106.209%2046%20108%2047.7909%20108%2050C108%2052.2091%20106.209%2054%20104%2054H64C61.7909%2054%2060%2052.2091%2060%2050ZM1172%2050C1172%2047.7909%201173.79%2046%201176%2046H1216C1218.21%2046%201220%2047.7909%201220%2050C1220%2052.2091%201218.21%2054%201216%2054H1176C1173.79%2054%201172%2052.2091%201172%2050Z%22%20stroke%3D%22%23333333%22%20stroke-width%3D%224%22%20stroke-linecap%3D%22round%22%20stroke-linejoin%3D%22round%22%2F%3E%20%3C%2Fsvg%3E");
            background-size: cover;
            background-position: center;
        }
    </style>
</head>

<body>
    <header class="bg-gray-800 text-white">
        <div class="bg-white header-image"> </div>
        <nav class="flex justify-left py-5 px-10 mx-10">
            <ul class="flex space-x-4">
                <li><a href="#" class="hover:text-gray-300">TRANG CHỦ</a></li>
                <li><a href="#" class="hover:text-gray-300">Giới thiệu</a></li>
                <li class="relative group">
                    <a href="#" class="hover:text-gray-300 flex items-center">
                        Sản phẩm <span class="ml-1"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg></span>
                    </a>
                    <ul class="absolute bg-gray-800 mt-2 py-2 hidden group-hover:block">
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Sub Menu 1</a></li>
                        <li><a href="#" class="block px-4 py-2 hover:bg-gray-700">Sub Menu 2</a></li>
                    </ul>
                </li>
                <li><a href="#" class="hover:text-gray-300">TIN TỨC</a></li>
                <li><a href="#" class="hover:text-gray-300">LIÊN HỆ</a></li>
            </ul>
        </nav>
    </header>

    <main class="min-h-[50vh] w-screen my-5 p-10">
        <?php require_once $contentFile; ?>
    </main>

    <footer class="bg-gray-800 text-white py-8">
        <div class="container mx-auto flex flex-wrap justify-start">
            <div class="w-full sm:w-1/2 md:w-1/4 mb-4 md:mb-0">
                <h3 class="text-lg font-bold mb-2">Về chúng tôi</h3>
                <p>Công ty TNHH ABC</p>
                <p>Mã số thuế: xxxxxxx</p>
                <p>Cấp ngày: xxx tại TP.HCM</p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 mb-4 md:mb-0">
                <h3 class="text-lg font-bold mb-2">Trụ sở chính</h3>
                <p>Địa chỉ: xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx</p>
                <p>Điện thoại: xxxxxxxxxxx</p>
            </div>
            <div class="w-full sm:w-1/2 md:w-1/4 mb-4 md:mb-0">
                <h1 class="text-xl"> Good luck for you</h1>
            </div>
        </div>
    </footer>
</body>

</html>