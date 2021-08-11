<div>
    <div class="grid grid-cols-1 xl:grid-cols-2 2xl:grid-cols-3 gap-1">
        <div class="bg-gray-100 text-xs text-gray-600 flex border border-gray-300 p-4 my-1 mx-4">
            <canvas id="chartjs-1" class="chartjs" width="undefined" height="undefined"></canvas>
            @push('scripts')
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
                @endpush
        </div>
        <div class="bg-gray-100 text-xs text-gray-600 flex border border-gray-300 p-4 my-1 mx-4">
            <canvas id="chartjs-4" class="chartjs" width="undefined" height="undefined"></canvas>
            @push('scripts')
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
            @endpush
        </div>
    </div>
</div>
