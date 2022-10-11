@extends('components.layout')
    @section('contents')

        <!-- <div class="flex grow items-center justify-center p-12">
            <h1 class="text-3xl font-semibold text-gray-800 text-left mb-8 capitalize lg:text-4xl">Project Name:</h1>
            <p class="text-3xl font-semibold text-gray-800 text-left mb-8 capitalize lg:text-4xl" >{{$project->project_name}}</p>
        </div> -->

        <div class="flex grow items-center justify-left p-12">
            <div class="mx-auto w-full max-w-[550px]">
                <h1 class="text-3xl font-semibold text-gray-800 text-center mb-8 capitalize lg:text-4xl">Add Task</h1>
            <form action="{{route('storeTask')}}" method="POST" class=" p-7 bg-slate-100 rounded">
                @csrf
                <h1 class="text-3xl font-semibold text-gray-800 text-left mb-8 capitalize lg:text-4xl">Project Name:</h1>
                <p class="text-1xl font-semibold text-gray-800 text-left mb-8 capitalize lg:text-1xl" >{{$project->project_name}}</p>

                <div class="mb-5">
                <label
                    for="name"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    New Task
                </label>
                <input
                    type="text"
                    name="project_id"
                    id="projectid"
                    autocomplete="off"
                    placeholder="New Task"
                    value="{{$project->id}}"
                    hidden
                />
                <input
                    type="text"
                    name="task"
                    id="name"
                    autocomplete="off"
                    placeholder="New Task"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
                </div>

                <button
                    class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
                >
                    Submit
                </button>
                </div>
            </form>
            </div>
        </div>

    @endsection
