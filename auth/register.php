<?php include "./auth_header.php"; ?>


<body style="background-color: whitesmoke; padding: 20px; margin-top: 40px; font-family: 'Poppins', sans-serif;">
    <div class="column">
        <div style="margin-left: 40px; margin-bottom: 40px;">

            <div style="flex-direction: row; display: flex;">
                <img src="../assets/hit_logo.png" alt="" width="100">

                <div class="column" style="padding-left: 20px;">
                    <h1 style="font-size: 40px; font-weight: 700;">
                        Create account
                    </h1>
                    <h2>
                        for Heritage Library
                    </h2>
                </div>
            </div>
        </div>


        <div class="row flex-container px-20" style="margin-top: 20px;">



            <div class="flex-item">
                <img src="../assets/library.png" alt="" height="450" width="450">
            </div>



            <div class="flex-item" style=" align-self: center; max-width: 500px;">
                <form>
                    <div class="mb-6">
                        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Your
                            email</label>
                        <input type="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500"
                            placeholder="name@example.com" required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Your
                            password</label>
                        <input type="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500"
                            required>
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">
                            Confirm password
                        </label>
                        <input type="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 light:bg-gray-700 light:border-gray-600 light:placeholder-gray-400 light:text-white light:focus:ring-blue-500 light:focus:border-blue-500"
                            required>
                    </div>



                    <a type="submit"
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 light:bg-blue-600 light:hover:bg-blue-700 light:focus:ring-blue-800">
                        Create Account
                    </a>

                    <a type="button" href="../index.php"
                        class="py-2.5 px-5 mr-2 mb-2 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-200 light:focus:ring-gray-700 light:bg-gray-800 light:text-gray-400 light:border-gray-600 light:hover:text-white light:hover:bg-gray-700">
                        Already have an account? Login
                    </a>
                </form>
            </div>


        </div>
    </div>
</body>

</html>