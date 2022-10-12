@extends('components.layout')
    @section('contents')
    <section class="container  px-6 py-10 mx-auto p-6 font-mono">

        <h1 class="text-3xl font-semibold text-gray-800 text-center capitalize lg:text-4xl">Tasks Lists</h1>

        <div class="flex justify-between ">
            <a href="{{ route('addTask', $project->id)}}" class="text-xl font-semibold text-gray-800 hover:underline ">
                add New Task
            </a>
            <a href="{{ route('deleteProject', $project->id)}}" class="text-xl font-semibold text-red-800 hover:underline"
            onclick="return confirm('Are you sure you want to delete the whole project?');" >
                Delete Project
            </a>
        </div>
        <div class="w-full mb-8  mt-8 overflow-hidden rounded-lg shadow-lg">
          <div class="w-full overflow-x-auto">
            <table class="w-full">
              <thead>
                <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                    <th class="px-4 py-3">S/n</th>
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Status</th>
                    <th class="px-4 py-3">Date</th>
                    <th class="px-4 py-3">Action</th>
                </tr>
              </thead>
              <tbody class="bg-white">
                @php
                    $i = 1;
                @endphp
                @forelse ( $TaskList as $task)
                <tr class="text-gray-700">
                    <td class="px-4 py-3 border">
                        <div class="flex items-center text-sm">
                            <div>
                                <p class="font-semibold text-black">
                                    {{$i++}}
                                </p>
                            </div>
                        </div>
                  </td>
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div>
                        <p class="font-semibold text-black">{{$task->task}}</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 text-xs border">
                    @if ($task->status == 1)
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Completed </span>
                    @else ($task->status == 0 )
                    <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> Pending </span>
                    @endif


                  </td>
                  <td class="px-4 py-3 text-sm border">{{$task->updated_at->format('h:i:s A, d/m/Y')}}</td>

                  <td class="px-4 py-3 text-sm border">

                    @if ($task->status == 1)

                    @else ($task->status == 0)
                    <a href="{{route('complete', $task->id)}}" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none"
                    >
                    completed
                    </a>
                    @endif

                </td>
                </tr>
                @empty
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div>
                        <p class="font-semibold text-black">No Task yet</p>
                        <p class="text-xs text-gray-600"></p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 text-xs border">
                    --
                  </td>
                  <td class="px-4 py-3 text-sm border"> -- </td>
                </tr>
                @endforelse




                <!-- <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold text-black">Stevens</p>
                        <p class="text-xs text-gray-600">Programmer</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 text-xs border">
                    <span class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-gray-100 rounded-sm"> Pending </span>
                  </td>
                  <td class="px-4 py-3 text-sm border">6/10/2020</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">Nora</p>
                        <p class="text-xs text-gray-600">Designer</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 text-xs border">
                    <span class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-sm"> Nnacceptable </span>
                  </td>
                  <td class="px-4 py-3 text-sm border">6/10/2020</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">Ali</p>
                        <p class="text-xs text-gray-600">Programmer</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 border text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span>
                  </td>
                  <td class="px-4 py-3 border text-sm">6/10/2020</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">Khalid</p>
                        <p class="text-xs text-gray-600">Designer</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 border text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-sm"> Pending </span>
                  </td>
                  <td class="px-4 py-3 border text-sm">6/10/2020</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">Nasser</p>
                        <p class="text-xs text-gray-600">Pen Tester</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 border text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span>
                  </td>
                  <td class="px-4 py-3 border text-sm">6/10/2020</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">Mohammed</p>
                        <p class="text-xs text-gray-600">Web Designer</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 border text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span>
                  </td>
                  <td class="px-4 py-3 border text-sm">6/10/2020</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">Saad</p>
                        <p class="text-xs text-gray-600">Data</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 border text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span>
                  </td>
                  <td class="px-4 py-3 border text-sm">6/10/2020</td>
                </tr>
                <tr class="text-gray-700">
                  <td class="px-4 py-3 border">
                    <div class="flex items-center text-sm">
                      <div class="relative w-8 h-8 mr-3 rounded-full">
                        <img class="object-cover w-full h-full rounded-full" src="https://images.pexels.com/photos/5212324/pexels-photo-5212324.jpeg?auto=compress&cs=tinysrgb&dpr=3&h=750&w=1260" alt="" loading="lazy" />
                        <div class="absolute inset-0 rounded-full shadow-inner" aria-hidden="true"></div>
                      </div>
                      <div>
                        <p class="font-semibold">Sami</p>
                        <p class="text-xs text-gray-600">Developer</p>
                      </div>
                    </div>
                  </td>

                  <td class="px-4 py-3 border text-xs">
                    <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> Acceptable </span>
                  </td>
                  <td class="px-4 py-3 border text-sm">6/10/2020</td>
                </tr> -->
              </tbody>
            </table>
            {{$TaskList->links()}}
          </div>
        </div>
    </section>
    @endsection
