@extends('components.layout')
    @section('contents')

    <div class="flex grow items-center justify-center p-12">
        <div class="mx-auto w-full max-w-[550px]">
            <h1 class="text-3xl font-semibold text-gray-800 text-center mb-8 capitalize lg:text-4xl">Add Project</h1>
            <form action="{{route('addProject')}}" method="POST" class=" p-7 bg-slate-100 rounded">
                @csrf
                <div class="mb-5">
                <label
                    for="name"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Project Name
                </label>
                <input
                    type="text"
                    name="project_name"
                    id="name"
                    autocomplete="off"
                    placeholder="Project Name"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
                </div>

                <div class="mb-5">
                <label
                    for="subject"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Project Description
                </label>
                <input
                    type="text"
                    name="project_desc"
                    id="subject"
                    autocomplete="off"
                    placeholder="Enter Project Description"
                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                />
                </div>
                <div class="mb-5">
                <label
                    for="message"
                    class="mb-3 block text-base font-medium text-[#07074D]"
                >
                    Notes
                </label>
                <textarea
                    rows="4"
                    name="project_notes"
                    id="message"
                    autocomplete="off"
                    placeholder="Leave a Note"
                    class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"
                ></textarea>
                </div>
                <div>
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
