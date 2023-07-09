<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>

<body>
    <section class=" text-indigo-900 italic">
        <form action="" method="post">
            <div class="container shadow-2xl shadow-yellow-400 flex justify-center w-[80%] mx-auto bg-teal-950/10 transition-transform">
                <div class="p-5 ">
                    <h2 class="font-serif p-3 bg text-3xl">
                        Let's get in touch
                    </h2>
                    <p class="p-2 font-serif">Lorem ipsum dolor sit amet consectetur adipisicing elit. <br>
                        Fugit a expedita veritatis laboriosam consectetur <br>
                        vero deserunt ipsam officia dolor doloribus excepturi,<br> officiis,
                        nostrum maxime totam architecto ipsum natus iusto <br>
                        temporibus?</p>
                    <div class="font-serif">
                        <i class="fa-solid fa-address-card"></i>
                        <p>30 East west Road Portharcourt</p>
                        <i class="fa-solid fa-envelope"></i>
                        <p>westcoast@protonmail.com</p>
                        <i class="fa-solid fa-phone"></i>
                        <p>+2348037757721</p>
                    </div>
                    <div class="mt-20">
                        <h1>connect with us:</h1>
                        <div class="p-3 space-x-5">
                            <a href="" class="text-blue-500"><i class="fa-brands fa-facebook fa-xl"></i></a>
                            <a href="" class="text-cyan-500"><i class="fa-brands fa-twitter fa-xl"></i></a>
                            <a href="" class="text-orange-500"><i class="fa-brands fa-instagram fa-xl"></i></a>
                            <a href="" class="text-red-600"><i class="fa-brands fa-youtube fa-xl"></i></a>
                        </div>
                    </div>
                </div>
                <div class=" p-5 ">
                    <h1 class="font-serif p-3 text-3xl">Contact Us</h1>
                    <div class="p-3">
                        <label for="Name" class="block text-xl font-serif">Name</label>
                        <input type="text" name="Username" id="username" placeholder="Enter your name"
                            class="px-28">
                        <label for="Email" class="block text-xl font-serif">Email</label>
                        <input type="email" name="email" id="email" placeholder="Enter your email"
                            class="px-28">
                        <label for="number" class="block text-xl font-serif ">Phone Number</label>
                        <input type="text" name="number" id="number" placeholder="Enter phone number"
                            class="px-28">
                        <label for="message" class="block text-xl font-serif">Message</label>
                        <textarea name="message" id="message" cols="30" rows="10" class="px-28"></textarea>
                    </div>
                    <button class="bg-amber-300 px-16 font-bold ml-3 py-3 hover:text-yellow-100 border-blue-800 border italic">Submit</button>
                </div>
            </div>
        </form>
    </section>
</body>

</html>
