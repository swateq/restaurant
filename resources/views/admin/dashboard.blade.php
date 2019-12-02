@extends('admin.layouts.main')
@section('content')
<div class="flex flex-col md:flex-row">

    <div class="shadow-lg h-16 fixed pin-b mt-12 md:relative md:h-screen z-10 w-full md:w-48">

        <div class="md:mt-12 md:w-48 md:fixed md:pin-l md:pin-t content-center md:content-start text-left justify-between">
            <ul class="list-reset flex flex-row md:flex-col py-0 md:py-3 px-1 md:px-2 text-center md:text-left">
                <li class="mr-3 flex-1">
                    <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-black no-underline hover:text-black border-b-2 border-grey-darkest hover:border-pink">
                        <i class="fas fa-tasks pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-grey-dark md:text-grey-light block md:inline-block">Tasks</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-black no-underline hover:text-black border-b-2 border-grey-darkest hover:border-purple">
                        <i class="fa fa-envelope pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-grey-dark md:text-grey-light block md:inline-block">Messages</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="#" class="block py-1 md:py-3 pl-1 align-middle text-black no-underline hover:text-black border-b-2 border-blue-dark">
                        <i class="fas fa-chart-area pr-0 md:pr-3 text-blue-dark"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-black md:text-black block md:inline-block">Analytics</span>
                    </a>
                </li>
                <li class="mr-3 flex-1">
                    <a href="#" class="block py-1 md:py-3 pl-0 md:pl-1 align-middle text-black no-underline hover:text-black border-b-2 border-grey-darkest hover:border-red">
                        <i class="fa fa-wallet pr-0 md:pr-3"></i><span class="pb-1 md:pb-0 text-xs md:text-base text-grey-dark md:text-grey-light block md:inline-block">Payments</span>
                    </a>
                </li>
            </ul>
        </div>


    </div>

    <div class="main-content flex-1 bg-grey-lightest mt-12 md:mt-2 pb-24 md:pb-5">

        <div class="bg-blue-darker p-2 shadow text-xl text-white">
            <h3 class="pl-2">Analytics</h3>
        </div>

        <div class="flex flex-wrap">
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-green-lightest border-b-4 border-green-dark rounded-lg shadow-lg p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-green-dark"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="uppercase text-grey-dark">Total Revenue</h5>
                            <h3 class="text-3xl">$3249 <span class="text-green"><i class="fas fa-caret-up"></i></span></h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-orange-lightest border-b-4 border-orange rounded-lg shadow-lg p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-orange-dark"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="uppercase text-grey-dark">Total Users</h5>
                            <h3 class="text-3xl">249 <span class="text-orange"><i class="fas fa-exchange-alt"></i></span></h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-yellow-lightest border-b-4 border-yellow-dark rounded-lg shadow-lg p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-yellow-dark"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="uppercase text-grey-dark">New Users</h5>
                            <h3 class="text-3xl">2 <span class="text-yellow-dark"><i class="fas fa-caret-up"></i></span></h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-blue-lightest border-b-4 border-blue rounded-lg shadow-lg p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-blue-dark"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="uppercase text-grey-dark">Server Uptime</h5>
                            <h3 class="text-3xl">152 days</h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-indigo-lightest border-b-4 border-indigo rounded-lg shadow-lg p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-indigo-dark"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="uppercase text-grey-dark">To Do List</h5>
                            <h3 class="text-3xl">7 tasks</h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Metric Card-->
                <div class="bg-red-lightest border-b-4 border-red rounded-lg shadow-lg p-5">
                    <div class="flex flex-row items-center">
                        <div class="flex-shrink pr-4">
                            <div class="rounded-full p-5 bg-red-dark"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                        </div>
                        <div class="flex-1 text-right md:text-center">
                            <h5 class="uppercase text-grey-dark">Issues</h5>
                            <h3 class="text-3xl">3 <span class="text-red"><i class="fas fa-caret-up"></i></span></h3>
                        </div>
                    </div>
                </div>
                <!--/Metric Card-->
            </div>
        </div>


        <div class="flex flex-row flex-wrap flex-grow mt-2">

            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Graph Card-->
                <div class="bg-white border-transparent rounded-lg shadow-lg">
                    <div class="bg-grey-light uppercase text-grey-darkest border-b-2 border-grey rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="uppercase text-grey-dark">Graph</h5>
                    </div>
                    <div class="p-5">
                        <canvas id="chartjs-7" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-7"), {
                                "type": "bar",
                                "data": {
                                    "labels": ["January", "February", "March", "April"],
                                    "datasets": [{
                                        "label": "Page Impressions",
                                        "data": [10, 20, 30, 40],
                                        "borderColor": "rgb(255, 99, 132)",
                                        "backgroundColor": "rgba(255, 99, 132, 0.2)"
                                    }, {
                                        "label": "Adsense Clicks",
                                        "data": [5, 15, 10, 30],
                                        "type": "line",
                                        "fill": false,
                                        "borderColor": "rgb(54, 162, 235)"
                                    }]
                                },
                                "options": {
                                    "scales": {
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <!--/Graph Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Graph Card-->
                <div class="bg-white border-transparent rounded-lg shadow-lg">
                    <div class="bg-grey-light border-b-2 border-grey rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="uppercase text-grey-dark">Graph</h5>
                    </div>
                    <div class="p-5">
                        <canvas id="chartjs-0" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-0"), {
                                "type": "line",
                                "data": {
                                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                    "datasets": [{
                                        "label": "Views",
                                        "data": [65, 59, 80, 81, 56, 55, 40],
                                        "fill": false,
                                        "borderColor": "rgb(75, 192, 192)",
                                        "lineTension": 0.1
                                    }]
                                },
                                "options": {}
                            });
                        </script>
                    </div>
                </div>
                <!--/Graph Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Graph Card-->
                <div class="bg-white border-transparent rounded-lg shadow-lg">
                    <div class="bg-grey-light border-b-2 border-grey rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="uppercase text-grey-dark">Graph</h5>
                    </div>
                    <div class="p-5">
                        <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-1"), {
                                "type": "bar",
                                "data": {
                                    "labels": ["January", "February", "March", "April", "May", "June", "July"],
                                    "datasets": [{
                                        "label": "Likes",
                                        "data": [65, 59, 80, 81, 56, 55, 40],
                                        "fill": false,
                                        "backgroundColor": ["rgba(255, 99, 132, 0.2)", "rgba(255, 159, 64, 0.2)", "rgba(255, 205, 86, 0.2)", "rgba(75, 192, 192, 0.2)", "rgba(54, 162, 235, 0.2)", "rgba(153, 102, 255, 0.2)", "rgba(201, 203, 207, 0.2)"],
                                        "borderColor": ["rgb(255, 99, 132)", "rgb(255, 159, 64)", "rgb(255, 205, 86)", "rgb(75, 192, 192)", "rgb(54, 162, 235)", "rgb(153, 102, 255)", "rgb(201, 203, 207)"],
                                        "borderWidth": 1
                                    }]
                                },
                                "options": {
                                    "scales": {
                                        "yAxes": [{
                                            "ticks": {
                                                "beginAtZero": true
                                            }
                                        }]
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <!--/Graph Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Graph Card-->
                <div class="bg-white border-transparent rounded-lg shadow-lg">
                    <div class="bg-grey-light border-b-2 border-grey rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="uppercase text-grey-dark">Graph</h5>
                    </div>
                    <div class="p-5"><canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
                        <script>
                            new Chart(document.getElementById("chartjs-4"), {
                                "type": "doughnut",
                                "data": {
                                    "labels": ["P1", "P2", "P3"],
                                    "datasets": [{
                                        "label": "Issues",
                                        "data": [300, 50, 100],
                                        "backgroundColor": ["rgb(255, 99, 132)", "rgb(54, 162, 235)", "rgb(255, 205, 86)"]
                                    }]
                                }
                            });
                        </script>
                    </div>
                </div>
                <!--/Graph Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Table Card-->
                <div class="bg-white border-transparent rounded-lg shadow-lg">
                    <div class="bg-grey-light border-b-2 border-grey rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="uppercase text-grey-dark">Table</h5>
                    </div>
                    <div class="p-5">
                        <table class="w-full p-5 text-grey-darker">
                            <thead>
                                <tr>
                                    <th class="text-left text-blue-darkest">Name</th>
                                    <th class="text-left text-blue-darkest">Side</th>
                                    <th class="text-left text-blue-darkest">Role</th>
                                </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>Obi Wan Kenobi</td>
                                    <td>Light</td>
                                    <td>Jedi</td>
                                </tr>
                                <tr>
                                    <td>Greedo</td>
                                    <td>South</td>
                                    <td>Scumbag</td>
                                </tr>
                                <tr>
                                    <td>Darth Vader</td>
                                    <td>Dark</td>
                                    <td>Sith</td>
                                </tr>
                            </tbody>
                        </table>

                        <p class="py-2"><a href="#">See More issues...</a></p>

                    </div>
                </div>
                <!--/table Card-->
            </div>

            <div class="w-full md:w-1/2 xl:w-1/3 p-3">
                <!--Template Card-->
                <div class="bg-white border-transparent rounded-lg shadow-lg">
                    <div class="bg-grey-light border-b-2 border-grey rounded-tl-lg rounded-tr-lg p-2">
                        <h5 class="uppercase text-grey-dark">Template</h5>
                    </div>
                    <div class="p-5">

                    </div>
                </div>
                <!--/Template Card-->
            </div>


        </div>
    </div>
</div>
@endsection