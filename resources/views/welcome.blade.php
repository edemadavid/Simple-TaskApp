<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <section class="bg-white  font-mono">
        <div class="container px-6 py-10 mx-auto">
            <h1 class="text-3xl font-semibold text-gray-800 text-center capitalize lg:text-4xl">Project Lists</h1>
            <a href="addProject" class="text-xl font-semibold text-gray-800 hover:underline  ">
               add new Project
            </a>

            <div class="grid grid-cols-1 gap-8 mt-8 md:mt-16 md:grid-cols-2">


                @foreach ($ProjectList as $eachProject)

                <div class="lg:flex px-5 max-w-sm rounded overflow-hidden shadow-lg">
                    <!-- <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1515378960530-7c0da6231fb1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt=""> -->

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="{{route('task', $eachProject->id )}}" class="text-xl font-semibold text-gray-800 hover:underline  ">
                            {{$eachProject->project_name}}
                        </a>

                        <span class="text-sm text-gray-500 ">
                            On: {{$eachProject->created_at->format('jS \of F Y h:i:s A')}}
                        </span>
                    </div>
                </div>
                @endforeach
                <!-- <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1497032628192-86f99bcd76bc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                            How to use sticky note for problem solving
                        </a>

                        <span class="text-sm text-gray-500 ">On: 20 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1544654803-b69140b285a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline ">
                            Morning routine to boost your mood
                        </a>

                        <span class="text-sm text-gray-500">On: 25 November 2020</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1530099486328-e021101a494a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1547&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline ">
                            All the features you want to know
                        </a>

                        <span class="text-sm text-gray-500">On: 30 September 2020</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1484&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline ">
                            Minimal workspace for your inspirations
                        </a>

                        <span class="text-sm text-gray-500">On: 13 October 2019</span>
                    </div>
                </div>

                <div class="lg:flex">
                    <img class="object-cover w-full h-56 rounded-lg lg:w-64" src="https://images.unsplash.com/photo-1624996379697-f01d168b1a52?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1470&q=80" alt="">

                    <div class="flex flex-col justify-between py-6 lg:mx-6">
                        <a href="#" class="text-xl font-semibold text-gray-800 hover:underline">
                            What do you want to know about Blockchane
                        </a>

                        <span class="text-sm text-gray-500">On: 20 October 2019</span>
                    </div>
                </div> -->
            </div>
        </div>
    </section>
</body>
</html>
